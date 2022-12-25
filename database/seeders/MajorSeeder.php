<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $majors = [
            [
                'name' => 'Ilmu Komputer',
                'faculty_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Teknologi Informasi',
                'faculty_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Major::insert($majors);
    }
}
