<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Mahasiswa::create([
            'nim' => '231001001',
            'nama' => 'Budi Santoso',
            'email' => 'budi@gmail.com',
            'password' => bcrypt('123456'),
            'prodi' => 'Informatika',
            'fakultas' => 'Teknik',
            'angkatan' => 2023,
            'semester' => 4
        ]);

        Mahasiswa::create([
            'nim' => '231001002',
            'nama' => 'Andi Wijaya',
            'email' => 'andi@gmail.com',
            'password' => bcrypt('123456'),
            'prodi' => 'Sistem Informasi',
            'fakultas' => 'Teknik',
            'angkatan' => 2023,
            'semester' => 4
        ]);

        Mahasiswa::create([
            'nim' => '231001003',
            'nama' => 'Citra Lestari',
            'email' => 'citra@gmail.com',
            'password' => bcrypt('123456'),
            'prodi' => 'Teknik Komputer',
            'fakultas' => 'Teknik',
            'angkatan' => 2023,
            'semester' => 4
        ]);
    }
}
