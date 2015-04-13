<?php
session_start();
require_once("../conf/conexion.php");
?>
<ol class="breadcrumb">
  <li><a href="#">Noticias</a></li>
  <li><a href="#">Noticia</a></li>
  <li class="active">Agregar</li>
</ol>
<form id="formulario" name="formulario" action="./accionForm/form.php" method="post" data-toggle="validator" role="form" enctype="multipart/form-data">
    <div class="panel panel-default">
        <div class="panel-heading" style="text-transform: none;"><i class="fa fa-newspaper-o"></i>&nbsp; Agregar Noticia</div>
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
                                <label for="titulo" class="col-sm-2 control-label glyphicon-asterisk">&nbsp;Título</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subtitulo" class="col-sm-2 control-label glyphicon-asterisk">&nbsp;Subtítulo</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="subtitulo" name="subtitulo" placeholder="Subtítulo" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="contenido" class="col-sm-2 control-label glyphicon-asterisk">&nbsp;Contenido</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="contenido" name="contenido" rows="10" required=""></textarea>
                                </div>
                            </div>  

                            <div class="form-group">
                                <label for="contenido" class="col-sm-2 control-label">Categorías</label>
                                <div class="col-sm-10">

                                    <div class="form-inline" role="form">
                                        <div class="form-group">

                                            <div class="col-sm-10">

                                                <?php
                                                $sql = mysql_query("SELECT lng_idmarca, str_marca FROM cat_marcas where bol_eliminado = false");
                                                $i = 0;
                                                while ($row = mysql_fetch_array($sql)) {
                                                    ?>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input id="checkbox_marcas<?=$i?>" name="checkbox_marcas<?=$i?>" type="checkbox" value="<?= $row['lng_idmarca']; ?>" onclick="asignar(this.value,<?=$i?>)">
                                                            <?= $row['str_marca']; ?>
                                                            <input type="hidden" id="marca<?=$i?>" name="marca[<?=$i?>]" value="x">
                                                        </label>
                                                    </div>            

                                                <?php $i++;} ?>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>  

                        </div>  

                    </div>
                </div>

                <div class="tab-pane fade" id="profile">

                    <div class="form-horizontal" role="form">

                        <div class="panel panel-default">

                            <br>
                            <div class="form-group">

                                <div class="form-group">
                                    <label for="mini" class="col-sm-2 control-label glyphicon-asterisk">&nbsp;Mini</label>
                                    <div class="col-sm-10">
                                        <input type="file" id="mini" name="mini" required="">
                                        <output id="img_mini"></output>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">

                                <div class="form-group">
                                    <label for="normal" class="col-sm-2 control-label glyphicon-asterisk">&nbsp;Normal</label>
                                    <div class="col-sm-10">
                                        <input type="file" id="grande" name="grande" required="">
                                        <output id="img_grande"></output>
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

            </div>

        </div>
    </div>

    <input type="hidden" id="accion" name="accion" value="form_addnoticia" readonly="yes">

</form>