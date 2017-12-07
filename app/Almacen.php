<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    //

	protected $primaryKey = 'id_almacen';
    protected $fillable = [
        'id_almacen', 'denalmacen', 'ubicacionfis'
    ];

}