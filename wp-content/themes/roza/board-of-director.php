<?php
/*
Template Name: Board of Director
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
				<?php aside(1,2);?>
			</aside>
			
			<div id="content" style="overflow-y: scroll;">				
				<?php board_of_director(); ?>
			</div>
			
			<?php require_once('js.php');?>
			
		</div>
		<?php require_once('overlay.php');?>
	</body>
</html>