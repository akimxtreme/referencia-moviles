<?php

include_once '../../conf/conexion.php';

class ComentariosODBC extends Comentarios {

    public function eliminarComentarios($comentarios) {

        $actualizar = 'UPDATE tbl_comentarios SET bol_eliminado= true WHERE lng_idcomentario =' . $comentarios->getLng_idcomentario() . '';

        //echo $actualizar;
        //die();
        $sql = mysql_query($actualizar);
        if ($sql) {

            $mensaje = "Datos Eliminados";
        } else {

            $mensaje = mysql_error();
        }

        return $mensaje;
    }
}