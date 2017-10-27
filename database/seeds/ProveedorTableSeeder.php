<?php

use Illuminate\Database\Seeder;

class ProveedorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::table('proveedor')->insert([
        ['proveedorId' => '1','nitproveedor' => '0000001','rif_proveedor' => '','nombre_proveedor' => 'Mundial del Tornillo','direccion' => 'Medellin','tel_movil' => '000-0000000','tel_local' => '034-2621834','correo' => '','paginaweb' => '','nombre_repres' => 'Ramiro Cardona','ape_repres' => '','ced_repres' => '','telmovrep' => '','tipocuebanc' => '','cuebanc' => '','banco' => '','servicios' => 'Tornilleria','usuarioId' => '1','created_at' => '2017-02-24 15:55:06','updated_at' => '2017-03-05 03:43:16'],
   ['proveedorId' => '2','nitproveedor' => '000000','rif_proveedor' => '000000','nombre_proveedor' => 'Reco','direccion' => '','tel_movil' => '','tel_local' => '','correo' => '','paginaweb' => '','nombre_repres' => '','ape_repres' => '','ced_repres' => '','telmovrep' => '','tipocuebanc' => '','cuebanc' => '','banco' => '','servicios' => '','usuarioId' => '1','created_at' => '2017-04-07 02:18:12','updated_at' => '2017-04-07 02:18:12'],
   ['proveedorId' => '3','nitproveedor' => '00000','rif_proveedor' => '00000','nombre_proveedor' => 'Brace Plus','direccion' => '','tel_movil' => '','tel_local' => '','correo' => '','paginaweb' => '','nombre_repres' => '','ape_repres' => '','ced_repres' => '','telmovrep' => '','tipocuebanc' => '','cuebanc' => '','banco' => '','servicios' => '','usuarioId' => '1','created_at' => '2017-04-08 01:21:43','updated_at' => '2017-04-08 01:21:43'],
   ['proveedorId' => '5','nitproveedor' => '99999','rif_proveedor' => '99999','nombre_proveedor' => 'Desconiocido','direccion' => '','tel_movil' => '','tel_local' => '','correo' => '','paginaweb' => '','nombre_repres' => '','ape_repres' => '','ced_repres' => '','telmovrep' => '','tipocuebanc' => '','cuebanc' => '','banco' => '','servicios' => '','usuarioId' => '1','created_at' => '2017-04-08 01:23:35','updated_at' => '2017-04-08 01:23:35'],
   ['proveedorId' => '7','nitproveedor' => '00000-1','rif_proveedor' => '00000-1','nombre_proveedor' => 'IGO S.A','direccion' => 'CARREARA 52 #38 - 34','tel_movil' => '','tel_local' => '[034] 444 24 30 Ext 6','correo' => 'compras@igo.com.co','paginaweb' => 'www.igo.com.co','nombre_repres' => 'Edy Maria Garcia Castrillon','ape_repres' => '','ced_repres' => '','telmovrep' => '','tipocuebanc' => '','cuebanc' => '','banco' => '','servicios' => 'RETENEDORES VDC','usuarioId' => '1','created_at' => '2017-04-28 17:05:37','updated_at' => '2017-04-28 17:05:37'],
   ['proveedorId' => '8','nitproveedor' => '900460756-7','rif_proveedor' => '900460756-7','nombre_proveedor' => 'NP REPUESTOS S.A.S','direccion' => 'CARREARA 72 H #39 I -22 SUR','tel_movil' => '317 668 5347','tel_local' => '[034] 2388820','correo' => 'nprepuestos@yahoo.com','paginaweb' => 'www.nprepuestos.com.co','nombre_repres' => 'Jorge Orozco','ape_repres' => '','ced_repres' => '','telmovrep' => '322 853 5890','tipocuebanc' => '','cuebanc' => '','banco' => '','servicios' => 'Proveedor de pastas de Freno','usuarioId' => '1','created_at' => '2017-05-05 00:01:34','updated_at' => '2017-05-05 00:01:34'],
   ['proveedorId' => '9','nitproveedor' => '8909266501','rif_proveedor' => '8909266501','nombre_proveedor' => 'MUNDIPARTES','direccion' => 'MEDELLIN CALLE 16 NÂ°45-148 EL POBLADO','tel_movil' => '034 3206520','tel_local' => '034 5122944','correo' => 'info@mundipartes.com','paginaweb' => 'mgarcia@mundipartes.com','nombre_repres' => 'MAURICIO','ape_repres' => 'GARCIA','ced_repres' => '0','telmovrep' => '315 227 3702','tipocuebanc' => '0','cuebanc' => '0','banco' => '0','servicios' => 'Venta de Repuestos','usuarioId' => '1','created_at' => '2017-06-01 15:52:35','updated_at' => '2017-06-01 15:52:35'],
   ['proveedorId' => '10','nitproveedor' => '9002526607','rif_proveedor' => '9002526607','nombre_proveedor' => 'DISLUTER S.A.S','direccion' => 'CRA 50 Nro. 91 SUR 411 LA ESTRELLA','tel_movil' => '','tel_local' => '4480790','correo' => '','paginaweb' => '','nombre_repres' => '','ape_repres' => '','ced_repres' => '','telmovrep' => '','tipocuebanc' => 'CORRIENTE','cuebanc' => '33346948468','banco' => 'BANCOLOMBIA','servicios' => '','usuarioId' => '1','created_at' => '2017-08-07 18:35:45','updated_at' => '2017-08-07 18:35:45'],
   ['proveedorId' => '11','nitproveedor' => '890930687-9','rif_proveedor' => '890930687-9','nombre_proveedor' => 'JARAMILLO Y PIEDRAHITA S.A.S.','direccion' => 'CALLE 30 No 54a-83','tel_movil' => '312-6112858','tel_local' => '2352754','correo' => 'secretaria@jaramilloyp.com','paginaweb' => '','nombre_repres' => 'ELIZABETH ','ape_repres' => 'MUÃ‘OZ','ced_repres' => '','telmovrep' => '312-6112858','tipocuebanc' => 'CORRIENTE','cuebanc' => '61414126984','banco' => 'BANCOLOMBIA','servicios' => '','usuarioId' => '1','created_at' => '2017-08-26 20:35:37','updated_at' => '2017-08-26 20:35:37'],
   ['proveedorId' => '12','nitproveedor' => '900701967-1','rif_proveedor' => '900701967-1','nombre_proveedor' => 'OILRED S.A.','direccion' => 'CRA 50 FF No. 10B SUR 49','tel_movil' => '321-4239320','tel_local' => '4485102','correo' => 'medellin@oilred.com','paginaweb' => '','nombre_repres' => 'MONICA','ape_repres' => 'ECHAVERRIA','ced_repres' => '','telmovrep' => '321-4239320','tipocuebanc' => 'CORRIENTE','cuebanc' => '51120207031','banco' => 'BANCOLOMBIA','servicios' => '','usuarioId' => '1','created_at' => '2017-08-26 20:51:51','updated_at' => '2017-08-26 20:51:51'],
   ['proveedorId' => '13','nitproveedor' => '9003380164','rif_proveedor' => '9003380164','nombre_proveedor' => 'COLSAISA','direccion' => 'CR 46 No 32-116','tel_movil' => '','tel_local' => '4481540','correo' => '','paginaweb' => '','nombre_repres' => '','ape_repres' => '','ced_repres' => '','telmovrep' => '','tipocuebanc' => 'CORRIENTE','cuebanc' => '457969996299','banco' => 'DAVIVIENDA','servicios' => '','usuarioId' => '1','created_at' => '2017-09-02 17:30:23','updated_at' => '2017-09-02 17:30:23'],
   ['proveedorId' => '14','nitproveedor' => '11111','rif_proveedor' => '11111','nombre_proveedor' => 'JORGE MESA','direccion' => 'MEDELLIN','tel_movil' => '3187668183','tel_local' => '3187668183','correo' => 'DESCONOCIDO','paginaweb' => 'DESCONOCIDO','nombre_repres' => '0','ape_repres' => '0','ced_repres' => '0','telmovrep' => '0','tipocuebanc' => '0','cuebanc' => '0','banco' => '0','servicios' => '','usuarioId' => '1','created_at' => '2017-09-04 05:15:51','updated_at' => '2017-09-04 05:15:51']
		]);
    }
}