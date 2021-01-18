<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function dusun()
    {
        return $this->belongsTo(Dusun::class, 'feedback_dusun_id');
    }
}