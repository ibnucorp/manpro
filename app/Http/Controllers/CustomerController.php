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
}
