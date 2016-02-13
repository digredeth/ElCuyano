<?php

namespace elcuyano\Http\Controllers;

use Illuminate\Http\Request;

use elcuyano\Http\Requests;
use elcuyano\Http\Controllers\Controller;
use DB;
use elcuyano\articulo;


class principalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       return view('principalHome');
    }
    
   
   
}
