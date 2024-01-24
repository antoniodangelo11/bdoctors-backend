<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        for ($i = 1; $i < 10; $i++) {

            $doctor = new User();

            $doctor->name = $faker->name();
            $doctor->email = "doctor$i@mail.it";
            $doctor->password = bcrypt('password');

            $doctor->save();
        }
    }
}
