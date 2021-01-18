<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $gender = $faker->randomElement(['male', 'female']);
        DB::table('feedbacks')->insert(
            [
                [
                    'is_important' => 1,
                    'is_anonim' => 0,
                    'is_read' => 0,
                    'feedback' => 'Jalan kampung rusak',
                    'date' => now(),
                    'user_id' => 1,
                    'feedback_dusun_id' => 3,
                ],
                [
                    'is_important' => 0,
                    'is_anonim' => 1,
                    'is_read' => 0,
                    'feedback' => 'Lampu jalan mati',
                    'date' => now(),
                    'user_id' => 3,
                    'feedback_dusun_id' => 2,
                ],
            ]
        );
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            DB::table('feedbacks')->insert(
                [
                    'is_important' => $faker->randomElement([1, 0]),
                    'is_anonim' => $faker->randomElement([1, 0]),
                    'is_read' => 0,
                    'feedback' => 'Jalan kampung rusak',
                    'date' => $faker->dateTimeBetween('-10 days', '+200 days'),
                    'user_id' => $faker->numberBetween(1, 5),
                    'feedback_dusun_id' => $faker->numberBetween(1, 10),
                ]
            );
        }
    }
}