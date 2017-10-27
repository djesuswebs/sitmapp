<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManobraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('manobra', function (Blueprint $table) {
            $table->increments('manobraid');
            $table->string('nombre_manobra');
            $table->string('descripcion');
            $table->integer('tipovehiculoId');
            $table->double('costo');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manobra');
    }
}
