@extends('layouts.principalMaster')

@section('title','Proveedores')

@section('content')
<!-- Tabla Proveedores -->
<table id="tart" class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Codigo</th>
      <th>Descripcion</th>
    </tr>
  </thead>
    @foreach($proveedores as $proveedor)
  <tbody>
    <tr>
      <td>{{$proveedor->cod}}</td>
      <td>{{$proveedor->descripcion}}</td>
    </tr>
  </tbody>
    @endforeach
</table>
@endsection