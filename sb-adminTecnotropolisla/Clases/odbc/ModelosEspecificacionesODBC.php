<?php

include_once '../../conf/conexion.php';

class ModelosEspecificacionesODBC extends ModelosEspecificaciones {

    public function agregarModelosEspecificaciones($especificaciones) {

        $insertar = 'INSERT INTO tbl_modelos_especificaciones(lng_idmodelo, lng_idespecificacion, str_valor, dmt_fecha, '
                . 'bol_eliminado, lng_idusuario) VALUES (' . $especificaciones->getLng_idmodelo() . ', '
                . '' . $especificaciones->getLng_idespecificacion() . ', "' . $especificaciones->getStr_valor() . '", date(now()),false,' . $especificaciones->getLng_idusuario() . ')';

        //echo $insertar."<br>";
        $sql = mysql_query($insertar);
        if ($sql) {

            $mensaje = "Datos Agregados";
        } else {

            $mensaje = mysql_error();
        }

        return $mensaje;
    }

    public function modificarModelosEspecificaciones($especificaciones) {

        $actualizar = 'UPDATE tbl_modelos_especificaciones SET str_valor="' . $especificaciones->getStr_valor() . '",lng_idusuario=' . $especificaciones->getLng_idusuario() . ' '
                . 'WHERE lng_idespecificacion = ' . $especificaciones->getLng_idespecificacion() . ' and lng_idmodelo = ' . $especificaciones->getLng_idmodelo() . ' ;';

        //echo $actualizar."<br>";

        $sql = mysql_query($actualizar);
        if ($sql) {

            $mensaje = "Datos Actualizados";
        } else {

            $mensaje = mysql_error();
        }

        return $mensaje;
    }

}