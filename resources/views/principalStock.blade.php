@extends('layouts.principalMaster')
@section('title','Stock')

@section('content')
<!--Buscador-->
@include('layouts.buscador')
<!-- Tabla Articulos -->
<div style="height:500px;overflow-y:scroll;">
  <table id="tart" class="table table-striped table-hover " >
    <thead >
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
      <tr class="row-data">
        <td>{{$articulo->cod}}</td>
        <td>{{$articulo->descripcion}}</td>
        <td>{{$articulo->cod_proveedor}}</td>
        <td class="stock">{{$articulo->stock}}</td>
        <td class="limite">{{$articulo->limite}}</td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>


@endsection

<!--JQUERY-->
{!!Html::script('js/jquery.js')!!}

<!--Aca Script para poner en danger la columna-->
{!!Html::script('js/scriptdigre/alertaLimite.js')!!}

<script type="text/javascript">
  


</script>