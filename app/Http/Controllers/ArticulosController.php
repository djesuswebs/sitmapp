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


     public function guardar_act_articulo(Request $request)
          {
                       // $movie = Proveedor::where('proveedorId','like','%'.$request->proveedorId.'%')->get();

            //'cod_articulo', 'denominacion', 'presentacion', 'modelo', 'dentipart', 'almacenId', 'tipo_articulo_id', 'exiactart', 'exiinitart', 'minart', 'maxart'

                        // PARA GUARDAR IMAGEN
                       $file = $request->file('file');
 
                       //obtenemos el nombre del archivo
                       $nombre = $file->getClientOriginalName();
                 
                       //indicamos que queremos guardar un nuevo archivo en el disco local
                       \Storage::disk('local')->put($nombre,  \File::get($file));
                                        
                       
                       
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
                        $articulo->img_articulo= $nombre;
                        

                       
                       
                        $articulo->save();
                        //dd($request->all());
                        return redirect('articulos');
         }
}
