<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Village extends Model
{
    use LogsActivity;
    protected static $logName = 'village';
    protected static $logAttributes = ['village_name', 'lurah'];
    protected static $logOnlyDirty = true;
}