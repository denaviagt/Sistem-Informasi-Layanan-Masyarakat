<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DusunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dusuns')->insert([
            [
                'dusun_name' => 'Jragung',
                'head_of_dusun' => 'Tikno',
                'created_at' => now(),
            ],
            [
                'dusun_name' => 'Blambangan',
                'head_of_dusun' => 'Suraji',
                'created_at' => now(),
            ],
            [
                'dusun_name' => 'Morobangun',
                'head_of_dusun' => 'Budi Santoso',
                'created_at' => now(),
            ],
            [
                'dusun_name' => 'Karongan',
                'head_of_dusun' => 'Aris Warsito',
                'created_at' => now(),
            ],
            [
                'dusun_name' => 'Rejosari',
                'head_of_dusun' => 'Hartono',
                'created_at' => now(),
            ],
            [
                'dusun_name' => 'Krasaan',
                'head_of_dusun' => 'Suatmirah, A.Md',
                'created_at' => now(),
            ],
            [
                'dusun_name' => 'Jlatren',
                'head_of_dusun' => 'Mashuri, S.Pd',
                'created_at' => now(),
            ],
            [
                'dusun_name' => 'Bulu',
                'head_of_dusun' => 'Sudarmo',
                'created_at' => now(),
            ],
            [
                'dusun_name' => 'Kranggan 1',
                'head_of_dusun' => 'Suharmadi',
                'created_at' => now(),
            ],
            [
                'dusun_name' => 'Kranggan 2',
                'head_of_dusun' => 'Sukamto',
                'created_at' => now(),
            ],
        ]);
    }
}