<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id_articulo');
            $table->string('cod_articulo');
            $table->string('denominacion');
            $table->string('descripcion');
            $table->integer('tipo_articulo');
            $table->integer('fabricante_id');
            $table->string('presentacion');
            $table->string('img_articulo');
            $table->string('modelo');
            $table->integer('exiactart');
            $table->integer('minart');
            $table->integer('maxart');
            $table->string('foto');
            $table->double('costounitario');
            $table->integer('incpora');
            $table->integer('incporb');
            $table->integer('incporc');
            $table->double('precioventaa');
            $table->double('precioventab');
            $table->double('precioventac');
            $table->integer('alamcenId');
            $table->integer('fila');
            $table->integer('columna');
            $table->integer('puesto');
            $table->string('unidadmedia');
            $table->string('diainterno');
            $table->string('diaexterno');
            $table->string('alto');
            $table->string('largo');
            $table->string('ancho');
            $table->integer('tipovehiculoId');
            $table->integer('proveedorId');
            $table->integer('usuarioId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
