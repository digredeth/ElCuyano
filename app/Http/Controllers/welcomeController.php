<?php

namespace elcuyano\Http\Controllers;

class welcomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
}