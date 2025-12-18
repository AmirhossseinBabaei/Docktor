<?php

namespace App\Repositories;

use App\Models\Appointment;
use Carbon\Carbon;

class AppointmentRepository extends BaseRepository
{
    public $setModel = Appointment::class;
    public $table = "users";

    public function getPendingStatusAppointmentsCount(): int
    {
        return $this->model()->where('status', 'pending')->count();
    }

    public function getCancelledStatusAppointmentsCount(): int
    {
        return $this->model()->where('status', 'cancelled')->count();
    }

    public function getCompletedStatusAppointmentsCount(): int
    {
        return $this->model()->where('status', 'completed')->count();
    }

    public function getAppointmentsCount(): int
    {
        return $this->model()->count();
    }

    public function getTodayAppointmentByTime(string $startTime, string $finishTime)
    {
        return $this->model()
            ->whereDate('date', Carbon::now()
            ->format('Y-m-d'))
            ->where('start_time', '<=', $startTime)
            ->where('end_time', '>=',$finishTime)
            ->count();
    }
}
