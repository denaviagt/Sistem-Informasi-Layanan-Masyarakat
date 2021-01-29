<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Feedback extends Model
{
    protected $table = 'feedbacks';
    use LogsActivity;
    protected static $logName = 'Aduan';
    protected static $logAttributes = ['is_important', 'is_read'];
    protected static $logOnlyDirty = true;
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function dusun()
    {
        return $this->belongsTo(Dusun::class, 'feedback_dusun_id');
    }
}