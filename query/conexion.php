<?php

    $con= mysql_connect("127.0.0.1", "root", "1234567890") or die ("Problemas a conectar al host");
    $bd=  mysql_select_db("tecnotropolisla", $con) or die("Error al conectar a la BD");

?>
