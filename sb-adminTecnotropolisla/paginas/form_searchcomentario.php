<?php
session_start();
require_once("../conf/conexion.php");
?>
<ol class="breadcrumb">
  <li><a href="#">Comentarios</a></li>
  <li class="active">Buscar</li>
</ol>
<div class="panel panel-default">
    <div class="panel-heading" style="text-transform: none;"> <i class="glyphicon glyphicon-search"></i>&nbsp;Buscar Comentario</div>
    <div class="panel-body">

        <div id="main">

            <div id="demo">

                <table class="tablesorter table table-bordered text-center">
                    <thead>
                        <tr>
                            <th class="filter-select filter-exact" data-placeholder="Seleccione">Marca</th>
                            <th>Modelo</th>
                            <th>Asunto</th>
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
                        $consulta = "SELECT lng_idcomentario, str_asunto, str_contenido, mar.str_marca as marca, mo.str_modelo as modelo, mo.lng_idmodelo as lng_idmodelo
                                        FROM tbl_comentarios com 
                                        join tbl_modelos mo on mo.lng_idmodelo = com.lng_idmodelo
                                        join cat_marcas mar on mar.lng_idmarca = mo.lng_idmarca
                                        where com.bol_eliminado = false and mo.bol_eliminado = false";
                        $sql = mysql_query("$consulta");
                        while ($row = mysql_fetch_array($sql)) {
                            ?>
                            <tr>
                                <td><?= $row['marca'] ?></td>
                                <td><?= $row['modelo'] ?></td>
                                <td><?= $row['str_asunto'] ?></td>
                                <td>

                                    <button class="btn btn-sm btn-hover btn-primary" data-toggle="tooltip" data-placement="bottom" title="Consultar" value="" onclick="url2('form_querycomentario.php?id='+ <?=$row['lng_idmodelo']?>)">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>&nbsp;
                                    
                                    <button class="btn btn-sm btn-hover btn-danger" data-toggle="tooltip" data-placement="bottom" title="Eliminar" value="" onclick="url2('form_deletecomentario.php?id='+ <?=$row['lng_idmodelo']?>)">
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