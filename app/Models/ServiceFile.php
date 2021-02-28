<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class ServiceFile extends Model
{
    use SoftDeletes;

    protected $fillable = ['file_url', 'status', 'service_id', 'service_requirement_id'];

    public function serviceRequirement()
    {
        return $this->belongsTo(ServiceRequirement::class, 'service_requirement_id');
    }
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
