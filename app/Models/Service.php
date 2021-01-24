<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class Service extends Model
{
    use SoftDeletes;
    use LogsActivity;
    protected static $logName = 'Layanan';
    protected static $logAttributes = ['date', 'status', 'service_category_id', 'citizen_id'];
    protected static $logOnlyDirty = true;
    // public function getDescriptionForEvent(string $eventName): string
    // {
    //     return "This model has been {$eventName}";
    // }
    /**
     * Override parent boot and Call deleting event
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($services) {
            foreach ($services->serviceFile()->get() as $servicefile) {
                $servicefile->delete();
            }
        });
    }

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