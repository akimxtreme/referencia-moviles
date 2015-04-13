<?php

    $valor = $_GET['valor'];

    include 'conexion.php';

    if($valor != null){

        $sql = mysql_query("SELECT Lng_idmodelo, str_modelo, str_friendly_url FROM tbl_modelos WHERE bol_eliminado=0 AND str_modelo like '%".$valor."%'");

        $i=0;
        
        echo '<div class="moviles col-lg-3 col-lg-push-9  col-xs-push-0">';
        echo "<table>";
        while ($f=  mysql_fetch_array($sql)){

            $color1 ="#EEEEEE";
            $color2 ="#FFFFFF";
            
            if($i % 2 > 0){
                $color ="EEEEEE";
            }else{
                $color ="FFFFFF";
            }

            echo '<tr style="background-color:'.$color.'">';

            
           // echo '<TR onMouseover="background-color:'.$color1.'" onMouseout="background-color:'.$color2.'">';
            
            
            echo '<td><a href="movil.php?i='.$f[2].'"><img style="width: 75px; height:100px;" src="query/consultar.php?i='.$f[0].'"></img></a></td>';
            echo '<td><a href="movil.php?i='.$f[2].'">'.$f[1].'</a></td>';
            

            $i++;
        }

        echo '</tr></table>';
        echo '</div>';

    }
?>