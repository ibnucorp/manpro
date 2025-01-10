<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    /**
     * Menyimpan pelanggan baru.
     */
    public function store(Request $request)
    {
        $customer = Customer::create($request);
    }

    public function destroy($id)
    {
        // Find and delete the customer
        $customer = Customer::findOrFail($id);
        $customer->delete();

        // Redirect back with a success message
        return redirect()->back();
    }
}
