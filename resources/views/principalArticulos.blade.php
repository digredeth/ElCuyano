@extends('layouts.principalMaster')
@section('title','Gestion Articulos')

@section('content')

<!-- Tabla Articulos -->
<div style="height:500px;overflow-y:scroll;">
  <table id="tart" class="table table-striped" >
    <thead >
      <tr>
        <th>Codigo</th>
        <th>Descripcion</th>
        <th>Proveedor</th>
        <th>Stock</th>
        <th>Limite</th>
        <th>Operacion</th>
      </tr>
    </thead>
    @foreach($articulos as $articulo)
    <tbody>
      <tr id="row-data">
        <td>{{$articulo->cod}}</td>
        <td>{{$articulo->artdesc}}</td>
        <td>{{$articulo->provdesc}}</td>
        <td>{{$articulo->stock}}</td>
        <td>{{$articulo->limite}}</td>
        <td>
        {!!link_to_action('articuloController@edit',$title='Editar',$parameters=$articulo->cod,$attributes=['class'=>'btn btn-primary'])!!}
        {!!link_to_action('articuloController@destroy',$title='Eliminar',$parameters=$articulo->cod,$attributes=['class'=>'btn btn-danger'])!!}
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>

@endsection




