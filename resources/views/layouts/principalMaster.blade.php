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

     {!!Html::style('css/header-fixed.css')!!}
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
            <li class="sidebar-brand container">
                <a href={{ url('/principal') }}>El Cuyano S.R.L</a>
            </li>
            <li>
                <a href={{ url('/principal/stock') }}>Stock</a>
            </li>
            <li>
                <a href={{ url('/principal/articulos') }}>Gestion articulos</a>
            </li>
            <li>
                <a href={{ url('/principal/proveedores') }}>Gestion proveedores</a>
            </li>
            <li>
                <a href={{ url('/principal/movimientos') }}>Movimientos</a>
            </li>
            <li>
                <a href="#">Informes</a>
            </li>
            
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->
    @show
    <!-- Page Content -->
    <div id="page-content-wrapper" style="float:left">
        <!--UpBar-->
        <nav class="navbar navbar-default" >
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Buscar por<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Codigo</a></li>
                                <li><a href="#">Descripcion</a></li>
                                <li><a href="#">Proveedor</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Buscar</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#menu-toggle" class="btn btn-primary" id="menu-toggle" style="float: right;">=</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--End UpBar-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12" >
                    
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

<!-- Bootstrap Core JavaScript -->
{!!Html::script('js/bootstrap.min.js')!!}


<!-- Menu Toggle Script -->
{!!Html::script('js/scriptdigre/principalToogle.js')!!}

<!--Dropdown list change Script -->
{!!Html::script('js/scriptdigre/ddownChange.js')!!}
</body>
</html>