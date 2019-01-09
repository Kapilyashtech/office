<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('make', 255);
            $table->string('model', 255);
            $table->string('type', 255);
            $table->string('year', 255);
            $table->string('engine_type', 255);
            $table->string('horse_power', 255);
            $table->string('color', 255);
            $table->string('vin', 255);
            $table->string('license_plate', 255);
            $table->integer('mileage');
            $table->tinyInteger('in_service');
            $table->integer('user_id');
            $table->nullableTimestamps();
            $table->softDeletes();
            $table->integer('int_mileage')->nullable();

            

            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}