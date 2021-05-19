<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Device;
use App\Models\Sensorproperty;
use App\Models\User;
use Illuminate\Http\Request;

class DevicerequestController extends Controller
{
    public function getsound()
    {


    	$soundlevel = Sensorproperty::where('property_id', 1)->value('property_value');
    	return response()->json([
    		'sound level' => $soundlevel
    	]);
    	dd($soundlevel);
    }
}
