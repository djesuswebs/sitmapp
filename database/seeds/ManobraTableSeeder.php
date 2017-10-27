<?php

use Illuminate\Database\Seeder;

class ManobraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
 DB::table('manobra')->insert([
        ['manobraId' => '1','nombre_manobra' => 'Revision de Frenos Traseros','descripcion' => 'Comprende 
* Revision de Campanas [Evitar Escalas]
* Revision de Medidas de Campana. 
* Revision de Tolerancia de Rectificacion de Campanas.
* Revision de Cilindros [Fugas]
* Revision del Estado de las lineas de Frenos.
* Revision de las Mangueras de Frenos
* Revision de la Guaya de Freno de Mano.
* Revision del Estado de los Resortes [En General] 
* Revision del Tensor de Frenos.
* Revision del Estado Actual de las Bandas Traseras.
* Limpieza de Bandas Traseras
* Tension de Bandas Traseras
* Revision del Nivel de Liquido de Freno Actual.','tipovehiculoId' => '3','costo' => '30.000'],
   ['manobraId' => '2','nombre_manobra' => 'Cambio de Frenos Traseros','descripcion' => 'Comprende 
* Revision de Campanas [Evitar Escalas]
* Revision de Medidas de Campana. 
* Revision de Tolerancia de Rectificacion de Campanas.
* Revision de Cilindros [Fugas]
* Revision del Estado de las lineas de Frenos.
* Revision de las Mangueras de Frenos
* Revision de la Guaya de Freno de Mano.
* Revision del Estado de los Resortes [En General] 
* Revision del Tensor de Frenos.
* Revision del Estado Actual de las Bandas Traseras.
* Cambio de Bandas Traseras
* Tension de Bandas Traseras
* Revision del Nivel de Liquido de Freno Actual.','tipovehiculoId' => '3','costo' => '40.000'],
   ['manobraId' => '3','nombre_manobra' => 'Revision de Frenos Traseros','descripcion' => 'Comprende 
* Revision de Campanas [Evitar Escalas]
* Revision de Medidas de Campana. 
* Revision de Tolerancia de Rectificacion de Campanas.
* Revision de Cilindros [Fugas]
* Revision del Estado de las lineas de Frenos.
* Revision de las Mangueras de Frenos
* Revision de la Guaya de Freno de Mano.
* Revision del Estado de los Resortes [En General] 
* Revision del Tensor de Frenos.
* Revision del Estado Actual de las Bandas Traseras.
* Limpieza de Bandas Traseras
* Tension de Bandas Traseras
* Revision del Nivel de Liquido de Freno Actual.','tipovehiculoId' => '4','costo' => '30.000'],
   ['manobraId' => '4','nombre_manobra' => 'Cambio de Frenos Traseros','descripcion' => 'Comprende 
* Revision de Campanas [Evitar Escalas]
* Revision de Medidas de Campana. 
* Revision de Tolerancia de Rectificacion de Campanas.
* Revision de Cilindros [Fugas]
* Revision del Estado de las lineas de Frenos.
* Revision de las Mangueras de Frenos
* Revision de la Guaya de Freno de Mano.
* Revision del Estado de los Resortes [En General] 
* Revision del Tensor de Frenos.
* Revision del Estado Actual de las Bandas Traseras.
* Cambio de Bandas Traseras
* Tension de Bandas Traseras
* Revision del Nivel de Liquido de Freno Actual.','tipovehiculoId' => '4','costo' => '40.000'],
   ['manobraId' => '5','nombre_manobra' => 'Cambio de Frenos Traseros','descripcion' => 'Comprende 
* Cambio de Bandas Traseras
* Revision de Bandas Traseras
* Tension de bandas Traseras','tipovehiculoId' => '5','costo' => '40.000'],
   ['manobraId' => '6','nombre_manobra' => 'Revision de Frenos Traseros','descripcion' => 'Comprende 
* Revision de Campanas [Evitar Escalas]
* Revision de Medidas de Campana. 
* Revision de Tolerancia de Rectificacion de Campanas.
* Revision de Cilindros [Fugas]
* Revision del Estado de las lineas de Frenos.
* Revision de las Mangueras de Frenos
* Revision de la Guaya de Freno de Mano.
* Revision del Estado de los Resortes [En General] 
* Revision del Tensor de Frenos.
* Revision del Estado Actual de las Bandas Traseras.
* Limpieza de Bandas Traseras
* Tension de Bandas Traseras
* Revision del Nivel de Liquido de Freno Actual.','tipovehiculoId' => '5','costo' => '30.000'],
   ['manobraId' => '7','nombre_manobra' => 'Cambio de Suspencion Delantera','descripcion' => 'Comprende.
Cambio de Amortiguadores Delanteros
Cambio de Soporte de Amortiguadores Delanteros ','tipovehiculoId' => '6','costo' => '80.000'],
   ['manobraId' => '8','nombre_manobra' => 'Cambio de Rodamiento Delantero C/U','descripcion' => 'Comprende 
*Desmontaje del tren delantero Izquierdo / Derecho
*Cambio en Prensa de Rodamineto Afectado
*Armado del tren delantero Izquierdo / Derecho
','tipovehiculoId' => '6','costo' => '40.000'],
   ['manobraId' => '9','nombre_manobra' => 'Cambio Brazo Axial de Direccion C/U','descripcion' => 'Comprende
*Bloqueo del Vehiculo
*Desmontaje de llanta
*Desconectar el Terminal de Direccion del Porta-Mangueta
*Conteo de Giros Tuerca terminal de Direccion
*Deconectar El Guardapolvo.
*Desconectar el Braso Axial de Direccion 
Proceder A
rmar en el mismo Orden ','tipovehiculoId' => '6','costo' => '30.000'],
   ['manobraId' => '10','nombre_manobra' => 'Cambio de Kit de Embrague ','descripcion' => '','tipovehiculoId' => '3','costo' => '180.000'],
   ['manobraId' => '11','nombre_manobra' => 'Cambio de Arandela de Sincronismo ','descripcion' => '','tipovehiculoId' => '3','costo' => '300.000']
 		]);
    }
}