<?php

namespace App\Http\Controllers;

use App\Manobra as Manobra;

use Illuminate\Http\Request;

class ManobraController extends Controller
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

            $manobra= new Manobra;
            $manobra->nombre_manobra = $request->nombre_manobra;
            $manobra->descripcion = $request->descripcion_manobra;
            $manobra->costo = $request->costo_manobra;
            $manobra->tipovehiculoId= $request->id_tipovehiculo;

            $manobra->save();
            //dd($request->all());
            return redirect('manobra');
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
         $manobra= Manobra::where('manobraid','=', $id)->get();
         return \View::make('edit/actualizar_manobra',compact('manobra'));
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


    public function guardar_manobra(Request $request)
    {
        //

            $manobra =Manobra::find($request->id_manobra);
            $manobra->nombre_manobra = $request->nombre_manobra;
            $manobra->descripcion = $request->descripcion_manobra;
            $manobra->costo = $request->costo_manobra;
            $manobra->tipovehiculoId= $request->id_tipovehiculo;

            $manobra->save();
            //dd($request->all());
            return redirect('manobra');
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
