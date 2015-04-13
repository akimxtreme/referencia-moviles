<?php
session_start();
require_once("../conf/conexion.php");
//echo "-->".$_GET['id'];           
$consulta = "SELECT lng_idmodelo,str_modelo as modelo,marcas.lng_idmarca,marcas.str_marca as marca,lng_idtipo_equipo,maestro.str_descripcion as tipo,lng_idgama,maestro2.str_descripcion as gama 
                    FROM tbl_modelos modelos
                    join cat_marcas marcas on marcas.lng_idmarca = modelos.lng_idmarca
                    join cat_datos_maestros maestro on maestro.lng_iddato_maestro = modelos.lng_idtipo_equipo
                    join cat_datos_maestros maestro2 on maestro2.lng_iddato_maestro = modelos.lng_idgama where lng_idmodelo =" . $_GET['id'];
$sql = mysql_query("$consulta");

if ($row = mysql_fetch_array($sql)) {

    $tipo = $row['tipo'];
    $gama = $row['gama'];
    $marca = $row['marca'];
    $modelo = $row['modelo'];
}
?>
<ol class="breadcrumb">
  <li><a href="#">Equipos</a></li>
  <li><a href="#">Imágenes</a></li>
  <li><a href="#">Buscar</a></li>
  <li class="active">Agregar</li>
</ol>
<form id="formulario" name="formulario" action="./accionForm/form.php" method="post" data-toggle="validator" role="form" enctype="multipart/form-data">
<div class="panel panel-default">

    <div class="panel-heading" style="text-transform: none;"> <i class="glyphicon glyphicon-picture"></i>&nbsp; Agregue las Imágenes</div>
    <div class="panel-body">

                <div class="form-horizontal" role="form">

                    <div class="panel panel-default">
                        <div class="panel-heading">Equipo</div>
                        <div class="panel-body">
                            <div class="form-group">

                                <div class="form-group">
                                    <label for="mini" class="col-sm-2 control-label glyphicon-asterisk">&nbsp;Mini</label>
                                    <div class="col-sm-10">
                                        <input type="file" id="mini" name="mini" required="">
                                        <output id="img_mini"></output>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">

                                <div class="form-group">
                                    <label for="grande" class="col-sm-2 control-label glyphicon-asterisk">&nbsp;Grande</label>
                                    <div class="col-sm-10">
                                        <input type="file" id="grande" name="grande" required="">
                                        <output id="img_grande"></output>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">Galería</div>
                        <div class="panel-body">
                            <div class="form-group">

                                <div class="form-group">
                                    <label for="galeria1" class="col-sm-2 control-label">Galería 1</label>
                                    <div class="col-sm-10">
                                        <input type="file" id="galeria1" name="galeria1" >
                                        <output id="img_galeria1"></output>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">

                                <div class="form-group">
                                    <label for="galeria2" class="col-sm-2 control-label">Galería 2</label>
                                    <div class="col-sm-10">
                                        <input type="file" id="galeria2" name="galeria2" >
                                        <output id="img_galeria2"></output>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">

                                <div class="form-group">
                                    <label for="galeria3" class="col-sm-2 control-label">Galería 3</label>
                                    <div class="col-sm-10">
                                        <input type="file" id="galeria3" name="galeria3" >
                                        <output id="img_galeria3"></output>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="form-inline" role="form">

                        <div class="form-group">
                            <div class="col-sm-5">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-5">
                                <button type="reset" class="btn btn-warning">Resetear</button>
                            </div>
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
    <input type="hidden" id="accion" name="accion" value="form_addimagenes" readonly="yes">
    
    <input type="hidden" id="lng_idmodelo" name="lng_idmodelo" value="<?=$_GET['id']?>" readonly="yes">
    
</form>