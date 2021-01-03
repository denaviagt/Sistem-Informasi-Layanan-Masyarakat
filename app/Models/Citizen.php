<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    public function dusun()
    {
        return $this->belongsTo(Dusun::class,'dusun_id');
    }
}
