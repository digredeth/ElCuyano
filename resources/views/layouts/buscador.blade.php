<!--Buscador-->
<div class="container" >
    <div class="row" >    
        <div class="col-xs-8 col-xs-offset-2" style="width: 50%; margin: 0 auto;">
            <div class="input-group" >
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span id="search_concept">Buscar por</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#contains">Descripcion</a></li>
                      <li><a href="#its_equal">Codigo</a></li>
                      <li><a href="#greather_than">Proveedor</a></li>
                      <li><a href="#less_than">Cantidad </a></li>
                    </ul>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input id="cadena" type="text" class="form-control" name="x" placeholder="Buscar...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
    </div>
</div>

