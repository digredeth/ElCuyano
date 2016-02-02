<?php

namespace elcuyano\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
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
              $articulo->cod = $request->cod;
              $articulo->descripcion =(string)$request->descripcion;
              $articulo->cod_proveedor = $request->cod_proveedor;
              $articulo->stock = $request->stock;
              $articulo->limite = $request->limite;
              $articulo->save();

            
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
    public function edit($cod)
    {
        $articulo=articulo::find($cod);
        $proveedores=proveedor::lists('descripcion','cod');
        return view('articulo.articuloEdit')->with("articulo",$articulo)->with("proveedores",$proveedores);
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
          $articulo=articulo::find($id);
          $articulo->cod = $request->cod;
          $articulo->descripcion =(string)$request->descripcion;
          $articulo->cod_proveedor = $request->cod_proveedor;
          $articulo->stock = $request->stock;
          $articulo->limite = $request->limite;
          $articulo->save();

          return Redirect::to('/principal/articulos');
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
