<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserLoginController;

Route::get('/', function () {
    return view('layout');
});


Route::get('/login', [UserLoginController::class, 'index'])->name('login');
Route::post('/login', [UserLoginController::class, 'login'])->name('check');