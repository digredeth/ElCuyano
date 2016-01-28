@extends('layouts.principalMaster')

@section('title','Proveedores')

@section('content')
<!-- Tabla Proveedores -->
<div style="height:300px;overflow-y:scroll;">
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
</div>
@endsection