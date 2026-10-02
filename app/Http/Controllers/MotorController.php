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
    public function edit($id){ //$id: Itu bukan objek, melainkan sebuah variabel penampung (parameter)
        $motor = Motor::find($id);
        //find($id): Kata find adalah method bawaan dari Eloquent Model. Artinya: "Tolong carikan satu baris data di tabel database yang kolom id-nya sama dengan angka yang dibawa oleh variabel $id." Hasil pencarian itu kemudian disimpan ke dalam variabel $motor

        return view('motors.edit', compact('motor') );
        // a) Ini artinya kita memerintahkan Laravel untuk membuka dan menampilkan file tampilan (blade) yang letaknya ada di resources/views/motors/edit.blade.php
        // b) compact('motor'): Ini adalah fungsi bawaan PHP/Laravel yang tugasnya membungkus variabel $motor agar bisa dikirim dan dibaca di dalam file halaman view (edit.blade.php)
    }
    public function update(Request $request, $id){ //Mendefinisikan method bernama update.
    //Request $\rightarrow$ Kelas bawaan Laravel untuk mengurus data yang dikirim (request).
        $motor = Motor::find($id); // a) Cari dulu data motor berdasarkan id

        $motor->update([ // b) setelah di cari baru update datanya dengan data baru dari form
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);
        return redirect('/motors'); // c) setelah di update baru kembalikan halaman daftar motor
    }
}
