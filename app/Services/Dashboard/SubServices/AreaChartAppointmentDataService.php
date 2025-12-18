<?php

namespace App\Services\Dashboard\SubServices;

use App\Repositories\AppointmentRepository;

class AreaChartAppointmentDataService
{
    public AppointmentRepository $repository;

    public function __construct(AppointmentRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getData(): array
    {
        return [
            $this->repository->getTodayAppointmentByTime('09:00', '11:59'),
            $this->repository->getTodayAppointmentByTime('12:00', '14:59'),
            $this->repository->getTodayAppointmentByTime('15:00', '17:59'),
            $this->repository->getTodayAppointmentByTime('18:00', '20:59'),
            $this->repository->getTodayAppointmentByTime('21:00', '23:59'),
            $this->repository->getTodayAppointmentByTime('24:00', '02:59'),
            $this->repository->getTodayAppointmentByTime('03:00', '06:00')
        ];
    }

}
