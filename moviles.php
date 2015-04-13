<?php
require_once("tags.php");
require_once("query/query.php");
$html = new Html();
$html->html_i();
$html->nav(""); 
$html->introHeader(); 
?> 
<!-- About Section -->
<section id="contenido" class=" text-center">    
    <div class="row">        
        <div class="col-lg-12 col-xs-12">                                       
                <?php
                    // Buscador de Moviles
                    buscadorMovil(); 
                    // Menu Principal de Moviles
                    menuMovil();
                    // Menu de Categoria x Imagenes de Moviles
                    //imgCatMovil();
                    $title = "";
                    $marca = "";
                    if(isset($_GET['all'])){
                    $marca = $_GET['all'];
                        $title = ucfirst($marca);
                    
                    }
                    
                    
                ?>    
            <div class="col-lg-10 col-xs-12" >
                <h2 class="col-lg-12"><a href="#"><?php echo $title; ?></a></h2>
            </div>
            <div class="col-lg-10 col-xs-12" >
                <?php
                allMovil($marca);
                ?>
            </div>

            
        </div>
        <!-- /.col-md-12 -->
    </div>
    <!-- /.row -->
</section>

<?php
$html->html_f();    
?>
