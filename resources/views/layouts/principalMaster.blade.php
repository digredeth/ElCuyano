<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    {!!Html::style('css/bootstrap.min.css')!!}
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom CSS -->
    {!!Html::style('css/simple-sidebar.css')!!}
    <!-- <link href="css/simple-sidebar.css" rel="stylesheet">-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>



    <div id="wrapper">
       @section('sidebar')


        <!-- Sidebar -->
       





        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href={{ url('/principal') }}>
                         El Cuyano S.R.L 
                    </a>
                </li>
                <li>
                    <a href={{ url('/principal/articulos') }}>Stock</a>
                </li>
                <li>
                    <a href="#">Gestion articulos</a>
                </li>
                <li>
                    <a href={{ url('/principal/proveedores') }}>Gestion proveedores</a>
                </li>
                <li>
                    <a href="#">Historial</a>
                </li>
                <li>
                    <a href="#">Informes</a>
                </li>
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        @show

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                 {{-- <div class="col-lg-6">
                   <div class="input-group">
                     <input type="text" class="form-control" placeholder="Search for...">
                     <span class="input-group-btn">
                       <button class="btn btn-default" type="button">Go!</button>
                     </span>
                   </div><!-- /input-group -->
                                </div><!-- /.col-lg-6 --> --}}
                    <div class="col-lg-12" >
    <div class="container" >
    <div class="row row-lefted" >    
        <div class="col-xs-8 col-xs-offset-2">
            <div class="input-group" >
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span id="search_concept">Filter by</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#contains">Descripcion</a></li>
                      <li><a href="#its_equal">Codigo</a></li>
                      <li><a href="#greather_than">Proveedor</a></li>
                      <li><a href="#less_than">Cantidad </a></li>
                    </ul>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control" name="x" placeholder="Search term...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
    </div>
</div>
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle" style="float: right;">=</a>
                 @yield('content') 



                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    
    {!!Html::script('js/jquery.js')!!}
    <!-- <script src="js/jquery.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
    
    {!!Html::script('js/bootstrap.min.js')!!}
    <!-- <script src="js/bootstrap.min.js"></script> -->
    
    <!-- Menu Toggle Script -->
    
    {!!Html::script('js/scriptdigre/principalToogle.js')!!}
    <!-- <script src="js/scriptdigre/principalToogle.js"></script> -->
    
    <!--Dropdown list change Script -->
    <script type="text/javascript">
    $(document).ready(function(e){
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#","");
        var concept = $(this).text();
        $('.search-panel span#search_concept').text(concept);
        $('.input-group #search_param').val(param);
    });
});
 </script>

</body>

</html>
