<?php
/*
Template Name: Gallery 2
*/
?>
<html>
	<head>
		<?php require_once('init.php');?>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/ext/roundabout/css/style.css"/>
		<script src="<?php echo get_stylesheet_directory_uri();?>/ext/roundabout/js/roundabout.js" type="text/javascript"></script>
		<script src="<?php echo get_stylesheet_directory_uri();?>/ext/roundabout/js/roundabout_shapes.js" type="text/javascript"></script>
		<script src="<?php echo get_stylesheet_directory_uri();?>/ext/roundabout/js/jquery.easing.1.2.js" type="text/javascript"></script>
		
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/css/style.css"/>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/js/cufon-yui.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/js/cufon-replace.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/js/AG_Foreigner_Light-Plain_400.font.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/js/Myriad_Pro_400.font.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/js/tabs.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/js/jquery.faded.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/ext/gallery/js/script.js"></script>
	</head>
	<body>
		<div id="wrap">		
			<div id="svgContainer"></div>
			
			<aside>
				<?php aside(1,1);?>
			</aside>
			
			<div id="content">
				<div id="gallery-content">
					<div id="scrollable">
						
							<div id="gallery-nav">
								<li><a id="nav-1"><span>home</span></a></li>
								<li><a id="nav-2"><span>iconic</span></a></li>
								<li><a id="nav-3"><span>zip</span></a></li>								
							</div>
							
							
							
							
						
							<div id="page-2" class="slides">
								<ul class="tabs">
									<li><a href="#tab1"><span><span>Category 1</span></span></a></li>
									<li><a href="#tab2"><span><span>Category 2</span></span></a></li>
									<li><a href="#tab3"><span><span>Category 3</span></span></a></li>
									<li><a href="#tab4"><span><span>Category 4</span></span></a></li>
									<li><a href="#tab5"><span><span>Category 5</span></span></a></li>
								</ul>
								<div class="tab_container">
									<div id="tab1" class="tab_content">
										 <div class="faded">
												<ul class="big-image">
													 <li><img src="images/slide1-1big.jpg"></li>
													 <li><img src="images/slide1-2big.jpg"></li>
													 <li><img src="images/slide1-3big.jpg"></li>
												</ul>
												<ul class="pagination">
													 <li><a href="#" rel="0"><img src="images/slide1-1.jpg"></a></li>
													 <li><a href="#" rel="1"><img src="images/slide1-2.jpg"></a></li>
													 <li><a href="#" rel="2"><img src="images/slide1-3.jpg"></a></li>
												</ul>
										 </div>
									</div>
									<div id="tab2" class="tab_content">
										 <div class="faded">
												<ul class="big-image">
													 <li><img src="images/slide2-1big.jpg"></li>
													 <li><img src="images/slide2-2big.jpg"></li>
													 <li><img src="images/slide2-3big.jpg"></li>
												</ul>
												<ul class="pagination">
													 <li><a href="#" rel="0"><img src="images/slide2-1.jpg"></a></li>
													 <li><a href="#" rel="1"><img src="images/slide2-2.jpg"></a></li>
													 <li><a href="#" rel="2"><img src="images/slide2-3.jpg"></a></li>
												</ul>
										 </div>
									</div>
									<div id="tab3" class="tab_content">
										 <div class="faded">
												<ul class="big-image">
													 <li><img src="images/slide3-1big.jpg"></li>
													 <li><img src="images/slide3-2big.jpg"></li>
													 <li><img src="images/slide3-3big.jpg"></li>
												</ul>
												<ul class="pagination">
													 <li><a href="#" rel="0"><img src="images/slide3-1.jpg"></a></li>
													 <li><a href="#" rel="1"><img src="images/slide3-2.jpg"></a></li>
													 <li><a href="#" rel="2"><img src="images/slide3-3.jpg"></a></li>
												</ul>
										 </div>
									</div>
									<div id="tab4" class="tab_content">
										 <div class="faded">
												<ul class="big-image">
													 <li><img src="images/slide4-1big.jpg"></li>
													 <li><img src="images/slide4-2big.jpg"></li>
													 <li><img src="images/slide4-3big.jpg"></li>
												</ul>
												<ul class="pagination">
													 <li><a href="#" rel="0"><img src="images/slide4-1.jpg"></a></li>
													 <li><a href="#" rel="1"><img src="images/slide4-2.jpg"></a></li>
													 <li><a href="#" rel="2"><img src="images/slide4-3.jpg"></a></li>
												</ul>
										 </div>
									</div>
									<div id="tab5" class="tab_content">
										 <div class="faded">
												<ul class="big-image">
													 <li><img src="images/slide5-1big.jpg"></li>
													 <li><img src="images/slide5-2big.jpg"></li>
													 <li><img src="images/slide5-3big.jpg"></li>
												</ul>
												<ul class="pagination">
													 <li><a href="#" rel="0"><img src="images/slide5-1.jpg"></a></li>
													 <li><a href="#" rel="1"><img src="images/slide5-2.jpg"></a></li>
													 <li><a href="#" rel="2"><img src="images/slide5-3.jpg"></a></li>
												</ul>
										 </div>
									</div>
								</div>
							</div>
						
							<div id="page-1" class="slides">
								<div class="main">				
									<header>									
										<div class="relative">
											<div id="gallery">
												<ul id="myRoundabout">
													<li><img src="<?php echo get_stylesheet_directory_uri();?>/images/interior/images(1).jpg" alt=""></li>
													<li><img src="<?php echo get_stylesheet_directory_uri();?>/images/interior/images(2).jpg" alt=""></li>
													<li><img src="<?php echo get_stylesheet_directory_uri();?>/images/interior/images(3).jpg" alt=""></li>
												</ul>
											</div>
										</div>
									</header>
								</div>
							</div>
							
							<div id="page-3" class="slides">
								<img src="<?php echo get_stylesheet_directory_uri();?>/images/1.png" class="unit-slide" id="slide-2"/>
							</div>
					</div>
				</div>

			</div>
			<script type="text/javascript">
				$(document).ready(function(){
					var width=$(window).width();
					var height=window.innerHeight;
					
					$('#scrollable').css('width',$('#gallery-content').width()+40);
					$('#scrollable').css('height',height);
					$('.slides').css('width',$('#scrollable').width());
					$('.slides').css('height',height);
				});
				$(window).resize(function(){
					var width=$(window).width();
					var height=window.innerHeight;
					
					$('#scrollable').css('width',$('#gallery-content').width()+40);
					$('#scrollable').css('height',height);
					$('.slides').css('width',$('#scrollable').width());
					$('.slides').css('height',height);
				});
				
				$('#scrollable').bind('mousewheel',function(e){e.preventDefault();});
				
				
				$('#nav-1').click(function(){
					
					$('#scrollable').scrollTo('#page-1',1000,'easeOutQuint');
				});
				$('#nav-2').click(function(){
					
					$('#scrollable').scrollTo('#page-2',1000,'easeOutQuint');
				});
				$('#nav-3').click(function(){
					
					$('#scrollable').scrollTo('#page-3',1000,'easeOutQuint');
				});
			</script>
			
			<script type="text/javascript">
				$(document).ready(function() {
					$('#myRoundabout').roundabout({
						 shape: 'square',
						 minScale: 0.93, // tiny!
						 maxScale: 1, // tiny!
						 easing:'easeOutExpo',
						 clickToFocus:'true',
						 focusBearing:'0',
						 duration:800,
						 reflect:true
					});
				});
			</script>
			<?php require_once('js.php');?>
		</div>
		<?php require_once('overlay.php');?>
	</body>
</html>