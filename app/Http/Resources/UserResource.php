<?php

namespace App\Http\Resources;

use Carbon\Carbon;
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
            "register_at" => Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)
                ->format('D, d M Y'),
            "updated_at" => Carbon::createFromFormat('Y-m-d H:i:s', $this->updated_at ?? $this->created_at)
                ->format('D, d M Y'),
        ];
    }
}
