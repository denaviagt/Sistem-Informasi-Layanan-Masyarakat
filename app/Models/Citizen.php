<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Citizen extends Model
{
    // use SoftDeletes;
    public function dusun()
    {
        return $this->belongsTo(Dusun::class, 'dusun_id');
    }
    public function apparatus()
    {
        return $this->hasOne(Apparatus::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function service()
    {
        return $this->hasMany(Service::class);
    }
}