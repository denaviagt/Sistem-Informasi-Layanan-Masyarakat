<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('villages')->insert([
            'village_name' => 'Jogotirto',
            'lurah' => 'Arum Setiya, S.Pd',
            'mission_id' => '1',
            'vision_id' => '1',
            'created_at' => now(),
        ]);
    }
}