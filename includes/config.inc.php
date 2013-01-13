<?php
$config['host'] = 'http://localhost/';
$config['folder'] = '';
$config['url'] = $config['host'] . $config['folder'];

$config['defmetatitle'] = 'RMS v2 - A new breed of Rental Management System';
$config['defmetadesc'] = 'A new breed of Rental Management System';
$config['defmetakeywords'] = 'rental, job, house, software';

$config['logicpath'] = 'controllers';
$config['viewspath'] = 'views';
$config['tfullpath'] = 'views/template.php'; 
$config['epath'] = 'errors';

$config['csspath'] = $config['url'] = $config['host'] . $config['folder'] . 'css';
$config['jspath'] = $config['url'] = $config['host'] . $config['folder'] . 'js';

$config['imgpath'] = $config['url'] = $config['host'] . $config['folder'] . 'images';
$config['uplpath'] = $config['url'] = $config['host'] . $config['folder'] . 'images';

$config['defpage'] = 'dashboard.php';
$config['defext'] = '.php';

$config['jscssminified'] = true;
$config['jscssversion'] = 1.7;
?>