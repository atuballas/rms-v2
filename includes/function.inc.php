<?php
function renderPage(){
	global $config, $data;
	if( file_exists( $config['tfullpath'] ) ){
		include( $config['tfullpath'] );
	}else{
		include( $config['epath'] . '/error_template_not_found.php' );
		exit;
	}
}
function loadLogic(){
	global $config, $page, $page_params, $data;
	if( file_exists( $config['logicpath'] . '/' . $page ) ){
		include( $config['logicpath'] . '/' . $page );
	}else{
		include( $config['epath'] . '/error_page_not_found.php' );
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
function overrideMeta( $meta_title, $meta_desc, $meta_keys ){
	global $config;
	$config['defmetatitle'] = $meta_title;
	$config['defmetadesc'] = $meta_desc;
	$config['defmetakeywords'] = $meta_keys;
}
?>