<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Repositories\AppointmentRepository;
use App\Services\Appoiments\Methods\ChangeStatusAppointment\ChangeStatusAppointmentMethodDataService;
use App\Services\Appoiments\Methods\Index\IndexMethodAppointmentDataService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AppoimentsController extends Controller
{
    public AppointmentRepository $appointmentRepository;
    public IndexMethodAppointmentDataService $indexMethodAppointmentDataService;
    public ChangeStatusAppointmentMethodDataService $changeStatusAppointmentMethodDataService;

    public function __construct(
        AppointmentRepository             $appointmentRepository,
        IndexMethodAppointmentDataService $indexMethodAppointmentDataService,
        ChangeStatusAppointmentMethodDataService $changeStatusAppointmentMethodDataService
    )
    {
        $this->appointmentRepository = $appointmentRepository;
        $this->indexMethodAppointmentDataService = $indexMethodAppointmentDataService;
        $this->changeStatusAppointmentMethodDataService = $changeStatusAppointmentMethodDataService;
    }

    public function index()
    {
        $serviceData = $this->indexMethodAppointmentDataService->getData();
        return view('appointments.table', compact('serviceData'));
    }

    public function changeStatusAppointment(Request $request): JsonResponse
    {
        $appointment = $this->changeStatusAppointmentMethodDataService->getData($request['id'], $request['status']);

        if (false == $appointment) {
            return response()->json(['message' => 'Appointment changing failed!'], 500);
        }

        return response()->json(['message' => 'Appointment changing successFully!'], 200);
    }
}
