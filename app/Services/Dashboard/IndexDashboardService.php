<?php

namespace App\Services\Dashboard;

use App\Services\Dashboard\SubServices\AreaChartAppointmentDataService;
use App\Services\Dashboard\SubServices\MonthChartAppointmentsCountService;
use App\Services\Dashboard\SubServices\PieChartAppointmentsDataService;

class IndexDashboardService
{
    public PieChartAppointmentsDataService $pieChartAppointmentService;
    public AreaChartAppointmentDataService $areaChartAppointmentDataService;
    public MonthChartAppointmentsCountService $monthChartAppointmentsCountService;

    public function __construct(
        PieChartAppointmentsDataService $pieChartAppointmentService,
        AreaChartAppointmentDataService $areaChartAppointmentDataService,
        MonthChartAppointmentsCountService $monthChartAppointmentsCountService
    )
    {
        $this->pieChartAppointmentService = $pieChartAppointmentService;
        $this->areaChartAppointmentDataService = $areaChartAppointmentDataService;
        $this->monthChartAppointmentsCountService = $monthChartAppointmentsCountService;
    }

    public function getData(): array
    {
        return [
            'pieChartData' => $this->pieChartAppointmentService->getData(),
            'areaChartData' => $this->areaChartAppointmentDataService->getData(),
            'monthCountChartData' => $this->monthChartAppointmentsCountService->getData()
        ];
    }
}
