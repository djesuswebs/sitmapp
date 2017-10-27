<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('proveedor', function (Blueprint $table) {
            $table->increments('proveedorId');
            $table->string('nit_proveedor');
            $table->string('rif_proveedor');
            $table->string('nombre_proveedor');
            $table->string('direccion');
            $table->string('tel_movil');
            $table->string('tel_local');
            $table->string('email')->unique();
            $table->string('paginaweb');
            $table->string('nombre_repres');
            $table->string('ape_repres');
            $table->string('ced_repres');
            $table->string('telmovrep');
            $table->string('tipocuebanc');
            $table->string('cuebanc');
            $table->string('banco');
            $table->string('servicios');
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
        Schema::dropIfExists('proveedor');
    }
}
