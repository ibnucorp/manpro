<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $customers = Customer::orderBy('nomor_antri', 'desc')->take(5)->get();
        $title = "Dashboard";
        return view('admin.index', compact('customers', 'title'));
    }
}
