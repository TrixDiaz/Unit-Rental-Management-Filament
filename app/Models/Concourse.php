<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Concourse extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'address',
        'rate_id',
        'latitude',
        'longitude',
        'image',
        'status',
        'unit_number',
        'deposit',
        'lease_term',
        'is_active',
    ];

    public function concourseRate()
    {
        return $this->belongsTo(ConcourseRate::class, 'rate_id')->where('is_active', true);
    }

 

}
