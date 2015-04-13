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
  <li class="active">Editar</li>
</ol>
<form id="formulario" name="formulario" action="./accionForm/form.php" method="post" data-toggle="validator" role="form" enctype="multipart/form-data">
    <div class="panel panel-default">
        <div class="panel-heading" style="text-transform: none;"><i class="glyphicon glyphicon-edit"></i>&nbsp; Editar Noticia</div>
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
                                <label for="titulo" class="col-sm-2 control-label ">&nbsp;Título</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" value="<?= $str_titulo ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subtitulo" class="col-sm-2 control-label ">&nbsp;Subtítulo</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="subtitulo" name="subtitulo" placeholder="Subtítulo" value="<?= $str_subtitulo ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="contenido" class="col-sm-2 control-label ">&nbsp;Contenido</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="contenido" name="contenido" rows="10" ><?= $str_contenido ?></textarea>
                                </div>
                            </div>  

                            <div class="form-group">
                                <label for="contenido" class="col-sm-2 control-label">Categorías</label>
                                <div class="col-sm-10">

                                    <div class="form-inline" role="form">
                                        <div class="form-group">

                                            <div class="col-sm-10">

                                                <?php
                                                 $consulta = "SELECT lng_idcategoria, lng_idnoticia, c.lng_idmarca, m.str_marca as marca
                                                                FROM tbl_categorias c
                                                                join cat_marcas m on m.lng_idmarca = c.lng_idmarca 
                                                                WHERE lng_idnoticia = " . $_GET['id'];

                                                $sql = mysql_query($consulta);
                                                $i = 0;
                                                while ($row = mysql_fetch_array($sql)) {
                                                    ?>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input id="checkbox_marcas<?=$i?>" name="checkbox_marcas<?=$i?>" type="checkbox" checked="" value="<?= $row['lng_idmarca']; ?>" onclick="asignar(this.value,<?=$i?>)">
                                                            <?= $row['marca']; ?>
                                                            <input type="hidden" id="marca<?=$i?>" name="marca[<?=$i?>]" value="<?= $row['lng_idmarca']; ?>">
                                                        </label>
                                                    </div>
                                                    <?php
                                                    $i++;
                                                    
                                                }

                                                 $consulta = "SELECT lng_idmarca, str_marca as marca
                                                                    FROM cat_marcas where bol_eliminado = false and lng_idmarca not in (
                                                                        SELECT c.lng_idmarca FROM tbl_categorias c 
                                                                        join cat_marcas m on m.lng_idmarca = c.lng_idmarca 
                                                                        WHERE lng_idnoticia = ".$_GET['id']."
                                                                    )";

                                                $sql = mysql_query($consulta);
                                                
                                                while ($row = mysql_fetch_array($sql)) {
                                                    ?>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input id="checkbox_marcas<?=$i?>" name="checkbox_marcas<?=$i?>" type="checkbox" value="<?= $row['lng_idmarca']; ?>" onclick="asignar(this.value,<?=$i?>)">
                                                            <?= $row['marca']; ?>
                                                            <input type="hidden" id="marca<?=$i?>" name="marca[<?=$i?>]" value="x">
                                                        </label>
                                                    </div>
                                                    <?php
                                                    $i++;
                                                }
                                                ?>

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
                                    <label for="mini" class="col-sm-2 control-label ">&nbsp;Mini</label>
                                    <div class="col-sm-10">
                                        <input type="file" id="mini" name="mini" >
                                        <output id="img_mini"></output>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">

                                <div class="form-group">
                                    <label for="normal" class="col-sm-2 control-label ">&nbsp;Normal</label>
                                    <div class="col-sm-10">
                                        <input type="file" id="grande" name="grande" >
                                        <output id="img_grande"></output>
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

    <input type="hidden" id="accion" name="accion" value="form_editnoticia" readonly="yes">
    <input type="hidden" id="lng_idnoticia" name="lng_idnoticia" value="<?= $_GET['id'] ?>" readonly="yes">

</form>