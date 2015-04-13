<?php
include_once '../Clases/odbc/ComentariosODBC.php';

switch ($_POST['accion']) {

    case "form_deletecomentario":
        $comentarios = new ComentariosODBC;
        $comentarios->setLng_idcomentario($_POST['lng_idcomentario']);
        $comentarios->eliminarComentarios($comentarios);
        break;
}
?>