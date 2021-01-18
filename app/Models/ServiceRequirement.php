<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceRequirement extends Model
{
    public function serviceFile()
    {
        return $this->hasOne(ServiceFile::class);
    }
}