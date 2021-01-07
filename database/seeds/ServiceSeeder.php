<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert(
            [
                'date' => '2021-01-04 09:08:55',
                'status' => 'processing',
                'created_at' => now(),
                'service_category_id' => 1,
                'citizen_id' => 2,
            ],
            [
                'date' => '2020-12-12 09:08:55',
                'status' => 'processing',
                'created_at' => now(),
                'service_category_id' => 1,
                'citizen_id' => 2,
            ],
        );
    }
}