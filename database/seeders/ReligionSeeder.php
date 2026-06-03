<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('religions')->insert([
    ['code' => 'ISL', 'name' => 'Islam'],
    ['code' => 'KRS', 'name' => 'Kristen'],
    ['code' => 'KTL', 'name' => 'Katolik'],
    ['code' => 'HDU', 'name' => 'Hindu'],
    ['code' => 'BDH', 'name' => 'Buddha'],
    ['code' => 'KHC', 'name' => 'Konghucu'],
]);
    }
}
