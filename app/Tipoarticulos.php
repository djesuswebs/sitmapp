<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipoarticulos extends Model
{
    //

	protected $primaryKey = 'tipo_articulo_id';
    protected $fillable = [
        'dentipart'
    ];

}