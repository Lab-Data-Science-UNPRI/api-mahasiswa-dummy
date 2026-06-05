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
            [
                'id' => 2,
                'code' => 'STD002',
                'name' => 'Siti Rahmawati',
                'email' => 'siti@student.ac.id',
                'nim' => '202601002',
                'password' => Hash::make('password123'),

                'place_of_birth' => 'Bandung',
                'date_of_birth' => '2003-05-20',
                'sex' => 'Perempuan',
                'blood' => 2,
                'religion' => 'islam',

                'address' => 'Jl. Asia Afrika No. 25',
                'village' => 'Cikawao',
                'district' => 'Bandung Kidul',
                'town' => 'Bandung',
                'province' => 'Jawa Barat',
                'postal_code' => '40211',

                'handphone' => '081234222333',
                'phone' => '022222333',

                'from_school' => 'SMA Negeri 3 Bandung',
                'school_majors' => 'IPA',
                'graduate_year' => 2021,

                'father_name' => 'Ahmad Fauzi',
                'father_recent_work' => 'PNS',
                'father_resident_card_id' => '327300000001',

                'mother_name' => 'Nurul Hidayah',
                'mother_recent_work' => 'Guru',
                'mother_resident_card_id' => '327300000002',

                'parent_address' => 'Jl. Asia Afrika No. 25',
                'parent_handphone' => '081234555666',
                'parent_phone' => '022555666',

                'guardian_name' => null,
                'resident_card_id' => '327300000003',
                'family_card_id' => '327300000004',

                'program_id' => 1,
                'lecturer_id' => 1,
                'current_year_id' => 2,
                'current_stage_id' => 1,
                'current_semester_id' => 1,

                'status' => 'aktif',
                'visible_id' => 1,
                'finance_id' => 1,

                'signup_date' => '2026-06-02',
                'registration_date' => now(),
                'registered_date' => now(),

                'note' => 'Mahasiswa dummy untuk testing API.',
                'group_link' => 'https://chat.whatsapp.com/dummy',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'code' => 'STD003',
                'name' => 'Arief Hidayat',
                'email' => 'arief@student.ac.id',
                'nim' => '202601003',
                'password' => Hash::make('password123'),

                'place_of_birth' => 'Surabaya',
                'date_of_birth' => '2002-11-08',
                'sex' => 'Laki - Laki',
                'blood' => 3,
                'religion' => 'islam',

                'address' => 'Jl. Tunjungan No. 45',
                'village' => 'Genteng',
                'district' => 'Genteng',
                'town' => 'Surabaya',
                'province' => 'Jawa Timur',
                'postal_code' => '60249',

                'handphone' => '081234333444',
                'phone' => '031333444',

                'from_school' => 'SMA Negeri 5 Surabaya',
                'school_majors' => 'IPA',
                'graduate_year' => 2021,

                'father_name' => 'Hendra Gunawan',
                'father_recent_work' => 'Pengusaha',
                'father_resident_card_id' => '357800000001',

                'mother_name' => 'Dewi Sartika',
                'mother_recent_work' => 'Ibu Rumah Tangga',
                'mother_resident_card_id' => '357800000002',

                'parent_address' => 'Jl. Tunjungan No. 45',
                'parent_handphone' => '081234777888',
                'parent_phone' => '031777888',

                'guardian_name' => null,
                'resident_card_id' => '357800000003',
                'family_card_id' => '357800000004',

                'program_id' => 1,
                'lecturer_id' => 1,
                'current_year_id' => 2,
                'current_stage_id' => 1,
                'current_semester_id' => 1,

                'status' => 'aktif',
                'visible_id' => 1,
                'finance_id' => 1,

                'signup_date' => '2026-06-03',
                'registration_date' => now(),
                'registered_date' => now(),

                'note' => 'Mahasiswa dummy untuk testing API.',
                'group_link' => 'https://chat.whatsapp.com/dummy',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'code' => 'STD004',
                'name' => 'Dian Permata Sari',
                'email' => 'dian@student.ac.id',
                'nim' => '202601004',
                'password' => Hash::make('password123'),

                'place_of_birth' => 'Yogyakarta',
                'date_of_birth' => '2003-09-12',
                'sex' => 'Perempuan',
                'blood' => 1,
                'religion' => 'islam',

                'address' => 'Jl. Malioboro No. 78',
                'village' => 'Sosromenduran',
                'district' => 'Gedongtengen',
                'town' => 'Yogyakarta',
                'province' => 'DI Yogyakarta',
                'postal_code' => '55271',

                'handphone' => '081234444555',
                'phone' => '027444555',

                'from_school' => 'SMA Negeri 2 Yogyakarta',
                'school_majors' => 'IPA',
                'graduate_year' => 2021,

                'father_name' => 'Suparno',
                'father_recent_work' => 'Dosen',
                'father_resident_card_id' => '347100000001',

                'mother_name' => 'Sri Wahyuni',
                'mother_recent_work' => 'Perawat',
                'mother_resident_card_id' => '347100000002',

                'parent_address' => 'Jl. Malioboro No. 78',
                'parent_handphone' => '081234888999',
                'parent_phone' => '0274888999',

                'guardian_name' => null,
                'resident_card_id' => '347100000003',
                'family_card_id' => '347100000004',

                'program_id' => 1,
                'lecturer_id' => 1,
                'current_year_id' => 2,
                'current_stage_id' => 1,
                'current_semester_id' => 1,

                'status' => 'aktif',
                'visible_id' => 1,
                'finance_id' => 1,

                'signup_date' => '2026-06-04',
                'registration_date' => now(),
                'registered_date' => now(),

                'note' => 'Mahasiswa dummy untuk testing API.',
                'group_link' => 'https://chat.whatsapp.com/dummy',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'code' => 'STD005',
                'name' => 'Rizki Pratama',
                'email' => 'rizki@student.ac.id',
                'nim' => '202601005',
                'password' => Hash::make('password123'),

                'place_of_birth' => 'Makassar',
                'date_of_birth' => '2002-07-25',
                'sex' => 'Laki - Laki',
                'blood' => 4,
                'religion' => 'islam',

                'address' => 'Jl. Pettarani No. 12',
                'village' => 'Banta-Bantaeng',
                'district' => 'Rappocini',
                'town' => 'Makassar',
                'province' => 'Sulawesi Selatan',
                'postal_code' => '90222',

                'handphone' => '081234555666',
                'phone' => '0411555666',

                'from_school' => 'SMA Negeri 1 Makassar',
                'school_majors' => 'IPA',
                'graduate_year' => 2020,

                'father_name' => 'Muhammad Iqbal',
                'father_recent_work' => 'Dokter',
                'father_resident_card_id' => '737100000001',

                'mother_name' => 'Fatimah',
                'mother_recent_work' => 'Ibu Rumah Tangga',
                'mother_resident_card_id' => '737100000002',

                'parent_address' => 'Jl. Pettarani No. 12',
                'parent_handphone' => '081234999000',
                'parent_phone' => '0411999000',

                'guardian_name' => null,
                'resident_card_id' => '737100000003',
                'family_card_id' => '737100000004',

                'program_id' => 1,
                'lecturer_id' => 1,
                'current_year_id' => 2,
                'current_stage_id' => 1,
                'current_semester_id' => 1,

                'status' => 'aktif',
                'visible_id' => 1,
                'finance_id' => 1,

                'signup_date' => '2026-06-05',
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