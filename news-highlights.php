<?php include("tpl/header2.tpl");?>
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
                <li class="" ><a href="#">News</a></li>
                
                <li class="separator">\</li>
                <li class="current" ><a href="#">News Highlights</a></li>
                
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
	<div id="main">
		<div class="container">
		  <div id="content" class="print-area">
		    <!--MOD_5e435568-4740-44ad-97af-a102f8c9bd39-->
		    <div class="content-container"> <span class="clearfix"></span>
		      <h1>News Highlights</h1>
		      <div class="general-vertical-listing listing" id="newsListing">
		        <ul class="general-listing cf">
                <?php
				$query = "SELECT * FROM news ORDER BY news_date DESC ";
				$numrows = News::Get_More_News($query);
				$numrows = count($numrows);	
				
				$pages->mid_range = 10; 
				$pages->items_total =$numrows;/* News::GetTotalNumOfRecords();*/
    			$pages->paginate();
														
				$newsall = News::Get_More_News($pages->limit);
				for($n = 0;$n<count($newsall);$n++){
				$getrow = each($newsall);	
				?>
		         <!-- <li><a href="#" title="" class="image-frame-1-small"><img src="../Content/Generated/Thumbnails/eadb8880_8c1x5c1wffffff.jpg" alt="" /></a>-->
		            <div class="inner"><span class="date" title="28/11/2012"><?php  
			$getdate = strtotime($getrow["value"]['news_date']);
			echo date("l F d, Y", $getdate); ?></span>
		              <h4><a href="news.php?news_id=<?php echo $getrow["value"]["news_id"]; ?>" title="<?php echo $getrow["value"]["news_name"]; ?>"><?php echo $getrow["value"]["news_name"]; ?></a></h4>
		               <p class="excerpt"><span class="meta-info"><?php 
					   $getcentence = explode(".",$getrow["value"]["description"]);
					   echo $getcentence[0]." ".$getcentence[1]."".$getcentence[2]; ?>...
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="news.php?news_id=<?php echo $getrow["value"]["news_id"]; ?>" class="read-more">read more…</a></span></p>
	                </div>
		            <span class="clear"></span></li>
                    <hr>
		          <?php }?>
	            </ul>
		        <ul class="pager cf">
		           <?php include('tpl/pagin.tpl'); ?>
	            </ul>
	          </div>
		      <script type="text/javascript">
    $(document).ready(function () {
        $('#newsListing').newsListing({
            initialPage: 1,
            rows:10,
            initialTotalPages: 63,
            languageId: 1,
            languageCode: 'en-GB',
            thumbnailSizeFactor: '8c1x5c1wffffff',
            pagerFormat: 'Page {0} of {1}',
            nextLabel: 'Next',
            previousLabel: 'Previous',
            titleTextLimit: 150,
            introTextLimit: 250
        });
    });
            </script>
	        </div>
		    <!--/MOD_5e435568-4740-44ad-97af-a102f8c9bd39-->
	      </div>
		  <!-- #content -->
<div id="primary">
				<!--MOD_9047d8df-9686-4c20-a693-c0acb5a0f5dd--><!-- .widget.submenu -->

<?php include("tpl/development-partners-home.tpl");?>
  <?php include("tpl/accu-song.tpl");?>
 <!-- .box -->
  <?php include("tpl/aniversary-song.tpl");?>				
 <?php include("tpl/e-coop.tpl");?>				
 <?php include("tpl/access-tool.tpl");?>	                
 <?php include("tpl/benchmark.tpl");?>					
 <?php //include("tpl/co-op-year.tpl");?>
<?php include("tpl/social-media-sidebox.tpl");?><!-- .widget.html-part -->

<!--/MOD_9f686459-466a-40ba-8b3f-d59770851f58-->

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
