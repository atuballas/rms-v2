<?php
function renderPage(){
	global $config;
	if( file_exists( $config['tfullpath'] ) ){
		include( $config['tfullpath'] );
	}else{
		include( $config['epath'] . '/error_template_not_found.php' );
		exit;
	}
}
function reRouter(){
	global $config, $page, $page_params;
	$url = $_SERVER['REQUEST_URI'];
	if( '/' != $url ){
		$url = trim( $url, '/' );
		$url = explode( '/', $url );
		$page = $url[0] . $config['defext'];
		unset( $url[0] );
		$page_params = $url;
	}
}
?>