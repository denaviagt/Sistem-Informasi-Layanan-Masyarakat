<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class CitizenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        // $gender = $faker->randomElement(['male', 'female']);
        for ($i = 1; $i <= 50; $i++) {
            DB::table('citizens')->insert([
                'nik' => $faker->nik(),
                'kk' => $faker->nik(),
                'full_name' => $faker->name,
                'gender' => $faker->randomElement(['male', 'female']),
                'religion' => $faker->randomElement(['Islam', 'Kristen', 'Katholik', 'Hindu', 'Budha']),
                'has_married' => $faker->randomElement([1, 0]),
                'profession' => $faker->jobTitle,
                'pob' => $faker->city,
                'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'address' => $faker->address,
                'status' =>  'unverified',
                'dusun_id' =>  $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
                'created_at' => now(),
            ]);
        }
    }
}