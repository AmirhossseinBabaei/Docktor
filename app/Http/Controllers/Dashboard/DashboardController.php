<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\Dashboard\IndexDashboardService;
use Illuminate\Http\Request;

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
}
