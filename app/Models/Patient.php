<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'national_code',
        'first_name',
        'last_name',
        'phone',
        'mobile',
        'birth_date',
        'gender',
        'address',
        'medical_history',
        'allergies',
        'insurance_number',
        'insurance_type',
    ];
}
