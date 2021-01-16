<?php

namespace App\Models;

use FeedbackSeeder;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Dusun extends Model
{
    // use SoftDeletes;
    public function citizen()
    {
        return $this->hasMany(Citizen::class);
    }
    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
}