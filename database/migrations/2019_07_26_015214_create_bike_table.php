<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**
 * Migration table for bike
 * @author Henry Rojas Douglas
 * @version 1.0.0
 * @license MIT
 * @package mcappointments
 */
class CreateBikeTable extends Migration
{
    /**
     * Run the migrations.
     * @since 1.0.0
     * @return void
     */
    public function up()
    {
        Schema::create('bike', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('make');
            $table->string('model');
            $table->string('year');
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
        Schema::dropIfExists('bike');
    }
}
