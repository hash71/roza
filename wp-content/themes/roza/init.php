<title>Roza Properties</title>
<meta name="google-site-verification" content="Pt_3qRlafMBtD7a0tk6-lEXherU4wcXai9CAWiJCWoU" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css?v=<?php echo time();?>"/>		
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/jquery-1.9.1.js"></script>

<!--jquery ui-->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/ext/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>		
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/ext/jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.css"/>

<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon.ico" />

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/ext/scroller/jquery.mCustomScrollbar.js"></script>		
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/ext/scroller/jquery.mCustomScrollbar.css"/>

<style type="text/css">
#map_canvas
{
	width: 500px;
	height: 400px;
}
</style>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>



<script type="text/javascript">
	
	
	function CreateSVG (top,bottom) {
		var xmlns = "http://www.w3.org/2000/svg";
		var svg = document.createElementNS (xmlns, "svg");
		
		for(var i=0;i<20;i++)
		{
			
			var red=(200+i).toString(16);
			var green=(200+i).toString(16);
			var blue=(200+i).toString(16);
			var x1=top+i*2;
			var x2=bottom+i*2;
			var path = document.createElementNS (xmlns, "path");
			var coords = "M "+x1+', 0';
			coords += " L "+x2+', '+window.innerHeight;
			coords += " L "+(x2+2)+', '+window.innerHeight;
			coords += " L "+(x1+2)+', 0Z';
			path.setAttributeNS (null, 'fill', '#444444');
			path.setAttributeNS (null, 'stroke', '#000000');
			path.setAttributeNS (null, 'stroke-width', 0);
			path.setAttributeNS (null, 'd', coords);				
			path.setAttributeNS (null, 'opacity', ((19-i)/100));
			svg.appendChild(path);
		}
		var path=document.createElementNS(xmlns,"path");
		var coords="M0,0 L350,0 L250,"+window.innerHeight+" L0,"+window.innerHeight+" L0,0Z";				
		path.setAttributeNS(null,'fill','#ffffff');
		path.setAttributeNS(null,'d',coords);				
		svg.appendChild(path);
		
		var svgContainer = document.getElementById ("svgContainer");
		svgContainer.innerHTML='';
		svgContainer.appendChild (svg);         
	}
	
</script>