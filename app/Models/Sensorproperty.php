<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensorproperty extends Model
{
    use HasFactory;
    public function sensor()
    {
    	return $this->belongsTo('App\Models\Sensor');
    }
    public function property()
    {
    	return $this->belongsTo('App\Models\Property');
    }
}
