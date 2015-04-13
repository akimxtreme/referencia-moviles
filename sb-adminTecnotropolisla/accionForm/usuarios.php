<?php

include_once '../Clases/odbc/UsuariosODBC.php';
include_once '../Clases/Crypt.class.php';


$crypt = new Crypt();
$crypt->crypt_key('#$%&/()=?');
$passwordEnc = $crypt->encrypt($_POST['clave']);

switch ($_POST['accion']) {

    case "form_addusuario":
        $usuarios = new UsuariosODBC;
        $usuarios->setStr_usuario($_POST['usuario']);
        $usuarios->setStr_cedula($_POST['cedula']);
        $usuarios->setStr_nombre($_POST['nombre']);
        $usuarios->setStr_apellido($_POST['apellido']);
        $usuarios->setStr_password($passwordEnc);
        $usuarios->setStr_correo($_POST['correo']);
        $usuarios->setStr_telefono($_POST['telefono']);
        $usuarios->setLng_idrol($_POST['rol']);
        $usuarios->agregarUsuarios($usuarios);
        break;

    case "form_editusuario":
        $usuarios = new UsuariosODBC;
        $usuarios->setLng_idusuario($_POST['lng_idusuario']);
        $usuarios->setStr_nombre($_POST['nombre']);
        $usuarios->setStr_apellido($_POST['apellido']);
        $usuarios->setStr_password($passwordEnc);
        $usuarios->setStr_correo($_POST['correo']);
        $usuarios->setStr_telefono($_POST['telefono']);
        $usuarios->setLng_idrol($_POST['rol']);
        $usuarios->actualizarUsuarios($usuarios);
        break;

    case "form_deleteusuario":
        $usuarios = new UsuariosODBC;
        $usuarios->setLng_idusuario($_POST['lng_idusuario']);
        $usuarios->eliminarUsuarios($usuarios);
        break;
}
?>