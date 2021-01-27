<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceFile extends Model
{
    use SoftDeletes;
    public function serviceRequirement()
    {
        return $this->belongsTo(ServiceRequirement::class, 'service_requirement_id');
    }
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}