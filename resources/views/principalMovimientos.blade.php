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
					<table id="tart" class="table table-hover" >
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
								<td class="codigo">{{$articulo->cod}}</td>
								<td class="descripcion">{{$articulo->artdesc}}</td>
								<td>{{$articulo->provdesc}}</td>
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
				<ul id="ListaPed" class="list-group">
				</ul>
			</div>
		</div>
		
	</div>
</div>
@endsection
{!!Html::script('js/jquery.js')!!}
{!!Html::script('js/scriptdigre/selectDdclick.js')!!}