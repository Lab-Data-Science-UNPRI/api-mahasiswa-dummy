<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('lecturers')->insert([
            [
                'id' => 1,
                'code' => 'DSN001',
                'name' => 'Dr. Ahmad Fauzi',

                'nidn' => '10102122',
                'password' => Hash::make('password123'),

                'short_name' => 'AFZ',
                'place_of_birth' => 'Medan',
                'date_of_birth' => '1980-05-12',
                'address' => 'Jl. Setia Budi, Medan',
                'handphone' => '081234567890',
                'phone' => '061123456',
                'email' => 'ahmad.fauzi@kampus.ac.id',
                'front_title' => 'Dr.',
                'rear_title' => 'M.Kom',
                'first_degree_title' => 'S.Kom',
                'first_degree_major' => 'Teknik Informatika',
                'first_degree_university' => 'Universitas Sumatera Utara',
                'second_degree_title' => 'M.Kom',
                'second_degree_major' => 'Ilmu Komputer',
                'second_degree_university' => 'Universitas Indonesia',
                'religion' => 'islam',
                'sex' => 'Laki - Laki',
                'status' => 'aktif',
                'visible_id' => 1,
                'program_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
