<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator;
use Illuminate\Container\Container;

class ProfileSeeder extends Seeder
{
    /**
     * The current Faker instance.
     *
     * @var \Faker\Generator
     */
    protected $faker;

    /**
     * Create a new seeder instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->faker = $this->withFaker();
    }

    /**
     * Get a new Faker instance.
     *
     * @return \Faker\Generator
     */
    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswa = User::where('role_id', 3)->get();
        $profile = [];
        foreach ($mahasiswa as $mhs) {
            $profile[] = [
                'user_id' => $mhs->id,
                'gender' => rand(0, 1) ? 'L' : 'P',
                'birthdate' => now()->subYears(rand(18, 30)),
                'address' => 'Jl. ' . $this->faker->streetName . ' No. ' . rand(1, 100),
                'phone' => '08' . rand(10000000000, 99999999999),
                'major_id' => rand(1, 2),
                'entry_year' => rand(2008, 2015),
                'graduation_year' => rand(2016, 2022),
                'job' => $this->faker->jobTitle,
                'photo' => 'https://randomuser.me/api/portraits/men/' . rand(1, 99) . '.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        $alumni = User::where('role_id', 4)->get();
        foreach ($alumni as $al) {
            $profile[] = [
                'user_id' => $al->id,
                'gender' => rand(0, 1) ? 'L' : 'P',
                'birthdate' => now()->subYears(rand(18, 30)),
                'address' => 'Jl. ' . $this->faker->streetName . ' No. ' . rand(1, 100),
                'phone' => '08' . rand(10000000000, 99999999999),
                'major_id' => rand(1, 2),
                'entry_year' => rand(2008, 2015),
                'graduation_year' => rand(2016, 2022),
                'job' => $this->faker->jobTitle,
                'photo' => 'https://randomuser.me/api/portraits/men/' . rand(1, 99) . '.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        Profile::insert($profile);
    }
}
