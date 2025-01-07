<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPassController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\Ajax\LocationController;





Route::get('/login/admin', [AuthController::class, 'loginAdmin'])->name('auth.login-admin')->middleware('login');
Route::post('/process-login', [AuthController::class, 'processLogin'])->name('auth.process-login');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/forgot-password', [ForgotPassController::class, 'forgotPassword'])->name('auth.forgotPassword');



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('admin');


Route::group(['prefix' => 'user'], function () {
    // User
    Route::get('/', [UserController::class, 'index'])->name('user.index')->middleware('admin');
    Route::get('create', [UserController::class, 'create'])->name('user.create')->middleware('admin');
    Route::post('store', [UserController::class, 'store'])->name('user.store')->middleware('admin');
});


Route::get('/ajax/location/getLocation', [LocationController::class, 'getLocation'])->name('ajax.location.index')->middleware('admin');