<?php

namespace App\Http\Controllers;
use App\Tipoarticulos as Tipoarticulos;

use Illuminate\Http\Request;

class TipoarticuloController extends Controller
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

            $tipoarticulo= new Tipoarticulos;
            $tipoarticulo->dentipart = $request->nombre_tipoarticulo;
          
            $tipoarticulo->save();
            //dd($request->all());
            return redirect('tipoarticulos');
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
                $tipoarticulo = Tipoarticulos::where('tipo_articulo_id','=', $id)->get();
                return \View::make('edit/actualizar_tipoarticulo',compact('tipoarticulo'));
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

        $articulo =Tipoarticulos::find($request->id_articulo);
        $articulo->denominacion = $request->nombre_articulo;
        $articulo->fabricante_id = $request->fabricante_id;
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
}
