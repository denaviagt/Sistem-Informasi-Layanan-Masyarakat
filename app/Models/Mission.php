<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Mission extends Model
{
    use LogsActivity;
    protected static $logName = 'Misi';
    protected static $logAttributes = ['mission'];
    protected static $logOnlyDirty = true;
}