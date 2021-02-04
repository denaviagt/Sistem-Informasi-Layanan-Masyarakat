<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AparaturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apparatuses')->insert([
            [
                // 'name' => 'Arum Setya, S.Pd',
                'position' => 'Lurah',
                'period' => '2019/2022',
                'status' => 'active',
                'citizen_id' => 1,
                'admin_id' => 1,
                'created_at' => now()
            ],
            [
                // 'name' => 'Erwin Dwi Hastomo, SE',
                'position' => 'Carik',
                'period' => '2019/2022',
                'status' => 'active',
                'citizen_id' => 2,
                'admin_id' => 1,
                'created_at' => now()
            ],
            [
                // 'name' => 'Vitra Ikayati, SP',
                'position' => 'Kepala Urusan Tata Laksana',
                'period' => '2019/2022',
                'status' => 'active',
                'citizen_id' => 3,
                'admin_id' => 1,
                'created_at' => now()
            ],
            [
                // 'name' => 'Dra. Rini Prabaharsi',
                'position' => 'Kepala Urusan Danarta',
                'period' => '2019/2022',
                'status' => 'active',
                'citizen_id' => 4,
                'admin_id' => 1,
                'created_at' => now()
            ],
            [
                // 'name' => 'Nurkartika Rahmawati, S.Pd',
                'position' => 'Kepala Urusan Pangripta',
                'period' => '2019/2022',
                'status' => 'active',
                'citizen_id' => 5,
                'admin_id' => 1,
                'created_at' => now()
            ],
            [
                // 'name' => 'Ali Rozikin, S.Pd.I',
                'position' => 'Jagabaya',
                'period' => '2019/2022',
                'status' => 'active',
                'citizen_id' => 6,
                'admin_id' => 1,
                'created_at' => now()
            ],
            [
                // 'name' => 'Maryadi, Amd',
                'position' => 'Ulu-ulu',
                'period' => '2019/2022',
                'status' => 'active',
                'citizen_id' => 7,
                'admin_id' => 1,
                'created_at' => now()
            ],
            [
                // 'name' => 'Arif Aryono, S.sos.I',
                'position' => 'Kamituwa',
                'period' => '2019/2022',
                'status' => 'active',
                'citizen_id' => 8,
                'admin_id' => 1,
                'created_at' => now()
            ],

        ]);
    }
}