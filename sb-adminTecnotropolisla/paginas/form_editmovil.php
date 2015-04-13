<?php
session_start();
require_once("../conf/conexion.php");
//echo "-->".$_GET['id'];           
$consulta = "SELECT lng_idmodelo,str_modelo as modelo,blb_img_normal,marcas.lng_idmarca,marcas.str_marca as marca,lng_idtipo_equipo,maestro.str_descripcion as tipo,lng_idgama,maestro2.str_descripcion as gama 
                    FROM tbl_modelos modelos
                    join cat_marcas marcas on marcas.lng_idmarca = modelos.lng_idmarca
                    join cat_datos_maestros maestro on maestro.lng_iddato_maestro = modelos.lng_idtipo_equipo
                    join cat_datos_maestros maestro2 on maestro2.lng_iddato_maestro = modelos.lng_idgama where lng_idmodelo =" . $_GET['id'] . " and modelos.bol_eliminado = false";
$sql = mysql_query($consulta);

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
  <li class="active">Editar</li>
</ol>
<form id="formulario" name="formulario" action="./accionForm/form.php" method="post" data-toggle="validator" role="form" enctype="multipart/form-data">
    <div class="panel panel-default">
        <div class="panel-heading" style="text-transform: none;"> <i class="glyphicon glyphicon-edit"></i>&nbsp;Editar Equipo</div>
        <div class="panel-body">

            <ul class="nav nav-tabs" role="tablist" id="myTab">
                <li class="active"><a href="#home" role="tab" data-toggle="tab">Características</a></li>
                <li><a href="#messages" role="tab" data-toggle="tab">Especificaciones</a></li>
                <li><a href="#profile" role="tab" data-toggle="tab">Imágenes</a></li>

            </ul>

            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">

                    <div class="panel panel-default"><br>
                        <div class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="tipo" class="col-sm-2 control-label">Tipo</label>
                                <div class="col-sm-5">

                                    <?php $sql1 = mysql_query("SELECT lng_iddato_maestro, str_descripcion FROM cat_datos_maestros WHERE  str_tipo = 'Tipo de Equipo'"); ?>
                                    <select id="tipo" name="tipo" class="form-control" >
                                        <option selected="selected" value="">Seleccione</option>
                                        <?php while ($row = mysql_fetch_array($sql1)) { ?>
                                            <option value="<?= $row['lng_iddato_maestro'] ?>" <?php if ($tipo == $row['str_descripcion']) { ?>selected="selected"<?php } ?> ><?= $row['str_descripcion'] ?></option>                                         
                                        <?php } ?>
                                    </select> 

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="gama" class="col-sm-2 control-label">Gama</label>
                                <div class="col-sm-5">

                                    <?php $sql = mysql_query("SELECT lng_iddato_maestro, str_descripcion FROM cat_datos_maestros WHERE  str_tipo = 'Gama'"); ?>
                                    <select id="gama" name="gama" class="form-control" >
                                        <option selected="selected" value="">Seleccione</option>
                                        <?php while ($row = mysql_fetch_array($sql)) { ?>
                                            <option value="<?= $row['lng_iddato_maestro'] ?>" <?php if ($gama == $row['str_descripcion']) { ?>selected="selected"<?php } ?> ><?= $row['str_descripcion'] ?></option>                                         
                                        <?php } ?>
                                    </select> 

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Marca</label>
                                <div class="col-sm-5">

                                    <?php $sql = mysql_query("SELECT lng_idmarca, str_marca FROM cat_marcas order by str_marca asc"); ?>
                                    <select id="marca" name="marca" class="form-control" >
                                        <option selected="selected" value="">Seleccione</option>
                                        <?php while ($row = mysql_fetch_array($sql)) { ?>
                                            <option value="<?= $row['lng_idmarca'] ?>" <?php if ($marca == $row['str_marca']) { ?>selected="selected"<?php } ?> ><?= $row['str_marca'] ?></option>                                          
                                        <?php } ?>
                                    </select> 

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="modelo" class="col-sm-2 control-label">Modelo</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="modelo" name="modelo" value="<?= $modelo ?>" placeholder="Escriba el modelo del movil">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="messages">

                    <br>
                    <div class="panel panel-default">

                        <table id="tabla" class="table table-bordered text-center">
                            <tr>
                                <th class="text-center">Especificaciones</th>
                                <th class="text-center">Valores</th>
                            </tr>

                            <?php
                            $consulta = "SELECT mod_espe.lng_idespecificacion, cat_espe.str_especificacion as especificacion, mod_espe.str_valor as valor
                                            FROM tbl_modelos_especificaciones mod_espe
                                            join cat_especificaciones cat_espe on cat_espe.lng_idespecificacion = mod_espe.lng_idespecificacion
                                            WHERE lng_idmodelo = " . $_GET['id'];

                            $sql = mysql_query($consulta);
                            $i = 0;
                            while ($row = mysql_fetch_array($sql)) {
                                ?>
                                <tr>
                                    <td class="text-center">
                                        <?= $row['especificacion'] ?>
                                        <input type="hidden" id="especificaciones" name="especificaciones[<?= $i ?>]" value="<?= $row['lng_idespecificacion'] ?>" class="form-control" placeholder="">
                                    </td>
                                    <td class="text-center">
                                        <input type="text" id="valores" name="valores[<?= $i ?>]" value="<?= $row['valor'] ?>" class="form-control" placeholder="Escriba el valor">
                                    </td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>
                        </table>
                    </div>         

                </div>

                <div class="tab-pane fade" id="profile">

                    <div class="form-horizontal" role="form">

                        <div class="panel panel-default">
                            <div class="panel-heading">Movil</div>
                            <div class="panel-body">
                                <div class="form-group">

                                    <div class="form-group">
                                        <label for="mini" class="col-sm-2 control-label">Mini</label>
                                        <div class="col-sm-10">
                                            <input name="mini" id="mini" type="file">
                                            <output id="img_mini"></output>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">

                                    <div class="form-group">
                                        <label for="grande" class="col-sm-2 control-label">Grande</label>
                                        <div class="col-sm-10">
                                            <input type="file" id="grande" name="grande">
                                            <output id="img_grande"></output>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">Galeria</div>
                            <div class="panel-body">
                                <div class="form-group">

                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Galeria 1</label>
                                        <div class="col-sm-10">
                                            <input type="file" id="galeria1" name="galeria1">
                                            <output id="img_galeria1"></output>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">

                                    <div class="form-group">
                                        <label for="galeria2" class="col-sm-2 control-label">Galeria 2</label>
                                        <div class="col-sm-10">
                                            <input type="file" id="galeria2" name="galeria2">
                                            <output id="img_galeria2"></output>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">

                                    <div class="form-group">
                                        <label for="galeria3" class="col-sm-2 control-label">Galeria 3</label>
                                        <div class="col-sm-10">
                                            <input type="file" id="galeria3" name="galeria3">
                                            <output id="img_galeria3"></output>
                                        </div>
                                    </div>
                                </div>  

                            </div>
                        </div>

                        <div class="form-inline" role="form">

                            <div class="form-group">
                                <div class="col-sm-5">
                                    <button type="submit" class="btn btn-primary">Editar</button>
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

            </div>

        </div>
    </div>

    <input type="hidden" id="accion" name="accion" value="form_editmovil" readonly="yes">
    <input type="hidden" id="lng_idmodelo" name="lng_idmodelo" value="<?= $_GET['id'] ?>" readonly="yes">
</form>