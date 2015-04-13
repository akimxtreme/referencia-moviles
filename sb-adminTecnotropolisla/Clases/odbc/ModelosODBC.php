<?php

include_once '../../conf/conexion.php';

class ModelosODBC extends Modelos {

    public function agregarModelos($modelos) {

        $insertar = 'INSERT INTO tbl_modelos(str_modelo, dmt_fecha, lng_idusuario, bol_eliminado, lng_idmarca, lng_idtipo_equipo, '
                . 'lng_idgama, str_friendly_url) VALUES ("' . $modelos->getStr_modelo() . '",date(now()),' . $modelos->getLng_idusuario() . ',false,'
                . '' . $modelos->getLng_idmarca() . ',' . $modelos->getLng_idtipo_equipo() . ','
                . '' . $modelos->getLng_idgama() . ',"' . $modelos->getStr_friendly_url() . '");';

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

    public function actualizarModelos($modelos) {

        $actualizar = 'UPDATE tbl_modelos SET str_modelo="' . $modelos->getStr_modelo() . '",lng_idusuario=' . $modelos->getLng_idusuario() . ','
                . 'lng_idmarca=' . $modelos->getLng_idmarca() . ',lng_idtipo_equipo=' . $modelos->getLng_idtipo_equipo() . ','
                . 'lng_idgama=' . $modelos->getLng_idgama() . ' WHERE lng_idmodelo =' . $modelos->getLng_idmodelo() . '';

        //echo $actualizar;
        //die();
        $sql = mysql_query($actualizar);
        if ($sql) {

            $mensaje = "Datos Actualizados";
        } else {

            $mensaje = mysql_error();
        }

        return $mensaje;
    }

    public function actualizarImagenes($modelos, $campo) {

        switch ($campo) {

            case "blb_img_mini":$get = $modelos->getBlb_img_mini();break;

            case "blb_img_normal":$get = $modelos->getBlb_img_normal();break;

            case "blb_img_galeria1":$get = $modelos->getBlb_img_galeria1();break;

            case "blb_img_galeria2":$get = $modelos->getBlb_img_galeria2();break;

            case "blb_img_galeria3":$get = $modelos->getBlb_img_galeria3();break;
        }

        $actualizar = "UPDATE tbl_modelos SET " . $campo . "='" . $get. "', "
                . "dmt_fecha=date(now()),lng_idusuario=" . $modelos->getLng_idusuario() . " WHERE lng_idmodelo =" . $modelos->getLng_idmodelo();

        //echo $actualizar;
        //die();
        $sql = mysql_query($actualizar);
        if ($sql) {

            $mensaje = "Datos Actualizados";
        } else {

            $mensaje = mysql_error();
        }

        return $mensaje;
    }

    public function eliminarModelos($modelos) {

        $actualizar = 'UPDATE tbl_modelos SET bol_eliminado= true, lng_idusuario=' . $modelos->getLng_idusuario() . ' WHERE lng_idmodelo =' . $modelos->getLng_idmodelo() . '';

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
