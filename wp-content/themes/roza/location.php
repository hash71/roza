<?php
/*
Template Name: Location
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
				
			</div>
			
			<?php require_once('js.php');?>
		</div>
		<?php location();?>
		<?php require_once('overlay.php');?>
	</body>
</html>