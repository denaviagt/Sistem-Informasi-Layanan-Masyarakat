<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class NaturalResourceImage extends Model
{

    use LogsActivity;
    protected static $logName = 'natural_resource_image';
    protected static $logAttributes = ['image', 'natural_resource_id'];
    protected static $logOnlyDirty = true;
    public function naturalResouce()
    {
        return $this->belongsTo(NaturalResource::class);
    }
}