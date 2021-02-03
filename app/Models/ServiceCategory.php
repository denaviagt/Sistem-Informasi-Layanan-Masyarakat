<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class ServiceCategory extends Model
{
    use LogsActivity;
    protected static $logName = 'service_category';
    protected static $logAttributes = ['category', 'description', 'status'];
    protected static $logOnlyDirty = true;

    public function service()
    {
        return $this->hasMany(ServiceCategory::class);
    }
    public function extraField()
    {
        return $this->hasMany(ExtraField::class);
    }
}