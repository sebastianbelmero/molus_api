<?php

namespace Database\Seeders;

use App\Models\PostComment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postComments = [];

        for ($i = 1; $i <= 3000; $i++) {
            $postComments[] = [
                'user_id' => rand(2, 51),
                'post_id' => rand(1, 300),
                'comment' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
                'parent_id' => rand(1, 3000),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        PostComment::insert($postComments);
    }
}
