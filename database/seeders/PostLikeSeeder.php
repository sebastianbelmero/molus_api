<?php

namespace Database\Seeders;

use App\Models\PostLike;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostLikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postLikes = [];
        for ($i = 1; $i <= 3000; $i++) {
            $postLikes[] = [
                'user_id' => rand(2, 51),
                'post_id' => rand(1, 300),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        PostLike::insert($postLikes);
    }
}
