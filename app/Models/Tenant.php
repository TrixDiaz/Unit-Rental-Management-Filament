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
        });

        static::updating(function ($model) {
            $model->updateBillsIfDue();
          
        });
    }

    public function updateBillsIfDue()
    {
        if ($this->lease_due) {
            $leaseDate = Carbon::parse($this->lease_due);
            $today = Carbon::today();
            $sevenDaysBefore = $leaseDate->copy()->subDays(7);

            // Check if today is 7 days before the lease_due or later
            if ($today->gte($sevenDaysBefore) || $today->isSameDay($leaseDate)) {
                $rentAmount = $this->concourse->concourseRate->price ?? 0;

                $bills = $this->bills ?? [];

                // Check if a bill for this lease period already exists
                $billExists = collect($bills)->contains(function ($bill) use ($leaseDate) {
                    return isset($bill['name']) && $bill['name'] == 'Monthly Rent' &&
                        isset($bill['for_month']) && $bill['for_month'] == $leaseDate->format('Y-m');
                });

                if (!$billExists) {
                    $bills[] = [
                        'name' => 'Monthly Rent',
                        'amount' => $rentAmount,
                        'for_month' => $leaseDate->format('Y-m'),
                        'due_date' => $leaseDate->toDateString(),
                    ];

                    $this->bills = $bills;
                    $this->monthly_payment = collect($bills)->sum('amount');
                    $this->lease_status = 'due_soon';
                    $this->payment_status = 'pending';
                    $this->save();

                    // Send notifications to tenant and owner
                    $this->sendBillUpdateNotifications($rentAmount, $leaseDate);

                    return true; // Return true if bills were updated
                }
            }
        }

        return false; // Return false if no update was needed
    }

    private function sendBillUpdateNotifications($rentAmount, $dueDate)
    {
        $tenant = $this->tenant;
        $owner = $this->owner;

        if ($tenant) {
            Notification::make()
                ->info()
                ->title('New Bill Added')
                ->icon('heroicon-o-currency-dollar')
                ->body("A new monthly rent bill of {$rentAmount} has been added to your account, due on {$dueDate->format('F j, Y')}.")
                ->sendToDatabase($tenant);
        }

        if ($owner) {
            Notification::make()
                ->info()
                ->title('New Bill Added for ' . $tenant->unit_number)
                ->icon('heroicon-o-currency-dollar')
                ->body("A new monthly rent bill of {$rentAmount} has been added to the tenant's account, due on {$dueDate->format('F j, Y')}.")
                ->sendToDatabase($owner);
        }
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
                        ->title('Lease Due ' . $this->tenant->unit_number)
                        ->icon('heroicon-o-exclamation-circle')
                        ->body('lease is due to expire in 7 days.')
                        ->sendToDatabase($owner);
                }
            }
        }
    }
}
