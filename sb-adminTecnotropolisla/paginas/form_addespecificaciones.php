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
  <li><a href="#">Buscar</a></li>
  <li class="active">Especificaciones</li>
</ol>
<form id="formulario" name="formulario" action="./accionForm/form.php" method="post" data-toggle="validator" role="form">
    <div class="panel panel-default">

        <div class="panel-heading" style="text-transform: none;"> <i class="glyphicon glyphicon-list-alt"></i>&nbsp; Agregue la(s) Especificación(es)</div>
        <div class="panel-body">

            <div class="well details col-sm-12">
                <div class="col-sm-12">
                    <div class="col-xs-12 col-sm-10">
                        <h2 style="text-decoration:underline;"><?= $tipo ?></h2>

                        <p><strong>Gama: </strong><?= $gama ?> </p>

                        <div class="form-horizontal" role="form">

                            <div class="form-group">

                                <label for="especificacion" class="col-sm-2 control-label">Especificación</label>
                                <div class="col-sm-5">

                                    <?php $sql = mysql_query("SELECT lng_idespecificacion,str_especificacion FROM cat_especificaciones
                                                                where lng_idespecificacion not in
                                                                (
                                                                  select lng_idespecificacion from tbl_modelos_especificaciones where lng_idmodelo =" . $_GET['id'] . "
                                                                )"); ?>
                                    <select id="especificacion" name="especificacion" class="form-control">
                                        <option selected="selected" value="">Seleccione</option>
                                        <?php while ($row = mysql_fetch_array($sql)) { ?>
                                            <option value="<?= $row['lng_idespecificacion'] ?>"><?= $row['str_especificacion'] ?></option> 
                                        <?php } ?>
                                    </select> 

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="valor" class="col-sm-2 control-label">Valor</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="valor" name="valor" placeholder="Escriba el modelo del móvil">
                                    <input id="a" name="a" type="hidden" value="" >
                                    <br>
                                    <button type="button" class="btn btn-success" onclick="agregar()">Agregar</button>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">

                            <table id="tabla" class="table table-bordered text-center">
                                <tr>
                                    <th class="text-center">Especificaciones</th>
                                    <th class="text-center">Valores</th>
                                    <th class="text-center" style="width: 100px">Quitar</th>
                                </tr>
                            </table>

                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-4 col-lg-1 text-center">                        
                        <figure>

                            <img src='./imagenes/imagenes.php?id=<?= $_GET['id'] ?>'>

                            <span style="font-size:75px; padding-top: 20px;"><?= $marca ?></span>                                 
                            <span class="avg"><?= $modelo ?></span>           
                        </figure>
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
    <input type="hidden" id="accion" name="accion" value="form_addespecificaciones" readonly="yes">

    <input type="hidden" id="lng_idmodelo" name="lng_idmodelo" value="<?= $_GET['id'] ?>" readonly="yes">

</form>