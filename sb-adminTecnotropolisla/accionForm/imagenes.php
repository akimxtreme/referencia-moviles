<?php

include_once '../Clases/odbc/ModelosODBC.php';

$modelos = new ModelosODBC;
$modelos->setLng_idmodelo($_POST['lng_idmodelo']);

$mini = addslashes(file_get_contents($_FILES['mini']['tmp_name']));
$grande = addslashes(file_get_contents($_FILES['grande']['tmp_name']));
$galeria1 = addslashes(file_get_contents($_FILES['galeria1']['tmp_name']));
$galeria2 = addslashes(file_get_contents($_FILES['galeria2']['tmp_name']));
$galeria3 = addslashes(file_get_contents($_FILES['galeria3']['tmp_name']));

$modelos->setBlb_img_mini($mini);
$modelos->setBlb_img_normal($grande);
$modelos->setBlb_img_galeria1($galeria1);
$modelos->setBlb_img_galeria2($galeria2);
$modelos->setBlb_img_galeria3($galeria3);
$modelos->setLng_idusuario($_SESSION['lng_idusuario']);

$inputMini = $_FILES['mini']['name'];
$inputNormal = $_FILES['grande']['name'];
$inputGaleria1 = $_FILES['galeria1']['name'];
$inputGaleria2 = $_FILES['galeria2']['name'];
$inputGaleria3 = $_FILES['galeria3']['name'];

if ($inputMini != "") {
    //echo "mini";
    $campo = "blb_img_mini";
    $modelos->actualizarImagenes($modelos, $campo);
}

if ($inputNormal != "") {
    //echo "normal";
    $campo = "blb_img_normal";
    $modelos->actualizarImagenes($modelos, $campo);
}

if ($inputGaleria1 != "") {
    //echo "galeria1";
    $campo = "blb_img_galeria1";
    $modelos->actualizarImagenes($modelos, $campo);
}

if ($inputGaleria2 != "") {
    //echo "galeria2";
    $campo = "blb_img_galeria2";
    $modelos->actualizarImagenes($modelos, $campo);
}

if ($inputGaleria3 != "") {
    //echo "galeria3";
    $campo = "blb_img_galeria3";
    $modelos->actualizarImagenes($modelos, $campo);
}

/*
  foreach($_FILES as $file)
  {
  echo $_FILES['mini']['name'];
  echo "<br>";
  }
 */
?>