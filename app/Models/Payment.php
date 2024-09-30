<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'payment_type',
        'payment_method',
        'payment_status',
        'payment_details',
        'amount',
    ];

    protected $casts = [
        'payment_details' => 'array',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function scopeElectricityBillsForCurrentTenant($query)
    {
        return $query->where('tenant_id', auth()->id())
            ->whereJsonContains('payment_details', ['name' => 'electricity'])
            ->selectRaw('MONTH(created_at) as month, SUM(JSON_EXTRACT(payment_details, "$[*].amount")) as total_amount')
            ->groupBy('month')
            ->orderBy('month');
    }
}
