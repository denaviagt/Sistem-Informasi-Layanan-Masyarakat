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
        DB::table('admins')->insert([
            [
                'full_name' => 'Anggita Denavia',
                'gender' => 'female',
                'email' => 'sarasvati@gmail.com',
                'username' => 'sarasv',
                'password' => Hash::make('password'),
                'token' => "",
                'remember_token' => "",
                'is_active' => 1,
                'level' => 'superadmin',
                'created_at' => now(),
            ],
            [
                'full_name' => 'Laila Indah Kusuma',
                'gender' => 'female',
                'email' => 'laila@gmail.com',
                'username' => 'layla',
                'password' => Hash::make('password'),
                'token' => "",
                'remember_token' => "",
                'is_active' => 1,
                'level' => 'superadmin',
                'created_at' => now(),
            ],
            [
                'full_name' => 'Pengkuh Dwi Septiandi',
                'gender' => 'male',
                'email' => 'pengkuh@gmail.com',
                'username' => 'pengkuh',
                'password' => Hash::make('password'),
                'token' => "",
                'remember_token' => "",
                'is_active' => 1,
                'level' => 'admin',
                'created_at' => now(),
            ],
            [
                'full_name' => 'Muhammad Syahrul',
                'gender' => 'male',
                'email' => 'syahrul@gmail.com',
                'username' => 'syahrul',
                'password' => Hash::make('password'),
                'token' => "",
                'remember_token' => "",
                'is_active' => 1,
                'level' => 'admin',
                'created_at' => now(),
            ],
            [
                'full_name' => 'Vina Aulia',
                'gender' => 'female',
                'email' => 'vina@gmail.com',
                'username' => 'vina',
                'password' => Hash::make('password'),
                'token' => "",
                'remember_token' => "",
                'is_active' => 1,
                'level' => 'admin',
                'created_at' => now(),
            ],
            [
                'full_name' => 'Gallant Setiawan',
                'gender' => 'male',
                'email' => 'gallant@gmail.com',
                'username' => 'gallant',
                'password' => Hash::make('password'),
                'token' => "",
                'remember_token' => "",
                'is_active' => 1,
                'level' => 'admin',
                'created_at' => now(),
            ],
            [
                'full_name' => 'Revania H',
                'gender' => 'female',
                'email' => 'reva@gmail.com',
                'username' => 'reva',
                'password' => Hash::make('password'),
                'token' => "",
                'remember_token' => "",
                'is_active' => 1,
                'level' => 'admin',
                'created_at' => now(),
            ],
        ]);

        // $faker = Faker::create('id_ID');
        // $gender = $faker->randomElement(['male', 'female']);
        // for ($i = 1; $i <= 5; $i++) {
        //     DB::table('admins')->insert([
        //         'full_name' => $faker->name,
        //         'gender' => $faker->randomElement(['male', 'female']),
        //         'email' => $faker->freeEmail,
        //         'username' => $faker->userName,
        //         'password' => Hash::make('password'),
        //         'token' => "",
        //         'remember_token' => "",
        //         'is_active' => 1,
        //         'level' => 'admin',
        //         'created_at' => now(),
        //     ]);
        // }
    }
}