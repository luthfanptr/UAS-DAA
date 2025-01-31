<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensorOverview extends Model
{
    protected $fillable = [
        'sensor_name',
        'status',
        'last_update',
    ];
}
