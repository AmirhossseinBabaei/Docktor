<?php

namespace App\Repositories;

use App\Models\Appointment;

class AppointmentRepository extends BaseRepository
{
    protected string $setModel = Appointment::class;
    protected string $table = "users";

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
}
