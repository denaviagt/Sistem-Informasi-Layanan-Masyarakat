<?php

namespace App\Models;

use FeedbackSeeder;
use Illuminate\Database\Eloquent\Model;

class Dusun extends Model
{
    public function citizen()
    {
        return $this->hasMany(Citizen::class);
    }
    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
}