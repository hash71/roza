<?php
/*
Template Name: Residential
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
				<?php aside(3,1);?>
			</aside>
			
			<div id="content" style="overflow-y:scroll;">
				<?php residential();?>
			</div>
			
			<?php require_once('js.php');?>
			
		</div>
		<?php require_once('overlay.php');?>
	</body>
</html>