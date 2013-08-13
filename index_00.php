<?php include("tpl/header.tpl");?>
<body >
<script type="text/javascript">
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "../connect.facebook.net/en_US/all.js#xfbml=1"/*tpa=http://connect.facebook.net/en_US/all.js#xfbml=1*/;
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

	$(document).ready(function(){
		function loading_show(divid){
			$('#'+divid).html("<img src='content/siteimages/ajax-loader.gif'>").fadeIn('fast');
		}
		function loading_hide(divid){
			$('#'+divid).fadeOut('fast');
		}
		
		function loadData(page){
			loading_show("news_loading");                    
			$.ajax
			({
				type: "POST",
				url: "tpl/news.php",
				data: "page="+page,
				success: function(msg)
				{
					$("#news_container").ajaxComplete(function(event, request, settings)
					{
						loading_hide("news_loading");
						$("#news_container").html(msg);
					});
				}
			});
		}
		
		function loadEvents(page){
			loading_show("event_loading");                    
			$.ajax
			({
				type: "POST",
				url: "tpl/events.php",
				data: "page="+page,
				success: function(msg)
				{
					$("#event_container").ajaxComplete(function(event, request, settings)
					{
						loading_hide("event_loading");
						$("#event_container").html(msg);
					});
				}
			});
		}
		
		
		function loadTestimonials(page){
			loading_show("testimonial_loading");                    
			$.ajax
			({
				type: "POST",
				url: "tpl/testimonial.php",
				data: "page="+page,
				success: function(msg)
				{
					$("#testimonial_container").ajaxComplete(function(event, request, settings)
					{
						loading_hide("testimonial_loading");
						$("#testimonial_container").html(msg);
					});
				}
			});
		}
		
		
		function loadtesVideos(page){
			loading_show("video_loading");                    
			$.ajax
			({
				type: "POST",
				url: "tpl/videos.php",
				data: "page="+page,
				success: function(msg)
				{
					$("#video_container").ajaxComplete(function(event, request, settings)
					{
						loading_hide("video_loading");
						$("#video_container").html(msg);
					});
				}
			});
		}
		
		loadData(1);  // For first time page load default results
		loadEvents(1);
		loadTestimonials(1);
		loadtesVideos(1);
		
		$('#news_container .pagination li.active').live('click',function(){
			var page = $(this).attr('p');
			loadData(page);                    
		});           
		
		$('#event_container .pagination li.active').live('click',function(){
			var page = $(this).attr('p');
			loadEvents(page);                    
		});
		
		$('#testimonial_container .pagination li.active').live('click',function(){
			var page = $(this).attr('p');
			loadTestimonials(page);                    
		});
		
		$('#video_container .pagination li.active').live('click',function(){
			var page = $(this).attr('p');
			loadtesVideos(page);                    
		});
		
		$('#go_btn').live('click',function(){
			var page = parseInt($('.goto').val());
			var no_of_pages = parseInt($('.total').attr('a'));
			if(page != 0 && page <= no_of_pages){
				loadData(page);
			}else{
				alert('Enter a PAGE between 1 and '+no_of_pages);
				$('.goto').val("").focus();
				return false;
			}
			
		});
	});
</script>
    

    <div id="header">
		<div class="container">
			<div id="branding">
<?php include("tpl/logo.tpl");?>
<div id="masdar-logo" align="right"><a href="#">	</a>
			  </div>


		  </div>
			<div id="access">
				
<div id="utilities">
                   <?php include("tpl/utilities.tpl");?>
				<span class="clear"></span>
<?php include("tpl/main_menu.tpl");?>
			</div><!-- #access -->
			<div id="header-banners">
			  <div id="primary-header">
<?php include("tpl/main_slide_show.tpl");?>
<br>
<?php include("tpl/image_bar.tpl");?>

			  </div>
    
				<div id="tertiary-header">
					<span class="corner g-tl"></span>
					<span class="corner g-tr"></span>
					<span class="corner gb-bl"></span>
					<span class="corner gb-br"></span>
					<ul class="xoxo">
						
<li class="news-highlights">
	<marquee><span>Association of Asian Confederation of Credit Unions (ACCU) is a regional member based organization of credit unions and cooperatives in Asia.</span></marquee>
</li>

<li class="share-utilities">
	<?php include("tpl/share-link.tpl");?>
</li>
				  </ul>
			  </div>
				<span class="clear"></span>
			</div>
			<span class="clear"></span>
		</div>
</div> 
	<div id="main">
	  <div class="container">
			<div id="content" class="print-area">
				
<div class="widget html-part">
					<h2 class="home"><a href="#">Welcome To ACCU</a></h2>
		<!--<p><strong>Post Conflict Sri Lanka : Challenges And Regional Stability .
</strong></p>-->
		<p>The Association of Asian Confederation of Credit Unions (ACCU) is a regional member based organization of credit unions and cooperatives in Asia. As we usher in the third millennium and era of cultural and economic globalization, we envisage ACCU playing a vital role in regional credit union development. Our thrust is to make credit unions more relevant community-based financial institutions. </p>
        <p><a href="introduction.php" title="Read more">read more</a></p>
			  
              </div>
				<hr />
<!-- ----------------------------------------------NEWS ------------------------------------------>
<?php //include("tpl/news.tpl");?>
<div class="widget html-part">
    <div class="widget news-mini-list">
        <div id="news_container">
            <div id="news_loading"></div>
            <div class="data"></div>
            <div class="pagination"></div>
        </div>
    </div>
</div><br>

<!------------------------------------------------------------------------------------------------>
<div class="widget html-part">
	<h3 class="home"><a href="asian-credit-union-museum-and-resource-center.php">Asian Credit Union Museum and Resource Center</a></h3>
	<p>You may send original or copy historical items and memorabilia for the Asian Credit Union Museum such as documents, equipment, videos and photos. </p>
    <p><a href="asian-credit-union-museum-and-resource-center.php" title="Read more">read more</a></p>
</div>
<br>
<div class="widget html-part">
	<h3 class="home"><a href="award-for-excellent-ootreach-of-the-poor-2012.php">Award for Excellent Outreach of the Poor - 2012</a></h3>
	<p>ACCU institutes a regular and permanent means of recognizing the Credit Union Microfinance Innovation (CUMI) performance to recognize significant outreach with quality and excellent services to the low income members in the community. </p>
    <p><a href="award-for-excellent-ootreach-of-the-poor-2012.php" title="Read more">read more</a></p>
</div>

<!------------------------------------------------------------------------------------------------>
<div class="widget banner-zone" style="display:none">
					<ul class="listing">
						<li class="banner">
						  <img src="content/images/banner_349x100.jpg" alt="" />
						</li>
					</ul>
			  </div>
		</div>
        <div id="secondary">
		<div style="width:360px; height:120px; margin-bottom:5px;"><img src="content/images/open_forum.jpg" alt="ACCU OPEN FORUM 2013" width="360" height="117" border="0" usemap="#Map2" style="margin-bottom:5px;">
          <map name="Map2">
            <area shape="rect" coords="15,96,156,115" href="download.php?path_id=7&publication_name=asian_credit_union_forum_2013_nepal_brochure.pdf">
            <area shape="rect" coords="211,96,338,114" href="download.php?path_id=7&publication_name=asian_cu_forum_2013_nepal_registration_form.pdf">
          </map>
        </div>
<div class="widget html-part">
    <div class="widget video-mini-list">
        <div id="video_container">
            <div id="video_loading"></div>
            <div class="data"></div>
            <div class="pagination"></div>
        </div>
    </div>
</div>
<!--.widget-->
<hr />

<p>
 
</p>

<div class="widget html-part">
    <div class="widget testimonials-mini-list">
        <div id="testimonial_container">
            <div id="testimonial_loading"></div>
            <div class="data"></div>
            <div class="pagination"></div>
        </div>
    </div>
</div>
<!-- .widget.testimonials -->
<script type="text/javascript">
    $(document).ready(function () {
        $('.testimonials-mini-list').slippy({
            maxPages: 8,
            pageSelector: 'ul.listing',
			containerHeightSelector: 'ul.listing',
			pager: 'ul.pager',
			direction: 'left',
			pageSize: 1,
			effect: 'slide',
			useDottedPages: true
        });
    });
</script>
<hr />

<div class="widget html-part">
<div style="width:360px; height:65px; margin-bottom:5px;"><a href="registration_form_01.php"><img src="content/images/event-register.jpg" alt="EVENT REGISTRATION FORM" width="360" height="65" border="0" style="margin-bottom:5px;"></a></div>
<?php //include("tpl/events.tpl");?>
<div class="widget news-mini-list">
    <div id="event_container">
        <div id="event_loading"></div>
        <div class="data"></div>
        <div class="pagination"></div>
    </div>
</div>

</div><!-- .widget.html-part -->
				<hr class="thin" />
</div>
        
        <!-- #content -->
<div id="primary">
				
<div class="widget logo-box box">
 <?php include("tpl/development-partners-home.tpl");?>
  <?php include("tpl/asian-statistics.tpl");?>
  <?php include("tpl/accu-song.tpl");?>
 <!-- .box -->
  <?php include("tpl/aniversary-song.tpl");?>				
 <?php include("tpl/e-coop.tpl");?>				
 <?php include("tpl/access-tool.tpl");?>	                
 <?php include("tpl/benchmark.tpl");?>					
 <?php //include("tpl/event_register.tpl");?>
</div><!-- .widget.link-box -->

<script  type="text/javascript"> // <![CDATA[
$(document).ready(function() {
      $('#logo-listing-platinum').slippy({
              pageSelector: 'ul.listing',
              maxPages: 6,
              totalPages: 6,
              pageSize:1,
             autoSlide: true,
             autoSlideDelay: 4000,
             direction: 'left'
       });
     $('#logo-listing-gold').slippy({
              pageSelector: 'ul.listing',
              maxPages: 2,
              totalPages: 2,
              pageSize:1,
             autoSlide: true,
             autoSlideDelay: 5000,
             direction: 'left'
     
     });
});
//>
</script>

		

<div class="widget html-part">
  <h2 class="box expanded social-media-type2">
						<span class="corner b-tl"></span>
						<span class="corner b-tr"></span>
						<span class="arrow expanded">Join the ACCU Community</span>
		</h2>
  <!-- .box -->
<div class="logo-box-slider social-media-img-type2">
                                                 <span class="corner lg-gbl"></span>
						<span class="corner lg-gbr"></span>
                                                 <a href="" target="_blank" style="margin-right:10px;"><img src="content/images/fb-30x30.jpg" width="30" height="30" alt="facebook"></a>
 <a href="" target="_blank"><img src="content/images/twitter-30x30.jpg" width="30" height="30" alt="twitter"></a>
 <a href="" target="_blank" style="margin-left:10px;"><img src="content/images/linkedin-30x30.jpg" width="30" height="30" alt="linkedIn"></a>
</div>
</div>
	    </div>
		  <span class="clear"></span>
	  </div>
	</div>
	<div id="footer">
		<div id="primary-footer">
			<div class="container">
               <?php include("tpl/footer-menu.tpl");?>
			</div>
		</div>
		<div id="secondary-footer">
			<div class="container">
			  <div class="primary">
                   
                 <span class="clear"></span>
			  </div>
				<div class="secondary">
                   
<?php include("tpl/footer-text.tpl"); ?>					
					<span class="clear"></span>
				</div>
				<span class="clear"></span>
			</div>
		</div>
	</div><!-- #footer -->
	
    </form>

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
