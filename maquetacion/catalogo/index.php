<?php
/**
 * Flipbook catalogo
 *
 * @package		orion
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 */
$page = 'catalogo';
include '../functions.php';
?>

<!DOCTYPE html>
<html class="no-js html-catalogo" lang="es">
	<head>
		<meta charset="utf-8">
		<title>Catálogo | Sistema Orion de Schneider Electric</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/icon" href="../favicon.ico">
		<link rel="stylesheet" href="../css/main.css">
		<script src="../js/vendor/modernizr.js"></script>
	</head>
	<body class="page-catalogo">
    <?php include('../svg-defs.svg'); ?>

    <div class="sticky-wrapper">
    	<header class="header">
    	    <div class="logo">
    	        <a href="../" title="Volver al sitio"><img src="../img/orion.svg" alt="Orion"></a>
    	    </div><!--.logo-->
    	    <ul class="menu">
    	        <li>
    	            <a href="../" title="Volver al sitio" >Volver al sitio</a>
    	        </li>
    	    </ul><!--.menu-->
    	    <div class="logo--right">
    	        <a href="http://www.schneider-electric.com/site/home/index.cfm/cl/" target="_blank"><img src="../img/schneider.svg" alt="Schneider Life is On"></a>
    	    </div>
    	</header>
    	<section class="catalogo">
        	<div class="wrap">
    
                <h1>Sistema Orion</h1>
                <h2>Un universo de posibilidades</h2>      
                <p class="info">Arrastra las páginas desde las esquinas para ver nuestro catálogo completo</p> 	
            	
            	<div class="flipbook-viewport">
                    <div class="container">
                        <div class="flipbook">
                            <?php for($i = 1; $i < 69; $i++) { echo '<div style="background-image:url(img/page-'.$i.'.jpg)"></div>'; } ?>
                        </div><!--.flipbook-->
                    </div><!--.container-->
            	</div><!--.flipbook-viewport-->
            	
            	<div class="buttons">
                    <a href="catalogo_orion.pdf" class="btn btn--border" title="Descarga el catálogo Orion">Descarga el catálogo Orion</a>
                </div><!--.buttons-->
        	</div>
    	</section>
    </div><!--.sticky-wrapper-->
	<footer class="footer">
    <div class="column">
        <img src="../img/schneider.svg" alt="Schneider Life is On">
    </div><!--.column-->
    <div class="column">
        <ul class="redes">
            <li class="redes__item">
                <a href="https://www.facebook.com/SchneiderElectricLAM" title="Siguenos en Facebook" target="_blank">
                    <svg><use xlink:href="#shape-icon-facebook" /></svg>
                </a>
            </li><!--.redes__item-->
            <li class="redes__item">
                <a href="https://twitter.com/SchneiderLAM" title="Siguenos en Twitter" target="_blank">
                    <svg><use xlink:href="#shape-icon-twitter" /></svg>
                </a>
            </li><!--.redes__item-->
            <li class="redes__item">
                <a href="https://plus.google.com/+schneiderelectric" title="Siguenos en Google Plus" target="_blank">
                    <svg><use xlink:href="#shape-icon-gplus" /></svg>
                </a>
            </li><!--.redes__item-->
            <li class="redes__item">
                <a href="https://www.linkedin.com/company/schneider-electric" title="Siguenos en Linkedin" target="_blank">
                    <svg><use xlink:href="#shape-icon-linkedin" /></svg>
                </a>
            </li><!--.redes__item-->
        </ul><!--.redes-->
    </div><!--.column-->
</footer>
	<script src="../js/app.min.js"></script>
	</body>
</html>