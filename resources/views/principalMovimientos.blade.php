@extends('layouts.principalMaster')
@section('title','Movimientos')
@section('content')
<br>
<div class="modal-body row">
	<!--Columna tabla articulos-->
	<div class="col-md-6">
		<!-- Your first column here -->
        <div class="panel panel-primary">
        	<div class="panel-heading">
        		<h3 class="panel-title">Articulos</h3>
        	</div>
        	<div class="panel-body">
        		<div style="height:600px;overflow-y:scroll;">
			<table id="tart" class="table table-striped table-condensed " >
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
					<tr id="row-data">
						<td>{{$articulo->cod}}</td>
						<td>{{$articulo->descripcion}}</td>
						<td>{{$articulo->cod_proveedor}}</td>
						<td>{{$articulo->stock}}</td>
						<td>{{$articulo->limite}}</td>
					</tr>
				</tbody>
				@endforeach
			</table>
		</div>
        	</div>
        </div>
		
	</div>
	<!-- Columna lista articulos agregados-->
	<div class="col-md-6">
		<!-- Your second column here -->
        <div class="panel panel-success">
        	<div class="panel-heading">
        		<h3 class="panel-title">Pedido Articulos</h3>
        	</div>
        	<div class="panel-body">
        		<ul class="list-group">
			<li class="list-group-item">
				<span class="badge">14</span>
				Cras justo odio
			</li>
			<li class="list-group-item">
				<span class="badge">2</span>
				Dapibus ac facilisis in
			</li>
			<li class="list-group-item">
				<span class="badge">1</span>
				Morbi leo risus
			</li>
		</ul>
        	</div>
        </div>
		
	</div>
</div>
	@endsection