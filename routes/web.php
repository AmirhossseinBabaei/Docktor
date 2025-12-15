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

Route::view('/sora', 'sora')->name('sora.demo');
Route::view('/sora/examples/dashboard', 'sora.examples.dashboard')->name('sora.examples.dashboard');
Route::view('/sora/examples/form', 'sora.examples.form')->name('sora.examples.form');
Route::view('/sora/examples/icons', 'sora.examples.icons')->name('sora.examples.icons');
Route::view('/sora/examples/maps', 'sora.examples.maps')->name('sora.examples.maps');
Route::view('/sora/examples/notifications', 'sora.examples.notifications')->name('sora.examples.notifications');
Route::view('/sora/examples/table', 'sora.examples.table')->name('sora.examples.table');
Route::view('/sora/examples/typography', 'sora.examples.typography')->name('sora.examples.typography');
Route::view('/sora/examples/user', 'sora.examples.user')->name('sora.examples.user');

//Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
//Route::post('/chat/send', [ChatController::class, 'send'])->name('chat.send');
//Route::get('/chat/messages', [ChatController::class, 'messages'])->name('chat.messages');
//Route::get('/chat/users', [ChatController::class, 'users'])->name('chat.users');

Route::view('/home', 'home');
