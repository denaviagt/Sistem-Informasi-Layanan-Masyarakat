<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class CitizenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('citizens')->insert([
            [
                'nik' => '5102456102205325',
                'kk' => '7413655412945297',
                'full_name' => 'Arum Setya, S.Pd',
                'gender' => 'male',
                'religion' => 'Islam',
                'married_status' => 'Kawin',
                'last_education' =>  'Diploma IV/Strata I',
                'blood_type' => 'A',
                'profession' => 'Kepala Desa',
                'pob' => 'Sleman',
                'dob' => '1988-12-20',
                'address' => 'Candi Gebang, Jogotirto, Berbah, Sleman',
                'status' =>  'unverified',
                'dusun_id' => 1,
                'is_deleted' => 0,
                'created_at' => now(),
            ],
            [
                'nik' => '5102456122225',
                'kk' => '12341234213421',
                'full_name' => 'Erwin Dwi Hastomo, SE',
                'gender' => 'male',
                'religion' => 'Islam',
                'married_status' => 'Kawin',
                'last_education' =>  'Diploma IV/Strata I',
                'blood_type' => 'A',
                'profession' => 'Perangkat Desa',
                'pob' => 'Sleman',
                'dob' => '1980-01-20',
                'address' => 'Candi Gebang, Jogotirto, Berbah, Sleman',
                'status' =>  'unverified',
                'dusun_id' => 2,
                'is_deleted' => 0,
                'created_at' => now(),
            ],
            [
                'nik' => '344081305640003',
                'kk' => '1234123421342111',
                'full_name' => 'Vitra Ikayati, SP',
                'gender' => 'female',
                'religion' => 'Islam',
                'married_status' => 'Kawin',
                'last_education' =>  'Diploma IV/Strata I',
                'blood_type' => 'B',
                'profession' => 'Perangkat Desa',
                'pob' => 'Sleman',
                'dob' => '1986-02-12',
                'address' => 'Kotengan Baru, Jogotirto, Berbah, Sleman',
                'status' =>  'unverified',
                'dusun_id' => 4,
                'is_deleted' => 0,
                'created_at' => now(),
            ],
            [
                'nik' => '344084405720002',
                'kk' => '3404080802059634',
                'full_name' => 'Dra. Rini Prabaharsi',
                'gender' => 'female',
                'religion' => 'Islam',
                'married_status' => 'Kawin',
                'last_education' =>  'Diploma IV/Strata I',
                'blood_type' => 'O',
                'profession' => 'Perangkat Desa',
                'pob' => 'Sleman',
                'dob' => '1982-03-02',
                'address' => 'Rejosari, Jogotirto, Berbah, Sleman',
                'status' =>  'unverified',
                'dusun_id' => 3,
                'is_deleted' => 0,
                'created_at' => now(),
            ],
            [
                'nik' => '3404080802059634',
                'kk' => '344085607930001',
                'full_name' => 'Nurkartika Rahmawati, S.Pd',
                'gender' => 'female',
                'religion' => 'Islam',
                'married_status' => 'Kawin',
                'last_education' =>  'Diploma IV/Strata I',
                'blood_type' => 'A',
                'profession' => 'Perangkat Desa',
                'pob' => 'Sleman',
                'dob' => '1978-03-20',
                'address' => 'Candi Gebang, Jogotirto, Berbah, Sleman',
                'status' =>  'unverified',
                'dusun_id' => 5,
                'is_deleted' => 0,
                'created_at' => now(),
            ],
            [
                'nik' => '3404080802059634',
                'kk' => '3401096306920001',
                'full_name' => 'Ali Rozikin, S.Pd.I',
                'gender' => 'male',
                'religion' => 'Islam',
                'married_status' => 'Kawin',
                'last_education' =>  'Diploma IV/Strata I',
                'blood_type' => 'AB',
                'profession' => 'Perangkat Desa',
                'pob' => 'Sleman',
                'dob' => '1981-01-20',
                'address' => 'Karongan, Jogotirto, Berbah, Sleman',
                'status' =>  'unverified',
                'dusun_id' => 6,
                'is_deleted' => 0,
                'created_at' => now(),
            ],
            [
                'nik' => '3404080802059635',
                'kk' => '344080607860002',
                'full_name' => 'Maryadi, Amd',
                'gender' => 'male',
                'religion' => 'Islam',
                'married_status' => 'Kawin',
                'last_education' =>  'Diploma III',
                'blood_type' => 'A',
                'profession' => 'Perangkat Desa',
                'pob' => 'Sleman',
                'dob' => '1975-03-20',
                'address' => 'Kranggan 1, Jogotirto, Berbah, Sleman',
                'status' =>  'unverified',
                'dusun_id' => 7,
                'is_deleted' => 0,
                'created_at' => now(),
            ],
            [
                'nik' => '3404080802059635',
                'kk' => '344081102080001',
                'full_name' => 'Arif Aryono, S.sos.I',
                'gender' => 'male',
                'religion' => 'Islam',
                'married_status' => 'Kawin',
                'last_education' =>  'Strata I',
                'blood_type' => 'AB',
                'profession' => 'Perangkat Desa',
                'pob' => 'Sleman',
                'dob' => '1975-04-25',
                'address' => 'Caren, Jogotirto, Berbah, Sleman',
                'status' =>  'unverified',
                'dusun_id' => 7,
                'is_deleted' => 0,
                'created_at' => now(),
            ],

        ]);

        $faker = Faker::create('id_ID');
        // $gender = $faker->randomElement(['male', 'female']);
        for ($i = 1; $i <= 50; $i++) {
            DB::table('citizens')->insert([
                'nik' => $faker->nik(),
                'kk' => $faker->nik(),
                'full_name' => $faker->name,
                'gender' => $faker->randomElement(['male', 'female']),
                'religion' => $faker->randomElement(['Islam', 'Kristen', 'Katholik', 'Hindu', 'Budha', 'Khong Hucu']),
                'married_status' => $faker->randomElement(['Kawin', 'Belum Kawin', 'Cerai Hidup', 'Cerai Mati']),
                'last_education' => $faker->randomElement(['Tidak/Belum Sekolah', 'Tidak Tamat SD/Sederajat', 'SD Sederajat', 'SLTP/Sederajat', 'SLTA/Sederajat', 'Diploma I/II', 'Akademi/Diploma III/S.Muda', 'Diploma IV/Strata I', 'Strata II', 'Strata III']),
                'blood_type' => $faker->randomElement(['A', 'B', 'O', 'AB']),
                'profession' => $faker->randomElement(['Belum Bekerja', 'Mengurus rumah tangga', 'Pensiunan', 'Pegawai Negeri Sipil', 'TNI', 'Polisi', 'Petani', 'Karyawan Swasta', 'Buruh', 'Guru', 'Dosen', 'Pilot', 'Dokter', 'Wirausaha']),
                'pob' => $faker->city,
                'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'address' => $faker->address,
                'status' =>  'unverified',
                'dusun_id' =>  $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
                'is_deleted' => 0,
                'created_at' => now(),
            ]);
        }
    }
}