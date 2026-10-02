<?php

namespace Database\Seeders;
use App\Models\Motor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         

        Motor::create([
            'nama' => 'Honda Beat fake',
            'harga' => 75000,
            'stok' => 3
        ]);
    }
}
