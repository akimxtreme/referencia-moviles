<?php

if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    session_start();

    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['password'] = $_POST['password'];

    include_once './conf/conexion.php';
    include_once './Clases/Crypt.class.php';

    if ($_SESSION['usuario'] != null && $_SESSION['password'] != null) {

        $crypt = new Crypt();
        $crypt->crypt_key('#$%&/()=?');

//        echo $passwordEnc = $crypt->encrypt($_SESSION['password']);
//        echo "<br>";
//        echo $crypt->decrypt($passwordEnc);

        $passwordEnc = $crypt->encrypt($_SESSION['password']);

        $consulta = "SELECT lng_idusuario, str_usuario, str_nombre, str_apellido, str_password, u.lng_idrol, r.str_rol as rol
                            FROM tbl_usuarios u
                            join cat_roles r on r.lng_idrol = u.lng_idrol
                            WHERE u.bol_eliminado = false and str_usuario = '" . $_SESSION['usuario'] . "' and str_password = '" . $passwordEnc . "' ";

        $sql = mysql_query($consulta);

        if ($row = mysql_fetch_array($sql)) {

            $_SESSION['lng_idusuario'] = $row['lng_idusuario'];
            $_SESSION['nombre'] = $row['str_nombre'];
            $_SESSION['apellido'] = $row['str_apellido'];
            $_SESSION['rol'] = $row['rol'];

            header("Location: inicio.php");
        } else {
            //echo $error = "El Usuario o Contrase&ntilde;a, no son v&aacute;lidos, verifique los datos e intente de nuevo.";
            header("Location: index.php?warning=true");
        }
    }
} else {

    header("Location: index.php?warning=true");
}
?>