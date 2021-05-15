<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class SensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sensors')->insert([
            'id' => 1,
        	'device_id' => 1,
        	'name' => 'speaker',
        	'status' => false,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sensors')->insert([
            'id' => 2,
            'device_id' => 1,
            'name' => 'light',
            'status' => false,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
