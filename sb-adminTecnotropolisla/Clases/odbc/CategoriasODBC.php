<?php

include_once '../../conf/conexion.php';

class CategoriasODBC extends Categorias {

    public function agregarCategorias($categorias) {

        $insertar = 'INSERT INTO tbl_categorias(lng_idnoticia, lng_idmarca, bol_eliminado, lng_idusuario) '
                . 'VALUES (' . $categorias->getLng_idnoticia() . ',' . $categorias->getLng_idmarca() . ',false,1);';

        //echo $insertar."<br>";
        //die();
        $sql = mysql_query($insertar);
        if ($sql) {

            $mensaje = "Datos Agregados";
        } else {

            $mensaje = mysql_error();
        }

        return $mensaje;
    }

    public function eliminarCategorias($categorias) {

        $actualizar = 'DELETE FROM tbl_categorias WHERE lng_idnoticia = '.$categorias->getLng_idnoticia().';';

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