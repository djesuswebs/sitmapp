<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fabricante as Fabricante;

class FabricanteController extends Controller
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
        $fabricante= new Fabricante;
        $fabricante->denefabricante = $request->nombre_fabricante;

        $fabricante->save();

        //dd($request->all());
        return redirect('fabricantes');

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

         $fabricante= Fabricante::where('fabricanteId','=', $id)->get();
         return \View::make('edit/actualizar_fabricante',compact('fabricante'));
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

    public function guardar_fabricante(Request $request)
    {
        //

         $fabricante =Fabricante::find($request->id_fabricante);
        $fabricante->denefabricante= $request->nombre_fabricante;

        $fabricante->save();
        //dd($request->all());
        return redirect('fabricantes');
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
