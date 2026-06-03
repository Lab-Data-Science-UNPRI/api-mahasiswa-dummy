<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('stages')->insert([
            ['id' => 1, 'name' => 'Ganjil', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Genap', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
