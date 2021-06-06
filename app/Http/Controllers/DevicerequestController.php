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
    }
    public function getRed()
    {

        $r_level = Sensorproperty::where('property_id', 2)->value('property_value');
        return response()->json([
            'r_level' => $r_level
        ]);
    }
    public function getGreen()
    {

        $g_level = Sensorproperty::where('property_id', 3)->value('property_value');
        return response()->json([
            'g_level' => $g_level
        ]);
        dd($g_level);
    }
    public function getBlue()
    {

        $b_level = Sensorproperty::where('property_id', 4)->value('property_value');
        return response()->json([
            'b_level' => $b_level
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function updateSound(Request $request)
    {

        $sensorproperty = Sensorproperty::where('id', 1)->first();
        $sensorproperty->property_value = $request->property_value;
        $sensorproperty->save();
        //return response()->json($sensorproperty);
    }
    public function updateRed(Request $request)
    {

        $sensorproperty = Sensorproperty::where('id', 2)->first();
        $sensorproperty->property_value = $request->property_value;
        $sensorproperty->save();
        //return response()->json($sensorproperty);
    }
    public function updateGreen(Request $request)
    {

        $sensorproperty = Sensorproperty::where('id', 3)->first();
        $sensorproperty->property_value = $request->property_value;
        $sensorproperty->save();
        //return response()->json($sensorproperty);
    }
    public function updateBlue(Request $request)
    {

        $sensorproperty = Sensorproperty::where('id', 4)->first();
        $sensorproperty->property_value = $request->property_value;
        $sensorproperty->save();
        //return response()->json($sensorproperty);
    }
}
