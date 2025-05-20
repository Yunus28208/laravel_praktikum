<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("students")->insert([
            [
                'name' => 'Yunus Syahrul Mubarok',
                'student_id_number' => 'F55123049',
                'email' => 'yunussyahrul2810@gmail.com',
                'phone_number' => '082261905652',
                'birth_date' => '2001-10-28',
                'gender' => 'Male',
                'status' => 'Active',
                'major_id' => 1,
            ],
            [
                'name' => 'Filardi',
                'student_id_number' => 'F55123034',
                'email' => 'fila@gmail.com',
                'phone_number' => '085280284736',
                'birth_date' => '2004-06-27',
                'gender' => 'Female',
                'status' => 'Active',
                'major_id' => 2,
            ]
        ]);
    }
}