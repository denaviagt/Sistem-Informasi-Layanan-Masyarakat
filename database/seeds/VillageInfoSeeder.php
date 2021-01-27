<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class VillageInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('village_infos')->insert([
            [
                'title' => 'BUMDes Bakal Percepat Ekonomi Desa',
                'content' => 'Menteri Desa, Pembangunan Daerah Tertinggal dan Transmigrasi (Mendes PDTT) Abdul Halim Iskandar mengatakan upaya peningkatan ekonomi masyarakat desa saat ini bisa dilakukan dengan berbagai cara. Salah satunya dengan mengoptimalkan Badan Usaha Milik Desa (BUMDes) yang telah diakui sebagai lembaga berbadan hukum. Berbagai upaya pun sudah bisa dilakukan BUMDes dalam rangka percepatan perekonomian masyarakat desa. Bahkan BUMDes bisa mendirikan Perseroan Terbatas (PT) yang menjalankan bisnis apapun."Misalnya BUMDes sebagai badan hukum sekaligus badan usaha itu bisa mendirikan PT untuk usaha apapun," kata Abdul Halim dalam acara Karya Kreatif Indonesia, Jakarta, Jumat (20/11)',
                'date' => $faker->date('Y-m-d', 'now'),
                'thumbnail' => $faker->imageUrl(640, 480),
                'status' => $faker->randomElement(['published', 'draft']),
                'created_at' => now(),
                'admin_id' => 1
            ],

            [
                'title' => 'Tingkatkan Kesejahteraan Warga, Desa Bakal Jadi Pemasok Bahan Baku PLTU',
                'content' => 'Program cofiring biomassa PLTU yang didukung oleh PT PLN (Persero) bersama Direktorat Jendral ETBK dalam mengembangkan energi baru terbarukan (EBT), erat hubungannya dengan energi desa.Desa akan dijadikan sebagai salah satu sumber pasokan bahan baku untuk pembangkit enegri. Dengan konsep yang dibuat untuk cofiring biomass PLTU, desa dapat diberdayakan dengan menjadi pemasok bahan baku.',
                'date' => $faker->date('Y-m-d', 'now'),
                'thumbnail' => $faker->imageUrl(640, 480),
                'status' => $faker->randomElement(['published', 'draft']),
                'created_at' => now(),
                'admin_id' => 1
            ],

        ]);
    }
}