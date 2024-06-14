<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserLoginController;
use App\Http\Controllers\User\UserRegistationController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminRegistationController;



Route::get('/', function () {
    return view('layout');
});


//User  Authentication Routes
Route::get('/login', [UserLoginController::class, 'index'])->name('login');
Route::post('/login', [UserLoginController::class, 'login'])->name('check');
Route::get('/signup', [UserRegistationController::class
, 'create'])->name('signup');
Route::post('/signup', [UserRegistationController::class, 'store'])->name('user.signup');

/*
Route::middleware(['auth', 'user'])->group(function (){

    Route::post('/logout', [UserLoginController::class, 'logout'])->name('user.logout');

});*/

//Admin Authentication Routs
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'adminCheck'])->name('admin.check');
Route::get('/admin/signup', [AdminRegistationController::class,'create'])->name('admin.signup');
Route::post('/admin/signup', [AdminRegistationController::class, 'store'])->name('admin.store');
