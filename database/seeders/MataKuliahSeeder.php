<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        MataKuliah::create([
            'kode_mk' => 'IF401',
            'nama_mk' => 'Struktur Data',
            'sks' => 3,
            'semester' => 4,
            'dosen_id' => 1
        ]);

        MataKuliah::create([
            'kode_mk' => 'IF402',
            'nama_mk' => 'Basis Data',
            'sks' => 3,
            'semester' => 4,
            'dosen_id' => 2
        ]);

        MataKuliah::create([
            'kode_mk' => 'IF403',
            'nama_mk' => 'Pemrograman Web',
            'sks' => 3,
            'semester' => 4,
            'dosen_id' => 3
        ]);
    }
}
