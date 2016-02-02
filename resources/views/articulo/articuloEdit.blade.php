@extends('layouts.principalMaster')
@section('title','Editar Articulo')
@section('content')
{!!Form::model($articulo, ['action' => ['articuloController@update', $articulo->cod],'method'=>'PUT'])!!}
	 @include('layouts.artform')
    <!-- Boton de Submit -->
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@endsection