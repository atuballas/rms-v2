<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link type="text/css" rel="stylesheet" href="<?php echo $config['csspath'];?>/reset.css">
<link type="text/css" rel="stylesheet" href="<?php echo $config['csspath'];?>/style.css">
</head>

<body>

<div id="container">
	<div id="user-info">
		<div>
			<div class="user-info-levels" id="user-info-1">Welcome, <u>Administrator</u></div>
			<div class="user-info-levels" id="user-info-2">Logout</div>
		</div>
	</div>
	<div class="cb"></div>
	<div id="navigation">
		<ul>
			<li <?php global $page; if( 'dashboard.php' == $page ){ ?>class="active"<?php } ?>><a href="/dashboard/">Dashboard</a></li>
			<li <?php if( 'boarders.php' == $page ){ ?>class="active"<?php } ?>><a href="/boarders/">Boarders</a></li>
			<li <?php if( 'rooms.php' == $page ){ ?>class="active"<?php } ?>><a href="/rooms/">Rooms</a></li>
			<li <?php if( 'amenities.php' == $page ){ ?>class="active"<?php } ?>><a href="/amenities/">Amenities</a></li>
			<li <?php if( 'appliances.php' == $page ){ ?>class="active"<?php } ?>><a href="/appliances/">Appliances</a></li>
			<li <?php if( 'administrators.php' == $page ){ ?>class="active"<?php } ?>><a href="/administrators/">Administrators</a></li>
			<li <?php if( 'settings.php' == $page ){ ?>class="active"<?php } ?>><a href="/settings/">Settings</a></li>
			<li <?php if( 'rental.php' == $page ){ ?>class="active"<?php } ?>><a href="/rental/">Rental Management</a></li>
		</ul>
	</div>
	<div id="navigation-line"></div>
	<div id="content">
		<?php
			if( isset( $page ) ){
				if( file_exists( $config['viewspath'] . '/' . $page ) ){
					include( $config['viewspath'] . '/' . $page );
				}else{
					include_once( $config['epath'] . '/error_page_not_found.php' );
				}
			}
		?>
	</div>
</div>

</body>
<script type="text/javascript">
var imgpath = '<?php echo $config['imgpath'];?>';
</script>
<script type="text/javascript" src="<?php echo $config['jspath'];?>/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $config['jspath'];?>/lightbox.js"></script>
<script type="text/javascript" src="<?php echo $config['jspath'];?>/validator.class.js"></script>
<script type="text/javascript" src="<?php echo $config['jspath'];?>/script.js"></script>
</html>