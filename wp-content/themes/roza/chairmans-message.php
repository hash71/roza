<?php
/*
Template Name: Chairmans Message
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
				<?php aside(1,4);?>
			</aside>
			
			<div id="content" >				
				<?php chairmans_message();?>
			</div>
			
			<?php require_once('js.php');?>
			<script type="text/javascript">
				
				
			</script>
		</div>
		<?php require_once('overlay.php');?>
	</body>
</html>