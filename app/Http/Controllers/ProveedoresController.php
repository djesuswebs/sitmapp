<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Proveedor as Proveedor;

class ProveedoresController extends Controller
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

    public function agregar_proveedor(Request $request)
    {

            $proveedor= new Proveedor;
            $proveedor->nitproveedor = $request->nit_proveedor;
            $proveedor->nombre_proveedor = $request->nombre_proveedor;
            $proveedor->direccion = $request->direccion_proveedor;
            $proveedor->rif_proveedor = $request->rif_proveedor;
            $proveedor->tel_movil = $request->movil_proveedor;
            $proveedor->tel_local = $request->local_proveedor;
            $proveedor->correo= $request->correo_poveedor;
            $proveedor->paginaweb = $request->web_proveedor;
            $proveedor->servicios= $request->servicios_proveedor;
            $proveedor->banco = $request->banco_proveedor;
            $proveedor->tipocuebanc= $request->tipocuenta_proveedor;
            $proveedor->cuebanc = $request->ncuenta_proveedor;

            $proveedor->ced_repres= $request->cedula_representante_proveedor;
            $proveedor->nombre_repres = $request->nombre_representante_proveedor;
            $proveedor->ape_repres = $request->apellido_representante_proveedor;
            $proveedor->telmovrep= $request->telefono_representante_proveedor;
            

            $proveedor->save();
            //dd($request->all());
            return redirect('proveedores');
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

     public function actualizar_provedor($proveedorId)
    {
                $var_decode =  base64_decode($proveedorId);
                $proveedor = Proveedor::where('nombre_proveedor','like','%'.$var_decode.'%')->get();
                return \View::make('edit/actualizar_proveedor',compact('proveedor'));

             
                
    }

     public function guardar_act_proveedor(Request $request)
          {
                       // $movie = Proveedor::where('proveedorId','like','%'.$request->proveedorId.'%')->get();
                        $movie = Proveedor::find($request->proveedorId);
                        $movie->nombre_proveedor = $request->nombre_proveedor;
                        $movie->nitproveedor = $request->nit;
                        $movie->rif_proveedor = $request->rif_proveedor;
                        $movie->correo = $request->email_proveedor;
                        $movie->tel_movil = $request->tel_movil_proveedor;
                        $movie->tel_local= $request->tel_local_proveedor;
                        $movie->direccion = $request->direccion_proveedor;
                        $movie->servicios= $request->servicios_proveedor;
                        $movie->banco = $request->banco_proveedor;
                        $movie->tipocuebanc = $request->tipo_cuenta_proveedor;
                        $movie->cuebanc = $request->numero_cuenta__proveedor;
                        $movie->nombre_repres= $request->nombre_repre_proveedor;
                        $movie->telmovrep = $request->tele_repre_proveedor;
                       
                        $movie->save();
                        return redirect('proveedores');
         }

public function __construct()
	{
		$this->middleware('auth');
	} 

        
}



