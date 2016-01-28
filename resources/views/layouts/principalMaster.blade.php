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
                    <a href="#">
                        El Cuyano S.R.L
                    </a>
                </li>
                <li>
                    <a href="#">Stock</a>
                </li>
                <li>
                    <a href={{ url('/principal/articulos') }}>Gestion articulos</a>
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
                    <div class="col-lg-12" >
                        
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle" style="float: right;">Ocultar Menu</a>
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

</body>

</html>
