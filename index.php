<?php
require_once("tags.php");
$html = new Html();
$html->html_i();
$html->nav('0'); 
?>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
            <div class="col-xs-12 logo"><img src="img/logotipo2.png"></div>
                        <!--<h1 class="brand-heading">Grayscale</h1>-->
                        <p class="intro-text">Tu mayorista de confianza</p>
                        <a href="#marcas" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Marcas Section -->
    <section id="marcas" >
    
        <div class="row">
            <div class="col-md-12">
                <a href="#"><img class="col-md-2 img-responsive" src="img/pic01.jpg"></a>
                <a href="#"><img class="col-md-2 img-responsive" src="img/pic02.jpg"></a>
                <a href="#"><img class="col-md-2 img-responsive" src="img/pic03.jpg"></a>
                <a href="#"><img class="col-md-2 img-responsive" src="img/pic04.jpg"></a>
                <a href="#"><img class="col-md-2 img-responsive" src="img/pic05.jpg"></a>
                <a href="#"><img class="col-md-2 img-responsive" src="img/pic06.jpg"></a>
            </div>
        </div>
    </section>
    <!-- Marcas Section -->
    <section id="bienvenida">
    
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2 class="col-xs-12">Bienvenidos a <b>Tecnotrópolis LLC</b></h2>   
                <p class="col-xs-12">Nos apasiona lo que hacemos, estamos a la vangüardia de la tecnología e innovamos en servicios globales para las Américas.</p>
        
            </div>
        </div>
    </section>    
    <!--<span id="about"></span>-->
    <!-- About Section -->
    <section id="about" class="container  text-center">
    
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
        
        <div><img src="img/logotipo2.png"></div>
                <h2 class="col-lg-12"><a href="#about">Nosotros</a></h2>
        <ul class="nav nav-tabs tabs-css" role="tablist" id="myTab">
  <li class="active"><a href="#quienes-somos" role="tab" data-toggle="tab">¿Quienes Somos?</a></li>
  <li><a href="#mision" role="tab" data-toggle="tab">Misión</a></li>
  <li><a href="#vision" role="tab" data-toggle="tab">Visión</a></li>
  
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="quienes-somos">
      <br>
      <h4><a href="#about">¿Quienes Somos?</a></h4>
      <p class="text-justify"><small>Somos una empresa con sede en Venezuela y en los Estados Unidos, con más de 10 años de experiencia, dedicados a las ventas de artículos de tecnología, como teléfonos celulares, tabletas, equipos de computación y más. Contando con un portafolio multimarca, principalmente respaldados por Samsung, Sony, Nokia, Apple, LG y Huawei.</small></p>
      <p class="text-justify"><small>Nos hemos destacado ofreciendo productos de calidad, atención personalizada, buen servicio y precios competitivos. Siendo nuestro objetivo poder ofrecer el mayor surtido de productos para que nuestros clientes vean en nosotros su principal aliado comercial.</small></p>
  </div>
  <div class="tab-pane" id="mision">
      <br>
      <h4><a href="#about">Misión</a></h4>
      <p class="text-justify"><small>Brindar a través de nuestra atención personalizada el mejor servicio para la adquisición de productos, ofreciendo así la óptima satisfacción de nuestros clientes. Sustentados por una empresa económicamente próspera comprometidos con estar a la vangüardia de la tecnología.</small></p>      
</div>
  <div class="tab-pane" id="vision">
      <br>
      <h4><a href="#about">Visión</a></h4>
      <p class="text-justify"><small>Situarnos como altos líderes en el mercado de tecnología, a través de nuestros productos, atención, calidad e innovación. Teniendo como meta la satisfacción de nuestros clientes. Siempre guiados por una actitud ética y honesta. Nuestro personal es calificado y ha sido inculcado con la directriz de prestar servicios de alta calidad.</small></p> 
</div>  
</div>

<script>
  $(function () {
    $('#myTab a:last').tab('show')
  })
</script>
                       
            </div>
        </div>
    </section>
    <!-- Ubicacion Section -->    
    <section id="ubicacion" class="container  text-center">
    
        <div class="row">
        
            <div class="col-lg-12">
        <div class="col-xs-12"><img src="img/logotipo2.png"></div>
         <h2 class="text-center"><a href="#ubicacion">Ubícanos</a></h2>
                
        </div>
            <div class="col-lg-8">      
        <img class="col-xs-12" src="img/mapa.png">               
            </div>
        <div class="col-lg-4 text-justify">         
            <h2 class="text-center"><small><i>Locaciones</i><small></h2>    
                      
            <p><img style="width:30px;" src="img/usa.svg"> 1835 NW 112th AVE, STE. 117. Miami, Florida. 33172 </p>
            <p><img style="width:30px;" src="img/vzla.svg"> Av. Venezuela, El Rosal. Torre Oxal, Nivel Terraza. Ofic PB-4. Caracas, Venezuela. </p>                   
            <div class="col-md-10 col-md-offset-1 "><a class="page-scroll btn btn-default col-md-12 btn-lg" href="#contact">Contáctanos</a></div>
            
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <!--<section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Download Grayscale</h2>
                    <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
                    <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Servicios Section -->
    <section id="servicios" class="container text-center">
        <div class="row">
        
            <div class="col-lg-12">
             <div><img src="img/logotipo2.png"></div>       
                <h2 class="text-center">Servicios</h2>      
        <p>Nuestra larga experiencia en la distribución está a tu disposición. En Tecnotrópolis innovamos para ofrecerte la mejor experiencia, si necesitas nuestro apoyo siempre podrás contar con nosotros </p>
        <div class="col-lg-6 text-center">          
            
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Asesoría para el nuevo importador</h2>
          </div>
          <div class="panel-body">
            <div class="col-xs-12"><img class="col-xs-12" src="img/serv01.jpg"></div>
            <div class="col-md-12">
            <p>¿Nunca has hecho una importación y quieres empezar en el negocio? Nosotros te ayudaremos y brindaremos la asesoría que puedas requerir en todo el proceso de importación.</p>
            </div>
          </div>
        </div>
        </div>
        <div class="col-lg-6 text-center">          
            
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Logística en EEUU y Latinoamérica</h2>
          </div>
          <div class="panel-body">
            <div class="col-xs-12"><img class="col-xs-12" src="img/serv02.jpg"></div>
            <div class="col-md-12">
            <p>Al ser parte de Tecnotrópolis, nuestro equipo humano e infraestructura están a tu disposición para ayudar a hacer crecer tu negocio efectiva y rápidamente. Almacenaje, consolidación de carga, pedidos especiales, canales de distribución y la mayor colaboración para tu crecimiento empresarial.</p>
            </div>
          </div>
        </div>
        </div>
        <div class="col-lg-6 text-center">          
            
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Asesoría para el nuevo importador</h2>
          </div>
          <div class="panel-body">
            <div class="col-xs-12"><img class="col-xs-12" src="img/serv03.jpg"></div>
            <div class="col-md-12">
            <p>Asesoría en materia de aduanas, nacionalización, homologaciones, entre otras. Según las regulaciones y presencia en cada país. </p>
            </div>
          </div>
        </div>
        </div>
        <div class="col-lg-6 text-center">          
            
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Manejo de Carga</h2>
          </div>
          <div class="panel-body">
            <div class="col-xs-12"><img class="col-xs-12" src="img/serv04.jpg"></div>
            <div class="col-md-12">
            <p>Colaboración, asesoramiento o manejo de carga según sea el destino. Contamos con aliados y/o empresa propia de transporte, para apoyarte en el manejo y traslado de tus mercancías si así lo pudieras requerir.</p>
            </div>
          </div>
        </div>
        </div>
        <div class="col-lg-6 col-lg-offset-3 text-center">          
            
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Post-Venta</h2>
          </div>
          <div class="panel-body">
            <div class="col-xs-12"><img class="col-xs-12" src="img/serv05.jpg"></div>
            <div class="col-md-12">
            <p>Servicio post venta en los talleres autorizados de la marca dentro y fuera de los EEUU (aplican condiciones y estas pueden variar según la marca y país)</p>
            </div>
          </div>
        </div>
        </div>
            
             
                      
        </div>
                
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact" class="container text-center">
        <div class="row">
        
            <div class="col-lg-12">
             <div><img src="img/logotipo2.png"></div>       
                <h2>¿Cómo Contactarnos?</h2>        
        <div class="col-lg-6 text-justify">         
            
        <div class="panel panel-default" style="min-height:315px;">
          <div class="panel-heading">
            <h3 class="panel-title"><img style="width:25px;" src="img/usa.svg"> Estados Unidos</h3>
          </div>
          <div class="panel-body">
            <p><small><i class="glyphicon glyphicon-map-marker"></i> 1835 NW 112th AVE, STE. 177. <br>Miami, Florida. 33172</small></p>
            <p><small><i class="glyphicon glyphicon-phone-alt"></i> (954) 5051280</small> </p>
            <p><small><i class="glyphicon glyphicon-envelope"></i> info@tecnotropolisla.com</small> </p>
          </div>
        </div>
        </div>
        <div class="col-lg-6 text-justify">     
           <div class="panel panel-default" style="min-height:315px;">
          <div class="panel-heading">
            <h3 class="panel-title"><img style="width:25px;" src="img/vzla.svg"> Venezuela</h3>
          </div>
          <div class="panel-body">
            <p><small><i class="glyphicon glyphicon-map-marker"></i> Av. Venezuela, El Rosal. Torre Oxal, Nivel Terraza. Ofic PB-4. Caracas, Venezuela. </small></p>
            <p><small><i class="glyphicon glyphicon-phone-alt"></i> (0212) 952.09.37 - (0212) 952.68.43 </small> </p>
            <p><small><i class="glyphicon glyphicon-envelope"></i> info@tecnotropolisla.com </small> </p>
          </div>
        </div>  
             
                      
        </div>
                
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <!--<div id="map"></div>-->


<?php
$html->html_f();    
?>
