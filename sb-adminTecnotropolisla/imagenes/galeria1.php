<?php
include_once '../conf/conexion.php';
$id = $_GET['id'];
$sql = mysql_query("SELECT blb_img_galeria1 FROM tbl_modelos WHERE lng_idmodelo=".$_GET['id']);
header("Content-Type: image/jpeg; ");
if ($f = mysql_fetch_array($sql)) {
   echo $f['blb_img_galeria1'];
}
?>