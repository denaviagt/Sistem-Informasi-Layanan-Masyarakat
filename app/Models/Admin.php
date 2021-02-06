<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Activitylog\Traits\LogsActivity;

class Admin extends Authenticatable
{

    public function villageInfo()
    {
        return $this->hasMany(VillageInfo::class);
    }

    public function apparatus()
    {
        return $this->hasMany(Apparatus::class);
    }
}
