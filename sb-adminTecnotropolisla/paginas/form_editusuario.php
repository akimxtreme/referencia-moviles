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
    $nombre = $row['str_nombre'];
    $apellido = $row['str_apellido'];

    $correo = $row['str_correo'];
    $telefono = $row['str_telefono'];
    $rol = $row['str_rol'];
}
?>
<ol class="breadcrumb">
    <li><a href="#">Usuarios</a></li>
    <li><a href="#">Usuario</a></li>
    <li><a href="#">Buscar</a></li>
    <li class="active">Editar</li>
</ol>
<form id="formulario" name="formulario" action="./accionForm/form.php" method="post" data-toggle="validator" role="form">
    <div class="panel panel-default">

        <div class="panel-heading" style="text-transform: none;"><i class="glyphicon glyphicon-edit"></i>&nbsp; Editar Usuario</div>
        <div class="panel-body">


            <div class="panel panel-default"><br>
                <div class="form-horizontal" role="form">

                    <div class="form-group">
                        <label for="cedula" class="col-sm-2 control-label">&nbsp;Cédula</label>
                        <div class="col-sm-5">
                            <input type="number" value="<?= $cedula ?>" maxlength="8" class="form-control" id="cedula" name="cedula" placeholder="Cédula" readonly="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="col-sm-2 control-label">&nbsp;Nombre</label>
                        <div class="col-sm-5">
                            <input type="text" value="<?= $nombre ?>" class="form-control" id="nombre" name="nombre" placeholder="Nombre" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="apellido" class="col-sm-2 control-label">&nbsp;Apellido</label>
                        <div class="col-sm-5">
                            <input type="text" value="<?= $apellido ?>" class="form-control" id="apellido" name="apellido" placeholder="Apellido" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="correo" class="col-sm-2 control-label">Correo Electrónico</label>
                        <div class="col-sm-5">
                            <input type="email" value="<?= $correo ?>" class="form-control" id="correo" name="correo" placeholder="Correo Electrónico">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telefono" class="col-sm-2 control-label">Teléfono</label>
                        <div class="col-sm-5">
                            <input type="number" value="<?= $telefono ?>" maxlength="11" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="usuario" class="col-sm-2 control-label">&nbsp;Usuario</label>
                        <div class="col-sm-5">
                            <input type="text" value="<?= $usuario ?>" class="form-control" id="usuario" name="usuario" placeholder="Usuario" readonly="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="clave" class="col-sm-2 control-label">&nbsp;Clave</label>
                        <div class="col-sm-5">
                            <input type="password" value="" maxlength="15" class="form-control" id="clave" name="clave" placeholder="Clave" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="rol" class="col-sm-2 control-label">&nbsp;Rol</label>
                        <div class="col-sm-5">

                            <?php $sql1 = mysql_query("SELECT lng_idrol, str_rol FROM cat_roles"); ?>
                            <select id="rol" name="rol" class="form-control" >
                                <option selected="selected" value="">Seleccione</option>
                                <?php while ($row = mysql_fetch_array($sql1)) { ?>
                                    <option value="<?= $row['lng_idrol'] ?>" <?php if ($rol == $row['str_rol']) { ?>selected="selected"<?php } ?> ><?= $row['str_rol'] ?></option>                                         
                                <?php } ?>
                            </select> 

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

    <input type="hidden" id="accion" name="accion" value="form_editusuario" readonly="yes">
    <input type="hidden" id="lng_idusuario" name="lng_idusuario" value="<?= $_GET['id'] ?>" readonly="yes">
</form>