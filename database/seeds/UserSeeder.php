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
        for ($i = 1; $i <= 10; $i++) {
            DB::table('users')->insert([
                'email' => $faker->freeEmail,
                'username' => $faker->userName,
                'password' => Hash::make('password'),
                'phone' => $faker->phoneNumber,
                'created_at' => now(),
                'citizen_id' => $i + 8
            ]);
        }
    }
}