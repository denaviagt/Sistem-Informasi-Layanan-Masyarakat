<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class VillageInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('village_infos')->insert([
            'title' => $faker->text(10),
            'content' => $faker->text(500),
            'date' => $faker->date('Y-m-d', 'now'),
            'thumbnail' => $faker->imageUrl(640, 480),
            'status' => $faker->randomElement(['published', 'draft']),
            'created_at' => now(),
            'admin_id' => 1
        ]);
    }
}