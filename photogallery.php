<?php 
$page = 61;
include("tpl/header2.tpl");
require_once('common/gallery.class.php');
?>
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
<?php include("tpl/main_menu.tpl");?>			</div><!-- #access -->
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

<li class="breadcrumb">
    <ul>
        <li><a href="index.php">Home</a></li>
        

        
                <li class="separator">\</li>
                <li class="" ><a href="#">Gallery</a></li>
                
                <li class="separator">\</li>
                <li class="current" ><a href="#">Photo Gallery</a></li>
                
    </ul>
</li>
<!--/MOD_904e4620-9cfd-4f59-a547-b87256ff6026-->
<!--MOD_25a1441f-8ac1-4d7e-be18-bf68bf52572d-->

<li class="share-utilities">
<?php include("tpl/share-link.tpl");?>
</li>
<!--/MOD_25a1441f-8ac1-4d7e-be18-bf68bf52572d-->

					</ul>
				</div>
				<span class="clear"></span>
			</div><!-- #header-banners -->
			<span class="clear"></span>
		</div><!-- .container -->
	</div> 
    <!-- #header -->
	<div id="main">		<div class="container">
		  <div id="content" class="print-area">
				<!--MOD_14e32e5e-fc48-4606-87f5-30a956e95732-->
<h1>Photo Gallery</h1>
<div id="photo-gallery" class="listing photo-gallery">

    <ul class="general-listing">
    <?php 
	$g = 1;
	$catdd = Gallary :: Getcatagery();
	foreach ($catdd as $rowdd) {
		
		$catramdam = Gallary :: GetRamdamImage($rowdd["catagary"]);
		$imagecount = Gallary :: GetImageCount($rowdd["catagary"]);
		if($g%4 !=4){
	?>
        <li class="photo gv ">
            <a href="photogallery-images.php?imgcat=<?php echo $rowdd['catagary']; ?>" class="image-frame"><img src="upload_images/Gallary/thumb/<?php echo $catramdam["ramdamimage"]; ?>"  alt="<?php echo $rowdd['catagary']; ?>" /></a>
            <div class="item-details">
            <span>Photos: <?php echo $imagecount["imagecount"]; ?></span>
            </div>
            <h4 align="center"><a href="photogallery-images.php?imgcat=<?php echo $rowdd['catagary']; ?>"><?php echo $rowdd['catagary']; ?></a></h4>
         </li>
         <?php 
		 $g +=1;
	}else{
		 ?>
        
        <li class="photo gv last">
        <a href="photogallery-images.php?imgcat=<?php echo $rowdd['catagary']; ?>" class="image-frame"><img src="upload_images/Gallary/thumb/<?php echo $catramdam["ramdamimage"]; ?>"  alt="<?php echo $rowdd['catagary']; ?>" /></a>
            <div class="item-details">        
             <span>Photos: <?php echo $imagecount["imagecount"]; ?></span>
            <h4 align="center"><a href="photogallery-images.php?imgcat=<?php echo $rowdd['catagary']; ?>"><?php echo $rowdd['catagary']; ?></a></h4>
      </li>
<?php } }?>
    </ul>
    <div class="clear"></div>
   <!-- <ul class="pager">
        <li class="info">Page 1 of 0</li>
        <li class="first"><a href="" class="disabled previous" title="Previous"><span class="arrow arrow-previous">Previous</span></a></li>
        <li><a href="" class=" next" title="Next"><span class="arrow arrow-next">Next</span></a></li>
    </ul>-->
</div>

			</div>
		  <!-- #content -->
<div id="primary">
<?php include("tpl/globle-afiliation.tpl");?>	
<?php include("tpl/development-partners-home.tpl");?>			
 <?php include("tpl/e-coop.tpl");?>				
 <?php include("tpl/access-tool.tpl");?>	                
 <?php include("tpl/benchmark.tpl");?>					
 <?php //include("tpl/co-op-year.tpl");?>
<?php include("tpl/social-media-sidebox.tpl");?>
</div><!-- #primary -->
		  <div id="secondary">
				
		  </div><!-- #secondary -->
			<span class="clear"></span>
	  </div><!-- .container -->
	</div><!-- #main -->
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
	
    </form>
    <!-- AddThis Button BEGIN  -->
    <script type="text/javascript"> 
        var addthis_config = {
            ui_delay: 200,
            services_exclude: 'print, email'
        }
        $(document).ready(function () {
            if ($('a.share-link').length > 0) {
                $('a.share-link').addClass('addthis_button').attr('href', 'http://www.addthis.com/bookmark.php?v=250&username=ra-4df33de459429749');
                var at = document.createElement('script');
                at.type = 'text/javascript';
                at.async = true;
                at.src = '../../../../s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4df33de459429749'/*tpa=http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4df33de459429749*/;
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(at, s);
            }
        });
    </script>
    <!-- AddThis Button END -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-10296834-28']);
  _gaq.push(['_setDomainName', 'none']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www/') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
