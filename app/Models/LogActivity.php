<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogActivity extends Model
{
    protected $table = 'log_activity';
    protected $dates = ['log_time'];
    protected $fillable = ['url', 'ip', 'event', 'description', 'admin_id', 'log_time'];
}