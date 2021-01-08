<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NaturalResourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('natural_resources')->insert([
            'title' => 'Lava Bantal',
            'description' => 'Deskripsi lava bantal',
            'created_at' => now(),
        ]);
    }
}