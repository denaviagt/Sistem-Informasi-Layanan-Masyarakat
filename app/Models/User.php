<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as AuthenticableModel;
use Illuminate\Notifications\Notifiable;

class User extends AuthenticableModel
{
    use Notifiable;

    protected $guard = 'user';

    protected $fillable = ['username', 'email', 'citizen_id', 'password', 'phone'];

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