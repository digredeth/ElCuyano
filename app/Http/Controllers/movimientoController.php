<?php

namespace elcuyano\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use elcuyano\Http\Requests;
use elcuyano\Http\Controllers\Controller;

class movimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = DB::table('articulos')
            ->join('proveedors', 'articulos.cod_proveedor', '=', 'proveedors.cod')
            ->select('articulos.cod', 'articulos.descripcion as artdesc', 'proveedors.descripcion as provdesc','articulos.stock','articulos.limite')
            ->orderBy('artdesc', 'asc')->get();
        return view('principalMovimientos')->with("articulos",$articulos);
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
        /*Falta completar con los datos del request*/
       $movimiento= new movimiento;
       $movimiento->tipo = $request->cod;
       $movimiento->cod_usuario =(string)$request->descripcion;
       $movimiento->save();
       /*$cod_mov=Aca obtenemos el codigo del movimiento recien creado*/

       /*
        Aca creamos las filas de la tabla movarts con el id del movimiento creado
        y los codigos de los articulos y cantidades.
        seria algo como

        For i=1, cantItems
        $movart=new movart;
        $movart->cod_mov=$cod_mov;
        $movart->cod_art=$request->art[i];
        $movart->cant=$request->cant[i];
        $movart->save();
        end for


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
