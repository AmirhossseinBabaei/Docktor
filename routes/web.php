<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/book-appointment', function () {
    return view('book-appointment');
});

//Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
//Route::post('/chat/send', [ChatController::class, 'send'])->name('chat.send');
//Route::get('/chat/messages', [ChatController::class, 'messages'])->name('chat.messages');
//Route::get('/chat/users', [ChatController::class, 'users'])->name('chat.users');

Route::view('/home', 'home');
