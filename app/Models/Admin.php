<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'user';

    protected $fillable = ['password'];

    public function villageInfo()
    {
        return $this->hasMany(VillageInfo::class);
    }

    public function apparatus()
    {
        return $this->hasMany(Apparatus::class);
    }

    public function routeNotificationForMail($notification)
    {
        // Return email address only...
        return $this->email_address;

        // Return name and email address...
        // return [$this->email_address => $this->name];
    }
}
