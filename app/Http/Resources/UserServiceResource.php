<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserServiceResource extends JsonResource
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
            'user' => $this->user,
            'citizen' => $this->citizen,
            'service' => [
                "id" => $this->id,
                "user_id" => $this->user_id,
                "citizen_id" => $this->citizen_id,
                "service_category_id" => $this->service_category_id,
                "description" => $this->description,
                "status" => $this->status,
                "date" => $this->date,
            ],
            'service_category' => $this->service_category,
        ];
    }
}
