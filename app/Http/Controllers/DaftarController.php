<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        // Fetch the current `nomor_antri` (assuming it's the smallest "nomor_antri" for active customers)
        $nomor_antrian = Customer::all()->max('nomor_antri') ?? 0;

        // Calculate the remaining queue
        $sisa_antrian = Customer::count();

        return view('admin.daftar', [
            'customers' => $customers,
            'nomor_antrian' => $nomor_antrian,
            'sisa_antrian' => $sisa_antrian,
            'title' => 'Daftar Pelanggan'
        ]);
    }
}
