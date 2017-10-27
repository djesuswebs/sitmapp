<?php

use Illuminate\Database\Seeder;

class AlmacenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

         DB::table('almacen')->insert([
   ['id_almacen' => '1','denalmacen' => 'ESTANTE NÂ°1','ubicacionfis' => 'Almacen'],
  ['id_almacen' => '2','denalmacen' => 'Estante NÂ°2','ubicacionfis' => 'Almacen'],
  ['id_almacen' => '3','denalmacen' => 'Estante NÂ°3','ubicacionfis' => 'Almacen'],
  ['id_almacen' => '4','denalmacen' => 'Estante NÂ°4','ubicacionfis' => 'Almacen'],
  ['id_almacen' => '5','denalmacen' => 'Estante NÂ°5','ubicacionfis' => 'Amacen'],
  ['id_almacen' => '7','denalmacen' => ' Estante NÂ°10','ubicacionfis' => 'Almacen'],
  ['id_almacen' => '8','denalmacen' => 'Estante NÂ°6','ubicacionfis' => 'Almacen'],
  ['id_almacen' => '9','denalmacen' => 'Estante NÂ°7','ubicacionfis' => 'Almacen'],
  ['id_almacen' => '10','denalmacen' => 'Estante NÂ°11','ubicacionfis' => 'Almacen'],
  ['id_almacen' => '11','denalmacen' => 'ESTANTE NÂ°9','ubicacionfis' => 'Almacen']
        ]);
    }
}


  