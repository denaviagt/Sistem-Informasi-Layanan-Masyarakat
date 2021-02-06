<?php

namespace App\Http\Resources;

use App\Models\Apparatus;
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
        return [
            'apparatus' => [
                "id" => $this->id,
                "position" => $this->position,
                "period" => $this->period,
                "status" => $this->status,
                "citizen_id" => $this->citizen_id,
                "admin_id" => $this->admin_id
            ],
            'citizen' => $this->citizen,
            'admin' => $this->admin,
        ];
    }
}
