@extends('layouts.principalMaster')
@section('title','Crear Articulo')
@section('content')
<br>

	{!!Form::open(['action'=>'articuloController@store','method'=>'POST'])!!}
	@include('layouts.artform')
    <!-- Boton de Submit -->
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@endsection

