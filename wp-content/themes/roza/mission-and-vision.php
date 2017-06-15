<?php
/*
Template Name: Mission and Vision
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
				<?php aside(1,3);?>
			</aside>
			
			<div id="content" style="overflow-y:scroll;">
				<?php mission_and_vision();?>
			</div>
			
			<?php require_once('js.php');?>
			
		</div>
		<?php require_once('overlay.php');?>
	</body>
</html>