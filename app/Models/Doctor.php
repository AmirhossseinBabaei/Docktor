<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'medical_system_number',
        'first_name',
        'last_name',
        'specialty',
        'phone',
        'mobile',
        'email',
        'address',
        'work_start_time',
        'work_end_time',
        'visit_duration',
        'work_days',
        'visit_fee',
        'is_active',
    ];
}
