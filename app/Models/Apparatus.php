<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Apparatus extends Model
{
    use LogsActivity;
    protected static $logName = 'Aparatur';
    protected static $logAttributes = ['citizen_id', 'position', 'period', 'status'];
    protected static $logOnlyDirty = true;
    // public function getDescriptionForEvent(string $eventName): string
    // {
    //     return "This model has been {$eventName}";
    // }
    public function citizen()
    {
        return $this->belongsTo(Citizen::class, 'citizen_id');
    }
}