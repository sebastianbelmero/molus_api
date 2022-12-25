<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PostSaved;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            FacultySeeder::class,
            MajorSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            PostSeeder::class,
            PostLikeSeeder::class,
            PostSavedSeeder::class,
            PostCommentSeeder::class,
            ProfileSeeder::class,
        ]);
    }
}
