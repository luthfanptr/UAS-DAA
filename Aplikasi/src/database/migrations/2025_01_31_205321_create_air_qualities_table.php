<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('air_qualities', function (Blueprint $table) {
            $table->id();
            $table->string("location");
            $table->string("categories");
            $table->float("temperature_celcius");
            $table->float("humidity_percent");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('air_qualities');
    }
};
