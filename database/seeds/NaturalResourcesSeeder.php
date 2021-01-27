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
            [
                'title' => 'Lava Bantal',
                'description' => 'Wisata Lava Bantal adalah obyek wisata yang terbentuk alami akibat kejadian alam. Dalam hal ini, terbentuk setelah meletusnya gunung api bawah laut dan laharnya beku dan berbentuk bantal karena langsung beraksi dengan air laut. Lava Bantal diyakini sudah terbentuk sejak 60 juta tahun yang lalu.',
                'created_at' => now(),
            ],
            [
                'title' => 'Candi Abang',
                'description' => 'Candi abang merupakan candi hindu yang berada di dusun Candiabang, kelurahan Jogotirto, kecamatan Berbah, kabupaten Sleman. Candi yang berbentuk seperti piramid ini dinamakan Candi Abang karena terbuat dari batubata yang berwarna merah (abang dalam bahasa Jawa). Bentuk candi ini berupa segi empat dengan ukuran 36 m x 34 meter, sekarang banyak ditumbuhi rerumputan sehingga dari jauh tampak mirip seperti gundukan tanah atau bukit kecil.',
                'created_at' => now(),
            ],
            [
                'title' => 'Gua Jepang',
                'description' => 'Gua Jepang merupakan peninggalan dari tentara jepang pada tahun 1942-1945. Konon gua disana mencapai 15 buah gua, akan tetapi kini hanya tinggal 4 buah yang terurus dan 2 yang lainnya kurang terurus. Dulu gua ini difungsikan sebagai penyimpanan bahan atau alat-alat senjata jepang',
                'created_at' => now(),
            ],
        ]);
    }
}