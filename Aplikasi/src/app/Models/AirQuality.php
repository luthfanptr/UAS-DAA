<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirQuality extends Model
{
    use HasFactory;

    protected $fillable = [
        'location',
        'categories',
        'temperature_celcius',
        'humidity_percent',
    ];
}
