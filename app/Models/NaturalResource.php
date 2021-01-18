<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NaturalResource extends Model
{
    protected $fillable = [];

    public function images()
    {
        return $this->hasMany(NaturalResourceImage::class);
    }
}
