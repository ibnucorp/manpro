<?php

use App\Http\Controllers\Android\WelcomeController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

// Route::get('/', function () {})->middleware('check.device');
Route::get('/', function () {
    return view('index');
});
Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/daftar', [DaftarController::class, 'index'])->name('admin.daftar');
Route::get('/android', [WelcomeController::class, 'index'])->name('android.welcome');
Route::post('/android/create', [WelcomeController::class, 'create'])->name('android.create');
Route::get(
    '/android/detail',
    [WelcomeController::class, 'detail']
)->name('android.detail');

Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');
