<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 50; $i++) {
            DB::table('services')->insert(
                [
                    'date' => $faker->dateTimeBetween('-10 days', '+200 days'),
                    'status' => $faker->randomElement(
                        ['processing', 'accepted', 'rejected', 'completed']
                    ),
                    'created_at' => now(),
                    'service_category_id' =>  $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8]),
                    'citizen_id' => $faker->numberBetween(1, 55),
                    'description' => $faker->text(),
                    'user_id' => $faker->numberBetween(1, 10)
                ],
            );
        }
        DB::table('services')->insert(
            [
                [
                    // id 51
                    'date' => now(),
                    'status' => 'processing',
                    'created_at' => now(),
                    'service_category_id' => 8,
                    'citizen_id' => 23,
                    'description' => 'pelengkap permohonan bantuan',
                    'user_id' => 2
                ],
                [
                    // id 52
                    'date' => '2021-01-04 09:08:55',
                    'status' => 'processing',
                    'created_at' => now(),
                    'service_category_id' => 8,
                    'citizen_id' => 22,
                    'description' => 'permohonan bantuan',
                    'user_id' => 2
                ],
                [
                    // id 53
                    'date' => '2021-01-04 09:08:55',
                    'status' => 'processing',
                    'created_at' => now(),
                    'service_category_id' => 7,
                    'citizen_id' => 21,
                    'description' => 'Surat pengantar nikah',
                    'user_id' => 1
                ],
                [
                    // id 54
                    'date' => '2021-01-04 09:08:55',
                    'status' => 'processing',
                    'created_at' => now(),
                    'service_category_id' => 7,
                    'citizen_id' => 28,
                    'description' => 'Pengurusan surat pengantar nikah',
                    'user_id' => 1
                ],
                [
                    // id 55
                    'date' => '2021-01-04 09:08:55',
                    'status' => 'processing',
                    'created_at' => now(),
                    'service_category_id' => 6,
                    'citizen_id' => 20,
                    'description' => 'Ikut istri',
                    'user_id' => 1
                ],
                [
                    // id 56
                    'date' => '2021-01-04 09:08:55',
                    'status' => 'processing',
                    'created_at' => now(),
                    'service_category_id' => 5,
                    'citizen_id' => 19,
                    'description' => 'Pindah dinas ke luar kota',
                    'user_id' => 1
                ],
                [
                    // id 57
                    'date' => '2021-01-04 09:08:55',
                    'status' => 'processing',
                    'created_at' => now(),
                    'service_category_id' => 5,
                    'citizen_id' => 18,
                    'description' => 'Pindah penduduk karena mengikuti suami',
                    'user_id' => 2
                ],
                [
                    // id 58
                    'date' => '2021-01-04 09:08:55',
                    'status' => 'processing',
                    'created_at' => now(),
                    'service_category_id' => 4,
                    'citizen_id' => 33,
                    'description' => 'Pembuatan akta kematian saudara kandung',
                    'user_id' => 2
                ],
                [
                    // id 59
                    'date' => '2021-01-04 09:08:55',
                    'status' => 'processing',
                    'created_at' => now(),
                    'service_category_id' => 4,
                    'citizen_id' => 32,
                    'description' => 'Pembuatan akta kematian orang tua',
                    'user_id' => 1
                ],
                [
                    // id 60
                    'date' => '2021-01-04 09:08:55',
                    'status' => 'processing',
                    'created_at' => now(),
                    'service_category_id' => 3,
                    'citizen_id' => 31,
                    'description' => 'Pembuatan akta lahir',
                    'user_id' => 2
                ],
                [
                    // id 61
                    'date' => '2021-01-04 09:08:55',
                    'status' => 'processing',
                    'created_at' => now(),
                    'service_category_id' => 3,
                    'citizen_id' => 30,
                    'description' => 'Pembuatan akta lahir',
                    'user_id' => 1
                ],
                [
                    // id 62
                    'date' => '2021-01-04 09:08:55',
                    'status' => 'processing',
                    'created_at' => now(),
                    'service_category_id' => 2,
                    'citizen_id' => 13,
                    'description' => 'Pembuatan KK baru',
                    'user_id' => 2
                ],
                [
                    // id 63
                    'date' => '2021-01-04 09:08:55',
                    'status' => 'processing',
                    'created_at' => now(),
                    'service_category_id' => 2,
                    'citizen_id' => 12,
                    'description' => 'Pembuatan KK baru',
                    'user_id' => 1
                ],
                [
                    // id 64
                    'date' => '2020-12-12 09:08:55',
                    'status' => 'processing',
                    'created_at' => now(),
                    'service_category_id' => 1,
                    'citizen_id' => 11,
                    'description' => 'Pembuatan E-KTP Baru',
                    'user_id' => 3
                ],
                [
                    // id 65
                    'date' => '2020-12-30 09:08:55',
                    'status' => 'accepted',
                    'created_at' => now(),
                    'service_category_id' => 1,
                    'citizen_id' => 10,
                    'description' => 'Pembuatan E-KTP baru',
                    'user_id' => 2
                ],
                [
                    // id 66
                    'date' => '2020-12-30 09:08:55',
                    'status' => 'accepted',
                    'created_at' => now(),
                    'service_category_id' => 1,
                    'citizen_id' => 9,
                    'description' => 'Pembuatan E-KTP baru',
                    'user_id' => 1
                ],
            ]
        );
    }
}