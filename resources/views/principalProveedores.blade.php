@extends('layouts.principalMaster')

@section('title','Proveedores')

@section('content')
<!-- Tabla Proveedores -->
<div style="height:500px;overflow-y:scroll;">
<table id="tart" class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Codigo</th>
      <th>Descripcion</th>
      <th>Operacion</th>
    </tr>
  </thead>
    @foreach($proveedores as $proveedor)
  <tbody>
    <tr>
      <td>{{$proveedor->cod}}</td>
      <td>{{$proveedor->descripcion}}</td>
      <td>
          {!!link_to_action('proveedorsController@edit',$title='Editar',$parameters=$proveedor->cod,$attributes=['class'=>'btn btn-primary'])!!}
          {!!link_to_action('proveedorsController@destroy',$title='Borrar',$parameters=$proveedor->cod,$attributes=['class'=>'btn btn-danger'])!!}
        </td>
    </tr>
  </tbody>
    @endforeach
</table>
</div>
@endsection