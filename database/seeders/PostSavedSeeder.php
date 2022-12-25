<?php

namespace Database\Seeders;

use App\Models\PostSaved;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSavedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postSaveds = [];
        for ($i = 1; $i <= 3000; $i++) {
            $postSaveds[] = [
                'user_id' => rand(2, 51),
                'post_id' => rand(1, 300),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        PostSaved::insert($postSaveds);
    }
}
