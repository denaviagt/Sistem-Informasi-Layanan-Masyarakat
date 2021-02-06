<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Apparatus extends Model
{
    public function citizen()
    {
        return $this->belongsTo(Citizen::class, 'citizen_id');
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}
