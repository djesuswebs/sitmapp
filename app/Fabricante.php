<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    //

	protected $primaryKey = 'fabricanteId';
    protected $fillable = [
        'denefabricante', 'fabricanteId'];

}