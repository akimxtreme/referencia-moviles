<?php
session_start();
require_once("../conf/conexion.php");
//echo "-->".$_GET['id'];           
$consulta = "SELECT lng_idmodelo,str_modelo as modelo,blb_img_normal,marcas.lng_idmarca,marcas.str_marca as marca,lng_idtipo_equipo,maestro.str_descripcion as tipo,lng_idgama,maestro2.str_descripcion as gama 
                    FROM tbl_modelos modelos
                    join cat_marcas marcas on marcas.lng_idmarca = modelos.lng_idmarca
                    join cat_datos_maestros maestro on maestro.lng_iddato_maestro = modelos.lng_idtipo_equipo
                    join cat_datos_maestros maestro2 on maestro2.lng_iddato_maestro = modelos.lng_idgama where lng_idmodelo =" . $_GET['id'];
$sql = mysql_query($consulta);


header("Content-Type: image/jpeg");


if ($row = mysql_fetch_array($sql)) {

    $tipo = $row['tipo'];
    $gama = $row['gama'];
    $marca = $row['marca'];
    $modelo = $row['modelo'];
    $imagen = $row['blb_img_normal'];
}
?>
<ol class="breadcrumb">
  <li><a href="#">Equipos</a></li>
  <li><a href="#">Buscar</a></li>
  <li class="active">Eliminar</li>
</ol>
<form id="formulario" name="formulario" action="./accionForm/form.php" method="post" data-toggle="validator" role="form">
<div class="panel panel-default">

    <div class="panel-heading" style="text-transform: none;"> <i class="fa fa-fw fa-tablet"></i>&nbsp; Eliminar Equipo</div>
    <div class="panel-body">

        <div class="well details col-sm-12">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <h2 style="text-decoration:underline;"><?= $tipo ?></h2>

                    <p><strong>Gama: </strong><?= $gama ?> </p>
                    <p class="text-center skills"><strong>Especificaciones</strong></p>

                    <ul class="list-group">
                        
                            <?php
                            $consulta = "SELECT mod_espe.lng_idespecificacion, cat_espe.str_especificacion as especificacion, mod_espe.str_valor as valor
                                            FROM tbl_modelos_especificaciones mod_espe
                                            join cat_especificaciones cat_espe on cat_espe.lng_idespecificacion = mod_espe.lng_idespecificacion
                                            WHERE lng_idmodelo = " . $_GET['id'];

                            $sql = mysql_query($consulta);


                            while ($row = mysql_fetch_array($sql)) {
                                ?>
                                <li class="list-group-item">
                                    <span class="badge"><?= $row['valor'] ?></span><?= $row['especificacion'] ?>
                                </li>  
                                <?php }
                                ?>
 
                        </ul>

                    </div>
                    <div class="col-xs-12 col-sm-4 col-lg-1 text-center">                        
                        <figure>

                           <?php //include './imagenes.php';?>
                           
                            <span style="font-size:40px; padding-top: 20px;"><?= $marca ?></span>                                 
                            <span class="avg"><?= $modelo ?></span>           
                    </figure>
                </div>
            </div>                
        </div>

        <div class="form-inline" role="form">

            <div class="form-group">
                <div class="col-sm-5">
                    <button type="submit" onclick="" class="btn btn-danger">Eliminar</button>
                </div>
            </div>

        </div> 

    </div>

    <style>
        body {
            font-family: "Segoe UI", 'sans-serif';
        }

        .avg {
            font-size:40px; 
            padding-top: 20px;
            color:#5CB85C;
        }

        .details {
            min-height: 355px;
            display: inline-block;
        }
    </style>


</div>

    <input type="hidden" id="accion" name="accion" value="form_deletemovil" readonly="yes">
    <input type="hidden" id="lng_idmodelo" name="lng_idmodelo" value="<?= $_GET['id'] ?>" readonly="yes">
</form>