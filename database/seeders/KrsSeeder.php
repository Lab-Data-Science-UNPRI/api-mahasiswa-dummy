<?php

namespace Database\Seeders;

use App\Models\Krs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Krs::create([
            'mahasiswa_id' => 1,
            'mata_kuliah_id' => 1,
            'tahun_ajaran' => '2025/2026',
            'semester' => 4
        ]);

        Krs::create([
            'mahasiswa_id' => 1,
            'mata_kuliah_id' => 2,
            'tahun_ajaran' => '2025/2026',
            'semester' => 4
        ]);

        // Mahasiswa 2
        Krs::create([
            'mahasiswa_id' => 2,
            'mata_kuliah_id' => 2,
            'tahun_ajaran' => '2025/2026',
            'semester' => 4
        ]);

        Krs::create([
            'mahasiswa_id' => 2,
            'mata_kuliah_id' => 3,
            'tahun_ajaran' => '2025/2026',
            'semester' => 4
        ]);

        // Mahasiswa 3
        Krs::create([
            'mahasiswa_id' => 3,
            'mata_kuliah_id' => 1,
            'tahun_ajaran' => '2025/2026',
            'semester' => 4
        ]);

        Krs::create([
            'mahasiswa_id' => 3,
            'mata_kuliah_id' => 3,
            'tahun_ajaran' => '2025/2026',
            'semester' => 4
        ]);
    }
}
