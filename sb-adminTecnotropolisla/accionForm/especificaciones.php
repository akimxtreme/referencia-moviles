<?php
include_once '../Clases/odbc/ModelosEspecificacionesODBC.php';

switch ($_POST['accion']) {

    case "form_addespecificaciones":
        $especificaciones = new ModelosEspecificacionesODBC;
        $total_especificaciones = count($_POST['especificaciones']);
        $especificaciones->setLng_idmodelo($_POST['lng_idmodelo']);

        for ($i = 0; $i <= $total_especificaciones - 1; $i++) {
            $especificaciones->setLng_idusuario($_SESSION['lng_idusuario']);
            $especificaciones->setLng_idespecificacion($_POST['especificaciones'][$i]);
            $especificaciones->setStr_valor($_POST['valores'][$i]);
            $especificaciones->agregarModelosEspecificaciones($especificaciones);
        }
        break;

    case "form_editmovil":
        $especificaciones = new ModelosEspecificacionesODBC;
        $total_especificaciones = count($_POST['especificaciones']);
        $especificaciones->setLng_idmodelo($_POST['lng_idmodelo']);

        for ($i = 0; $i <= $total_especificaciones - 1; $i++) {
            $especificaciones->setLng_idusuario($_SESSION['lng_idusuario']);
            $especificaciones->setLng_idespecificacion($_POST['especificaciones'][$i]);
            $especificaciones->setStr_valor($_POST['valores'][$i]);
            $especificaciones->modificarModelosEspecificaciones($especificaciones);
        }
        break;
}
?>