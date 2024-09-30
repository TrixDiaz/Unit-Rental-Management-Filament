<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Filament\Notifications\Notification;

class Tenant extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tenant_id',
        'concourse_id',
        'owner_id',
        'lease_start',
        'lease_end',
        'lease_due',
        'lease_term',
        'lease_status',
        'bills',
        'monthly_payment',
        'payment_status',
        'is_active',
    ];

    protected $casts = [
        'bills' => 'array',
        'lease_start' => 'date',
        'lease_end' => 'date',
        'is_active' => 'boolean',
    ];

    public function tenant()
    {
        return $this->belongsTo(User::class, 'tenant_id');
    }

    public function concourse()
    {
        return $this->belongsTo(Concourse::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->updateBillsIfDue();
            $model->checkLeaseExpirationAndNotify();
        });

        static::updating(function ($model) {
            $model->updateBillsIfDue();
            $model->checkLeaseExpirationAndNotify();
        });
    }

    public function updateBillsIfDue()
    {
        if ($this->lease_due) {
            $leaseDate = Carbon::parse($this->lease_due);
            $today = Carbon::today();

            // Check if the lease_due is today or in the past
            if ($leaseDate->lte($today)) {
                $rentAmount = $this->concourse->concourseRate->price ?? 0;
                
                $bills = $this->bills ?? [];
                
                // Check if a bill for this month already exists
                $billExists = collect($bills)->contains(function ($bill) use ($today) {
                    return isset($bill['name']) && $bill['name'] == 'Monthly Rent' &&
                           isset($bill['for_month']) && $bill['for_month'] == $today->format('Y-m');
                });
                
                if (!$billExists) {
                    $bills[] = [
                        'name' => 'Monthly Rent',
                        'amount' => $rentAmount,
                        'for_month' => $today->format('Y-m'),
                    ];
                    
                    $this->bills = $bills;
                    $this->monthly_payment = $rentAmount;
                    $this->lease_status = 'due';
                    $this->payment_status = 'pending';
                    $this->save();

                    return true; // Return true if bills were updated
                }
            }
        }

        return false; // Return false if no update was needed
    }

    public function setLeaseDueAttribute($value)
    {
        $this->attributes['lease_due'] = $value;
        $this->updateBillsIfDue();
    }

    public function checkLeaseExpirationAndNotify()
    {
        if ($this->lease_due) {
            $leaseDate = Carbon::parse($this->lease_due);
            $today = Carbon::today();
            $daysUntilDue = $today->diffInDays($leaseDate, false);

            if ($daysUntilDue <= 7) {
                $tenant = $this->tenant;
                $owner = $this->owner;

                if ($tenant) {
                   Notification::make()
                   ->warning()
                   ->title('Lease Due')
                   ->icon('heroicon-o-exclamation-circle')
                   ->body('Your lease is due to expire in 7 days.')
                   ->sendToDatabase($tenant);
                }

                if ($owner) {
                    Notification::make()
                    ->warning()
                    ->title('Lease Due '. $this->tenant->unit_number)
                    ->icon('heroicon-o-exclamation-circle')
                    ->body('lease is due to expire in 7 days.')
                    ->sendToDatabase($owner);
                }
            }
        }
    }
}
