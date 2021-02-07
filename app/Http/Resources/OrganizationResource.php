<?php

namespace App\Http\Resources;

use App\Models\Apparatus;
use Faker\Factory;
use Illuminate\Http\Resources\Json\JsonResource;

class OrganizationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $faker = Factory::create("id_ID");
        return [
            'apparatus' => [
                "id" => $this->id,
                "position" => $this->position,
                "period" => $this->period,
                "status" => $this->status,
                "phone" => $faker->phoneNumber,
                "citizen_id" => $this->citizen_id,
                "admin_id" => $this->admin_id,
            ],
            'citizen' => [
                "id" => $this->citizen->id,
                "nik" => $this->citizen->nik,
                "kk" => $this->citizen->kk,
                "full_name" => $this->citizen->full_name,
                "gender" => $this->citizen->gender,
                "religion" => $this->citizen->religion,
                "married_status" => $this->citizen->married_status,
                "last_education" => $this->citizen->last_education,
                "blood_type" => $this->citizen->blood_type,
                "profession" => $this->citizen->profession,
                "pob" => $this->citizen->pob,
                "dob" => $this->citizen->dob,
                "address" => $this->citizen->address,
                "status" => $this->citizen->status,
                "dusun_id" => $this->citizen->dusun_id,
            ],
            'admin' => [
                "id" => $this->admin->id,
                "full_name" => $this->admin->full_name,
                "gender" => $this->admin->gender,
                "email" => $this->admin->email,
                "username" => $this->admin->username,
                "is_active" => boolval($this->admin->is_active),
                "level" => $this->admin->level,
            ],
        ];
    }

    /**
     * @param int $length
     * @return string
     */
    private function generateRandomNumber(int $length = 1): string
    {
        $number = "";
        for ($index = 0; $index <= $length; $index++) {
            $number .= rand(0, 9);
        }
        return $number;
    }
}
