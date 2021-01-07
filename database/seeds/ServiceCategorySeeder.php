<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_categories')->insert([
            [
                'category' => 'Kartu Tanda Penduduk Elektronik',
                'description' => 'Pengajuan Kartu Penduduk Elektronik',
                'status' => 'active',
                'created_at' => now(),
            ],
            [
                'category' => 'Kartu Keluarga',
                'description' => 'Pengajuan Kartu Penduduk Elektronik',
                'status' => 'active',
                'created_at' => now(),
            ],
            [
                'category' => 'Akta Kelahiran',
                'description' => 'Pengajuan Akta Kelahiran',
                'status' => 'active',
                'created_at' => now(),
            ],
            [
                'category' => 'Akta Kematian',
                'description' => 'Pengajuan Akta Kematian',
                'status' => 'active',
                'created_at' => now(),
            ],
            [
                'category' => 'Pengurusan Pindah Penduduk',
                'description' => 'Pengurusan Pindah Penduduk',
                'status' => 'active',
                'created_at' => now(),
            ],
            [
                'category' => 'Pengurusan Masuk Penduduk',
                'description' => 'Pengurusan Masuk Penduduk',
                'status' => 'active',
                'created_at' => now(),
            ],
            [
                'category' => 'Pengurusan Nikah',
                'description' => 'Pengurusan Surat Pengantar Nikah',
                'status' => 'active',
                'created_at' => now(),
            ],
            [
                'category' => 'SKU (Surat Keterangan Usaha)',
                'description' => 'Pengurusan Surat Keterangan Usaha',
                'status' => 'active',
                'created_at' => now(),
            ]
        ]);
    }
}