<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subjects')->insert([
    [
        'code' => 'IF101',
        'name' => 'Algoritma dan Pemrograman',
        'sks' => 3,
        'theory_sks' => 2,
        'practice_sks' => 1
    ],
    [
        'code' => 'IF102',
        'name' => 'Basis Data',
        'sks' => 3,
        'theory_sks' => 2,
        'practice_sks' => 1
    ],
    [
        'code' => 'IF103',
        'name' => 'Pemrograman Web',
        'sks' => 3,
        'theory_sks' => 2,
        'practice_sks' => 1
    ]
]);
    }
}
