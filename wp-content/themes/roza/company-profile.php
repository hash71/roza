<?php
/*
Template Name: Company Profile
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
				<?php aside(1,1);?>
			</aside>
			
			<div id="content" style="overflow-y: scroll;">
				<?php company_profile();?>
			</div>
			
			<?php require_once('js.php');?>
		</div>
		<?php require_once('overlay.php');?>
	</body>
</html>