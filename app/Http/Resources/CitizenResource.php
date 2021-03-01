<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class CitizenResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "nik"=> $this->nik,
            "kk"=> $this->kk,
            "full_name"=> $this->full_name,
            "gender"=> $this->gender,
            "religion"=> $this->religion,
            "married_status"=> $this->married_status,
            "last_education"=> $this->last_education,
            "blood_type"=> $this->blood_type,
            "profession"=> $this->profession,
            "place_of_birth"=> $this->pob,
            "date_of_birth"=> $this->dob,
            "address"=> $this->address,
            "status"=> $this->status,
            "register_at" => Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)
                ->format('D, d M Y'),
            "updated_at" => Carbon::createFromFormat('Y-m-d H:i:s', $this->updated_at ?? $this->created_at)
                ->format('D, d M Y'),
        ];
    }
}
