<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SensorpropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sensorproperties')->insert([
            'id' => 1,
        	'sensor_id' => 1,
        	'property_id' => 1,
        	'property_value' => '44',
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sensorproperties')->insert([
            'id' => 2,
            'sensor_id' => 2,
            'property_id' => 2,
            'property_value' => '50',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sensorproperties')->insert([
            'id' => 3,
            'sensor_id' => 2,
            'property_id' => 3,
            'property_value' => '55',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sensorproperties')->insert([
            'id' => 4,
            'sensor_id' => 2,
            'property_id' => 4,
            'property_value' => '56',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
