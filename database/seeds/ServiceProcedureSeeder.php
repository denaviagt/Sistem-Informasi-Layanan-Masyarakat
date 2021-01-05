<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceProcedureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_procedures')->insert([
            [
                'procedure' => 'Meminta surat permohonan E-KTP ke dukuh setempat',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 1
            ],
            [
                'procedure' => 'Mengisi Formulir F-1.07 dan tandatangan kepala dukuh setempat dengan melampirkan fotokopi kartu keluarga',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 1
            ],
            [
                'procedure' => 'Registrasi permohoanan E-KTP di Kantor Desa',
                'description' => 'Registrasi permohonan beserta tandatangan kepala desa dan cap pemerintah desa',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 1
            ],
            [
                'procedure' => 'Menyerahkan berkas permohonan ke loket pelayanan umum di kecamatan.',
                'description' => 'Setelah berkas dinyatakan lengkap dan memenuhi syarat kemudian petugas penerima membubuhkan paraf',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 1
            ],
            [
                'procedure' => 'Berkas dicek ulang oleh supervisor (Kasi Pelayanan Umum)',
                'description' => 'Setelah dinyatakan lengkap kemudian dibubuhi paraf',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 1
            ],
            [
                'procedure' => 'Verifikasi data pemohon',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 1
            ],
            [
                'procedure' => 'Perekaman E-KTP',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 1
            ],
            [
                'procedure' => 'Pencetakan E-KTP',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 1
            ],
            [
                'procedure' => 'Meminta pengantar ke RT/RW',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 2
            ],
            [
                'procedure' => 'Mengisi blanko F-1.01 Biodata di dukuh setempat',
                'description' => 'Blanko F-1.01',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 2
            ],
            [
                'procedure' => 'Mengisi blanko F.1.06 susunan anggota keluarga di dukuh setempat',
                'description' => 'Blanko F.1.06 adalah',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 2
            ],
            [
                'procedure' => 'Pengesahan di Kelurahan',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 2
            ],
            [
                'procedure' => 'Menyerahkan berkas permohonan ke loket pelayanan umum di Kecamatan',
                'description' => 'Setelah berkas dinyatakan lengkap dan memenuhi syarat kemudian petugas penerima membubuhkan paraf.',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 2
            ],
            [
                'procedure' => 'Berkas dicek ulang oleh supervisor (Kasi Pelayanan Umum)',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 2
            ],
            [
                'procedure' => 'Diajukan ke Camat untuk checking akhir',
                'description' => 'Setelah dinyatakan sah kemudian dibubuhi paraf',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 2
            ],
            [
                'procedure' => 'Diajukan oleh petugas kecamatan ke dinas kependudukan dan catatan sipil kabupaten sleman untuk ditandatangani langsung oleh kepala dinas',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 2
            ],
            [
                'procedure' => 'Kembali ke loket pelayanan umum kecamatan.',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 2
            ],
            [
                'procedure' => 'Pengantar RT, RW, dan dukuh',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 3
            ],
            [
                'procedure' => 'Disahkan di kelurahan',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 3
            ],
            [
                'procedure' => 'Disahkan di kecamatan',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 3
            ],
            [
                'procedure' => 'Diproses oleh dinas kependudukan dan catatan sipil',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 3
            ],
            [
                'procedure' => 'Pengantar RT, RW, dan dukuh',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 4
            ],
            [
                'procedure' => 'Surat Pengantar dari kelurahan',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 4
            ],
            [
                'procedure' => 'Disahkan di kecamatan',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 4
            ],
            [
                'procedure' => 'Diproses oleh dinas kependudukan dan catatan sipil',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 4
            ],
            [
                'procedure' => 'Pengantar RT, RW, dan dukuh',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 5
            ],
            [
                'procedure' => 'Surat Pengantar dari kelurahan',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 5
            ],
            [
                'procedure' => 'Disahkan di kecamatan',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 5
            ],
            [
                'procedure' => 'Diproses oleh dinas kependudukan dan catatan sipil',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 5
            ],
            [
                'procedure' => 'Pengantar RT, RW, dan dukuh',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 6
            ],
            [
                'procedure' => 'Surat Pengantar dari kelurahan',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 6
            ],
            [
                'procedure' => 'Disahkan di kecamatan',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 6
            ],
            [
                'procedure' => 'Diproses oleh dinas kependudukan dan catatan sipil',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 6
            ],
            [
                'procedure' => 'Meminta surat pengantar di RT/RW/Dukuh setempat',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 7
            ],
            [
                'procedure' => 'Mendapat surat pengantar dari kelurahan',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 7
            ],
            [
                'procedure' => 'Kantor urusan agama/KUA',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 7
            ],
            [
                'procedure' => 'Puskesmas',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 7
            ],

        ]);
    }
}