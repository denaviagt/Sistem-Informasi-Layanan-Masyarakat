<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class VillageInfo extends Model
{
    protected $dates = ['date'];
    use LogsActivity;
    protected static $logName = 'village_info';
    protected static $logAttributes = ['title', 'content', 'date', 'thumbnail', 'status'];
    protected static $logOnlyDirty = true;
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}