<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\Typology;
use App\Models\User;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        // Retrieve typologies ids
        $typologies_ids = Typology::pluck('id')->toArray();

        // Make profile photo directory
        Storage::makeDirectory('profile_img');

        for ($i = 1; $i < 10; $i++) {

            // Create Doctor
            $doctor = new User();
            $doctor->first_name = $faker->firstName();
            $doctor->last_name = $faker->lastName();
            $doctor->email = "doctor$i@mail.it";
            $doctor->password = bcrypt('password');
            $doctor->save();

            // Create profile
            $doctor_profile = new Profile();
            $doctor_profile->user_id = $doctor->id;
            $doctor_profile->description = $faker->sentence();
            $doctor_profile->services = $faker->words(rand(1, 5), true);
            $doctor_profile->address = 'Roma';
            $doctor_profile->save();

            // Add doctor typologies (at least one)
            $profile_typologies = [];
            foreach ($typologies_ids as $typology_id) {
                if (rand(0, 3) > 2) $profile_typologies[] = $typology_id;
            }
            if (!count($profile_typologies)) $profile_typologies[] = Arr::random($typologies_ids);

            $doctor_profile->typologies()->attach($profile_typologies);
        }
    }
}
