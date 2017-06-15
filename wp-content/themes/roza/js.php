<script type="text/javascript">
	var k,z=0;
	var flag=true;
	$(window).resize(function(){				
		CreateSVG(350,250);
		var width=$(window).width();
		var height=window.innerHeight;
		//$("#content").height(height);
		//$("#scrollable").height(height);
		//$('.unit-slide').attr("width",width-240);
		if((height*1.2898)<=(width-245))//width
		{
			var w=width-245;
			var h=w/1.2898;
			$('.image').css('width',w+5);
			$('.image').css('height',h);
			$('.image').css('top',-(h-height)/2);
			$('.image').css('left',0);
			
			$('.section').css('width',width-245+5);
			$('.section').css('height',height);					
		}
		else
		{
			var w=height*1.2898;
			var h=height;					
			$('.image').css('width',w);
			$('.image').css('height',h);
			$('.image').css('top',0);
			$('.image').css('left',((width-245)-w)/2);
			
			$('.section').css('width',width-245+5);
			$('.section').css('height',height);					
			
		}
		$('.text').css('top',height/6.66);
		$('.active-slide').siblings('section').css('top',height);
		$('.active-slide').siblings('section').css('opacity',0);
		
		callback();
		

		
	});
	
	
	
	jQuery.fn.single_double_click = function(single_click_callback, double_click_callback, timeout) {
		return this.each(function() {
			var clicks = 0,
				self = this;
			jQuery(this).click(function(event) {
				clicks++;
				if (clicks == 1) {
					setTimeout(function() {
						if (clicks == 1) {
							single_click_callback.call(self, event);
						} else {
							double_click_callback.call(self, event);
						}
						clicks = 0;
					}, timeout || 150);
				}
			});
		});
	}
	function callback()
	{
		
		$("#msg").css('height',window.innerHeight-150);
		var imgWidth=1125;
		var left=344;
		var focus=245;
		var right=326;
		
		
		var width=$(window).width();
		var height=window.innerHeight;
		$('#map_canvas').width(width-250);
		$('#map_canvas').height(height);
		
		$('.spec-title').width($('.mentions_title').width()-122);
		
		
		var w,h;
		
		if((height*1.4)<=(width-245-400))//width
		{
			w=width-245+5-400;
			h=w/1.4;
			$('#falu').css('width',w);
			$('#falu').css('height',h);
			
			$('#falu').css('left',-5);
			//$('#falu').css('top',-(h-height)/2);
			//$('#chairman_wrapper').css('width',width-w-245);
			
			//$('.section').css('width',width-245+5);
			//$('.section').css('height',height);					
		}
		else
		{			
			w=height*1.4;
			h=height;
			$('#falu').css('width',w);
			$('#falu').css('height',h);
			var viewWidth=width-250-400;
			var center=w/(imgWidth/focus);
			var d=(viewWidth-center)/2;
			var first=w/(imgWidth/left);
			$('#falu').css('left',-(first-d+30));
			//$('#falu').css('top',0);
			//$('#chairman_wrapper').css('width',width-w-245);
			
			//$('.section').css('width',width-245+5);
			//$('.section').css('height',height);					
			
		}
		//if(w>=(viewWidth+150))
		//{
		//	var junk=w/(imgWidth/left)-120;		
		//	$('#falu').css('left',-junk);
		//}
		//else
		
			
		$('#chairman_wrapper').css('height',height);
		
	}
	window.addEventListener('load', function (){
		
		progress=90;
		autoIntvl=setInterval(function(){
			var width=$(window).width();
			var height=window.innerHeight;
			if($('.active-slide').next().length==0)
			{
				$('#down').css('visibility','visible');
				$('#up').css('visibility','hidden');
				
				$('.active-slide').removeClass('active-slide');
				$('#sections').children(":first").addClass('active-slide');
				
				$('.active-slide').siblings('section').css('top',height);
				$('.active-slide').siblings('section').css('opacity',0);
				
				$('.active-slide').hide();
				$('.active-slide').css('top',0);
				$('.active-slide').css('opacity',1);
				$('.active-slide').fadeIn('slow');
			}
			
			else
			{
				if($('.active-slide').next().next().length==0)
					$('#down').css('visibility','hidden');
				$('.active-slide').siblings('section').css('top',height);
				$('.active-slide').siblings('section').css('opacity',0);
				
				$('.active-slide').removeClass('active-slide').next().addClass('active-slide');						
				if($('.active-slide').prev().length!=0)
					$('#up').css('visibility','visible');
					
				$('.active-slide').prev().prev().css('opacity',1);
				$('.active-slide').prev().css('opacity',1);
				$('.active-slide').css('opacity',1);
				$('.active-slide').prev().animate({top:-height},1200,'easeOutQuint',function(){});
				$('.active-slide').animate({top:0},1200,'easeOutQuint',function()
				{							
					
				});
			}
		},6000);
	});

	var invtl,invl2;
	var progress=0,progress2=0,counter2=0;	
	var autoIntvl;
	
	$(document).ready(function(){
		
		///* another triumph
		
		
		//*/
		///* Triumph !
		$('#wrap').hide();
		
		intvl=setInterval(function(){
			var rand = Math.ceil(Math.random()*9); 
			progress+=rand;
			
			if(progress>80 && progress<90)
				progress=80;
			if(progress>=90)
				progress=100;
			$('#line svg rect').first().next().attr('width',progress*265/100);
			$('#loading-progress').text(progress+' %');
			
			
			if(progress==100)
			{
				setTimeout(function(){
					clearInterval(intvl);
					$('#logo').css('visibility','hidden');
					$('#loading-progress').css('visibility','hidden');
					//$('#advertise').css('visibility','hidden');
					
					intvl2=setInterval(function(){
						progress2+=1;
						if(progress2==132)
						{
							clearInterval(intvl2);
							$('#preloader-overlay').animate({'background-color':'#000000'},800);
							$('#preloader-overlay').animate({'opacity':'0'},1000,function(){$('#preloader-overlay').css('position','relative');});
							
							setTimeout(function(){
								$('#preloader-overlay').css('z-index',0);
								$('#wrap').fadeIn(1000);
								$('#preloader').hide();
								$('.spec-title').width($('.mentions_title').width()-122);
							},1000);
						}
						$('#line svg rect').first().attr('x',progress2);
						$('#line svg rect').last().attr('x',progress2);
						$('#line svg rect').first().attr('width',265-progress2*2);
						$('#line svg rect').last().attr('width',265-progress2*2);
					},5);
				},100);
			}
		},1200);
		
		//*/
		//$('#preloader-overlay').css('opacity',0);
		//$('#preloader-overlay').css('z-index',0);
		//$('#preloader-overlay').css('position','relative');
		//$('#preloader-overlay').hide();
		
		
		
		$('.sublinks').hide();
		CreateSVG(350,250);
		var width=$(window).width();
		var height=window.innerHeight;
		//$("#content").height(height);
		//$("#scrollable").height(height);
		//$('.unit-slide').attr("width",width-240);				
		
		if((height*1.2898)<=(width-245))//width
		{
			var w=width-245;
			var h=w/1.2898;
			$('.image').css('width',w+5);
			$('.image').css('height',h);
			$('.image').css('top',-(h-height)/2);
			$('.image').css('left',0);
			
			$('.section').css('width',width-245+5);
			$('.section').css('height',height);					
		}
		else
		{
			var w=height*1.2898;
			var h=height;					
			$('.image').css('width',w);
			$('.image').css('height',h);
			$('.image').css('top',0);
			$('.image').css('left',((width-245)-w)/2);
			
			$('.section').css('width',width-245+5);
			$('.section').css('height',height);					
			
		}
		$('.text').css('top',height/6.66);
		
		
		$('.active-slide').siblings('section').css('opacity',0);
		$('.active-slide').css('top',0);
		$('.active-slide').css('opacity',1);
		
		callback();
		
		
		/*
		
		$('#down').single_double_click(
		function(event)
		{					
			
			flag=false;
			$('.active-slide').siblings('section').css('top',height);
			$('.active-slide').siblings('section').css('opacity',0);
			
			$('.active-slide').removeClass('active-slide').next().addClass('active-slide');
			$('.active-slide').prev().prev().css('opacity',1);
			$('.active-slide').prev().css('opacity',1);
			$('.active-slide').css('opacity',1);
			$('.active-slide').prev().animate({top:-height},1200,'easeOutQuint',function(){flag=true;});
			$('.active-slide').animate({top:0},1200,'easeOutQuint',function(){});					
			
		},
		function(event)
		{
			flag=false;
			console.log(flag);
			event.stopImmediatePropagation();
			
			$('.active-slide').siblings('section').css('top',height);
			$('.active-slide').siblings('section').css('opacity',0);
			
			$('.active-slide').removeClass('active-slide').next().next().addClass('active-slide');
			$('.active-slide').prev().css('opacity',1);
			$('.active-slide').prev().prev().css('opacity',1);
			$('.active-slide').css('opacity',1);
			$('.active-slide').prev().animate({top:-height},1200,'easeOutQuint',function(){flag=true;});
			$('.active-slide').animate({top:0},1200,'easeOutQuint',function(){});	
		});
		
		*/
		
		$('#up').css('visibility','hidden');

		$('#down').click(function(event)
		{
			clearInterval(autoIntvl);
			if(flag==true)
			{
				var width=$(window).width();
				var height=window.innerHeight;
				if($('.active-slide').next().next().length==0)
					$('#down').css('visibility','hidden');
				
				flag=false;
				$('.active-slide').siblings('section').css('top',height);
				$('.active-slide').siblings('section').css('opacity',0);
				
				$('.active-slide').removeClass('active-slide').next().addClass('active-slide');						
				if($('.active-slide').prev().length!=0)
					$('#up').css('visibility','visible');
					
				$('.active-slide').prev().prev().css('opacity',1);
				$('.active-slide').prev().css('opacity',1);
				$('.active-slide').css('opacity',1);
				$('.active-slide').prev().animate({top:-height},1200,'easeOutQuint',function(){});
				$('.active-slide').animate({top:0},1200,'easeOutQuint',function()
				{							
					flag=true;
				});					
			}					
		});
		
		
		
		$('#up').click(function(event){
			
			clearInterval(autoIntvl);
			if(flag==true)
			{
				var width=$(window).width();
				var height=window.innerHeight;
				if($('.active-slide').prev().prev().length==0)
					$('#up').css('visibility','hidden');
				
				
				flag=false;
				
				$('.active-slide').siblings('section').css('top',height);
				$('.active-slide').siblings('section').css('opacity',0);
				
				$('.active-slide').removeClass('active-slide').prev().addClass('active-slide');
				if($('.active-slide').next().length!=0)
					$('#down').css('visibility','visible');
				
				$('.active-slide').next().css('opacity',1);
				$('.active-slide').css('opacity',1);
				
				$('.active-slide').css('top',-height);						
										
				$('.active-slide').animate({top:0},1200,'easeOutQuint',function(){});
				$('.active-slide').next().animate({top:height},1200,'easeOutQuint',function()
				{							
					
					flag=true;
				});
			}
			 
		});
		
		
	});
	
	
	$('#nav >a').click(function(e) {
			//Close all div but the div right after the clicked <a>		
		$(e.target).next('div').siblings('div').slideUp(250);
		$(e.target).addClass('active');
		$(e.target).siblings('a').removeClass('active');
			//Toggle open/close on the div after the <a>, opening it if not open.
			$(e.target).next('div').slideToggle(250);
	});
	
	
	
	<?php 
		$list=array('company-profile','board-of-director','mission-and-vision','chairmans-message','idlc','dbh','residential','commercial','career-opportunity','available-jobs','contact','site-map','legal-terms','event');
		foreach($list as $temp){
			$id='#'.$temp;
			$cmd=$temp;
	?>
	
	$('<?php echo $id;?>').click(function(){
		
		$('#content').scrollTop(0);
		
		
		$('.sub-active').removeClass('sub-active');
		$(this).addClass('sub-active');
		
		window.history.pushState
		(
			{},
			"",
			"<?php echo get_bloginfo('url');?>/<?php echo $cmd;?>"
		);
		
		$.ajax({
			type: "POST",
			url: "<?php echo get_stylesheet_directory_uri();?>/ajax.php",
			data: {'cmd':'<?php echo $cmd;?>'},
			beforeSend:
				function()
				{
					
					$('.overlay').css('display','block');
				},
			xhr:
				function()
				{
					myXhr = $.ajaxSettings.xhr();
					if(myXhr.upload)
					{						
						myXhr.upload.addEventListener('progress',function(evt){}, false);						
					}
					myXhr.addEventListener("progress", function(evt){
						if(evt.lengthComputable)
						{
							var percentComplete = evt.loaded*100 / evt.total;
							//alert(evt.loaded+' '+evt.total);
							
							//$('.overlay').css('display','block');
							
							renderProgress(percentComplete);
						}
					},false);
					return myXhr;
				},
			success: 
				function(response)
				{
					$('.overlay').css('display','none');
					$('#content').hide();
					$('#content').html(response);
					$('#content').fadeIn('slow');
					<?php if($cmd!='chairmans-message'): ?>
						$('#content').css('overflow-y','scroll');
					<?php else: ?>
						$('#content').css('overflow','hidden');
					<?php endif;?>
					$('#map_canvas').css('display','none');
					callback();
				}
		});
		return false;
		//end
	});
	
	<?php } ?>
	/*
	
	$('#board-of-director').click(function(){
	
		$('.sub-active').removeClass('sub-active');
		$(this).addClass('sub-active');
		
		window.history.pushState
		(
			{},
			"",
			"<?php echo get_bloginfo('url');?>/board-of-director"
		);
		
		$.ajax({
			type: "POST",
			url: "<?php echo get_stylesheet_directory_uri();?>/ajax.php",
			data: {'cmd':'board-of-director'},
			xhr:
				function()
				{
					myXhr = $.ajaxSettings.xhr();
					if(myXhr.upload)
					{						
						myXhr.upload.addEventListener('progress',function(evt){}, false);						
					}
					myXhr.addEventListener("progress", function(evt){
						if(evt.lengthComputable)
						{
							var percentComplete = evt.loaded*100 / evt.total;
							//alert(evt.loaded+' '+evt.total);
							
							$('.overlay').css('display','block');
							
							renderProgress(percentComplete);
						}
					},false);
					return myXhr;
				},			
			success: 
				function(response)
				{
					$('.overlay').css('display','none');
					$('#content').html(response);
				}
		});
		//end
	});
	
	
	*/
	
	function renderProgress(progress)
	{
		progress = Math.floor(progress);
		if(progress<25){
			var angle = -90 + (progress/100)*360;
			$(".animate-0-25-b").css("transform","rotate("+angle+"deg)");
		}
		else if(progress>=25 && progress<50){
			var angle = -90 + ((progress-25)/100)*360;
			$(".animate-0-25-b").css("transform","rotate(0deg)");
			$(".animate-25-50-b").css("transform","rotate("+angle+"deg)");
		}
		else if(progress>=50 && progress<75){
			var angle = -90 + ((progress-50)/100)*360;
			$(".animate-25-50-b, .animate-0-25-b").css("transform","rotate(0deg)");
			$(".animate-50-75-b").css("transform","rotate("+angle+"deg)");
		}
		else if(progress>=75 && progress<=100){
			var angle = -90 + ((progress-75)/100)*360;
			$(".animate-50-75-b, .animate-25-50-b, .animate-0-25-b")
												  .css("transform","rotate(0deg)");
			$(".animate-75-100-b").css("transform","rotate("+angle+"deg)");
		}
		$(".loader-text").html(progress+"%");
	}
</script>

<!--very important-->
			
<script type="text/javascript">
	//page specific javascript code here
	window.addEventListener('load', function (){
		$('.active').next('div').slideDown(900);
	});
</script>

<!--very important-->