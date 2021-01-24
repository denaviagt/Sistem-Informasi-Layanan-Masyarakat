<?php

namespace App\Imports;

use App\Models\Citizen;
use Maatwebsite\Excel\Concerns\ToModel;

class CitizenImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Citizen([
            'nik' => $row[1],
            'kk' => $row[2],
            'full_name' => $row[3],
            'gender' => $row[4],
            'religion' => $row[5],
            'married_status' => $row[6],
            'last_education' => $row[7],
            'blood_type' => $row[8],
            'profession' => $row[9],
            'pob' => $row[10],
            'dob' => $row[11],
            'address' => $row[12],
            'status' => $row[13],
            'dusun_id' => $row[14],
        ]);
    }
}