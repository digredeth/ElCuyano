@extends('layouts.principalMaster')
@section('title','Stock')

@section('content')
<!-- Tabla Articulos -->
<table id="tart" class="table table-striped table-hover" style="overflow:auto">
  <thead>
    <tr>
      <th>Codigo</th>
      <th>Descripcion</th>
      <th>Proveedor</th>
      <th>Stock</th>
      <th>Limite</th>
    </tr>
  </thead>
    @foreach($articulos as $articulo)
  <tbody>
    <tr>
      <td>{{$articulo->cod}}</td>
      <td>{{$articulo->descripcion}}</td>
      <td>{{$articulo->cod_proveedor}}</td>
      <td>{{$articulo->stock}}</td>
      <td>{{$articulo->limite}}</td>
    </tr>
  </tbody>
    @endforeach
</table>
@endsection

