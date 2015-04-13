<?php
session_start();
require_once("../conf/conexion.php");
//echo "-->".$_GET['id'];           
$consulta = "SELECT lng_idnoticia, str_titulo, str_subtitulo, str_contenido "
        . "FROM tbl_noticias WHERE lng_idnoticia = " . $_GET['id'] . " and bol_eliminado = false ";
$sql = mysql_query($consulta);

if ($row = mysql_fetch_array($sql)) {

    $str_titulo = $row['str_titulo'];
    $str_subtitulo = $row['str_subtitulo'];
    $str_contenido = $row['str_contenido'];
}
?>
<ol class="breadcrumb">
  <li><a href="#">Noticias</a></li>
  <li><a href="#">Buscar</a></li>
  <li class="active">Eliminar</li>
</ol>
<form id="formulario" name="formulario" action="./accionForm/form.php" method="post" data-toggle="validator" role="form" enctype="multipart/form-data">
    <div class="panel panel-default">

        <div class="panel-heading" style="text-transform: none;"> <i class="fa fa-fw fa-coffee"></i>&nbsp; Eliminar Noticia</div>
        <div class="panel-body">

            <ul class="nav nav-tabs" role="tablist" id="myTab">
                <li class="active"><a href="#home" role="tab" data-toggle="tab">Noticia</a></li>
                <li><a href="#profile" role="tab" data-toggle="tab">Imágenes</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">

                    <div class="panel panel-default"><br>
                        <div class="form-horizontal" role="form">

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">&nbsp;Título</label>
                                <div class="col-sm-10">
                                    <?= $str_titulo ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">&nbsp;Subtítulo</label>
                                <div class="col-sm-10">
                                    <?= $str_subtitulo ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">&nbsp;Contenido</label>
                                <div class="col-sm-9">
                                    <p class="text-justify">
                                        <?= $str_contenido ?>
                                    </p>

                                </div>
                            </div>

                        </div>  

                    </div>
                </div>

                <div class="tab-pane fade" id="profile">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src='./imagenes/mini.php?id=<?= $_GET['id'] ?>' class='img-thumbnail' style="width: 242px;">
                                <div class="caption text-center">
                                    <h3>Imagen Pequeña</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src='./imagenes/normal.php?id=<?= $_GET['id'] ?>' class='img-thumbnail' style="width: 242px;">
                                <div class="caption text-center">
                                    <h3>Imagen Grande</h3>
                                </div>
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
        <input type="hidden" id="accion" name="accion" value="form_deletenoticia" readonly="yes">
        <input type="hidden" id="lng_idnoticia" name="lng_idnoticia" value="<?= $_GET['id'] ?>" readonly="yes">
        </form>