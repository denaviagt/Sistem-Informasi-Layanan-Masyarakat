<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceFile extends Model
{
    public function serviceRequirement()
    {
        return $this->belongsTo(ServiceRequirement::class, 'service_requirement_id');
    }
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}