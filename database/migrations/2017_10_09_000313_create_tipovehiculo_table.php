<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipovehiculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('tipovehiculo', function (Blueprint $table) {
            $table->increments('idtipovehiculo');
            $table->string('marcavehiculo');
            $table->string('modelovehiculo');
            $table->string('anovehiculo');
            $table->string('cilindraje');
            $table->string('anovehdos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipovehiculo');
    }
}
