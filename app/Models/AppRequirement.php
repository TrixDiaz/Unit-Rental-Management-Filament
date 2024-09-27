<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppRequirement extends Model
{
    use HasFactory;

    protected $fillable = [
        'requirement_id',
        'user_id',
        'concourse_id',
        'application_id',
        'name',
        'status',
        'file',
    ];

    public function requirement()
    {
        return $this->belongsTo(Requirement::class);
    }

}