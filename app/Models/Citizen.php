<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

// use Illuminate\Database\Eloquent\SoftDeletes;

class Citizen extends Model
{
    // use SoftDeletes;
    
    protected $fillable = [
        'nik', 'kk', 'full_name', 'gender', 'religion', 'married_status', 'last_education', 'blood_type', 'profession',
        'pob', 'dob', 'address', 'status', 'dusun_id'
    ];

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