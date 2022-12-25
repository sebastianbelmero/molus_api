<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faculties = [
            [
                'name' => 'Fakultas Ilmu Komputer dan Teknologi Informasi',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        Faculty::insert($faculties);
    }
}
