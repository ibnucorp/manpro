<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function index()
    {
        return view('admin.daftar', ['title' => 'Daftar Antri']);
    }
}