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
                'full_name' => 'Super Admin',
                'gender' => 'male',
                'email' => 'superadmin@gmail.com',
                'username' => 'superadmin',
                'password' => Hash::make('password'),
                'token' => "",
                'remember_token' => "",
                'is_active' => 1,
                'level' => 'superadmin',
                'created_at' => now(),
            ]
        ]);

    }
}