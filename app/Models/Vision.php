<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Vision extends Model
{
    use LogsActivity;
    protected static $logName = 'vision';
    protected static $logAttributes = ['vision'];
    protected static $logOnlyDirty = true;
}