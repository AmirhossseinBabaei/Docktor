<?php

namespace App\Services\Appoiments\Methods\ChangeStatusAppointment;

use App\Repositories\AppointmentRepository;

class ChangeStatusAppointmentMethodDataService
{
    public AppointmentRepository $repository;

    public function __construct(AppointmentRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getData(int $id, string $status): array
    {
        return [
            'response' => $this->repository->appointmentModel()->where('id', $id)->update(['status' => $status])
        ];
    }
}
