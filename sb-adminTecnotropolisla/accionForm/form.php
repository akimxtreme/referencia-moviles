<?php
session_start();
include_once '../conf/conexion.php';

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

if (!empty($_POST)) {

    switch ($_POST['accion']) {

        case "form_addmovil":
        case "form_deletemovil":
            require_once 'equipos.php';
            header("Location: ../inicio.php?success=true");
            break;

        case "form_addespecificaciones":
            require_once 'especificaciones.php';
            header("Location: ../inicio.php?success=true");
            break;

        case "form_addimagenes":
            require_once 'imagenes.php';
            header("Location: ../inicio.php?success=true");
            break;

        case "form_editmovil":
            require_once 'equipos.php';
            require_once 'especificaciones.php';
            require_once 'imagenes.php';
            header("Location: ../inicio.php?success=true");
            break;

        case "form_deletecomentario":
            require_once 'comentarios.php';
            header("Location: ../inicio.php?success=true");
            break;

        case "form_addnoticia":
            require_once 'noticias.php';
            require_once 'categorias.php';
            require_once 'imagenesNoticias.php';
            header("Location: ../inicio.php?success=true");
            break;

        case "form_editnoticia":
            require_once 'noticias.php';
            require_once 'categorias.php';
            require_once 'imagenesNoticias.php';
            header("Location: ../inicio.php?success=true");
            break;

        case "form_deletenoticia":
            require_once 'noticias.php';
            header("Location: ../inicio.php?success=true");
            break;

        case "form_addusuario":
        case "form_editusuario":
        case "form_deleteusuario":
            require_once 'usuarios.php';
            header("Location: ../inicio.php?success=true");
            break;
    }
}
?>