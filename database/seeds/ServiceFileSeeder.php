<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use bheller\ImagesGenerator\ImagesGeneratorProvider;


class ServiceFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $faker->addProvider(new ImagesGeneratorProvider($faker));
        // $image = $faker->imageGenerator();

        DB::table('service_files')->insert([
            [
                'service_requirement_id' => 1,
                'file_url' => 'berkas1.jpeg',
                'status' => 'unverified',
                'service_id' => 1,
                'created_at' => now(),
            ],
            [
                'service_requirement_id' => 2,
                'file_url' => 'Presensi.pdf',
                'status' => 'unverified',
                'service_id' => 1,
                'created_at' => now(),
            ],
            [
                'service_requirement_id' => 3,
                'file_url' => $faker->imageGenerator('D:\PROJECT\e-silam\public\assets\serviceFile', 640, 480, 'png', false, 'Berkas Tester', null, null),
                'status' => 'unverified',
                'service_id' => 1,
                'created_at' => now(),
            ],
        ]);

        for ($i = 0; $i < 3; $i++) {
            DB::table('service_files')->insert([
                'service_requirement_id' => $faker->numberBetween(1, 3),
                'file_url' => $faker->imageGenerator('D:\PROJECT\e-silam\public\assets\serviceFile', 640, 480, 'png', false, 'Berkas Tester', null, null),
                'status' => 'unverified',
                'service_id' => 2,
                'created_at' => now(),
            ]);
        }
        for ($i = 0; $i < 3; $i++) {
            DB::table('service_files')->insert([
                'service_requirement_id' => $faker->numberBetween(1, 3),
                'file_url' => $faker->imageGenerator('D:\PROJECT\e-silam\public\assets\serviceFile', 640, 480, 'png', false, 'Berkas Tester', null, null),
                'status' => 'unverified',
                'service_id' => 3,
                'created_at' => now(),
            ]);
        }
        for ($i = 0; $i < 6; $i++) {
            DB::table('service_files')->insert([
                'service_requirement_id' => $faker->numberBetween(4, 6),
                'file_url' => $faker->imageGenerator(public_path('assets\serviceFile'), 640, 480, 'png', false, 'Berkas Tester', null, null),
                'status' => 'unverified',
                'service_id' => 4,
                'created_at' => now(),
            ]);
        }
    }
}