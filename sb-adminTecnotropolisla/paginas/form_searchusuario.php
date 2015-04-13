<?php
session_start();
require_once("../conf/conexion.php");
//echo $_GET['valor'];
?>
<ol class="breadcrumb">
    <li><a href="#">Usuarios</a></li>
    <li><a href="#">Usuario</a></li>
    <li class="active">Buscar</li>
</ol>
<div class="panel panel-default">
    <div class="panel-heading" style="text-transform: none;"> <i class="glyphicon glyphicon-search"></i>&nbsp;Buscar Usuario</div>
    <div class="panel-body">

        <div id="main">

            <div id="demo">
                <table class="tablesorter table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Cédula</th>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th class="filter-select filter-exact" data-placeholder="Seleccione">Rol</th>
                    </thead>
                    <tfoot>

                        <tr>
                            <th colspan="7" class="ts-pager form-horizontal">
                                <button type="button" class="btn first"><i class="icon-step-backward glyphicon glyphicon-step-backward"></i></button>
                                <button type="button" class="btn prev"><i class="icon-arrow-left glyphicon glyphicon-backward"></i></button>
                                <span class="pagedisplay"></span> <!-- this can be any element, including an input -->
                                <button type="button" class="btn next"><i class="glyphicon glyphicon-forward"></i></button>
                                <button type="button" class="btn last"><i class="icon-step-forward glyphicon glyphicon-step-forward"></i></button>
                                <select class="pagesize input-mini" title="Selecione cantidad de registros por página">
                                    <option selected="selected" value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                </select>
                                <select class="pagenum input-mini" title="Selecione el número de página"></select>
                            </th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <?php
                        $consulta = "SELECT lng_idusuario, str_usuario, str_cedula, str_nombre, str_apellido, str_password, str_correo, str_telefono, u.lng_idrol, r.str_rol, dmt_fecha, u.bol_eliminado 
                                    FROM tbl_usuarios u
                                    join cat_roles r on r.lng_idrol = u.lng_idrol
                                    WHERE u.bol_eliminado = false";

                        $sql = mysql_query("$consulta");
                        while ($row = mysql_fetch_array($sql)) {
                            ?>
                            <tr>
                                <td><?= $row['str_cedula'] ?></td>
                                <td><?= ucfirst($row['str_nombre']) ?>&nbsp;<?= ucfirst($row['str_apellido']) ?></td>
                                <td><?= $row['str_usuario'] ?></td>
                                <td><?= $row['str_rol'] ?></td>
                                <td>

                                    <button class="btn btn-sm btn-hover btn-primary" data-toggle="tooltip" data-placement="bottom" title="Consultar" value="" onclick="url('form_queryusuario.php?id=' +<?= $row['lng_idusuario'] ?>)">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>&nbsp;

                                    <button class="btn btn-sm btn-hover btn-warning" data-toggle="tooltip" data-placement="bottom" title="Editar" value="" onclick="url('form_editusuario.php?id=' +<?= $row['lng_idusuario'] ?>)">
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </button>&nbsp;

                                    <button class="btn btn-sm btn-hover btn-danger" data-toggle="tooltip" data-placement="bottom" title="Eliminar" value="" onclick="url('form_deleteusuario.php?id=' +<?= $row['lng_idusuario'] ?>)">
                                        <i class="glyphicon glyphicon-remove"></i>
                                    </button>

                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>