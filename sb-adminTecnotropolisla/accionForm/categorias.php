<?php

include_once '../Clases/odbc/CategoriasODBC.php';

switch ($_POST['accion']) {

    case "form_addnoticia":

        $categorias = new CategoriasODBC;
        $categorias->setLng_idnoticia($lng_idnoticia);
        $total_marcas = count($_POST['marca']);
        for ($i = 0; $i <= $total_marcas - 1; $i++) {

            if ($_POST['marca'][$i] != "x") {
                $categorias->setLng_idmarca($_POST['marca'][$i]);
                $categorias->agregarCategorias($categorias);
            }
        }
        break;

    case "form_editnoticia":

        $categorias = new CategoriasODBC;
        $categorias->setLng_idnoticia($_POST['lng_idnoticia']);
        $categorias->eliminarCategorias($categorias);

        $categorias->setLng_idnoticia($_POST['lng_idnoticia']);
        $total_marcas = count($_POST['marca']);
        
        for ($i = 0; $i <= $total_marcas - 1; $i++) {

            if ($_POST['marca'][$i] != "x") {
                $categorias->setLng_idmarca($_POST['marca'][$i]);
                $categorias->agregarCategorias($categorias);
            }
        }
        break;

    case "form_deletenoticia":
        $noticias = new NoticiasODBC;

        break;
}
?>