<?php
include_once '../conf/conexion.php';
$id = $_GET['id'];
$sql = mysql_query("SELECT blb_img_normal FROM tbl_noticias WHERE lng_idnoticia=".$_GET['id']);
header("Content-Type: image/jpeg; ");
if ($f = mysql_fetch_array($sql)) {
   echo $f['blb_img_normal'];
}
?>