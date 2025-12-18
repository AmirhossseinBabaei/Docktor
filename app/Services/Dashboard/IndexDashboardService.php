<?php

namespace App\Services\Dashboard;

use App\Services\Dashboard\SubServices\AreaChartAppointmentDataService;
use App\Services\Dashboard\SubServices\PieChartAppointmentsDataService;

class IndexDashboardService
{
    public PieChartAppointmentsDataService $pieChartAppointmentService;
    public AreaChartAppointmentDataService $areaChartAppointmentDataService;

    public function __construct(
        PieChartAppointmentsDataService $pieChartAppointmentService,
        AreaChartAppointmentDataService $areaChartAppointmentDataService
    )
    {
        $this->pieChartAppointmentService = $pieChartAppointmentService;
        $this->areaChartAppointmentDataService = $areaChartAppointmentDataService;
    }

    public function getData(): array
    {
        return [
            'pieChartData' => $this->pieChartAppointmentService->getData(),
            'areaChartData' => $this->areaChartAppointmentDataService->getData()
        ];
    }
}
