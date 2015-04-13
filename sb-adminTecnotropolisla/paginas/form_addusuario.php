<?php
session_start();
require_once("../conf/conexion.php");
?>
<ol class="breadcrumb">
  <li><a href="#">Usuarios</a></li>
  <li><a href="#">Usuario</a></li>
  <li class="active">Agregar</li>
</ol>
<form id="formulario" name="formulario" action="./accionForm/form.php" method="post" data-toggle="validator" role="form">
    <div class="panel panel-default">

        <div class="panel-heading" style="text-transform: none;"> <i class="fa fa-user"></i>&nbsp; Agregar Usuario</div>
        <div class="panel-body">


            <div class="panel panel-default"><br>
                <div class="form-horizontal" role="form">

                    <div class="form-group">
                        <label for="cedula" class="col-sm-2 control-label glyphicon-asterisk">&nbsp;Cédula</label>
                        <div class="col-sm-5">
                            <input type="number" maxlength="8" class="form-control" id="cedula" name="cedula" placeholder="Cédula" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="col-sm-2 control-label glyphicon-asterisk">&nbsp;Nombre</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="apellido" class="col-sm-2 control-label glyphicon-asterisk">&nbsp;Apellido</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="correo" class="col-sm-2 control-label">Correo Electrónico</label>
                        <div class="col-sm-5">
                            <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo Electrónico">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telefono" class="col-sm-2 control-label">Teléfono</label>
                        <div class="col-sm-5">
                            <input type="number" maxlength="11" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="usuario" class="col-sm-2 control-label glyphicon-asterisk">&nbsp;Usuario</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="clave" class="col-sm-2 control-label glyphicon-asterisk">&nbsp;Clave</label>
                        <div class="col-sm-5">
                            <input type="password" maxlength="15" class="form-control" id="clave" name="clave" placeholder="Clave" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="rol" class="col-sm-2 control-label glyphicon-asterisk">&nbsp;Rol</label>
                        <div class="col-sm-5">
                            <select id="rol"  name="rol" class="form-control" required="">
                                <option value="">Seleccione</option>
                                <option value="1">Administrador</option>
                                <option value="2">Usuario</option>
                            </select>
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

    <input type="hidden" id="accion" name="accion" value="form_addusuario" readonly="yes">

</form>