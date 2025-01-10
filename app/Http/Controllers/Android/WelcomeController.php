<?php

namespace App\Http\Controllers\Android;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('android.welcome', ['title' => 'Antri Pempek']);
    }

    public function create(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'gender' => 'required|in:Pria,Wanita',
            'jenis_antrian' => 'required|in:Makan di Tempat,Bungkus',
        ]);

        // Find the current max nomor_antri and increment it
        $maxNomorAntri = Customer::max('nomor_antri') ?? 0; // Defaults to 0 if no records exist
        $nextNomorAntri = $maxNomorAntri + 1;

        // Create a new customer record
        $customer = Customer::create([
            'nama' => $validated['nama'],
            'gender' => $validated['gender'],
            'jenis_antrian' => $validated['jenis_antrian'],
            'nomor_antri' => $nextNomorAntri,
        ]);

        // Redirect to the page and pass customer data
        return redirect()->route('android.detail', [
            'nomor_antri' => $customer->nomor_antri,
            'name' => $customer->nama,
            'gender' => $customer->gender,
            'jenis_antrian' => $customer->jenis_antrian,
            'tanggal' => $customer->created_at->timezone('Asia/Jakarta')->format('d F Y'),
            'waktu' => $customer->created_at->timezone('Asia/Jakarta')->format('H:i:s'),
        ]);
    }

    public function detail(Request $request)
    {
        // Retrieve data from the request
        $data = $request->only(['nomor_antri', 'name', 'gender', 'jenis_antrian', 'tanggal', 'waktu']);

        // Pass the data to the 'android.detail' view
        return view('android.detail', $data);
    }
}
