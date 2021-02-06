<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as AuthenticableModel;

class User extends AuthenticableModel
{
    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
    public function citizen()
    {
        return $this->belongsTo(Citizen::class);
    }

    public function service()
    {
        return $this->hasMany(Service::class);
    }
}
