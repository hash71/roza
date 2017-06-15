<?php
/*
Template Name: Skeleton
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
				<header>
					<h1>
						<a href="#" class="logo">Roza Properties</a>
					</h1>
				</header>
				<div id='nav'>					
					<a href='javascript:;' class="links active"><span class="bg"></span>Company Overview</a>
						<div class='sublinks'>
							<ul>
								<li><a id="company-profile" class="sub-active">Company Profile</a></li>
								<li><a id="board-of-director">Board of Director</a></li>								
								<li><a id="mission-and-vision">Mission  and Vision</a></li>								
								<li><a id="chairmans-message">Chairman's Message</a></li>								
							</ul>
						</div>
					<a href='javascript:;' class="links"><span class="bg"></span>Corporate Partner</a>
						<div class='sublinks'>
							<ul>
								<li><a href="#">IDLC</a></li>
								<li><a href="#">DBH</a></li>																																					
							</ul>
						</div>
					<a href='javascript:;' class="links"><span class="bg"></span>Business</a>						
						<div class='sublinks'>
							<ul>
								<li><a href="#">Residential</a></li>
								<li><a href="#">Commercial</a></li>															
							</ul>
						</div>
					
					<a href='javascript:;' class="links"><span class="bg"></span>Career</a>
						<div class='sublinks'>
							<ul>
								<li><a href="#">Career Opportunity</a></li>
								<li><a href="#">Available Jobs</a></li>																																						
							</ul>
						</div>					
					<a href='javascript:;' class="links"><span class="bg"></span>Gallery</a>
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
							<li><a href="#">Press</a></li>
							<li><a href="#">Store Locator</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">Site Map</a></li>
							<li><a href="#">Legal Terms</a></li>
						</ul>
					</nav>
					<nav id="external">
						<ul>
							<li><a href="#" target="_blank" class="facebook">Facebook</a></li>
							<li><a href="#" target="_blank" class="twitter">Twitter</a></li>
							<li><a href="#" target="_blank" class="youtube">Youtube</a></li>
							<li class="last-child"><a href="#" target="_blank" class="puig">Puig</a></li>							
						</ul>
					</nav>
				</footer>
			</aside>
			
			<div id="content">				
				<nav>
					<div id="up"></div>
					<div class="breaker"></div>
					<div id="down"></div>
					<div class="breaker"></div>
				</nav>
				sadfsdafasdf sdf sdf sadfsadf sadfasdfs ajklfasdflas;djfl sad;lfj;slakdjf l;sajdf lasjdf;lksaj dflkjsadlf; kjsadlf kjsd ehre profile
			</div>
			
			<?php require_once('js.php');?>
			
			<!--very important-->
			
			<script type="text/javascript">
				//page specific javascript code here
				$(document).ready(function(){
					$('.active').next('div').css('display','block');
				});
			</script>
			
			<!--very important-->
			
		</div>
		
	</body>
</html>