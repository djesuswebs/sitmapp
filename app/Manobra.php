<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manobra extends Model
{
    //

     protected $fillable = [
        'manobraid', 'nombre_manobra', 'descripcion', 'tipovehiculoId', 'costo'
    ];

}
