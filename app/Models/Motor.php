<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    // 1) berfungsi untuk daftar izin bagi kolom" tabel yg boleh di isi secara masal di database
   protected $fillable = [
    'nama',
    'harga',
    'stok',
   ];
}
