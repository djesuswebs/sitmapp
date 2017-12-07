<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipovehiculo extends Model
{
    //

	protected $primaryKey = 'idtipovehiculo';
    protected $fillable = [
        'idtipovehiculo','marcavehiculo', 'modelovehiculo', 'anovehiculo', 'cilindraje', 'anovehdos'];

}