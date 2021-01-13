<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_files')->insert([
            'service_requirement_id' => 1,
            'file_url' => 'berkas1.pdf',
            'status' => 'unverified',
            'service_id' => 1,
            'created_at' => now(),
        ]);
    }
}