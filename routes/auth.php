<?php

use Illuminate\Support\Facades\Route;

Route::get('dashboard', [\App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::get('loginForm', [\App\Http\Controllers\Auth\AuthController::class, 'showLoginForm'])->name('login');

Route::post('login', [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('loginMethod');

Route::get('login-by-google', [\App\Http\Controllers\Auth\AuthController::class, 'googleLoginRedirect'])->name('google.login.redirect');

Route::get('google-login', [\App\Http\Controllers\Auth\AuthController::class, 'googleLogin'])->name('google.login');

Route::get('logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');

Route::get('profile', [\App\Http\Controllers\Auth\ProfileController::class, 'viewProfile'])->name('profile');

Route::post('profile', [\App\Http\Controllers\Auth\ProfileController::class, 'updateProfile'])->name('profile.update');
