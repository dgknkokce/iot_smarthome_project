<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
    public function sensors()
    {
    	return $this->hasMany('App\Models\Sensor');
    }
}
