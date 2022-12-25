<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'nim' => 'admin',
                'password' => bcrypt('admin'),
                'role_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        $fakultas = [
            [
                'name' => 'Fakultas',
                'email' => 'fakultas@fakultas.com',
                'nim' => 'fakultas',
                'password' => bcrypt('fakultas'),
                'role_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        $mahasiswa = [];
        for ($i = 1; $i <= 50; $i++) {
            $nim = 191402000 + $i;
            $mahasiswa[] = [
                'name' => "Mahasiswa $i",
                'email' => "mahasiswa$i@gmail.com",
                'nim' => "$nim",
                'password' => bcrypt('mahasiswa'),
                'role_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        $alumni = [];
        for ($i = 1; $i <= 50; $i++) {
            $nim = 151402000 + $i;
            $alumni[] = [
                'name' => "Alumni $i",
                'email' => "alumni$i@gmail.com",
                'nim' => "$nim",
                'password' => bcrypt('alumni'),
                'role_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }


        User::insert($admin);
        User::insert($fakultas);
        User::insert($mahasiswa);
        User::insert($alumni);
    }
}
