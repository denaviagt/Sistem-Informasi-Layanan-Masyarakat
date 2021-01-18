<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        DB::table('missions')->insert([
            [
                'mission' => 'Menyediakan lingkungan belajar yang kondusif untuk menjamin terlaksannya proses pembelajaran yang tepat bagi anak-anak usia dini dari semua kalangan agar dapat berkembang secara optimal',
                'village_id' => 1,
                'created_at' => now(),
            ],
            [
                'mission' => 'Mengajarkan keterampilan hidup menuju kemandirian dan keutuhan sebagai manusia Indonesia secara bermoral dan mencintai bangsanya',
                'village_id' => 1,
                'created_at' => now(),
            ],
            [
                'mission' => 'Meningkatkan penghasilan masyarakat dari hasil potensi lingkungan untuk menunjang pendidikan dan kesejahteraan',
                'village_id' => 1,
                'created_at' => now(),
            ],
            [
                'mission' => 'Memanfaatkan kemajuan teknologi di bidang informasi dan komunikasi secara tepat guna, aktif, kreatif, efektif, dan meyenangkan demi menumbuhkan kompetensi bersaing secara global',
                'village_id' => 1,
                'created_at' => now(),
            ],
            [
                'mission' => 'Menjadikan lingkungan sebagai ruang sehingga peserta dirik diajak untuk mempelajari kurikulum nasional dengan memanfaatkan lingkurangan sekitar',
                'village_id' => 1,
                'created_at' => now(),
            ],
        ]);
    }
}