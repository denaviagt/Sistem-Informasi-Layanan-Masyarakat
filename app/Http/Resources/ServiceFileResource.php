<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceFileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "service_id" => $this->service_id,
            "service_requirement_id" => $this->service_requirement_id,
            "file_url" => asset('assets/serviceFile/' . $this->file_url),
            "status" => $this->status,
        ];
    }
}
