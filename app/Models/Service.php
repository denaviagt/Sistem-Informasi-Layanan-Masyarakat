<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;
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