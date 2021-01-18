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
            [
                'title' => 'Peraturan Desa Nomor 1 Tahun 2021',
                'file' => 'Peraturan1.pdf',
                'created_at' => now(),
            ],
            [
                'title' => 'Peraturan Desa Nomor 2 Tahun 2021',
                'file' => 'Peraturan2.pdf',
                'created_at' => now(),
            ],
        ]);
    }
}