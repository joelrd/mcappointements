<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**
 * Migration table for appointments
 * @author Henry Rojas Douglas
 * @version 1.0.0
 * @license MIT
 * @package mcappointments
 */
class CreateAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     * @since 1.0.0
     * @return void
     */
    public function up()
    {
        Schema::create('appointment', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('client');
            $table->string('phone');
            $table->unsignedBigInteger('bike_id');
            $table->dateTimeTz('appointment_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @since 1.0.0
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment');
    }
}
