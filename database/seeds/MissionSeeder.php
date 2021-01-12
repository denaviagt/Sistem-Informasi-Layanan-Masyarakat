<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        DB::table('Missions')->insert([
            'mission' => $faker->text(250),
            'village_id' => 1,
            'created_at' => now(),
        ]);
    }
}