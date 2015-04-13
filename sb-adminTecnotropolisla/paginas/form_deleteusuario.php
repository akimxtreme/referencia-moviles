<?php
session_start();
require_once("../conf/conexion.php");
//echo "-->".$_GET['id'];           
$consulta = "SELECT lng_idusuario, str_usuario, str_cedula, str_nombre, str_apellido, str_password, str_correo, str_telefono, u.lng_idrol, r.str_rol, dmt_fecha, u.bol_eliminado 
                FROM tbl_usuarios u
                join cat_roles r on r.lng_idrol = u.lng_idrol
                WHERE u.bol_eliminado = false and lng_idusuario =" . $_GET['id'] . " ";

$sql = mysql_query($consulta);

if ($row = mysql_fetch_array($sql)) {
    $usuario = $row['str_usuario'];
    $cedula = $row['str_cedula'];
    $nombre= $row['str_nombre'];
    $apellido= $row['str_apellido'];
    
    $correo = $row['str_correo'];
    $telefono = $row['str_telefono'];
    $rol = $row['str_rol'];
}
?>
<ol class="breadcrumb">
  <li><a href="#">Usuarios</a></li>
  <li><a href="#">Usuario</a></li>
  <li><a href="#">Buscar</a></li>
  <li class="active">Consultar</li>
</ol>
<form id="formulario" name="formulario" action="./accionForm/form.php" method="post" data-toggle="validator" role="form">
    <div class="panel panel-default">

        <div class="panel-heading" style="text-transform: none;"><i class="fa fa-fw fa-users"></i>&nbsp; Eliminar Usuario</div>
        <div class="panel-body">


            <div class="panel panel-default"><br>
                <div class="form-horizontal" role="form">

                    <div class="form-group">
                        <label for="cedula" class="col-sm-2 control-label">&nbsp;Cédula</label>
                        <div class="col-sm-5">
                            <?=$cedula?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="col-sm-2 control-label">&nbsp;Nombre</label>
                        <div class="col-sm-5">
                            <?=$nombre?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="apellido" class="col-sm-2 control-label">&nbsp;Apellido</label>
                        <div class="col-sm-5">
                            <?=$apellido?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="correo" class="col-sm-2 control-label">Correo Electrónico</label>
                        <div class="col-sm-5">
                            <?=$correo?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telefono" class="col-sm-2 control-label">Teléfono</label>
                        <div class="col-sm-5">
                            <?=$telefono?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="usuario" class="col-sm-2 control-label">&nbsp;Usuario</label>
                        <div class="col-sm-5">
                            <?=$usuario?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="rol" class="col-sm-2 control-label">&nbsp;Rol</label>
                        <div class="col-sm-5">
                            <?=$rol?>
                        </div>
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

    </div>

    <input type="hidden" id="accion" name="accion" value="form_deleteusuario" readonly="yes">
    <input type="hidden" id="lng_idusuario" name="lng_idusuario" value="<?= $_GET['id'] ?>" readonly="yes">
</form>