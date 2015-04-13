<?php

include_once '../../conf/conexion.php';

class UsuariosODBC extends Usuarios {

    public function agregarUsuarios($usuarios) {

        $insertar = 'INSERT INTO tbl_usuarios(str_usuario, str_cedula, str_nombre, str_apellido, str_password, str_correo, '
                . 'str_telefono, lng_idrol, dmt_fecha, bol_eliminado) '
                . 'VALUES ("' . $usuarios->getStr_usuario() . '","' . $usuarios->getStr_cedula() . '",'
                . '"' . $usuarios->getStr_nombre() . '","' . $usuarios->getStr_apellido() . '",'
                . '"' . $usuarios->getStr_password() . '","' . $usuarios->getStr_correo() . '","' . $usuarios->getStr_telefono() . '",' . $usuarios->getLng_idrol() . ', date(now()), false);';

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

    public function actualizarUsuarios($usuarios) {

        $actualizar = 'UPDATE tbl_usuarios SET str_nombre="' . $usuarios->getStr_nombre() . '",'
                . 'str_apellido="' . $usuarios->getStr_apellido() . '",str_password="' . $usuarios->getStr_password() . '",'
                . 'str_correo="' . $usuarios->getStr_correo() . '",str_telefono="' . $usuarios->getStr_telefono() . '",'
                . 'lng_idrol=' . $usuarios->getLng_idrol() . ' '
                . 'WHERE lng_idusuario = ' . $usuarios->getLng_idusuario() . ' ';

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

    public function eliminarUsuarios($usuarios) {

        $actualizar = 'UPDATE tbl_usuarios SET bol_eliminado=true WHERE lng_idusuario = ' . $usuarios->getLng_idusuario() . ' ';

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