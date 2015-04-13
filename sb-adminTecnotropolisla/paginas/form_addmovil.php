<?php
session_start();
require_once("../conf/conexion.php");
?>
<ol class="breadcrumb">
  <li><a href="#">Equipos</a></li>
  <li><a href="#">Equipo</a></li>
  <li class="active">Agregar</li>
</ol>
<form id="formulario" name="formulario" action="./accionForm/form.php" method="post" data-toggle="validator" role="form">
    <div class="panel panel-default">
        <div class="panel-heading" style="text-transform: none;"> <i class="glyphicon glyphicon-save"></i>&nbsp;Agregar Equipo(s)</div>
        <div class="panel-body">

            <div class="panel panel-default"><br>
                <div class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="tipo" class="col-sm-2 control-label glyphicon-asterisk">&nbsp;Tipo</label>
                        <div class="col-sm-5">

                            <?php $sql = mysql_query("SELECT lng_iddato_maestro, str_descripcion FROM cat_datos_maestros WHERE  str_tipo = 'Tipo de Equipo'"); ?>
                            <select id="tipo" name="tipo" class="form-control" required="">
                                <option selected="selected" value="">Seleccione</option>
                                <?php while ($row = mysql_fetch_array($sql)) { ?>
                                    <option value="<?= $row['lng_iddato_maestro'] ?>"><?= $row['str_descripcion'] ?></option> 
                                <?php } ?>
                            </select> 

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="gama" class="col-sm-2 control-label glyphicon-asterisk">&nbsp;Gama</label>
                        <div class="col-sm-5">

                            <?php $sql = mysql_query("SELECT lng_iddato_maestro, str_descripcion FROM cat_datos_maestros WHERE  str_tipo = 'Gama'"); ?>
                            <select id="gama" name="gama" class="form-control" required="">
                                <option selected="selected" value="">Seleccione</option>
                                <?php while ($row = mysql_fetch_array($sql)) { ?>
                                    <option value="<?= $row['lng_iddato_maestro'] ?>"><?= $row['str_descripcion'] ?></option> 
                                <?php } ?>
                            </select> 

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="marca" class="col-sm-2 control-label glyphicon-asterisk">&nbsp;Marca</label>
                        <div class="col-sm-5">

                            <?php $sql = mysql_query("SELECT lng_idmarca, str_marca FROM cat_marcas order by str_marca asc"); ?>
                            <select id="marca" name="marca" class="form-control" required="">
                                <option selected="selected" value="">Seleccione</option>
                                <?php while ($row = mysql_fetch_array($sql)) { ?>
                                    <option value="<?= $row['lng_idmarca'] ?>"><?= $row['str_marca'] ?></option> 
                                <?php } ?>
                            </select> 

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="modelo" class="col-sm-2 control-label glyphicon-asterisk">&nbsp;Modelo</label>
                        <div class="col-sm-5">
                            <input type="text" id="modelo" name="modelo" class="form-control" placeholder="Escriba el modelo del equipo">

                            <br>
                            <button type="button" class="btn btn-success" onclick="agregar2()">Agregar</button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="panel panel-default">

                <table id="tabla" class="table table-bordered text-center">
                    <tr>
                        <th class="text-center">&nbsp;Tipo</th>
                        <th class="text-center">&nbsp;Gama</th>
                        <th class="text-center">&nbsp;Marca</th>
                        <th class="text-center">&nbsp;Modelo</th>
                        <th class="text-center" style="width: 100px">Quitar</th>
                    </tr>
                </table>

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

    <input type="hidden" id="accion" name="accion" value="form_addmovil" readonly="yes">

</form>