
<div class="form-group">
        <!--Codigo articulo -->
		{!!Form::label('Codigo:')!!}
		{!!Form::text('cod',null,['class'=>'form-control','placeholder'=>'Ingresa el Codigo del articulo'])!!}
	</div>
	<div class="form-group">
        <!--Nombre Articulo -->
		{!!Form::label('Nombre Articulo:')!!}
		{!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del articulo'])!!}
	</div>
	<div class="form-group">
        <!--Proveedor Articulo (Select) -->
        {!!Form::label('Proveedor:')!!}
        {!!Form::select('cod_proveedor',$proveedores,null,['class'=>'form-control'])!!}
       
	</div>
    <div class="form-group">
        <!--Stock Articulo -->
		{!!Form::label('cant','Stock:')!!}
		{!!Form::number('stock',null,['class'=>'form-control','placeholder'=>'Ingresa la cantidad del articulo','min'=>'0'])!!}
	</div>
    <div class="form-group">
        <!--Limite Articulo -->
		{!!Form::label('lim','Limite:')!!}
		{!!Form::number('limite',null,['class'=>'form-control','placeholder'=>'Ingresa el valor limite del articulo','min'=>'0'])!!}
	</div>
