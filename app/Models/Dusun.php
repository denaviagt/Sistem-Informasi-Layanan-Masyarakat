<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dusun extends Model
{
    public function citizen()
    {
        return $this->hasMany(Citizen::class);
    }
}
