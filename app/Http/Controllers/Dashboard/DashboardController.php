<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Services\Dashboard\Methods\Index\IndexDashboardService;

class DashboardController extends Controller
{
    public IndexDashboardService $indexDashboardService;

    public function __construct(IndexDashboardService $indexDashboardService)
    {
        $this->indexDashboardService = $indexDashboardService;
    }

    public function index()
    {
        $serviceData = [
            "data" => $this->indexDashboardService->getData()
        ];

        return view('sora.examples.dashboard', compact('serviceData'));
    }

    public function getFiveLastAppoiments()
    {
        $data = Appointment::with(['patient', 'doctor'])
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();

        return response()
            ->json(['data' => $data], 200);
    }
}
