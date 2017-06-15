<?php
/*
Template Name: Site Map
*/
?>
<html>
	<head>
		<?php require_once('init.php');?>		
	</head>
	<body>
		<div id="wrap">		
			<div id="svgContainer"></div>
			
			<aside>
				<?php aside(0,0);?>
			</aside>
			
			<div id="content" style="overflow-y: scroll;">
				<?php site_map();?>
			</div>
			
			<?php require_once('js.php');?>
		</div>
		<?php require_once('overlay.php');?>
	</body>
</html>