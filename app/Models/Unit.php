<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'address',
        'price',
        'latitude',
        'longitude',
        'image',
        'status',
        'unit_number',
        'deposit',
        'lease_term',
        'is_active',
    ];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function concourses()
    {
        return $this->hasMany(Unit::class);
    }
}
