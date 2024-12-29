<?php

use App\Http\Controllers\Android\WelcomeController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {})->middleware('check.device');
Route::get('/', function () {
    return view('android.welcome');
});

Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/daftar', [DaftarController::class, 'index'])->name('admin.daftar');
Route::get('/welcome', [WelcomeController::class, 'index'])->name('android.welcome');
