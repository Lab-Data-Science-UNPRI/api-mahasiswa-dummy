<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Dosen::create([
            'nidn' => 'D001',
            'nama' => 'Achmad Ridwan',
            'email' => 'ridwan@gmail.com'
        ]);

        Dosen::create([
            'nidn' => 'D002',
            'nama' => 'Andi Saputra',
            'email' => 'andi@gmail.com'
        ]);

        Dosen::create([
            'nidn' => 'D003',
            'nama' => 'Siti Rahma',
            'email' => 'siti@gmail.com'
        ]);
    }
}
