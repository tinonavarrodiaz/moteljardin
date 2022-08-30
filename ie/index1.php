<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-MX" lang="es.MX">

	<head>

		<title>Motel Jardín</title>
		<!-- Fav Icon -->
<link rel="shortcut icon" href="_include/img/favicon.ico">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="_include/img/favicon.ico">
<link rel="apple-touch-icon" sizes="72x72" href="_include/img/favicon.ico">
<link rel="apple-touch-icon" sizes="144x144" href="_include/img/favicon.ico">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		
		<link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="theme/supersized.shutter.css" type="text/css" media="screen" />
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.min.js"></script>
		
		<script type="text/javascript" src="js/supersized.3.2.7.min.js"></script>
		<script type="text/javascript" src="theme/supersized.shutter.min.js"></script>
		
		<script type="text/javascript">
			
			jQuery(function($){
				
				$.supersized({
				
					// Functionality
					slide_interval          :   3000,		// Length between transitions
					transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	700,		// Speed of transition
															   
					// Components							
					slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					slides 					:  	[			// Slideshow Images
														{image : 'img/slider-images/image01.jpg"'},
														{image : 'img/slider-images/image02.jpg"'},
														{image : 'img/slider-images/image03.jpg"'},
														{image : 'img/slider-images/image04.jpg"'}
												]
					
				});
		    });
		    
		</script>
		
	</head>
	
	<style type="text/css">
		ul#demo-block{ margin:0 15px 15px 15px; }
			ul#demo-block li{ margin:0 0 10px 0; padding:10px; display:inline; float:left; clear:both; color:#aaa; background:url('img/bg-black.png'); font:11px Helvetica, Arial, sans-serif; }
			ul#demo-block li a{ color:#eee; font-weight:bold; }
	</style>

<body id="inicio">

<p class="contador">Visitas:<br/><?php include("contador1.php"); ?></p>

<div id="menugral">
<div id="logo">
        	<a id="goUp" href="#home-slider" title="Motel Jardin">Motel Jardin</a>
        </div>

	<div id="menu">
        	<ul id="menu-nav">
            	<li class="current"><a href="index.html">Inicio</a></li>
                <li><a href="galeria.html">Galeria</a></li>
              <li><a href="habitaciones.html">Habitaciones</a></li>
                <li><a href="ubicacion.html">Ubicación</a></li>
            </ul>
			
        </div>

</div>

</body>
</html>
