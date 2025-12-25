<?php

namespace App\Services\Appoiments\Methods\Index;

use App\Repositories\AppointmentRepository;

class IndexMethodAppointmentDataService
{
    public AppointmentRepository $repository;

    public function __construct(AppointmentRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getData(): array
    {
        return [
            'appointments' => $this->repository->paginate(10)
        ];
    }
}
