<?php

namespace App\Http\Resources;

use Carbon\Carbon;
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
            "date" => Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)
                ->format('D, d M Y'),
            "status" => $this->status,
        ];
    }
}
