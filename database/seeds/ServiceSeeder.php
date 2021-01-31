<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 20; $i++) {
            DB::table('services')->insert(
                [
                    'date' => $faker->dateTimeBetween('-10 days', '+200 days'),
                    'status' => $faker->randomElement(
                        ['processing', 'accepted', 'rejected', 'completed']
                    ),
                    'created_at' => now(),
                    'service_category_id' =>  $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8]),
                    'citizen_id' => $faker->numberBetween(1, 20),
                    'description' => $faker->text(),
                    'user_id' => $faker->numberBetween(1, 5)
                ],
            );
        }
        DB::table('services')->insert(
            [
                [
                    'date' => '2021-01-04 09:08:55',
                    'status' => 'processing',
                    'created_at' => now(),
                    'service_category_id' => 1,
                    'citizen_id' => 3,
                    'description' => 'Untuk mendaftar bantuan',
                    'user_id' => 1
                ],
                [
                    'date' => '2020-12-12 09:08:55',
                    'status' => 'processing',
                    'created_at' => now(),
                    'service_category_id' => 1,
                    'citizen_id' => 4,
                    'description' => 'Untuk mendaftar bantuan',
                    'user_id' => 4
                ],
                [
                    'date' => '2020-12-30 09:08:55',
                    'status' => 'accepted',
                    'created_at' => now(),
                    'service_category_id' => 1,
                    'citizen_id' => 2,
                    'description' => 'Untuk mendaftar bantuan',
                    'user_id' => 3
                ],
                [
                    'date' => '2020-12-30 09:08:55',
                    'status' => 'accepted',
                    'created_at' => now(),
                    'service_category_id' => 2,
                    'citizen_id' => 1,
                    'description' => 'Untuk mendaftar bantuan',
                    'user_id' => 2
                ],
            ]
        );
    }
}