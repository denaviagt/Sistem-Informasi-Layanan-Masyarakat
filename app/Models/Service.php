<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function citizen()
    {
        return $this->belongsTo(Citizen::class, 'citizen_id');
    }
    public function service_category()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }
    public function serviceFile()
    {
        return $this->hasMany(ServiceFile::class);
    }
}