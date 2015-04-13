<?php
class Tags {
	
	public $url;
	public $type;
	public $menu;

	public function js_css($type,$url) {		

		switch ($type) {
			case 'css':
				echo '<link href="'. $url .'" rel="stylesheet">';
				break;
			case 'js':
				echo '<script src="'. $url .'"></script>';
				break;
			case 'icon':
				echo '<link rel="shortcut icon" href="'. $url .'" type="image"/>';
				break;
			default:
				echo '<p>Valor Incorrecto en el metodo <b>js_css()</b></p>';
				break;
		}

	}	

}


class Html extends Tags {
	
	public function html_i (){
		echo '<!DOCTYPE html>';
		echo '<html lang="en">';
			echo '<head>';
				echo '<meta charset="utf-8">';
	    		echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    			<meta name="viewport" content="width=device-width, initial-scale=1">
	    			<meta name="description" content="">
	    			<meta name="author" content="">';
	    		echo '<title>Tecnotrópolis LLC</title>';
	    		echo '<!-- Icono -->';
	    		$this->js_css('icon','img/icono.png');
	    		echo '<!-- Bootstrap Core CSS -->';
	    		$this->js_css('css','css/bootstrap.min.css');
	    		echo '<!-- Custom CSS -->';
	    		$this->js_css('css','css/grayscale.css');
	    		echo '<!-- Custom Fonts -->';
	    		$this->js_css('css','font-awesome-4.1.0/css/font-awesome.min.css');
	    		echo '<!-- Personal Styles -->';
	    		$this->js_css('css','css/stylesheet.css');
	    		echo '<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->';
	    		echo "<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->";
	    		echo '
	    		<!--[if lt IE 9]>
	        	<script src="js/html5shiv.js"></script>
	        	<script src="js/respond.min.js"></script>
	    		<![endif]-->
	    		';
    		echo '</head>'; 
    		echo '<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">';
	}

	public function html_f (){

		echo '<!-- Footer -->';
    	echo '<footer>';
        	echo '<div class="container text-center col-lg-12">';
		        echo '<h3>Tecnotrópolis LLC</h3>';
		        echo '<h3><small>Pasión por la Tecnología<small></h3>';
		        echo '<ul class="list-inline">';
		            echo '<!--<li><a class="page-scroll" href="#page-top">Principal</a></li>-->';
		            echo '<li><a class="page-scroll" href="#about">Nosotros</a></li>';
		            echo '<li><a class="page-scroll left" href="#ubicacion">Ubicación</a></li>';
		            echo '<li><a class="page-scroll left" href="productos.php">Productos</a></li>';
		            echo '<li><a class="page-scroll left" href="#servicios">Servicios</a></li>';
		            echo '<li><a class="page-scroll left" href="#contact">Contacto</a></li>';
		        echo '</ul>';     
				echo '<h1><small>&copy; Copyright 2014 Tecnotrópolis LLC. Todos los derechos reservados</small></h1>';
        	echo '</div>';
    	echo '</footer>';


			echo '<!-- jQuery Version 1.11.0 -->';
	    	$this->js_css('js','js/jquery-1.11.0.js');

	    	echo '<!-- Bootstrap Core JavaScript -->';
	    	$this->js_css('js','js/bootstrap.min.js');
	    
	    	echo '<!-- Plugin JavaScript -->';
	    	$this->js_css('js','js/jquery.easing.min.js');    	

	    //<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
	    //<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

	    	echo '<!-- Custom Theme JavaScript -->';
	    	$this->js_css('js','js/grayscale.js');    

		echo '</body>';
	echo '</html>';


	}

	public function nav ($menu){
		$this->menu=$menu;
		if($menu==""){
			$menu="index.php";
		}else {
			$menu="";
		}

		echo '<!-- Navigation -->';
    	echo '<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">';
        	echo '<div class="container">';
            	echo '<div class="navbar-header">';
	                echo '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">';
	                    echo '<i class="fa fa-bars"></i>';
	                echo '</button>';
                echo '<a class="navbar-brand page-scroll" href="'. $menu .'#page-top">';
                    echo '<i class="glyphicon glyphicon-globe"></i>  <span class="light"></span> Tecnotropolis';
                echo '</a>';
            echo '</div>';

            echo '<!-- Collect the nav links, forms, and other content for toggling -->';
            	echo '<div class="collapse navbar-collapse navbar-right navbar-main-collapse">';
                echo '<ul class="nav navbar-nav">';
                    	echo '<!-- Hidden li included to remove active class from about link when scrolled up past about section -->';
                    echo '<li class="hidden">';
                        echo '<a href="'. $menu .'#page-top"></a>';
                    echo '</li>';
                    
                    echo '<li>';
                        echo '<a class="page-scroll" href="'. $menu .'#"><i class="glyphicon glyphicon-home"></i></a>';
                    echo '</li>';
            		
            		echo '<li>';
                        echo '<a class="page-scroll" href="'. $menu .'#about">Nosotros</a>';
                    echo '</li>';
                    
                    echo '<li>';
                        echo '<a class="page-scroll" href="'. $menu .'#ubicacion">Ubicación</a>';
                    echo '</li>';
            		
            		echo '<li>';
                        echo '<a class="page-scroll" href="productos.php">Productos</a>';
                    echo '</li>';
            		
            		echo '<li>';
                        echo '<a class="page-scroll" href="'. $menu .'#servicios">Servicios</a>';
                    echo '</li>';
                    
                    echo '<li>';
                        echo '<a class="page-scroll" href="'. $menu .'#contact">Contacto</a>';
                    echo '</li>';
                echo '</ul>';
            echo '</div>';
            echo '<!-- /.navbar-collapse -->';
        echo '</div>';
        echo '<!-- /.container -->';
    echo '</nav>';
	}

	public function introHeader (){
		echo '<!-- Intro Header -->';
    		echo '<header class="intro" style="height: 90px;">';
        		//echo '<div class="intro-body">';
		            //echo '<div class="container">';
		                //echo '<div class="row">';
		                    //echo '<div class="col-lg-12">';
		                    //echo '</div>';
		                //echo '</div>';
		            //echo '</div>';
        		//echo '</div>';
    		echo '</header>';
	}
}

?>