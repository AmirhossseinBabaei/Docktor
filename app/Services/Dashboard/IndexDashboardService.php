<?php

namespace App\Services\Dashboard;

use App\Services\Dashboard\SubServices\PieChartAppointmentsDataService;

class IndexDashboardService
{
    public PieChartAppointmentsDataService $pieChartAppointmentService;

    public function __construct(PieChartAppointmentsDataService $pieChartAppointmentService)
    {
        $this->pieChartAppointmentService = $pieChartAppointmentService;
    }

    public function getData(): array
    {
        return [
            'poeChartData' => $this->pieChartAppointmentService->getData()
        ];
    }
}
