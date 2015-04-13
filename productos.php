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
                    imgCatMovil();
                ?>                                                          
            <div class="col-lg-3 col-xs-12">
                <div class="col-lg-10 col-lg-offset-1 col-xs-6">
                    <a href="#" class="thumbnail">
                        <img src="images/prueba/noticia/noticia1-mini.jpg" alt="">
                        <h3><small>Lorem ipsum dolor sit amet</small></h3>
                        <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. &raquo;</small>
                    </a>
                </div>
                <div class="col-lg-10 col-lg-offset-1 col-xs-6">
                    <a href="#" class="thumbnail">
                        <img src="images/prueba/noticia/noticia2-mini.jpg" alt="">
                        <h3><small>Lorem ipsum dolor sit amet</small></h3>
                        <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. &raquo;</small>
                    </a>
                </div>
                <div class="col-lg-10 col-lg-offset-1 col-xs-6">
                    <a href="#" class="thumbnail">
                        <img src="images/prueba/noticia/noticia3-mini.jpg" alt="">
                        <h3><small>Lorem ipsum dolor sit amet</small></h3>
                        <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. &raquo;</small>
                    </a>
                </div>
            </div>
            <!-- ./col-lg-3 col-xs-12 -->
        </div>
        <!-- /.col-md-12 -->
    </div>
    <!-- /.row -->
</section>

<?php
$html->html_f();    
?>
