<?php
error_reporting (5); 
?>
<!DOCTYPE html>
<html lang="en">
    <head><title>Admin Tecnotropolisla</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <!--Loading bootstrap css-->
        <link type="text/css"
              href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800">
        <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
        <link type="text/css" rel="stylesheet"
              href="sesion/vendors/jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.css">
        <link type="text/css" rel="stylesheet" href="sesion/vendors/font-awesome/css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="sesion/vendors/bootstrap/css/bootstrap.min.css">
        <!--Loading style vendors-->
        <link type="text/css" rel="stylesheet" href="sesion/vendors/animate.css/animate.css">
        <!--Loading style-->
        <link type="text/css" rel="stylesheet" href="sesion/css/style.css">
        <link type="text/css" rel="stylesheet" href="sesion/css/style-mango.css" id="theme-style">
        <link type="text/css" rel="stylesheet" href="sesion/css/style-responsive.css">
        <link type="text/css" rel="stylesheet" href="sesion/css/vendors.css">

        <!--<link type="text/css" rel="stylesheet" href="sesion/css/themes/default.css" id="color-style">-->

        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body id="signin-page" class="animated bounceInDown">
        <div id="signin-page-content">
            <form id="formulario" name="formulario" action="login.php" method="post" class="form">

                <?php if ($_GET['warning'] == true) { ?>
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong> <i class="glyphicon glyphicon-warning-sign"></i>  Advertencia!</strong> Usuario o clave inválidos
                    </div>
                <?php }
                ?>

                <h1 class="block-heading">Admin Tecnotropolisla</h1>

                <p class="text-center">Bienvenid@, inicie sesión para acceder al área de administración de Tecnotropolisla</p>

                <div class="form-group">
                    <div class="input-icon"><i class="fa fa-user"></i><input type="text" placeholder="Usuario" name="usuario"
                                                                             class="form-control"></div>
                </div>
                <div class="form-group">
                    <div class="input-icon"><i class="fa fa-key"></i><input type="password" placeholder="Contraseña"
                                                                            name="password" class="form-control"></div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success center-block">Entrar
                        &nbsp;<i class="fa fa-chevron-circle-right"></i></button>
                </div>

            </form>
        </div>
        <script src="sesion/js/jquery-1.9.1.js"></script>
        <script src="sesion/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="sesion/js/jquery-ui.js"></script>
        <!--loading bootstrap js-->
        <script src="sesion/vendors/bootstrap/js/bootstrap.min.js"></script>
        <script src="sesion/vendors/bootstrap-hover-dropdown.js"></script>
        <script src="sesion/js/html5shiv.js"></script>
        <script src="sesion/js/respond.min.js"></script>
        <script src="sesion/vendors/jquery-cookie/jquery.cookie.js"></script>
    </body>
</html>