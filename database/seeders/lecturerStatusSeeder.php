<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class lecturerStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lecturer_statuses')->insert([
    ['code' => 'ACTIVE', 'name' => 'Aktif'],
    ['code' => 'INACTIVE', 'name' => 'Tidak Aktif'],
]);
    }
}
