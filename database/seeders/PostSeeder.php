<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [];
        for ($i=1; $i <= 300; $i++) { 
            $posts[] = [
                'user_id' => rand(2, 51),
                'title' => "Post $i",
                'image' => 'https://picsum.photos/200/300',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        Post::insert($posts);
    }
}
