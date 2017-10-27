<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
	 protected $primaryKey = 'proveedorId';
     protected $fillable = [
        'nitproveedor', 'nombre_proveedor', 'direccion', 'tel_movil', 'tel_local', 'servicios', 'rif_proveedor', 'cuebanc'
    ];

}
