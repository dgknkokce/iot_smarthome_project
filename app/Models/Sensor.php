<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;
    public function device()
    {
    	return $this->belongsTo('App\Models\Device');
    }
    public function sensorproperties()
    {
    	return $this->hasMany('App\Models\Sensorproperty');
    }
}
