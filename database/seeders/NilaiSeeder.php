<?php

namespace Database\Seeders;

use App\Models\Nilai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Mahasiswa 1
        Nilai::create([
            'mahasiswa_id' => 1,
            'mata_kuliah_id' => 1,
            'nilai_angka' => 90,
            'nilai_huruf' => 'A'
        ]);

        Nilai::create([
            'mahasiswa_id' => 1,
            'mata_kuliah_id' => 2,
            'nilai_angka' => 85,
            'nilai_huruf' => 'A'
        ]);

        // Mahasiswa 2
        Nilai::create([
            'mahasiswa_id' => 2,
            'mata_kuliah_id' => 2,
            'nilai_angka' => 80,
            'nilai_huruf' => 'B'
        ]);

        Nilai::create([
            'mahasiswa_id' => 2,
            'mata_kuliah_id' => 3,
            'nilai_angka' => 88,
            'nilai_huruf' => 'A'
        ]);

        // Mahasiswa 3
        Nilai::create([
            'mahasiswa_id' => 3,
            'mata_kuliah_id' => 1,
            'nilai_angka' => 75,
            'nilai_huruf' => 'B'
        ]);

        Nilai::create([
            'mahasiswa_id' => 3,
            'mata_kuliah_id' => 3,
            'nilai_angka' => 95,
            'nilai_huruf' => 'A'
        ]);
    }
}
