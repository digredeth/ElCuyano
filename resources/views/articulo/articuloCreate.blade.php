@extends('layouts.principalMaster')
@section('title','Crear Articulo')
@section('content')

	{!!Form::open(['action'=>'articuloController@store','method'=>'POST'])!!}
	<div class="form-group">
        <!--Codigo articulo -->
		{!!Form::label('Codigo:')!!}
		{!!Form::text('cod',null,['class'=>'form-control','placeholder'=>'Ingresa el Codigo del articulo'])!!}
	</div>
	<div class="form-group">
        <!--Nombre Articulo -->
		{!!Form::label('Nombre Articulo:')!!}
		{!!Form::text('desc',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del articulo'])!!}
	</div>
	<div class="form-group">
        <!--Proveedor Articulo (Select) -->
        <label for="sel1" >Proveedor</label>
        <select class="form-control"  id="sel1">
        @foreach($proveedores as $proveedor)
        <option>{{$proveedor->descripcion}}</option>
        @endforeach
        </select>
	</div>
    <div class="form-group">
        <!--Stock Articulo -->
		{!!Form::label('cant','Stock:')!!}
		{!!Form::number('cant',0,['class'=>'form-control','placeholder'=>'Ingresa la cantidad del articulo','min'=>'0'])!!}
	</div>
    <div class="form-group">
        <!--Limite Articulo -->
		{!!Form::label('lim','Limite:')!!}
		{!!Form::number('lim',0,['class'=>'form-control','placeholder'=>'Ingresa el valor limite del articulo','min'=>'0'])!!}
	</div>
    <!-- Boton de Submit -->
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@endsection

