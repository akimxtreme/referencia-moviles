<?php

include_once '../../conf/conexion.php';

$sql = mysql_query("SELECT lng_idmodelo, str_modelo FROM tbl_modelos WHERE lng_idmarca = " . $_GET['valor'] . " order by str_modelo asc");

echo '<select id="modelo" name="modelo" class="form-control" required="">'
 . '<option selected="selected" value="">Seleccione</option>';

while ($row = mysql_fetch_array($sql)) {
    echo '<option value="' . $row['lng_idmodelo'] . '">' . $row['str_modelo'] . '</option>';
    ?>

    <?php

}
echo '</select>';
?>