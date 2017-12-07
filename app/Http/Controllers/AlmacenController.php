<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Almacen as Almacen;

class AlmacenController extends Controller
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

            $almacen= new Almacen;
            $almacen->denalmacen = $request->nombre_almacen;
            $almacen->ubicacionfis = $request->ubicacion_almacen;
          
            $almacen->save();
            //dd($request->all());
            return redirect('almacen');
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
                $almacen= Almacen::where('id_almacen','=', $id)->get();
                return \View::make('edit/actualizar_almacen',compact('almacen'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        //

    }

    public function guardar_almacen(Request $request)
    {
        //

        $almacen =Almacen::find($request->id_almacen);
        $almacen->denalmacen = $request->nombre_almacen;
        $almacen->ubicacionfis= $request->ubicacion_almacen;


        $almacen->save();
        //dd($request->all());
        return redirect('almacen');
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
