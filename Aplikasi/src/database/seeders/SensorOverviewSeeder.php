<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SensorOverviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sensor_overviews')->insert ([
            ['sensor_name' => 'MQ-135', 'status' => 'online', 'last_update' => now()->toDateTimeString()],
            ['sensor_name' => 'MQ-135', 'status' => 'online', 'last_update' => now()->toDateTimeString()],
        ]);
    }
}
