<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Regulation extends Model
{
    use LogsActivity;
    protected static $logName = 'regulation';
    protected static $logAttributes = ['title', 'file'];
    protected static $logOnlyDirty = true;
}