<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceRequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_requirements')->insert([
            [
                'terms' => 'Surat Pengantar Permohonan E-KTP dari dusun',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 1
            ],
            [
                'terms' => 'Mengisi formulir F-1.07 dan tandatangan dukuh',
                'description' => 'Formulir F-1.07',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 1
            ],
            [
                'terms' => 'Pengantar RT/RW',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 2
            ],
            [
                'terms' => 'Blanko F-1.01 Biodata di dukuh',
                'description' => 'Blanko F-1.01',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 2
            ],
            [
                'terms' => 'Blanko F.1.06 Susunan Anggota Keluarga di dukuh',
                'description' => 'Blanko F-1.06',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 2
            ],
            [
                'terms' => 'Fotokopi Kartu Keluarga (nama anak sudah tercantum)',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 3
            ],
            [
                'terms' => 'Fotokopi surat nikah bapak/ibu',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 3
            ],
            [
                'terms' => 'Fotokopi ktp bapak/ibu',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 3
            ],
            [
                'terms' => 'Fotokopi surat kelahiran dari kelurahan',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 3
            ],
            [
                'terms' => 'Bagi pemohon yang sudah dewasa melampirkan ijazah terakhir yang mencantumkan nama orangtua',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 3
            ],
            [
                'terms' => 'Fotokopi E-KTP saksi 2 orang',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 3
            ],
            [
                'terms' => 'Surat pengantar RT/RW/Dukuh',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 4
            ],
            [
                'terms' => 'Surat pengantar dari kelurahan',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 4
            ],
            [
                'terms' => 'Fotokopi surat kematian dari dokter/rumah sakit/ kelurahan',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 4
            ],
            [
                'terms' => 'Fotokopi surat nikah/ akta perkawinan orang tua almarhum/ah',
                'description' => 'Fotokopi surat nikah/ akta perkawinan orang tua almarhum/ah bagi yang meninggal belum menikah, apabila almarhum/ah sudah menikah, melampirkan surat nikah/ akta perkawinan dari almarhum/ah yang bersangkutan',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 4
            ],
            [
                'terms' => 'Fotokopi akta kelahiran/surat kelahiran almarhum/ah',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 4
            ],
            [
                'terms' => 'Fotokopi kartu keluarga dan ktp pelapor, ditambah ktp saksi',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 4
            ],
            [
                'terms' => 'Bagi WNI keturunan ditambah SKBRI dan surat ganti nama',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 4
            ],
            [
                'terms' => 'Bagi WNA ditambah surat kewarganegaraan asing',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 4
            ],
            [
                'terms' => 'Fotokopi E-KTP saksi 2 orang',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 4
            ],
            [
                'terms' => 'Pengantar RT, RW, dan Dukuh',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 5
            ],
            [
                'terms' => 'KK dan KTP asli',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 5
            ],
            [
                'terms' => 'Foto berwarna 4x6 4 lembar',
                'description' => 'Tahun genap background foto berwarna biru. Tahun ganjil background foto berwarna merah',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 5
            ],
            [
                'terms' => 'Pengantar RT, RW, dan Dukuh alamat baru',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 6
            ],
            [
                'terms' => 'Surat pengantar dari daerah asal',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 6
            ],
            [
                'terms' => 'Pengantar RT, RW, dan Dukuh setempat',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 7
            ],
            [
                'terms' => 'Fotokopi Kartu keluarga, KTP, akta kelahiran, dan ijazah terakhir',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 7
            ],
            [
                'terms' => 'Foto berwarna 2x3 : 6 Lembar background biru',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 7
            ],
            [
                'terms' => 'Bagi pemohon laki-laki membawa identitas calon istri kartu keluarga dan akta kelahiran',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 7
            ],
            [
                'terms' => 'Bagi pemohon perempuan membawa syarat nikah laki-laki',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 7
            ],
            [
                'terms' => 'Akta cerai bagi duda dan janda (jika ada)',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 7
            ],
            [
                'terms' => 'Akta kematian bagi duda dan janda cerai mati (jika ada)',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 7
            ],
            [
                'terms' => 'Fotokopi KTP',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 8
            ],
            [
                'terms' => 'Fotokopi KK',
                'description' => '',
                'status' => 'active',
                'created_at' => now(),
                'service_category_id' => 8
            ],
        ]);
    }
}