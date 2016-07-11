<?php
include 'functions.php';
/**
 * Cabacera de la Página
 *
 * Nuestra todo el contenido hasta <body>
 *
 * @package		orion
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 */
?>
<!DOCTYPE html>
<html class="no-js" lang="es">
	<head>
		<meta charset="utf-8">
		<title>Sistema Orion de Schneider Electric</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/main.css">
		<link rel="icon" type="image/icon" href="favicon.ico">
		<script src="js/vendor/modernizr.js"></script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-72867730-1', 'auto');
			ga('send', 'pageview');
		</script>
	</head>
	<body <?php body_class(); ?>>
	<?php include('svg-defs.svg'); ?>
	<header class="header">
	    <div class="logo">
	        <img src="img/orion.svg" alt="Orion">
	    </div><!--.logo-->
	    <ul class="menu">
	        <li>
	            <a onClick="ga('send', 'event', 'button', 'go-down', 'Orion Essence');" href="#" title="Orion Essence" class="link-1">Orion Essence</a>
	        </li>
	        <li>
	            <a onClick="ga('send', 'event', 'button', 'go-down', 'Orion Materials');" href="#" title="Orion Materials" class="link-2">Orion Materials</a>
	        </li>
	        <li>
	            <a onClick="ga('send', 'event', 'button', 'go-down', 'Orion You');" href="#" title="Orion You" class="link-3">Orion You</a>
	        </li>
	    </ul><!--.menu-->
	    <div class="logo--right">
	        <a onClick="ga('send', 'event', 'button', 'out', 'HomePage');" href="http://www.schneider-electric.com/site/home/index.cfm/cl/" target="_blank"><img src="img/schneider.svg" alt="Schneider Life is On"></a>
	    </div>
	</header>