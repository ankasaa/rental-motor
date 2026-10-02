<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor; // 2) untuk mengubungkan model motor atau Mengimpor atau memanggil berkas Model Motor ke dalam Controller.
use Illuminate\Support\Facades\Redirect;

class MotorController extends Controller
{
    public function index(){ //untuk mendefinisikan method bernama index

        $motors = Motor::all(); //Mengambil seluruh baris data yang ada di dalam tabel database motors

        return view('motors.index', compact('motors')); //Mengembalikan halaman antarmuka (view) sekaligus mengirimkan data $motors ke halaman tersebut.
    }
    public function create(){ // 3) untuk mendefinisikan method bernama create
        return view('motors.create');
    }
    public function store(Request $request){ // 4) Method store ini bertugas untuk menangani data yang dikirimkan oleh form (yang menggunakan metode POST
        Motor::create([
        'nama'=>$request->nama,
        'harga'=>$request->harga,
        'stok'=>$request->stok,
        ]);
        return Redirect('/motors');
    }
}
