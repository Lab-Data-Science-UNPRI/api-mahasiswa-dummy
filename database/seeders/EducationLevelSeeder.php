<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EducationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('education_levels')->insert([
    ['code' => 'SD', 'name' => 'SD'],
    ['code' => 'SMP', 'name' => 'SMP'],
    ['code' => 'SMA', 'name' => 'SMA'],
    ['code' => 'D3', 'name' => 'Diploma 3'],
    ['code' => 'S1', 'name' => 'Sarjana'],
    ['code' => 'S2', 'name' => 'Magister'],
    ['code' => 'S3', 'name' => 'Doktor'],
]);
    }
}
