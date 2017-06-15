<?php
/*
Template Name: Career Opportunity
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
				<?php aside(4,1);?>
			</aside>
			
			<div id="content" style="overflow-y: scroll;">
				<?php career_opportunity();?>
			</div>
			
			<?php require_once('js.php');?>
		</div>
		<?php require_once('overlay.php');?>
	</body>
</html>