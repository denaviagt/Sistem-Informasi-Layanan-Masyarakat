<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
    public function citizen()
    {
        return $this->belongsTo(Citizen::class);
    }
}