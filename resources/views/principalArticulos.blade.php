@extends('layouts.principalMaster')
@section('title','Stock')

@section('content')

<!-- Tabla Articulos -->
{{-- <div>
  <div class="dropdown" align="left">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">HTML</a></li>
    <li><a href="#">CSS</a></li>
    <li><a href="#">JavaScript</a></li>
  </ul>
</div>
</div> --}}
<div style="height:500px;overflow-y:scroll;">
  <table id="tart" class="table table-striped table-hover " >
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
      <tr>
        <td>{{$articulo->cod}}</td>
        <td>{{$articulo->descripcion}}</td>
        <td>{{$articulo->cod_proveedor}}</td>
        <td>{{$articulo->stock}}</td>
        <td>{{$articulo->limite}}</td>
        <td>
          {!!link_to_action('articuloController@edit',$title='Editar',$parameters=$articulo->cod,$attributes=['class'=>'btn btn-primary'])!!}
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>




@endsection



