<?php
/*
Template Name: Gallery
*/
?>
<html>
	<head>
		<?php require_once('init.php');?>
		
		
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/css/style.css?v=<?php echo time();?>"/>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/js/cufon-yui.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/js/cufon-replace.js"></script>
		
		
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/js/tabs.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/js/jquery.faded.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/js/script.js"></script>
	</head>
	<body>
		<div id="wrap">		
			<div id="svgContainer"></div>
			
			<aside>
				<header>
					<h1>
						<a href="<?php echo get_bloginfo('url');?>" class="logo">Roza Properties</a>
					</h1>
				</header>
				<div id='nav'>					
					<a href='javascript:;' class="links <?php if($param1==1)echo 'active';?>"><span class="bg"></span>Company Overview</a>
						<div class='sublinks'>
							<ul>
								<li><a href="<?php echo get_bloginfo('url');?>/company-profile" id="company-profile" class="<?php if($param1==1 && $param2==1)echo 'sub-active';?>">Company Profile</a></li>
								<li><a href="<?php echo get_bloginfo('url');?>/board-of-director" id="board-of-director" class="<?php if($param1==1 && $param2==2)echo 'sub-active';?>">Board of Director</a></li>								
								<li><a href="<?php echo get_bloginfo('url');?>/mission-and-vision" id="mission-and-vision" class="<?php if($param1==1 && $param2==3)echo 'sub-active';?>">Mission  and Vision</a></li>								
								<li><a href="<?php echo get_bloginfo('url');?>/chairmans-message" id="chairmans-message" class="<?php if($param1==1 && $param2==4)echo 'sub-active';?>">Chairman's Message</a></li>								
							</ul>
						</div>
					<a href='javascript:;' class="links <?php if($param1==2)echo 'active';?>"><span class="bg"></span>Corporate Partner</a>
						<div class='sublinks'>
							<ul>
								<li><a href="<?php echo get_bloginfo('url');?>/idlc" id="idlc" class="<?php if($param1==2 && $param2==1)echo 'sub-active';?>">IDLC</a></li>
								<li><a href="<?php echo get_bloginfo('url');?>/idlc" id="dbh" class="<?php if($param1==2 && $param2==2)echo 'sub-active';?>">DBH</a></li>																																					
							</ul>
						</div>
					<a href='javascript:;' class="links <?php if($param1==3)echo 'active';?>"><span class="bg"></span>Business</a>						
						<div class='sublinks'>
							<ul>
								<li><a href="<?php echo get_bloginfo('url');?>/residential" id="residential" class="<?php if($param1==3 && $param2==1)echo 'sub-active';?>">Residential</a></li>
								<li><a href="<?php echo get_bloginfo('url');?>/commercial" id="commercial" class="<?php if($param1==3 && $param2==2)echo 'sub-active';?>">Commercial</a></li>															
							</ul>
						</div>
					
					<a href='javascript:;' class="links <?php if($param1==4)echo 'active';?>"><span class="bg"></span>Career</a>
						<div class='sublinks'>
							<ul>
								<li><a href="<?php echo get_bloginfo('url');?>/career-opportunity" id="career-opportunity" class="<?php if($param1==4 && $param2==1)echo 'sub-active';?>">Career Opportunity</a></li>
								<li><a href="<?php echo get_bloginfo('url');?>/available-jobs" id="available-jobs" class="<?php if($param1==4 && $param2==2)echo 'sub-active';?>">Available Jobs</a></li>																																						
							</ul>
						</div>					
					<a href='<?php echo get_bloginfo('url');?>/gallery' class="links active"><span class="bg"></span>Gallery</a>
						<div class='sublinks'>
							
						</div>
				</div>
				<footer>
					<nav id="internal">
						<ul id="cultures" class="cultures">
							<li style="height: 10px;"><a href="#">EN</a></li>
							<li class="last-child"><a href="#">BN</a></li>
						</ul>
						<ul>
							<li><a href="#">Newsletter</a></li>
							<li><a href="<?php echo get_bloginfo('url');?>/event" id="event">Event</a></li>
							<li><a href="#">Location</a></li>
							<li><a href="<?php echo get_bloginfo('url');?>/contact" id="contact">Contact</a></li>
							<li><a href="<?php echo get_bloginfo('url');?>/site-map" id="site-map">Site Map</a></li>
							<li><a href="<?php echo get_bloginfo('url');?>/legal-terms" id="legal-terms">Legal Terms</a></li>
						</ul>
					</nav>
					<nav id="external">
						<ul>
							<li><a href="https://www.facebook.com/rozaproperties" target="_blank" class="facebook">Facebook</a></li>
							<li><a href="https://twitter.com/RozaProperties" target="_blank" class="twitter">Twitter</a></li>
							<li><a href="#" target="_blank" class="youtube">Youtube</a></li>
							<li class="last-child"><a href="#" target="_blank" class="puig">Puig</a></li>							
						</ul>
					</nav>
				</footer>
			</aside>
			
			<div id="content">
				
					
					
					<ul class="tabs">
						<li><a href="#tab1">Gazipur Project</a></li>
						<li><a href="#tab2">Bashundhara Project</a></li>						
					</ul>
					<div class="tab_container">
						<div id="tab1" class="tab_content">
							 <div class="faded">
									<ul class="big-image">
										 <li><img src="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/images/exterior/Untitled-1.jpg"></li>
										 <li><img src="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/images/exterior/Untitled-2.jpg"></li>
										 <li><img src="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/images/exterior/Untitled-3.jpg"></li>
									</ul>
									<ul class="pagination">
										 <li><a href="#" rel="0"><img src="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/images/exterior/Untitled-1.jpg" width="165" height="81"></a></li>
										 <li><a href="#" rel="1"><img src="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/images/exterior/Untitled-2.jpg" width="165" height="81"></a></li>
										 <li><a href="#" rel="2"><img src="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/images/exterior/Untitled-3.jpg" width="165" height="81"></a></li>
									</ul>
							 </div>
						</div>
						<div id="tab2" class="tab_content">
							 <div class="faded">
									<ul class="big-image">
										 <li><img src="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/images/interior-home(1)/Untitled-2.jpg"></li>
										 <li><img src="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/images/interior-home(1)/Untitled-3.jpg"></li>
										 <li><img src="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/images/interior-home(1)/Untitled-4.jpg"></li>
									</ul>
									<ul class="pagination">
										 <li><a href="#" rel="0"><img src="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/images/interior-home(1)/Untitled-2.jpg" width="165" height="81"></a></li>
										 <li><a href="#" rel="1"><img src="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/images/interior-home(1)/Untitled-3.jpg" width="165" height="81"></a></li>
										 <li><a href="#" rel="2"><img src="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/images/interior-home(1)/Untitled-4.jpg" width="165" height="81"></a></li>
									</ul>
							 </div>
						</div>
						
					</div>
							
					
				

			</div>
			<script type="text/javascript">
				$(document).ready(function(){
					var width=$(window).width();
					var height=window.innerHeight;
				});
				$(window).resize(function(){
					var width=$(window).width();
					var height=window.innerHeight;
				});
			</script>
			
			<script type="text/javascript"> Cufon.now(); </script>
			<?php require_once('js.php');?>
		</div>
		<?php require_once('overlay.php');?>
	</body>
</html>