<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', [\App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::get('/book-appointment', function () {
    return view('book-appointment');
});

//Route::view('/sora', 'sora')->name('sora.demo');

Route::get('/loginForm', [\App\Http\Controllers\Auth\AuthController::class, 'showLoginForm'])->name('login');

Route::post('login', [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('loginMethod');

Route::get('login-by-google', [\App\Http\Controllers\Auth\AuthController::class, 'googleLoginRedirect'])->name('google.login.redirect');

Route::get('google-login', [\App\Http\Controllers\Auth\AuthController::class, 'googleLogin'])->name('google.login');

Route::get('/logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');

Route::get('/hash', function (){
    return \Illuminate\Support\Facades\Hash::make('Laravel');
});

//Route::view('/sora/examples/form', 'sora.examples.form')->name('sora.examples.form');
//Route::view('/sora/examples/icons', 'sora.examples.icons')->name('sora.examples.icons');
//Route::view('/sora/examples/maps', 'sora.examples.maps')->name('sora.examples.maps');
//Route::view('/sora/examples/notifications', 'sora.examples.notifications')->name('sora.examples.notifications');
//Route::view('/sora/examples/table', 'sora.examples.table')->name('sora.examples.table');
//Route::view('/sora/examples/typography', 'sora.examples.typography')->name('sora.examples.typography');
//Route::view('/sora/examples/user', 'sora.examples.user')->name('sora.examples.user');

Route::view('/home', 'home');
