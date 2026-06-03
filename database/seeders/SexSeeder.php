<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sexes')->insert([
    [
        'code' => 'M',
        'name' => 'Laki-laki'
    ],
    [
        'code' => 'F',
        'name' => 'Perempuan'
    ]
]);
    }
}
