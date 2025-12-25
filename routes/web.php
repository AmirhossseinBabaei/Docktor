<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;

Route::view('home', 'home');

Route::get('get-five-appoiments-last', [\App\Http\Controllers\Dashboard\DashboardController::class, 'getFiveLastAppoiments']);


Route::prefix('dashboard')->group(function (){
    Route::resource('appoiments', \App\Http\Controllers\Dashboard\AppoimentsController::class)->names('dashboard.appoiments');
    Route::post('change-appointment-status', [\App\Http\Controllers\Dashboard\AppoimentsController::class, 'changeStatusAppointment'])->name('dashboard.appointment.changeStatus');
})->middleware('auth');

require __DIR__ . '\auth.php';
