<?php

include_once '../../conf/conexion.php';

class NoticiasODBC extends Noticias {

    public function agregarNoticias($noticias) {

        $insertar = 'INSERT INTO tbl_noticias(str_titulo, str_subtitulo, str_contenido, '
                . 'dmt_fecha, bol_eliminado, lng_idusuario) VALUES ("' . $noticias->getStr_titulo() . '",'
                . '"' . $noticias->getStr_subtitulo() . '","' . $noticias->getStr_contenido() . '",date(now()),false,' . $noticias->getLng_idusuario() . ');';

        //echo $insertar."<br>";
        //die();
        $sql = mysql_query($insertar);
        if ($sql) {

            $mensaje = "Datos Agregados";
        } else {

            $mensaje = mysql_error();
        }

        return mysql_insert_id();
    }

    public function actualizarNoticias($noticias) {

        $actualizar = 'UPDATE tbl_noticias SET str_titulo="' . $noticias->getStr_titulo() . '",'
                . 'str_subtitulo="' . $noticias->getStr_subtitulo() . '",'
                . 'str_contenido="' . $noticias->getStr_contenido() . '",'
                . 'dmt_fecha=date(now()), lng_idusuario=' . $noticias->getLng_idusuario() . ' WHERE lng_idnoticia = ' . $noticias->getLng_idnoticia() . '';

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

    public function actualizarImagenes($noticias, $campo) {

        switch ($campo) {

            case "blb_img_mini":$get = $noticias->getBlb_img_mini();
                break;

            case "blb_img_normal":$get = $noticias->getBlb_img_normal();
                break;
        }

        $actualizar = "UPDATE tbl_noticias SET " . $campo . "='" . $get . "', "
                . "dmt_fecha=date(now()),lng_idusuario=" . $noticias->getLng_idusuario() . " WHERE lng_idnoticia =" . $noticias->getLng_idnoticia();

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

    public function eliminarNoticias($noticias) {

        $actualizar = 'UPDATE tbl_noticias SET bol_eliminado= true, lng_idusuario=' . $noticias->getLng_idusuario() . ' WHERE lng_idnoticia =' . $noticias->getLng_idnoticia() . '';

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