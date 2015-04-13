<?php

include_once '../Clases/odbc/NoticiasODBC.php';

$noticias = new NoticiasODBC;

if($lng_idnoticia != ""){
    $noticias->setLng_idnoticia($lng_idnoticia);
}else{
    $noticias->setLng_idnoticia($_POST['lng_idnoticia']);
}

$mini = addslashes(file_get_contents($_FILES['mini']['tmp_name']));
$grande = addslashes(file_get_contents($_FILES['grande']['tmp_name']));

$noticias->setBlb_img_mini($mini);
$noticias->setBlb_img_normal($grande);
$noticias->setLng_idusuario($_SESSION['lng_idusuario']);

$inputMini = $_FILES['mini']['name'];
$inputNormal = $_FILES['grande']['name'];

if ($inputMini != "") {
    //echo "mini";
    $campo = "blb_img_mini";
    $noticias->actualizarImagenes($noticias, $campo);
}

if ($inputNormal != "") {
    //echo "normal";
    $campo = "blb_img_normal";
    $noticias->actualizarImagenes($noticias, $campo);
}

/*
  foreach($_FILES as $file)
  {
  echo $_FILES['mini']['name'];
  echo "<br>";
  }
 */
?>