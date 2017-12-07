<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    //

	protected $primaryKey = 'id_articulo';
    protected $fillable = [
        'cod_articulo', 'denominacion', 'presentacion', 'modelo', 'dentipart', 'almacenId', 'tipo_articulo_id', 'exiactart', 'exiinitart', 'minart', 'maxart', 'direccion', 'img_articulo', 'precioventaa',  'precioventab', 'precioventab', 'incporc', 'incpora', 'incporb', 'diainterno', 'diaexterno','alto', 'largo'
    ];

}
