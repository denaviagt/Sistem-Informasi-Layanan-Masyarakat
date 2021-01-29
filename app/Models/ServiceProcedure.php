<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class ServiceProcedure extends Model
{
    use LogsActivity;
    protected static $logName = 'service_procedure';
    protected static $logAttributes = ['procedure', 'description', 'status', 'service_category_id'];
    protected static $logOnlyDirty = true;
}