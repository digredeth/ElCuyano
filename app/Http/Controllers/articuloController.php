<?php

namespace elcuyano\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use elcuyano\Http\Requests;
use elcuyano\Http\Controllers\Controller;
use elcuyano\articulo;
use elcuyano\proveedor;

class articuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos=articulo::All();
        return view('principalArticulos')->with("articulos",$articulos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores=proveedor::lists('descripcion','cod');
         
        return view('articulo.articuloCreate')->with("proveedores",$proveedores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                $articulo = new articulo;
                
                $articulo->'descripcion' = $request->desc;
                $articulo->'cod_proveedor' = $request->proveedores;
                $articulo->'stock' = $request->cant;
                $articulo->'limite' = $request->lim;
                $articulo->save();

               /* articulo::create(['cod'=>$request('cod'), 
               'descripcion'=>$request('desc'),
               'cod_proveedor'=>$request('proveedores'),
               'stock'=>$request('cant'),
               'limite'=>$request('lim'),
               'created_at'=>$request('created_at'),
               'updated_at'=>$request('updated_at')]);
              */
       
        
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
}
