<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('years')->insert([
            ['id' => 1, 'name' => '2024/2025', 'year' => 2024, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => '2025/2026', 'year' => 2025, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => '2026/2027', 'year' => 2026, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
