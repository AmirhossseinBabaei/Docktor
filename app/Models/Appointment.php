<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'date',
        'start_time',
        'end_time',
        'status',
        'description',
        'cancellation_reason',
        'tracking_code',
        'is_emergency',
    ];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    public function getStatusAttribute($status): array
    {
        switch ($status) {
            case "completed":
                return ['انجام شده', 'success'];
            case "confirmed":
                return ['احراز شده', 'success'];
            case "pending":
                return ['منتظر نوبت', 'warning'];
            case "cancelled":
                return ['لغو شده', 'danger'];

            default:
                return 'The status not defined';
        }
    }
}
