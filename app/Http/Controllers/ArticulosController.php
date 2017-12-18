<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\Articulos as Articulos;

class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    
    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


     public function actualizar_articulo($articuloId)
    {
                $var_decode =  base64_decode($articuloId);
                $articulo = Articulos::where('id_articulo','=', $articuloId)->get();
                return \View::make('edit/actualizar_articulo',compact('articulo'));
    }

// Guardar despues de Editar
     public function guardar_act_articulo(Request $request)
          {
                       // $movie = Proveedor::where('proveedorId','like','%'.$request->proveedorId.'%')->get();

            //'cod_articulo', 'denominacion', 'presentacion', 'modelo', 'dentipart', 'almacenId', 'tipo_articulo_id', 'exiactart', 'exiinitart', 'minart', 'maxart'

                    if ($request->file != NULL){
                        // PARA GUARDAR IMAGEN
                       $file = $request->file('file');
 
                       //obtenemos el nombre del archivo
                       $nombre = $file->getClientOriginalName();
                 
                       //indicamos que queremos guardar un nuevo archivo en el disco local
                       \Storage::disk('local')->put($nombre,  \File::get($file));
                                        
                       }
                       
                        $articulo = Articulos::find($request->id_articulo);
                        $articulo->denominacion = $request->nombre_articulo;
                        $articulo->fabricante_id = $request->fabricante_id;
                        $articulo->feccreart= $request->fecha_creacion_articulo;
                        $articulo->modelo = $request->modelo_articulo;
                        $articulo->tipo_articulo_id= $request->tipo_articulo;
                        $articulo->exiactart = $request->existencia_actual;
                        $articulo->exiiniart= $request->existencia_inicial;
                        $articulo->minart = $request->minimo;
                        $articulo->maxart = $request->maximo;
                        if ($request->file != NULL){
                            $articulo->img_articulo= $nombre;
                        }
                        $articulo->precioventaa = $request->precio_a;
                        $articulo->precioventab = $request->precio_b;
                        $articulo->precioventac = $request->precio_c;
                        
                       
                        $articulo->save();
                        //dd($request->all());
                        return redirect('articulos');
         }

//Agregar Articulo Nuevo (Store)
          public function agregar_articulo(Request $request)
    {
        //

        if ($request->file != NULL){
                    $file = $request->file('img_articulo');
         
                    //obtenemos el nombre del archivo
                    $nombre = $file->getClientOriginalName();
                 
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombre,  \File::get($file));
        }   
            $articulo= new Articulos;
            $articulo->cod_articulo = $request->codigo_articulo;
            $articulo->usuarioId = $request->usuarioId;
            $articulo->denominacion = $request->nombre_articulo;
            $articulo->descripcion = $request->descripcion_articulo;
            $articulo->presentacion = $request->presentacion;
            $articulo->fabricante_id = $request->fabricante_id;
            $articulo->feccreart= $request->fecha_creacion_articulo;
            $articulo->modelo = $request->modelo_articulo;
            $articulo->tipo_articulo_id= $request->tipo_articulo;
            $articulo->exiactart = $request->existencia_actual;
            $articulo->exiiniart= $request->existencia_inicial;
            $articulo->minart = $request->minimo;
            $articulo->maxart = $request->maximo;
             if ($request->file != NULL){
                    $articulo->img_articulo= $nombre;
                }
            
            $articulo->tipovehiculoId = $request->tipovehiculo;

            $articulo->unidadmedida = $request->unidad_medida_articulo;
            $articulo->diainterno = $request->diametro_interno_articulo;
            $articulo->diaexterno = $request->diametro_externo_articulo;
            $articulo->alto= $request->alto_articulo;
            $articulo->largo = $request->largo_articulo;

            $articulo->incpora = $request->porcentajea;
            $articulo->incporb= $request->porcentajeb;
            $articulo->incporc= $request->porcentajec;

            $articulo->precioventaa = $request->precio_a;
            $articulo->precioventab= $request->precio_b;
            $articulo->precioventac= $request->precio_c;
            $articulo->almacenId= $request->almacen_articulo;
            $articulo->proveedorId= $request->proveedor_id; //costo_unitario
             $articulo->costounitario= $request->costo_unitario;   
            $articulo->save();
            //dd($request->all());
            return redirect('articulos');
    }
}
