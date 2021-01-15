<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    public function villageInfo()
    {
        return $this->hasMany(VillageInfo::class);
    }
}