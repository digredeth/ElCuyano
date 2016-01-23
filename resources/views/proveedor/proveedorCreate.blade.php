@extends('layouts.principalMaster')
@section('title','Crear Proveedor')

@section('content')

{!!Form::open(['action'=>'proveedorsController@store','method'=>'POST'])!!}
<div class="form-group">
    {!!Form::label('Codigo:')!!}
    {!!Form::text('cod',null,['class'=>'form-control','placeholder'=>'Ingresa el Codigo del proveedor'])!!}
</div>
<div class="form-group">
    {!!Form::label('Descripcion:')!!}
    {!!Form::text('desc',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre del proveedor'])!!}
</div>
{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}

@endsection