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

        for ($i = 0; $i < 2; $i++) {
            DB::table('service_files')->insert([
                'service_requirement_id' => 25,
                'file_url' => $faker->imageGenerator(public_path('assets/serviceFile/'), 640, 480, 'png', false, 'Berkas Tester', null, null),
                'status' => 'unverified',
                'service_id' => $faker->numberBetween(54, 53),
                'created_at' => now(),
            ]);
        }
        for ($i = 0; $i < 2; $i++) {
            DB::table('service_files')->insert([
                'service_requirement_id' => $faker->numberBetween(23, 24),
                'file_url' => $faker->imageGenerator(public_path('assets/serviceFile/'), 640, 480, 'png', false, 'Berkas Tester', null, null),
                'status' => 'unverified',
                'service_id' => 55,
                'created_at' => now(),
            ]);
        }
        for ($i = 0; $i < 3; $i++) {
            DB::table('service_files')->insert([
                'service_requirement_id' => $faker->numberBetween(20, 22),
                'file_url' => $faker->imageGenerator(public_path('assets/serviceFile/'), 640, 480, 'png', false, 'Berkas Tester', null, null),
                'status' => 'unverified',
                'service_id' => 56,
                'created_at' => now(),
            ]);
        }
        for ($i = 0; $i < 3; $i++) {
            DB::table('service_files')->insert([
                'service_requirement_id' => $faker->numberBetween(20, 22),
                'file_url' => $faker->imageGenerator(public_path('assets/serviceFile/'), 640, 480, 'png', false, 'Berkas Tester', null, null),
                'status' => 'unverified',
                'service_id' => 57,
                'created_at' => now(),
            ]);
        }
        for ($i = 0; $i < 8; $i++) {
            DB::table('service_files')->insert([
                'service_requirement_id' => $faker->numberBetween(12, 19),
                'file_url' => $faker->imageGenerator(public_path('assets/serviceFile/'), 640, 480, 'png', false, 'Berkas Tester', null, null),
                'status' => 'unverified',
                'service_id' => 58,
                'created_at' => now(),
            ]);
        }
        for ($i = 0; $i < 8; $i++) {
            DB::table('service_files')->insert([
                'service_requirement_id' => $faker->numberBetween(12, 19),
                'file_url' => $faker->imageGenerator(public_path('assets/serviceFile/'), 640, 480, 'png', false, 'Berkas Tester', null, null),
                'status' => 'unverified',
                'service_id' => 59,
                'created_at' => now(),
            ]);
        }
        for ($i = 0; $i < 5; $i++) {
            DB::table('service_files')->insert([
                'service_requirement_id' => $faker->numberBetween(7, 11),
                'file_url' => $faker->imageGenerator(public_path('assets/serviceFile/'), 640, 480, 'png', false, 'Berkas Tester', null, null),
                'status' => 'unverified',
                'service_id' => 60,
                'created_at' => now(),
            ]);
        }
        for ($i = 0; $i < 5; $i++) {
            DB::table('service_files')->insert([
                'service_requirement_id' => $faker->numberBetween(7, 11),
                'file_url' => $faker->imageGenerator(public_path('assets/serviceFile/'), 640, 480, 'png', false, 'Berkas Tester', null, null),
                'status' => 'unverified',
                'service_id' => 61,
                'created_at' => now(),
            ]);
        }
        for ($i = 0; $i < 3; $i++) {
            DB::table('service_files')->insert([
                'service_requirement_id' => $faker->numberBetween(4, 6),
                'file_url' => $faker->imageGenerator(public_path('assets/serviceFile/'), 640, 480, 'png', false, 'Berkas Tester', null, null),
                'status' => 'unverified',
                'service_id' => 62,
                'created_at' => now(),
            ]);
        }
        for ($i = 0; $i < 3; $i++) {
            DB::table('service_files')->insert([
                'service_requirement_id' => $faker->numberBetween(4, 6),
                'file_url' => $faker->imageGenerator(public_path('assets/serviceFile/'), 640, 480, 'png', false, 'Berkas Tester', null, null),
                'status' => 'unverified',
                'service_id' => 63,
                'created_at' => now(),
            ]);
        }
        for ($i = 0; $i < 3; $i++) {
            DB::table('service_files')->insert([
                'service_requirement_id' => $faker->numberBetween(1, 3),
                'file_url' => $faker->imageGenerator(public_path('assets/serviceFile/'), 640, 480, 'png', false, 'Berkas Tester', null, null),
                'status' => 'unverified',
                'service_id' => 64,
                'created_at' => now(),
            ]);
        }
        for ($i = 0; $i < 3; $i++) {
            DB::table('service_files')->insert([
                'service_requirement_id' => $faker->numberBetween(1, 3),
                'file_url' => $faker->imageGenerator(public_path('assets/serviceFile/'), 640, 480, 'png', false, 'Berkas Tester', null, null),
                'status' => 'unverified',
                'service_id' => 65,
                'created_at' => now(),
            ]);
        }

        DB::table('service_files')->insert([
            [
                'service_requirement_id' => 1,
                'file_url' => 'berkas1.jpeg',
                'status' => 'unverified',
                'service_id' => 66,
                'created_at' => now(),
            ],
            [
                'service_requirement_id' => 2,
                'file_url' => 'Presensi.pdf',
                'status' => 'unverified',
                'service_id' => 66,
                'created_at' => now(),
            ],
            [
                'service_requirement_id' => 3,
                'file_url' => $faker->imageGenerator(public_path('assets/serviceFile/'), 640, 480, 'png', false, 'Berkas Tester', null, null),
                'status' => 'unverified',
                'service_id' => 66,
                'created_at' => now(),
            ],
        ]);
    }
}