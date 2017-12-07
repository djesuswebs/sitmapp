<?php

namespace App\Http\Controllers;

use App\Tipovehiculo as Tipovehiculo;
use Illuminate\Http\Request;

class TipovehiculoController extends Controller
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
        // 'idtipovehiculo','marcavehiculo', 'modelovehiculo', 'anovehiculo', 'cilindraje', 'anovehdos'
            $tipovehiculo= new Tipovehiculo;
            $tipovehiculo->marcavehiculo = $request->marca_vehiculo;
            $tipovehiculo->modelovehiculo = $request->modelo_vehiculo;
            $tipovehiculo->anovehiculo = $request->desde_vehiculo;
            $tipovehiculo->anovehdos= $request->hasta_vehiculo;
            $tipovehiculo->cilindraje= $request->cilindraje_vehiculo;

            $tipovehiculo->save();
            //dd($request->all());
            return redirect('tipovehiculo');


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
        $tipovehiculo = Tipovehiculo::where('idtipovehiculo','=', $id)->get();
        return \View::make('edit/actualizar_tipovehiculo',compact('tipovehiculo'));
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

    public function guardar_tipovehiculo(Request $request)
    {
        //

            $tipovehiculo =Tipovehiculo::find($request->id_tipovehiculo);
            $tipovehiculo->marcavehiculo = $request->marca_vehiculo;
            $tipovehiculo->modelovehiculo = $request->modelo_vehiculo;
            $tipovehiculo->anovehiculo = $request->desde_vehiculo;
            $tipovehiculo->anovehdos= $request->hasta_vehiculo;
            $tipovehiculo->cilindraje= $request->cilindraje_vehiculo;

            $tipovehiculo->save();
            //dd($request->all());
            return redirect('tipovehiculo');
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
