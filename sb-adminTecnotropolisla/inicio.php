<?php
session_start();
error_reporting (5); 
if (!empty($_SESSION['nombre'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">

            <title>Tecnotropolisla</title>

            <!-- jQuery Version 1.11.0 -->
            <script src="js/jquery-1.11.0.js"></script>
            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>

            <!-- Demo stuff -->
            <link rel="stylesheet" href="paginador/css/jq.css">

            <link href="paginador/css/prettify.css" rel="stylesheet">
            <script src="paginador/js/prettify.js"></script>
            <script src="paginador/js/docs.js"></script>

            <!-- Tablesorter: required for bootstrap -->
            <link rel="stylesheet" href="paginador/css/theme.bootstrap.css">

            <script src="paginador/js/jquery.tablesorter.js"></script>
            <script src="paginador/js/jquery.tablesorter.widgets.js"></script>

            <!-- Tablesorter: optional -->
            <script src="paginador/js/jquery.tablesorter.pager.js"></script>

            <script src="js/funciones.js"></script>
            <script src="js/ajax.js"></script>

            <!-- Bootstrap Core CSS -->
            <link href="css/bootstrap.min.css" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="css/sb-admin.css" rel="stylesheet">

            <!-- Morris Charts CSS -->
            <link href="css/plugins/morris.css" rel="stylesheet">

            <!-- Estilos CSS -->
            <link href="css/estilos.css" rel="stylesheet">

            <!-- Custom Fonts -->
            <link href="font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

        </head>

        <body>

            <div id="wrapper">

                <!-- Navigation -->
                <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#" onclick="url('tecnotropolisla.php')"><div class="glyphicon glyphicon-globe"> Tecnotropolisla</div></a>
                    </div>
                    <!-- Top Menu Items -->
                    <ul class="nav navbar-right top-nav">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Bienvenid@ <?= ucfirst($_SESSION['nombre']) ?>&nbsp;<?= ucfirst($_SESSION['apellido']) ?> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" onclick="url('form_queryusuario.php?id=' +<?= $_SESSION['lng_idusuario'] ?>)"><i class="fa fa-fw fa-user"></i> Perfil</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="salir.php"><i class="fa fa-fw fa-power-off"></i> Salir</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav side-nav">

                            <li class=""><!-- active -->
                                <a href="javascript:;" data-toggle="collapse" data-target="#moviles"><i class="fa fa-fw fa-tablet"></i> Equipos <i class="fa fa-fw fa-caret-down"></i></a>
                                <ul id="moviles" class="collapse">
                                    <li>
                                        <a href="#"class="glyphicon glyphicon-save" onclick="url('form_addmovil.php')"> Equipo</a>
                                    </li>

                                    <!--    
                                        <li>
                                            <a href="#"class="glyphicon glyphicon-list-alt" onclick="url2('form_searchmovil.php?valor=1')"> Especificaciones</a>
                                        </li>

                                        <li>
                                            <a href="#"class="glyphicon glyphicon-picture" onclick="url2('form_searchmovil.php?valor=2')"> Imágenes</a>
                                        </li>
                                    -->

                                    <li>
                                        <a href="#" class="glyphicon glyphicon-search" onclick="url('form_searchmovil.php')"> Buscar </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" data-toggle="collapse" data-target="#comentarios"><i class="fa fa-fw fa-comments"></i> Comentarios <i class="fa fa-fw fa-caret-down"></i></a>
                                <ul id="comentarios" class="collapse">
                                    <li>
                                        <a href="#" class="glyphicon glyphicon-search" onclick="url('form_searchcomentario.php')"> Buscar </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" data-toggle="collapse" data-target="#noticias"><i class="fa fa-fw fa-coffee"></i> Noticias <i class="fa fa-fw fa-caret-down"></i></a>
                                <ul id="noticias" class="collapse">
                                    <li>
                                        <a href="#" class="fa fa-newspaper-o" onclick="url('form_addnoticia.php')">&nbsp;&nbsp;&nbsp; Noticia</a>
                                    </li>
                                    <li>
                                        <a href="#" class="glyphicon glyphicon-search" onclick="url('form_searchnoticia.php')"> Buscar </a>
                                    </li>
                                </ul>
                            </li>
                            <?php if ($_SESSION['rol'] == "Administrador") { ?> 
                                <li>
                                    <a href="javascript:;" data-toggle="collapse" data-target="#usuarios"><i class="fa fa-fw fa-users"></i> Usuarios <i class="fa fa-fw fa-caret-down"></i></a>
                                    <ul id="usuarios" class="collapse">
                                        <li>
                                            <a href="#" class="fa fa-user" onclick="url('form_addusuario.php')">&nbsp;&nbsp;&nbsp;&nbsp; Usuario</a>
                                        </li>
                                        <li>
                                            <a href="#" class="glyphicon glyphicon-search" onclick="url('form_searchusuario.php')"> Buscar </a>
                                        </li>
                                    </ul>
                                </li> 
                            <?php } ?>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-fw fa-certificate"></i> Acerca de</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>

                <div id="page-wrapper" style="background: #E6E6E6">

                    <?php if ($_GET['success'] == true) { ?>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong><i class="glyphicon glyphicon-check"></i> El proceso se realizó con éxito!</strong>
                        </div>
                    <?php }
                    ?>

                    <div id="chi" class="container-fluid" style="min-height: 768px;">

                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">

                                <div class="item active">
                                    <img src="imagenes/blue-blue-dark-blue2.png" alt="...">
                                    <div class="carousel-caption">
                                        <h3>Tecnotropolisla</h3>
                                        <p>Nos apasiona lo que hacemos, estamos a la vangüardia de la tecnología e innovamos en servicios globales para las Américas.</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="imagenes/movil2.png" alt="...">
                                    <div class="carousel-caption">
                                        <h3>Equipos</h3>
                                        <p>Agregue nuevos equipos como smartphones y tablets.</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="imagenes/noticias.png" alt="...">
                                    <div class="carousel-caption">
                                        <h3>Noticias</h3>
                                        <p>Ingrese las últimas noticias en materia tecnologica.</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="imagenes/usuarios.png" alt="...">
                                    <div class="carousel-caption">
                                        <h3>Usuarios</h3>
                                        <p>Incorpore nuevos usuarios al sistema.</p>
                                    </div>
                                </div>

                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>

                        </div>

                    </div>

                    <!-- /.container-fluid -->

                    <!-- /#page-wrapper -->

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Acerca de...</h4>
                                </div>
                                <div class="modal-body">
                                    <p class="text-justify">
                                        Somos una empresa con sede en Venezuela y en los Estados Unidos, con más de 10 años de experiencia, dedicados a las ventas de artículos de tecnología, como teléfonos celulares, tabletas, equipos de computación y más.
                                        Contando con un portafolio multimarca, principalmente respaldados por Samsung, Sony, Nokia, Apple, LG y Huawei.
                                        Nos hemos destacado ofreciendo productos de calidad, atención personalizada, buen servicio y precios competitivos. Siendo nuestro objetivo poder ofrecer el mayor surtido de productos para que nuestros clientes vean en nosotros su principal aliado comercial.
                                    </p>

                                    <p class="text-justify">
                                        Tecnotropolisla <i class="fa fa-copyright"> </i> <?= date('Y') ?>
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- /#wrapper -->
                <style>
                    .btn-hover {
                        font-weight: normal;
                        color: #333333;
                        cursor: pointer;
                        background-color: inherit;
                        border-color: transparent;
                    }

                    .btn-hover-alt {
                        font-weight: normal;
                        color: #ffffff;
                        cursor: pointer;
                        background-color: inherit;
                        border-color: transparent;
                    }

                    .thumb {
                        height: 75px;
                        border: 0px;
                    }

                    body {
                        font-family: "Segoe UI", 'sans-serif';
                    }

                    .avg {
                        font-size:40px; 
                        padding-top: 20px;
                        color:#5CB85C;
                        text-align: center;
                    }

                    .details {
                        min-height: 355px;
                        display: inline-block;
                    }

                </style>
        </body>

    </html>
    <?php
} else {
    header('Location: index.php');
    exit;
}
?>