<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "citizen_id" => $this->citizen_id,
            "email" => $this->email,
            "username" => $this->username,
            "phone" => $this->phone,
            "registration_date" => $this->created_at,
        ];
    }
}
