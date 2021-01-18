<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 5; $i++) {
            DB::table('users')->insert([
                'email' => $faker->freeEmail,
                'username' => $faker->userName,
                'password' => Hash::make('password'),
                'created_at' => now(),
                'citizen_id' => $faker->randomElement([1, 2, 3, 4, 5])
            ]);
        }
    }
}