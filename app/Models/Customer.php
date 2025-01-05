<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'customers';

    // Kolom yang dapat diisi
    protected $fillable = ['nama', 'nomor_antri', 'gender', 'jenis_antrian'];
}
