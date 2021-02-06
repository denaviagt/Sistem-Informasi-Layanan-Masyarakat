<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VillageResource_Resource extends JsonResource
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
            "description" => $this->description,
            "thumbnail" => (isset($this->images) || !empty($this->images))
                ? asset('uploads/images/natural_resource/' . $this->images[rand(0, count($this->images) - 1)]->image)
                : null,
            "date" => $this->date,
            "status" => $this->status,
        ];
    }
}
