<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Faker\Factory as Faker;

class AdminSeeder extends Seeder
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
        for ($i = 1; $i <= 5; $i++) {
            DB::table('admins')->insert([
                'full_name' => $faker->name,
                'gender' => $faker->randomElement(['male', 'female']),
                'email' => $faker->freeEmail,
                'username' => $faker->userName,
                'password' => Hash::make('password'),
                'token' => "",
                'remember_token' => "",
                'is_active' => 1,
                'level' => 'admin',
            ]);
        }
    }
}
