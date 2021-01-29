<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Activitylog\Traits\LogsActivity;

class Admin extends Authenticatable
{
    use LogsActivity;
    protected static $logName = 'Admin';
    protected $fillable = ['password'];
    protected static $logAttributes = ['full_name', 'email', 'username', 'is_active', 'level'];
    protected static $logOnlyDirty = true;
    // public function getDescriptionForEvent(string $eventName): string
    // {
    //     return "This model has been {$eventName}";
    // }
    public function villageInfo()
    {
        return $this->hasMany(VillageInfo::class);
    }
}