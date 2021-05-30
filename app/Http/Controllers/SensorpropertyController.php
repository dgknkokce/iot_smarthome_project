<?php

namespace App\Http\Controllers;

use App\Models\Sensorproperty;
use Illuminate\Http\Request;

class SensorpropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sensorproperty  $sensorproperty
     * @return \Illuminate\Http\Response
     */
    public function show(Sensorproperty $sensorproperty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sensorproperty  $sensorproperty
     * @return \Illuminate\Http\Response
     */
    public function edit(Sensorproperty $sensorproperty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sensorproperty = Sensorproperty::find($id);
        $sensorproperty->id = $sensorproperty->id;
        $sensorproperty->sensor_id = $sensorproperty->sensor_id;
        $sensorproperty->property_id = $sensorproperty->property_id;
        $sensorproperty->property_value = request('property_value');
        $sensorproperty->save();

        return back();
        //return redirect()->route('sensors.show', $sensorproperty->sensor_id)->with('success', 'Sensor Updateed Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sensorproperty  $sensorproperty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sensorproperty $sensorproperty)
    {
        //
    }
}
