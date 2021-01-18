<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VillageInfo extends Model
{
    protected $dates = ['date'];
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}