<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('students')->insert([
            [
                'id' => 1,
                'code' => 'STD001',
                'name' => 'Budiman Susilo',
                'email' => 'budiman@student.ac.id',
                'nim' => '202601001',
                'password' => Hash::make('password123'),

                'place_of_birth' => 'Medan',
                'date_of_birth' => '2003-01-15',
                'sex' => 'Laki - Laki',
                'blood' => 1,
                'religion' => 'islam',

                'address' => 'Jl. Merdeka No. 10',
                'village' => 'Patisah Hulu',
                'district' => 'Medan Baru',
                'town' => 'Medan',
                'province' => 'Sumatera Utara',
                'postal_code' => '20153',

                'handphone' => '081234111222',
                'phone' => '061111222',

                'from_school' => 'SMA Negeri 1 Medan',
                'school_majors' => 'IPA',
                'graduate_year' => 2021,

                'father_name' => 'Budi Santoso',
                'father_recent_work' => 'Wiraswasta',
                'father_resident_card_id' => '127100000001',

                'mother_name' => 'Aminah',
                'mother_recent_work' => 'Ibu Rumah Tangga',
                'mother_resident_card_id' => '127100000002',

                'parent_address' => 'Jl. Merdeka No. 10',
                'parent_handphone' => '081234333444',
                'parent_phone' => '061333444',

                'guardian_name' => null,
                'resident_card_id' => '127100000003',
                'family_card_id' => '127100000004',

                'program_id' => 1,
                'lecturer_id' => 1,
                'current_year_id' => 2,
                'current_stage_id' => 1,
                'current_semester_id' => 1,

                'status' => 'aktif',
                'visible_id' => 1,
                'finance_id' => 1,

                'signup_date' => '2026-06-01',
                'registration_date' => now(),
                'registered_date' => now(),

                'note' => 'Mahasiswa dummy untuk testing API.',
                'group_link' => 'https://chat.whatsapp.com/dummy',

                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}