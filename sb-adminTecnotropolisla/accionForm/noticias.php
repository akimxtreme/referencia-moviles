<?php

include_once '../Clases/odbc/NoticiasODBC.php';
include_once '../Clases/odbc/CategoriasODBC.php';

switch ($_POST['accion']) {

    case "form_addnoticia":
        $noticias = new NoticiasODBC;
        $noticias->setLng_idusuario($_SESSION['lng_idusuario']);
        $noticias->setStr_titulo($_POST['titulo']);
        $noticias->setStr_subtitulo($_POST['subtitulo']);
        $noticias->setStr_contenido($_POST['contenido']);
        $lng_idnoticia = $noticias->agregarNoticias($noticias);
        break;

    case "form_editnoticia":
        $noticias = new NoticiasODBC;
        $noticias->setLng_idusuario($_SESSION['lng_idusuario']);
        $noticias->setLng_idnoticia($_POST['lng_idnoticia']);
        $noticias->setStr_titulo($_POST['titulo']);
        $noticias->setStr_subtitulo($_POST['subtitulo']);
        $noticias->setStr_contenido($_POST['contenido']);
        $noticias->actualizarNoticias($noticias);
        break;

    case "form_deletenoticia":
        $noticias = new NoticiasODBC;
        $noticias->setLng_idusuario($_SESSION['lng_idusuario']);
        $noticias->setLng_idnoticia($_POST['lng_idnoticia']);
        $noticias->eliminarNoticias($noticias);
        break;
}
?>