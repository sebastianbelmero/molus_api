<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'fakultas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'mahasiswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'alumni',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Role::insert($roles);
    }
}
