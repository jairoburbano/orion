<?php
/**
 * Funciones de Orion
 *
 * @package		orion
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 */

$site_title = 'Orion';

/**
 * Función que simula body_class de Wordpress
 * @return string Elemento completo de clase con
 *                las clases correspondientes
 */
function body_class() {
	global $page, $type, $template;

	if ( $type == 'page' ) {
		if ( ! empty($template) ) {
			$temp = 'page-template-'.$template;
		}
	} elseif ( $type == 'single' ) {
		$temp = $template;
	}

	if ( $page == 'home' ) {
		$class = 'home';
	}
	if ( $type == 'page' ) {
		$class = 'page ';
		if ( ! empty($temp) ) {
			$class .= $temp;
		}
	}

	if ( $type == 'single' ) {
		$class = 'single ';
		$class .= $temp;
	}

	if ( $type == 'blog' ) {
		$class = 'blog';
	}

	if ( $page == '404' ) {
		$class = 'error404';
	}
	echo 'class="' . $class . '"';
}
/**
 * Función que simula wp_title de Wordpress
 * @return string Título de sitio
 */
function wp_title() {
	global $page, $title, $subpage, $subpage_title, $site_title;
	if ( empty($subpage) && $page != 'home' ) {
		$wp_title = $title . ' | ' . $site_title;
	} else {
		$wp_title = $subpage_title . ' | ' . $title . ' | ' . $site_title;
	}
	if ( $page == 'home') {
		$wp_title = $site_title;
	}
	echo $wp_title;
}

/**
 * Función que simula la estructura de breadcrumb de yoast
 * @return string bloque completo de código de breadcrumb
 */
function breadcrumb() {
	global $title, $subpage_title, $subpage, $page;

	$breadcrumb = '<div class="bcrumbs">';
		$breadcrumb .= '<div class="breadcrumbs">';
			$breadcrumb .= '<a href="index.php">Home</a><span>/</span>';
			if ( empty($subpage) ) {
				$breadcrumb .= '<span class="current"> ' . $title . ' </span>';
			} else {
				$breadcrumb .= '<a href="' . $page . '.php"> ' . $title . ' </a>';
				$breadcrumb .= '<span>/</span>';
				$breadcrumb .= '<span class="current"> ' . $subpage_title . ' </span>';
			}
		$breadcrumb .= '</div>';
	$breadcrumb .= '</div>';

	echo $breadcrumb;
}
/**
 * Función sencilla para emular the_title de wordpress
 * @return string Titulo de la página
 */
function the_title() {
	global $title, $subpage_title, $subpage;
	if ( empty($subpage) ) {
		$the_title = $title;
	} else {
		$the_title = $subpage_title;
	}
	echo $the_title;
}