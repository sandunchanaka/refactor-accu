<?php 
$page = 61;
require_once('../includes/config.php');
require_once('../classes/db.class.php');
require_once('../common/gallery.class.php');

$imagecat = $_GET["imgcat"];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Association Of Asia Confederation Credit Union</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script src="js/jquery-1.6.1.min.js" type="text/javascript"></script>
		<!--script src="js/jquery.lint.js" type="text/javascript" charset="utf-8"></script-->
		<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
		
		<style type="text/css" media="screen">
			* { margin: 0; padding: 0; }
			
			body {
				
				font: 62.5%/1.2 Arial, Verdana, Sans-Serif;
				padding: 0 0px;
			}
			
			h1 { font-family: Georgia; font-style: italic; margin-bottom: 10px; }
			
			h2 {
				font-family: Georgia;
				font-style: italic;
				margin: 0px 0 0px 0;
			}
			
			p { font-size: 1.2em; }
			
			ul li { display: inline; }
			
			.wide {
				border-bottom: 1px #000 solid;
				width: 4000px;
			}
			
			.fleft { float: left; margin: 0 20px 0 0; }
			
			.cboth { clear: both; }
			
			#main {
				background: #fff;
				margin: 0 auto;
				padding: 0px;
				width: 1000px;
			}
		</style>
	</head>
	<body>
		<div id="main">
			
			
			<p>&nbsp;</p>
          <h1><?php echo $imagecat; ?></h1>
          <ul class="gallery clearfix">
	    <li></li>
        <?php 
	
	$viewimage = Gallary :: GetImagegallery($imagecat);
	foreach ($viewimage as $rowdd) {
		
		//$catramdam = Gallary :: GetRamdamImage($rowdd["catagary"]);
		//$imagecount = Gallary :: GetImageCount($rowdd["catagary"]);
	?>
     <li><a href="../upload_images/Gallary/<?php echo $rowdd['image_name'];?>" rel="prettyPhoto[gallery1]"><img src="../upload_images/Gallary/thumb/<?php echo $rowdd["image_name"]; ?>" width="150" height="100"  /></a></li>	
		<?php }?>		
          </ul>

			<h2>
			  <script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$("area[rel^='prettyPhoto']").prettyPhoto();
				
				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
				$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
		
				$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
					custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
					changepicturecallback: function(){ initialize(); }
				});

				$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
					custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
					changepicturecallback: function(){ _bsap.exec(); }
				});
			});
			  </script>
	
	  <!-- Google Maps Code -->
	  <script type="text/javascript"
			    src="http://maps.google.com/maps/api/js?sensor=true">
			</script>
	  <script type="text/javascript">
			  function initialize() {
			    var latlng = new google.maps.LatLng(-34.397, 150.644);
			    var myOptions = {
			      zoom: 8,
			      center: latlng,
			      mapTypeId: google.maps.MapTypeId.ROADMAP
			    };
			    var map = new google.maps.Map(document.getElementById("map_canvas"),
			        myOptions);
			  }

			</script>
	  <!-- END Google Maps Code -->
	
	  <!-- BuySellAds.com Ad Code -->
	  <style type="text/css" media="screen">
				.bsap a { float: left; }
			</style>
	  <script type="text/javascript">
			(function(){
			  var bsa = document.createElement('script');
			     bsa.type = 'text/javascript';
			     bsa.async = true;
			     bsa.src = '//s3.buysellads.com/ac/bsa.js';
			  (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
			})();
			</script>
	  <!-- END BuySellAds.com Ad Code -->
	</h2>
</div>
	</body>
</html>