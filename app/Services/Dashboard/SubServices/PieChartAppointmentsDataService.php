<?php

namespace App\Services\Dashboard\SubServices;

use App\Repositories\AppointmentRepository;

class PieChartAppointmentsDataService
{
    public AppointmentRepository $repository;

    public function __construct(AppointmentRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getData(): array
    {
        return [
            'pending' => $this->repository->getPendingStatusAppointmentsCount(),
            'completed' => $this->repository->getCompletedStatusAppointmentsCount(),
            'cancelled' => $this->repository->getCancelledStatusAppointmentsCount(),
            'any' => $this->repository->getAppointmentsCount()
        ];
    }
}
