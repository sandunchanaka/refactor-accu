<?php 
$page = 61;
require_once('includes/config.php');
require_once('classes/db.class.php');
require_once('common/gallery.class.php');

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
		<link type="text/css" rel="stylesheet" media="All" href="css/style3.css" />
        <link rel="shortcut icon" href="content/images/animated_favicon.gif" />
		<style type="text/css" media="screen">
			* { margin: 0; padding: 0; }
			
						
			h1 { font-family: Georgia; font-style: italic; margin-bottom: 10px; }
			
			h2 {
				font-family: Georgia;
				font-style: italic;
				margin: 25px 0 5px 0;
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
				padding: 30px;
				width: 1000px;
			}
		</style>
	</head>
	<body>
    <div id="fb-root"></div>
        <div id="header">
    
		<div class="container">
			<div id="branding">
				<?php include("tpl/logo.tpl");?>
<div id="masdar-logo">
					
				</div>
			</div><!-- #branding -->
			<div id="access">
				<div class="skip-link screen-reader-text"><a href="#content" title="skip to content">Skip to content</a></div>
				<div id="utilities">
                <?php include("tpl/utilities.tpl");?>
<span class="clear"></span>
<?php //include("tpl/main_menu.tpl");?>			</div><!-- #access -->
			<div id="header-banners">
				<div id="primary-header">
					
				</div>
				<div id="secondary-header">
					<ul class="xoxo">
						
					</ul>
				</div><!-- #secondary-header -->
				<div id="tertiary-header">
					<span class="corner g-tl"></span>
					<span class="corner g-tr"></span>
					<span class="corner gb-bl"></span>
					<span class="corner gb-br"></span>
					<ul class="xoxo">
						<!--MOD_904e4620-9cfd-4f59-a547-b87256ff6026-->

<li class="breadcrumb" style="height:30px;">
    <ul>
        <li><a href="index.php">Home</a></li>
        

        
                <li class="separator">\</li>
                <li class="" ><a href="photogallery.php">Gallery</a></li>
                
                <li class="separator">\</li>
                <li class="current" ><a href="#">Photo Gallery</a></li>
                
    </ul>
</li>
<!--/MOD_904e4620-9cfd-4f59-a547-b87256ff6026-->
<!--MOD_25a1441f-8ac1-4d7e-be18-bf68bf52572d-->

<!--/MOD_25a1441f-8ac1-4d7e-be18-bf68bf52572d-->

					</ul>
				</div>
				<span class="clear"></span>
			</div><!-- #header-banners -->
			<span class="clear"></span>
		</div><!-- .container -->
	</div> 
    <!-- #header -->
		<div id="main">
          <h1><?php echo $imagecat; ?></h1>
          <ul class="gallery clearfix">
	    <li></li>
        <?php 
	
	$viewimage = Gallary :: GetImagegallery($imagecat);
	foreach ($viewimage as $rowdd) {
		
		//$catramdam = Gallary :: GetRamdamImage($rowdd["catagary"]);
		//$imagecount = Gallary :: GetImageCount($rowdd["catagary"]);
	?>
     <li><a href="upload_images/Gallary/<?php echo $rowdd['image_name'];?>" rel="prettyPhoto[gallery1]"><img src="upload_images/Gallary/thumb/<?php echo $rowdd["image_name"]; ?>" width="150" height="100"  /></a></li>	
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
<div id="footer">
		<div id="primary-footer">
			<div class="container">
                <!--MOD_2811f601-6cbd-414b-98a0-36eea2b10c7c-->

 <?php include("tpl/footer-menu.tpl");?>

<!--/MOD_2811f601-6cbd-414b-98a0-36eea2b10c7c-->

			</div><!-- .container -->
		</div><!-- #primary-footer -->
		<div id="secondary-footer">
			<div class="container">
				<div class="primary">
                    <!--MOD_f39b07bd-de39-4cb5-9ab5-ba58220f5c82-->
                  <!--/MOD_f39b07bd-de39-4cb5-9ab5-ba58220f5c82-->

                    <span class="clear"></span>
			  </div>
				<div class="secondary">
                <?php include("tpl/footer-text.tpl"); ?>
					<span class="clear"></span>
				</div>
				<span class="clear"></span>
			</div><!-- .container -->
		</div><!-- #secondary-footer -->
	</div><!-- #footer -->
	</body>
</html>