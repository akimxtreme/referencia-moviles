<?php

require_once('conexion.php');

// ************************************************************************************************** //
// Consulta las Marcas de los Moviles
// ************************************************************************************************** //
function menuMovil() {

	$sql = mysql_query("SELECT str_marca, str_url_friendly FROM cat_marcas ORDER BY str_marca ASC");
echo '<div class="col-lg-2 col-xs-12">';
	echo '<div class="col-lg-12" style="border-radius: 4px 4px 0px 0px; border:1px solid #CCC;background-color:#FFF;">';
        echo '<a href="productos.php"><img src="img/logotipo3.png"></a>';
    echo '</div>';
    echo '<!-- ./col-lg-12 -->';


	echo '<div class="col-lg-12" style="padding-top: 5px;background-color:#FFF; border-radius: 0px 0px 4px 4px; border-left: 1px solid #CCC;border-right: 1px solid #CCC;border-bottom: 1px solid #CCC;">';
	    echo '<ul class="nav nav-pills nav-stacked ">';
	    while ($f=  mysql_fetch_array($sql)){
	    	// <!--<li class="active"><a href="#"><i class=""></i> Nokia</a></li>-->
	    	echo '<li><a href="moviles.php?all='. $f[1] .'" title="'. $f[0] .'"><i class="glyphicon glyphicon-phone"></i><br>'. $f[0] .'</a></li>';   
	    }	
    	echo '</ul>';
    echo '</div>';
    echo '<!-- ./col-lg-12 -->';
echo '</div>';
echo '<!-- ./col-lg-12 col-xs-12 -->';
}
// ************************************************************************************************** //
// Muestra las Categorias de los Moviles con su respectiva imagen
// ************************************************************************************************** //
function imgCatMovil() {
	$sql = mysql_query("SELECT str_url_friendly FROM cat_marcas ORDER BY str_marca ASC");
echo '<div class="col-lg-7 col-xs-12" >';
    echo '<h2 class="col-lg-12"><a href="#">Moviles</a></h2>';
echo '</div>';
echo '<!-- ./col-lg-7 col-xs-12 -->';

echo '<div class="col-lg-7 col-xs-12" > ';
while ($f=  mysql_fetch_array($sql)){
	echo '<div class="col-xs-6 col-md-3">';
    	echo '<a href="moviles.php?all='. $f[0] .'" class="thumbnail"><img src="images/logo/logo-'. $f[0] .'.jpg" alt=""></a>';
    echo '</div>';
}
echo '</div>';
echo '<!-- ./col-lg-7 col-xs-12 -->';
}
// ************************************************************************************************** //
// Buscador de Moviles
// ************************************************************************************************** //
function buscadorMovil(){
echo '<script type="text/javascript" src="ajax/ajax.js"></script>';
echo'
	<div class="col-lg-12">
    	<br>
        <form role="form">
        	<div class="col-lg-4 col-lg-push-8  col-xs-push-0">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i> Movil</span>
                        <input class="form-control" id="campo" name="campo" type="text" onkeyup="url(this.value)"  autocomplete="off">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </span>
                </div>  
                <!-- ./input-group -->                     
            </div>
            <!-- ./col-lg-4 -->                        
        </form>
        <!-- form -->                
    </div>
    <!-- ./col-lg-12 -->
    
    <div class="col-lg-12">
    <!-- Resultados de Busqueda de Moviles -->
    	<div id="resultados"></div>
    </div>
    <!-- ./col-lg-12 -->';
}
// ************************************************************************************************** //
// Consulta Todos los Moviles de una Marca
// ************************************************************************************************** //
function allMovil($all){
    
    
    $sql = mysql_query("SELECT lng_idmarca FROM cat_marcas WHERE str_url_friendly='$all'");
    while ($f=  mysql_fetch_array($sql)){
        
        $sql2 = mysql_query("SELECT lng_idmodelo, str_modelo, str_friendly_url FROM tbl_modelos WHERE lng_idmarca=$f[0] AND bol_eliminado=0");
        while ($f2=  mysql_fetch_array($sql2)){           
            

            echo '<div class="col-xs-12 col-md-4 col-lg-3">';               
                echo '<div class="panel panel-default">';
                    echo '<div class="panel-heading">';
                        echo '<h5 class="panel-title" style="min-height:30px; margin-top: 4px; font-size:15px;">'. $f2[1] .'</h5>';
                    echo '</div>';
                    echo '<div class="panel-body">';
                        echo '<a href="movil.php?i='. $f2[2] .'"><img class="col-md-12 col-xs-12" src="query/consultar2.php?i='.$f2[0].'" title="'. $f2[1] .'"/></a>';
                        echo '<p><a href="#" class="btn btn-primary" role="button">Comparar</a> <a href="movil.php?i='. $f2[2] .'" class="btn btn-success" role="button">Ver detalles</a></p>';
                    echo '</div>';
                echo '</div>';        
            echo '</div>';
        }
    }

}

?>