<?php
include_once '../Clases/odbc/ModelosODBC.php';

switch ($_POST['accion']) {

    case "form_addmovil":
        $modelos = new ModelosODBC;
        $total_modelos = count($_POST['modelos']);
        for ($i = 0; $i <= $total_modelos - 1; $i++) {
            $modelos->setLng_idusuario($_SESSION['lng_idusuario']);
            $modelos->setLng_idtipo_equipo($_POST['tipos'][$i]);
            $modelos->setLng_idgama($_POST['gamas'][$i]);
            $modelos->setLng_idmarca($_POST['marcas'][$i]);
            $modelos->setStr_modelo($_POST['modelos'][$i]);
            $modelos->agregarModelos($modelos);
        }
        break;

    case "form_editmovil":
        $modelos = new ModelosODBC;
        $modelos->setLng_idusuario($_SESSION['lng_idusuario']);
        $modelos->setLng_idmodelo($_POST['lng_idmodelo']);
        $modelos->setLng_idtipo_equipo($_POST['tipo']);
        $modelos->setLng_idgama($_POST['gama']);
        $modelos->setLng_idmarca($_POST['marca']);
        $modelos->setStr_modelo($_POST['modelo']);
        $modelos->actualizarModelos($modelos);
        break;
    
    case "form_deletemovil":
        $modelos = new ModelosODBC;
        $modelos->setLng_idusuario($_SESSION['lng_idusuario']);
        $modelos->setLng_idmodelo($_POST['lng_idmodelo']);
        $modelos->eliminarModelos($modelos);
        break;
}
?>