<?php
session_start();
require_once("../conf/conexion.php");
//echo "-->".$_GET['id'];           
$consulta = "SELECT lng_idcomentario, str_asunto, str_contenido, mar.str_marca as marca, mo.str_modelo as modelo
                FROM tbl_comentarios com 
                join tbl_modelos mo on mo.lng_idmodelo = com.lng_idmodelo
                join cat_marcas mar on mar.lng_idmarca = mo.lng_idmarca
                where com.bol_eliminado = false and mo.lng_idmodelo =" . $_GET['id']." and mo.bol_eliminado = false";
$sql = mysql_query($consulta);

if ($row = mysql_fetch_array($sql)) {

    $marca = $row['marca'];
    $modelo = $row['modelo'];
    $str_asunto = $row['str_asunto'];
    $str_contenido = $row['str_contenido'];
}
?>
<ol class="breadcrumb">
  <li><a href="#">Comentarios</a></li>
  <li><a href="#">Buscar</a></li>
  <li class="active">Consultar</li>
</ol>
<div class="panel panel-default">

    <div class="panel-heading" style="text-transform: none;"> <i class="fa fa-fw fa-comments"></i>&nbsp; Consultar Comentario</div>
    <div class="panel-body">


        <div class="panel panel-default"><br>
            <div class="form-horizontal" role="form">

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">&nbsp;Marca</label>
                    <div class="col-sm-5">
                        <?=$marca?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">&nbsp;Modelo</label>
                    <div class="col-sm-5">
                        <?=$modelo?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">&nbsp;Asunto</label>
                    <div class="col-sm-5">
                        <?=$str_asunto?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Contenido</label>
                    <div class="col-sm-9">
                        <p class="text-justify">
                            <?=$str_contenido?>
                        </p>
                    </div>
                </div>
                
            </div>  

        </div>

        <div class="form-inline" role="form">

            <div class="form-group">
                <div class="col-sm-5">
                    <button type="button" onclick="url('form_searchcomentario.php')" class="btn btn-success">Cerrar</button>
                </div>
            </div>

        </div> 

    </div>

</div>