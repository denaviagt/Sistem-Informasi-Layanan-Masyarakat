<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apparatus extends Model
{
    public function citizen()
    {
        return $this->belongsTo(Citizen::class, 'citizen_id');
    }
}