<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;

Route::view('/home', 'home');

Route::get('get-five-appoiments-last', [\App\Http\Controllers\Dashboard\DashboardController::class, 'getFiveLastAppoiments']);

require __DIR__ . '\auth.php';
