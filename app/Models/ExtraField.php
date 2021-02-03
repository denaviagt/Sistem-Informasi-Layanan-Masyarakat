<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExtraField extends Model
{
    public function extraValue()
    {
        return $this->hasMany(ExtraValue::class);
    }

    public function ServiceCategory()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }
}