<?php
/*
Template Name: Commercial
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
				<?php aside(3,2);?>
			</aside>
			
			<div id="content" style="overflow-y:scroll;">
				<?php commercial();?>
			</div>
			
			<?php require_once('js.php');?>
			
		</div>
		<?php require_once('overlay.php');?>
	</body>
</html>