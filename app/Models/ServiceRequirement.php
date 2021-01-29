<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class ServiceRequirement extends Model
{
    use LogsActivity;
    protected static $logName = 'service_requirement';
    protected static $logAttributes = ['terms', 'description', 'status', 'service_category_id'];
    protected static $logOnlyDirty = true;
    public function serviceFile()
    {
        return $this->hasOne(ServiceFile::class);
    }
}