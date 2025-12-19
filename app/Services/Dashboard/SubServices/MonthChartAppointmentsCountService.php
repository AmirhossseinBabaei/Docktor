<?php

namespace App\Services\Dashboard\SubServices;

use App\Repositories\AppointmentRepository;

class MonthChartAppointmentsCountService
{
    public AppointmentRepository $repository;

    public function __construct(AppointmentRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getData(): array
    {
        $months =
            [
                "",
                "march",
                "april",
                "may",
                "june",
                "july",
                "august",
                "september",
                "october",
                "november",
                "december",
                "january",
                "february"
            ];

        $data = [];

        for ($counter = 1; $counter < count($months); $counter++) {
            $data [$months[$counter]] = $this->repository->getThisYearAppointmentsByMonth($counter);
        }

        return $data;
    }


}
