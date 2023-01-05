<?php

namespace Database\Seeders;

use App\Models\QuestionType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questionTypes = [
            [
                'name' => 'Multiple Choice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Multiple Response',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'True False',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Short Answer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ranking',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        QuestionType::insert($questionTypes);
    }
}
