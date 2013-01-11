<?php
session_start();
include( 'includes/config.inc.php' );
include( 'includes/function.inc.php' );

$page = $config['defpage'];
$page_params = array();
$data = array();
reRouter();
loadLogic();
renderPage();
?>