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
    public function requirement()
    {
        return $this->hasMany(ServiceRequirement::class);
    }
    public function procedure()
    {
        return $this->hasMany(ServiceProcedure::class);
    }
}