<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NaturalResourceImage extends Model
{
    public function naturalResouce()
    {
        return $this->belongsTo(NaturalResource::class);
    }
}
