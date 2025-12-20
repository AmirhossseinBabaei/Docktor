<?php

namespace App\Services\Dashboard\SubServices;

use App\Repositories\AppointmentRepository;

class GetLastFiveAppoimentsDataService
{
    public AppointmentRepository $repository;

    public function __construct(AppointmentRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getData(): array
    {
        return [
            $this->repository->getLastFiveAppoiments()
        ];
    }

}
