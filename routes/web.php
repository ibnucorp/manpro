<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Jenssegers\Agent\Agent;

Route::get('/', function () {
    $agent = new Agent();

    if ($agent->isMobile()) {
        // return view('mobile');
        return 'Kamu di android';
    }
    return redirect('/admin');
});
Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/daftar', [DaftarController::class, 'index'])->name('admin.daftar');
