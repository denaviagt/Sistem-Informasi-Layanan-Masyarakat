<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Feedback extends Model
{
    protected $table = 'feedbacks';

    protected $fillable = ['is_important', 'is_anonim', 'is_read', 'feedback', 'location', 'date', 'user_id', 'feedback_dusun_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function dusun()
    {
        return $this->belongsTo(Dusun::class, 'feedback_dusun_id');
    }
}
