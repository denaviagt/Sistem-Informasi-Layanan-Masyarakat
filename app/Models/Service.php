<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class Service extends Model
{
    use SoftDeletes;

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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function service_category()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }
    public function serviceFile()
    {
        return $this->hasMany(ServiceFile::class);
    }
    public function extraValue()
    {
        return $this->hasMany(ExtraValue::class);
    }
}
