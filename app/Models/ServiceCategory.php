<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class ServiceCategory extends Model
{
    public function service()
    {
        return $this->hasMany(ServiceCategory::class);
    }
    public function extraField()
    {
        return $this->hasMany(ExtraField::class);
    }
}