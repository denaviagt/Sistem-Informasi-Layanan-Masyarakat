<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExtraValue extends Model
{
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
    public function extraField()
    {
        return $this->belongsTo(ExtraField::class, 'extra_field_id');
    }
}