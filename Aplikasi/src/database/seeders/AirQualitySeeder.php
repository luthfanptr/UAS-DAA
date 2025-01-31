<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirQualitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('air_qualities')->insert([
            ['location' => 'Kupang','categories' => 'Good', 'temperature_celcius' => 24.0, 'humidity_percent' => 85],
            ['location' => 'South Tangerang','categories' => 'Unhealthy', 'temperature_celcius' => 30.0, 'humidity_percent' => 70],
        ]);
    }
}
