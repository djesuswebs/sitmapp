<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    //


    protected $fillable = [
        'id_cliente', 'cedula', 'apellido', 'nombre', 'telefono', 'direccion', 'email', 'usuarioId'
    ];

}