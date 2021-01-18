<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class VisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        DB::table('visions')->insert([
            'vision' => 'Terbentuknya generasi masyarakat desa Jogotirto berimtaq, terampil, cerdas, beremosi matang, berkemampuan sosial tinggi, mandiri, berdasarkan akar budaya nasional, dengan lingkungan yang sehat, mandiri, dan sejahtera untuk bersaing secara global.',
            'village_id' => 1,
            'created_at' => now(),
        ]);
    }
}