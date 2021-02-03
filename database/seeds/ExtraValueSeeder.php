<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExtraValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extra_values')->insert(
            [
                [
                    'service_id' => 51,
                    'extra_field_id' => 1,
                    'value' => 'Toko Sembako',
                    'created_at' => now()
                ],
                [
                    'service_id' => 51,
                    'extra_field_id' => 2,
                    'value' => 'Rejosari Jogotirto',
                    'created_at' => now()
                ],
                [
                    'service_id' => 51,
                    'extra_field_id' => 3,
                    'value' => '5 Tahun',
                    'created_at' => now()
                ],
                [
                    'service_id' => 52,
                    'extra_field_id' => 1,
                    'value' => 'Toko Mable',
                    'created_at' => now()
                ],
                [
                    'service_id' => 52,
                    'extra_field_id' => 2,
                    'value' => 'Karongan Jogotirto',
                    'created_at' => now()
                ],
                [
                    'service_id' => 52,
                    'extra_field_id' => 3,
                    'value' => '2 Tahun',
                    'created_at' => now()
                ],
                [
                    'service_id' => 55,
                    'extra_field_id' => 13,
                    'value' => 'Terong, Dlingo, Bantul',
                    'created_at' => now()
                ],
                [
                    'service_id' => 55,
                    'extra_field_id' => 14,
                    'value' => 'Ikut isti',
                    'created_at' => now()
                ],
                [
                    'service_id' => 55,
                    'extra_field_id' => 15,
                    'value' => 0,
                    'created_at' => now()
                ],
                [
                    'service_id' => 56,
                    'extra_field_id' => 10,
                    'value' => 'Cibitung, Bekasi',
                    'created_at' => now()
                ],
                [
                    'service_id' => 56,
                    'extra_field_id' => 11,
                    'value' => 'Dipindah tempat dinas oleh kantor',
                    'created_at' => now()
                ],
                [
                    'service_id' => 56,
                    'extra_field_id' => 12,
                    'value' => 2,
                    'created_at' => now()
                ],
                [
                    'service_id' => 57,
                    'extra_field_id' => 10,
                    'value' => 'Piyungan, Srimartani, Piyungan, Bantul',
                    'created_at' => now()
                ],
                [
                    'service_id' => 57,
                    'extra_field_id' => 11,
                    'value' => 'Pindah ke rumah suami',
                    'created_at' => now()
                ],
                [
                    'service_id' => 57,
                    'extra_field_id' => 12,
                    'value' => 0,
                    'created_at' => now()
                ],
                [
                    'service_id' => 58,
                    'extra_field_id' => 7,
                    'value' => 'Senin',
                    'created_at' => now()
                ],
                [
                    'service_id' => 58,
                    'extra_field_id' => 8,
                    'value' => '10 Desember 2020',
                    'created_at' => now()
                ],
                [
                    'service_id' => 58,
                    'extra_field_id' => 9,
                    'value' => 'Sasonoloyo Rejosari',
                    'created_at' => now()
                ],
                [
                    'service_id' => 59,
                    'extra_field_id' => 7,
                    'value' => 'Sabtu',
                    'created_at' => now()
                ],
                [
                    'service_id' => 59,
                    'extra_field_id' => 8,
                    'value' => '30 Desember 2020',
                    'created_at' => now()
                ],
                [
                    'service_id' => 59,
                    'extra_field_id' => 9,
                    'value' => 'TPU Sleman',
                    'created_at' => now()
                ],
                [
                    'service_id' => 60,
                    'extra_field_id' => 4,
                    'value' => 'Siti Aminah',
                    'created_at' => now()
                ],
                [
                    'service_id' => 60,
                    'extra_field_id' => 5,
                    'value' => 'Joko Susilo',
                    'created_at' => now()
                ],
                [
                    'service_id' => 60,
                    'extra_field_id' => 6,
                    'value' => 1,
                    'created_at' => now()
                ],
                [
                    'service_id' => 61,
                    'extra_field_id' => 4,
                    'value' => 'Sri Rejeki',
                    'created_at' => now()
                ],
                [
                    'service_id' => 61,
                    'extra_field_id' => 5,
                    'value' => 'Bambang',
                    'created_at' => now()
                ],
                [
                    'service_id' => 61,
                    'extra_field_id' => 6,
                    'value' => 2,
                    'created_at' => now()
                ],
            ]
        );
    }
}