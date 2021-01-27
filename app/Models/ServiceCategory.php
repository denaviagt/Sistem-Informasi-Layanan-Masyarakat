<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    public function service()
    {
        return $this->hasMany(ServiceCategory::class);
    }
}