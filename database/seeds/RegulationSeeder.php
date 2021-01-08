<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegulationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regulations')->insert([
            'title' => 'Peraturan 1',
            'file' => 'peraturan.pdf',
            'created_at' => now(),
        ]);
    }
}