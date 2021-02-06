<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VillageInfoResource extends JsonResource
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
            "title" => $this->title,
            "content" => $this->content,
            "date" => $this->date,
            "thumbnail" => (isset($this->thumbnail))
                ? asset('uploads/images/village_info/' . $this->thumbnail)
                : null,
            "status" => $this->status,
            "admin_id" => $this->admin_id,
        ];
    }
}
