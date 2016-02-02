@extends('layouts.principalMaster')
@section('title','Editar Articulo')
@section('content')
{!!Form::model($articulo, array('action' => array('articuloController@update', $articulo->cod)))!!}
	 @include('layouts.artform')
    <!-- Boton de Submit -->
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@endsection