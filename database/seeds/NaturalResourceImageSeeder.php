<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NaturalResourceImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('natural_resource_images')->insert([
            [
                'image' => 'lava-bantal.jpg',
                'natural_resource_id' => 1,
                'created_at' => now(),
            ],
            [
                'image' => 'Candi-Abang.jpg',
                'natural_resource_id' => 2,
                'created_at' => now(),
            ],
            [
                'image' => 'gua-jepang.jpg',
                'natural_resource_id' => 3,
                'created_at' => now(),
            ],

        ]);
    }
}