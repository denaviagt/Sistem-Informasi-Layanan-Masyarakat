<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class ServiceRequirement extends Model
{

    public function serviceFile()
    {
        return $this->hasOne(ServiceFile::class);
    }
}