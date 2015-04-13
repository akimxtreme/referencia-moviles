<?php

    include 'conexion.php';

    $i = $_GET['i'];

    $sql = mysql_query("SELECT blb_img_normal FROM tbl_modelos WHERE Lng_idmodelo=$i");

    header('Content-type: image/jpeg');

    if ($f=  mysql_fetch_array($sql)){

        echo $f[0];    
    }

?>