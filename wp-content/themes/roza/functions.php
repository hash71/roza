<?php



function aside()
{
	$params=func_get_args();
	$param1=$params[0];//1,2,3,4,5//nav links
	$param2=$params[1];//1,2,3,4,5//nav sub links
	?>
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
		<a href='<?php echo get_bloginfo('url');?>/gallery' class="links <?php if($param1==5)echo 'active';?>"><span class="bg"></span>Gallery</a>
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
				<li><a href="<?php echo get_bloginfo('url');?>/location" id="location">Location</a></li>
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
	<?php
}
function generic()
{
	?>
	<div class="legal-informations">
		<div id="mentions_wrapper">		
	<?php
	
	$list=func_get_args();
	
	foreach($list as $slug)
	{
	
		$args=array(
			'name'=>$slug,
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 1
		);
		$my_posts = get_posts($args);
		$tags=wp_get_post_tags( $my_posts[0]->ID );
		
	?>
			
			<div class="mentions_title"><?php echo $my_posts[0]->post_title;;?></div>
			<div class="subtitles-section">
			<?php $z=1;foreach($tags as $tag){ $name=$tag->name;?>
				<div class="mentions-subtitle"><?php echo $name; if($z==count($tags)-1)echo ' & ';?></div>
			<?php $z++;}?>
			</div>
			<div class="mention_sep"></div>			
			<div class="mention_content"><?php echo wpautop($my_posts[0]->post_content);?></div>
			<div class="mention_sep"></div>
		
	<?php } ?>
		</div>
		
		
	</div>
	<?php	
}

function company_profile()
{
	generic('company-profile');
}

function board_of_director()
{	
	
	?>
	<div class="legal-informations">
		<div id="mentions_wrapper">		
	<?php
	
	$list=array('al-haj-mohammad-mosaddak-ali','ahmed-nayeem-uddin','ashfaque-uddin-ahmed');
	$k=0;
	foreach($list as $slug)
	{
	
		$args=array(
			'name'=>$slug,
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 1
		);
		$my_posts = get_posts($args);
		$tags=wp_get_post_tags( $my_posts[0]->ID );
		
	?>
			
			<div class="mentions_title">
				
				<div class="sidebyside spec-image">
					<?php if($k==0):?>
						<img src="<?php echo get_stylesheet_directory_uri();?>/images/chairman.gif" width="100" height="100"/>
					<?php elseif($k==1):?>
						<img src="<?php echo get_stylesheet_directory_uri();?>/images/bidrohi.png" width="100" height="100"/>
					<?php else:?>
						<img src="<?php echo get_stylesheet_directory_uri();?>/images/22.jpg" width="100" height="100"/>
					<?php endif;?>
				</div>
				<div class="sidebyside spec-title">
					<?php echo $my_posts[0]->post_title;;?>
					<div class="subtitles-section">
					<?php $z=1;foreach($tags as $tag){ $name=$tag->name;?>
						<div class="mentions-subtitle"><?php echo $name; if($z==count($tags)-1)echo ' & ';?></div>
					<?php $z++;}?>
					</div>
				</div>
				
			</div>
			
			<div class="mention_sep"></div>			
			<div class="mention_content"><?php echo wpautop($my_posts[0]->post_content);?>
				<div class="mention_sep"></div>
			</div>
			
		
	<?php $k++;} ?>
		</div>
		
		
	</div>
	<?php
	
}
function mission_and_vision()
{	
	generic('mission','vision','our-quality');
	
}
function chairmans_message()
{
	$args=array(
		'name'=>'chairmans-message',
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 1
	);
	$my_posts = get_posts($args);
	?>
	<div id="falu">
		<img src="<?php echo get_stylesheet_directory_uri();?>/images/falu-4.jpg" class="unit-slide" id="slide-0"/>
	</div>
	<div class="legal-informations">
		<div id="chairman_wrapper">	
			<div class="mentions_title"><?php echo $my_posts[0]->post_title;?></div>
			<div class="mention_sep"></div>
			<div class="mention_content" id="msg"><?php echo wpautop($my_posts[0]->post_content);?></div>
			<script type="text/javascript">
				$("#msg").mCustomScrollbar({
					autoHideScrollbar:true,
					theme:"dark",
					advanced:{
						updateOnContentResize:true
						}
				});
			</script>
		</div>
	</div>
	<?php	
}

function idlc()
{
	generic('idlc');
}
function dbh()
{
	generic('dbh');
}
function residential()
{
	generic('residential');
}
function commercial()
{
	generic('commercial');
}
function career_opportunity()
{
	generic('career-opportunity');
}
function available_jobs()
{	
	?>
	<div class="legal-informations">
		<div id="mentions_wrapper">		
	<?php
	
	$list=array('available-jobs');
	
	foreach($list as $slug)
	{
	
		$args=array(
			'name'=>$slug,
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 1
		);
		$my_posts = get_posts($args);
		$tags=wp_get_post_tags( $my_posts[0]->ID );
		
	?>
			
			<div class="mentions_title"><?php echo $my_posts[0]->post_title;;?></div>
			<div class="subtitles-section">
			<?php $z=1;foreach($tags as $tag){ $name=$tag->name;?>
				<div class="mentions-subtitle"><?php echo $name; if($z==count($tags)-1)echo ' & ';?></div>
			<?php $z++;}?>
			</div>
			<div class="mention_sep"></div>			
			<div class="mention_content"><?php echo wpautop($my_posts[0]->post_content);?></div>
			<div class="mention_sep"></div>
			<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/dropbox.js"></script>
		
	<?php } ?>
		</div>
		
		
	</div>
	<?php	
}
function contact()
{
	generic('contact');
}
function site_map()
{
	generic('site-map');
}
function legal_terms()
{
	generic('legal-terms');
}
function event()
{
	generic('event');
}

function location()
{
	?>
    <div id="map_canvas"></div>
	<script type="text/javascript">
	  function initialize() {
		var myLatlng = new google.maps.LatLng(23.992624, 90.399552);
		var map_canvas = document.getElementById('map_canvas');
		var map_options =
		{
			center: new google.maps.LatLng(23.992624, 90.399552),
			zoom: 9,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			panControl: true,
			panControlOptions:
			{
				position: google.maps.ControlPosition.RIGHT_TOP
			},
			zoomControl: true,
			zoomControlOptions: 
			{
				style: google.maps.ZoomControlStyle.LARGE,
				position: google.maps.ControlPosition.RIGHT_TOP
			}			
		  
		}
		var image = '<?php echo get_stylesheet_directory_uri();?>/images/map.png';
		var map = new google.maps.Map(map_canvas, map_options);
		var marker = new google.maps.Marker({
		  position: myLatlng,
		  map: map,
		  icon: image,
		  title: 'Roza Complex'
		});
	  }
	  google.maps.event.addDomListener(window, 'load', initialize);
	  
	</script>
	<?php
}