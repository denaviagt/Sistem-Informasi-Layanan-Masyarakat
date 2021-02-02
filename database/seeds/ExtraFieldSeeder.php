<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExtraFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extra_fields')->insert(
            [
                [
                    'field' => 'type of business',
                    'service_category_id' => 8,
                    'created_at' => now()
                ],
                [
                    'field' => 'business address',
                    'service_category_id' => 8,
                    'created_at' => now()
                ],
                [
                    'field' => 'business age',
                    'service_category_id' => 8,
                    'created_at' => now()
                ],
                [
                    'field' => 'nama_ibu',
                    'service_category_id' => 3,
                    'created_at' => now()
                ],
                [
                    'field' => 'nama_ayah',
                    'service_category_id' => 3,
                    'created_at' => now()
                ],
                [
                    'field' => 'sequence of children',  //anak ke
                    'service_category_id' => 3,
                    'created_at' => now()
                ],
                [
                    'field' => 'day',
                    'service_category_id' => 4,
                    'created_at' => now()
                ],
                [
                    'field' => 'date',
                    'service_category_id' => 4,
                    'created_at' => now()
                ],
                [
                    'field' => 'tpu',
                    'service_category_id' => 4,
                    'created_at' => now()
                ],
                [
                    'field' => 'target moved', //pindah ke
                    'service_category_id' => 5,
                    'created_at' => now()
                ],
                [
                    'field' => 'reason',
                    'service_category_id' => 5,
                    'created_at' => now()
                ],
                [
                    'field' => 'followers',
                    'service_category_id' => 5,
                    'created_at' => now()
                ],
                [
                    'field' => 'came from',
                    'service_category_id' => 6,
                    'created_at' => now()
                ],
                [
                    'field' => 'reason',
                    'service_category_id' => 6,
                    'created_at' => now()
                ],
                [
                    'field' => 'followers',
                    'service_category_id' => 6,
                    'created_at' => now()
                ],

            ]
        );
    }
}