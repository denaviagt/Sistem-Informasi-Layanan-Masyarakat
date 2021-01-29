<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class NaturalResource extends Model
{
    use LogsActivity;
    protected $fillable = [];
    protected static $logName = 'Potensi Desa';
    protected static $logAttributes = ['title', 'description', 'status'];
    protected static $logOnlyDirty = true;

    public function images()
    {
        return $this->hasMany(NaturalResourceImage::class);
    }
}