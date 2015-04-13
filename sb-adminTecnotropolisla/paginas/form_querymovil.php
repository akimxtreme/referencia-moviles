<?php
session_start();
require_once("../conf/conexion.php");
//echo "-->".$_GET['id'];           
$consulta = "SELECT lng_idmodelo,str_modelo as modelo,blb_img_normal,marcas.lng_idmarca,marcas.str_marca as marca,lng_idtipo_equipo,maestro.str_descripcion as tipo,lng_idgama,maestro2.str_descripcion as gama 
                    FROM tbl_modelos modelos
                    join cat_marcas marcas on marcas.lng_idmarca = modelos.lng_idmarca
                    join cat_datos_maestros maestro on maestro.lng_iddato_maestro = modelos.lng_idtipo_equipo
                    join cat_datos_maestros maestro2 on maestro2.lng_iddato_maestro = modelos.lng_idgama where lng_idmodelo =" . $_GET['id'] . " and modelos.bol_eliminado = false";

$sql = mysql_query($consulta);

if ($row = mysql_fetch_array($sql)) {
    $tipo = $row['tipo'];
    $gama = $row['gama'];
    $marca = $row['marca'];
    $modelo = $row['modelo'];
}
?>
<ol class="breadcrumb">
  <li><a href="#">Equipos</a></li>
  <li><a href="#">Buscar</a></li>
  <li class="active">Consultar</li>
</ol>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-fw fa-tablet"></i><?= $marca ?>  (<?= $modelo ?>)</h3>
  </div>
  <div class="panel-body">
    <div class="col-md-2">
        <div class="text-center">                      
            <img class="img-thumbnail" src='./imagenes/imagenes.php?id=<?= $_GET['id'] ?>'>
        </div>
    </div>
    <div class="col-md-2">
        <div class="list-group">
          <a href="#" class="list-group-item active">Datos Básicos</a>
          <a href="#" class="list-group-item"><span class="text-primary">Marca:</span> <?= $marca ?></a>
          <a href="#" class="list-group-item"><span class="text-primary">Gama:</span> <?= $gama ?></a>
          <a href="#" class="list-group-item"><span class="text-primary">Tipo:</span> <?= $tipo ?></a>          
        </div>
    </div>
    <div class="col-md-4">
        <div class="list-group">
          <a href="#" class="list-group-item active">Especificaciones</a>
          <div style="height: 150px;overflow: scroll; " class="list-group"> 
            <?php
            $consulta = "SELECT mod_espe.lng_idespecificacion, cat_espe.str_especificacion as especificacion, mod_espe.str_valor as valor
                                            FROM tbl_modelos_especificaciones mod_espe
                                            join cat_especificaciones cat_espe on cat_espe.lng_idespecificacion = mod_espe.lng_idespecificacion
                                            WHERE lng_idmodelo = " . $_GET['id'];

            $sql = mysql_query($consulta);

            while ($row = mysql_fetch_array($sql)) {
              ?>
              <a href="#" class="list-group-item"><span class="text-primary"><?= $row['especificacion'] ?>:</span> <?= $row['valor'] ?></a>               
              <?php
               }
              ?>        
                                  
          </div>  
        </div>
    </div>
    <div class="col-md-4">
        <div class="list-group">
            <a href="#" class="list-group-item active">Galería</a>           
            
                <a data-toggle="collapse" href="#galeria1" aria-expanded="false" aria-controls="galeria1">
                    <img src='./imagenes/galeria1.php?id=<?= $_GET['id'] ?>' class='img-thumbnail' style="width: 121px;">              
                </a>
            
                <a data-toggle="collapse" href="#galeria2" aria-expanded="false" aria-controls="galeria2">
                    <img src='./imagenes/galeria2.php?id=<?= $_GET['id'] ?>' class='img-thumbnail' style="width: 121px;">              
                </a>
                <a data-toggle="collapse" href="#galeria3" aria-expanded="false" aria-controls="galeria3">
                    <img src='./imagenes/galeria3.php?id=<?= $_GET['id'] ?>' class='img-thumbnail' style="width: 121px;">              
                </a>
            
            <div class="collapse" id="galeria1">
                <div class="well text-center">
                    <img src='./imagenes/galeria1.php?id=<?= $_GET['id'] ?>' class='img-thumbnail' style="width: 242px;">
                </div>
            </div>
            <div class="collapse" id="galeria2">
                <div class="well text-center">
                    <img src='./imagenes/galeria2.php?id=<?= $_GET['id'] ?>' class='img-thumbnail' style="width: 242px;">
                </div>
            </div>
            <div class="collapse" id="galeria3">
                <div class="well text-center">
                    <img src='./imagenes/galeria3.php?id=<?= $_GET['id'] ?>' class='img-thumbnail' style="width: 242px;">
                </div>
            </div>                    
        </div>
    </div>
  </div>
</div>
<div class="panel panel-default">

    <div class="panel-heading" style="text-transform: none;"> <i class="fa fa-fw fa-tablet"></i>&nbsp; Consultar Equipo</div>
    <div class="panel-body">

        <ul class="nav nav-tabs" role="tablist" id="myTab">
            <li class="active"><a href="#home" role="tab" data-toggle="tab"><?= $modelo ?></a></li>
            <li><a href="#messages" role="tab" data-toggle="tab">Galería</a></li>
        </ul>
        

        <div class="tab-content">
            <div class="tab-pane fade in active" id="home">

                <div class="well details col-sm-12">
                    <div class="col-sm-12">
                        
                        <div class="col-md-2"> 
                            <div class="text-center">                      
                                <img class="img-thumbnail" src='./imagenes/imagenes.php?id=<?= $_GET['id'] ?>'>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                   <tbody>
                                    <tr>
                                        <td><strong>Gama: </strong><?= $gama ?> </td>
                                        <td><strong>Gama: </strong><?= $gama ?> </td>
                                        <td><strong>Gama: </strong><?= $gama ?> </td>
                                        <td><strong>Gama: </strong><?= $gama ?> </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p><strong>Gama: </strong><?= $gama ?> </p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            

                            
                            <p class="text-center skills"><strong>Especificaciones</strong></p>

                            <ul class="list-group">

                                <?php
                                $consulta = "SELECT mod_espe.lng_idespecificacion, cat_espe.str_especificacion as especificacion, mod_espe.str_valor as valor
                                            FROM tbl_modelos_especificaciones mod_espe
                                            join cat_especificaciones cat_espe on cat_espe.lng_idespecificacion = mod_espe.lng_idespecificacion
                                            WHERE lng_idmodelo = " . $_GET['id'];

                                $sql = mysql_query($consulta);


                                while ($row = mysql_fetch_array($sql)) {
                                    ?>
                                    <li class="list-group-item">
                                        <span class="badge"><?= $row['valor'] ?></span><?= $row['especificacion'] ?>
                                    </li>  
                                <?php }
                                ?>

                            </ul>

                        </div>
                        
                    </div>                
                </div>
            </div>
            <div class="tab-pane fade" id="messages">

                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src='./imagenes/galeria1.php?id=<?= $_GET['id'] ?>' class='img-thumbnail' style="width: 242px;">
                            <div class="caption text-center">
                                <h3>Galería 1</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src='./imagenes/galeria2.php?id=<?= $_GET['id'] ?>' class='img-thumbnail' style="width: 242px;">
                            <div class="caption text-center">
                                <h3>Galería 2</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src='./imagenes/galeria3.php?id=<?= $_GET['id'] ?>' class='img-thumbnail' style="width: 242px;">
                            <div class="caption text-center">
                                <h3>Galería 3</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="form-inline" role="form">

            <div class="form-group">
                <div class="col-sm-5">
                    <button type="button" onclick="url('form_searchmovil.php')" class="btn btn-success">Cerrar</button>
                </div>
            </div>

        </div> 

    </div>

</div>