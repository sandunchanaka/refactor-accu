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
		
		
		loadData(1);  // For first time page load default results
		loadEvents(1);
		
		
		$('#news_container .pagination li.active').live('click',function(){
			var page = $(this).attr('p');
			loadData(page);                    
		});           
		
		$('#event_container .pagination li.active').live('click',function(){
			var page = $(this).attr('p');
			loadEvents(page);                    
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
<div id="masdar-logo" align="right"><a href="../www.army.lk">	</a>
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
	<ul>
		<li><a href="#" class="share-link"><span></span>Share</a></li>
		<li class="meta-separator">|</li>
		<li><a href="../index.php" title="Go to homepage" class="home-link">Home</a></li>
		<li><a href="#" title="Send to friend" class="send-link">Send to friend</a></li>
		<li><a href="#" title="Printable version" class="print-link">Printable version</a></li>
		<li><a href="#" title="Increase font size" class="inc-font-link">Increase font size</a></li>
		<li><a href="#" title="decrease font size" class="dec-font-link">Decrease font size</a></li>
	</ul>
    <div style="display:none">
        <div id="send_to_friend_dialog" title="Send to Friend">
            <fieldset>
                <ul class="form compact-form">
                    <li class="field"><label class="required">Your Name <span class="asterisk">*</span><small>Please enter your name</small></label>
                        <div class="field-value"><input type="text" name="fromName" class="textbox required" maxlength="255" /><small></small></div>
                        <span class="clear"></span>
                    </li>
                    <li class="field"><label class="required">Your Email ID <span class="asterisk">*</span><small>Please enter your email address</small></label>
                        <div class="field-value"><input type="text" name="fromEmail" class="textbox email required" maxlength="255" /><small></small></div>
                        <span class="clear"></span>
                    </li>
                    <li class="field"><label class="required">Your Friend's Name <span class="asterisk">*</span><small>Please enter your friend's name</small></label>
                        <div class="field-value"><input type="text" name="toName" class="textbox required" maxlength="255" /><small></small></div>
                        <span class="clear"></span>
                    </li>
                    <li class="field"><label class="required">Your Friend's Email ID <span class="asterisk">*</span><small>Please enter your friend's email address</small></label>
                        <div class="field-value"><input type="text" name="toEmail" class="textbox email required" maxlength="255" /><small></small></div>
                        <span class="clear"></span>
                    </li>
                    <li class="field">
                        <label class="required">Message <span class="asterisk">*</span><small>Please enter your message</small></label>
                        <div class="field-value"><textarea name="comments" rows="5" cols="45" class="medium auto-grow limit required" maxlength="1000"></textarea><span class="clearfix"></span><small></small></div>
                        <span class="clear"></span>
                    </li>
                    <li class="actions">
                        <input type="button" class="main-button submit" value="Send" /><div class="message loading">&nbsp;</div>
                    </li>
                </ul>
            </fieldset>
            <div class="success" style="display:none;">
                Email has been sent successfully.
                <br />
                <br />
                <br />
                <br />
                <br />
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $.fi.languageId = 1;
            $.fi.languageCode = 'en-GB';

            $('a.dec-font-link').click(function (event) {
                event.preventDefault();

                var b = $('body');
                if (b.hasClass('large')) b.removeClass('large').addClass('medium');
                else {
                    b.removeClass('medium');
                }
            });

            $('a.inc-font-link').click(function (event) {
                event.preventDefault();

                var b = $('body');
                if (b.hasClass('medium')) b.removeClass('medium').addClass('large');
                else if (!b.hasClass('large')) {
                    b.addClass('medium');
                }
            });

            $('#send_to_friend_dialog').dialog({ width: 500, height: 'auto' });
            $('#send_to_friend_dialog').find('fieldset').ajaxForm({
                url:'services/AjaxHandler.asmx/SubmitSendToFriend',
                postData: function(p){
                    p.title = $.trim($(document.head).find('title').text());
                    p.link = 'index.php';
                    return p;
                }
            });

            $('a.print-link').click(function (event) {
                event.preventDefault();
                var w = window.open("Portal/print.php","Test");
            });

            $('a.send-link').click(function (event) {
                event.preventDefault();
                $('#send_to_friend_dialog').dialog('show');
            });
        });
    </script>
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
					<h2 class="home"><a href="about-us/overview.php">Welcome To ACCU</a></h2>
		<p><strong>Post Conflict Sri Lanka : Challenges And Regional Stability .
</strong></p>
		<p>The Association of Asian Confederation of Credit Unions (ACCU) is a regional member based organization of credit unions and cooperatives in Asia. As we usher in the third millennium and era of cultural and economic globalization, we envisage ACCU playing a vital role in regional credit union development. Our thrust is to make credit unions more relevant community-based financial institutions. </p>
        <p><a href="about-us/overview.php" title="Read more">read more</a></p>
			  </div>
				<hr />
<!-- ----------------------------------------------NEWS ------------------------------------------>
<?php //include("tpl/news.php");?>
<div class="widget html-part">
    <div class="widget news-mini-list">
        <div id="news_container">
            <div id="news_loading"></div>
            <div class="data"></div>
            <div class="pagination"></div>
        </div>
    </div>
</div>

<div class="widget banner-zone" style="display:none">
					<ul class="listing">
						<li class="banner">
						  <img src="content/images/banner_349x100.jpg" alt="" />
						</li>
					</ul>
			  </div>
		</div>
        <div id="secondary">
		<div style="width:360px; height:75px; margin-bottom:5px;">
        <img src="content/images/open_forum.jpg" width="360" height="70" alt="ACCU OPEN FORUM 2013" style="margin-bottom:5px;">
        </div>
<div class="widget">
<h2>ACCU Videos</h2>
<iframe class="youtube-player" type="text/html" width="350" height="208" src="http://www.youtube.com/embed/-Fxm1UMgfeY" frameborder="0">
</iframe>
</div><!--.widget-->
<hr />

<p>
 
</p>
<div class="widget testimonials-mini-list">
  <h2>Testimonials</h2>
    <div class="testimonials">
		<ul class="listing general-listing">
			<li data-page="1" class="testimonial testimonial-with-image">
				<div class="image-thumbnail">
				  <img src="content/siteimages/Defence_1.jpg" width="150" height="100" />
				</div>
				<div class="details">
					<p>"sample text here ........" </p>
					<span class="meta-name"> Mr.Simon Pereira ,President CCULB, Bangladesh </span>
			  	</div>
				<span class="clear"></span>
			</li><!-- .testimonial.testimonial-with-image -->
	        <li data-page="2" class="testimonial testimonial-with-image">
				<div class="image-thumbnail">
				  <img src="content/siteimages/AAA_6245.jpg"/>
				</div>
				<div class="details">
					<p>"sample text here ........" </p>
					<span class="meta-name"> Mr.Min Raj Kadel ,1st Vice President ,NEFSCUN, Nepal </span>
				</div>
				<span class="clear"></span>
			</li><!-- .testimonial.testimonial-with-image -->
			<li data-page="3" class="testimonial testimonial-with-image">
				<div class="image-thumbnail">
				  <img src="content/siteimages/DSC_6929.jpg"/>
				</div>
				<div class="details">
					<p>"sample text here ........" </p>
					<span class="meta-name"> Mr.Romanus Woga ,2nd Vice Presidnet ,CUCO, Indonesia </span>
				</div>
				<span class="clear"></span>
			</li><!-- .testimonial.testimonial-with-image -->
		</ul><!-- .listing -->
	    <span class="clear"></span>
    </div>
	<ul class="pager">
	</ul> <!-- .pager -->
</div><!-- .widget.testimonials -->
<script type="text/javascript">
    $(document).ready(function () {
        $('.testimonials-mini-list').slippy({
            maxPages: 3,
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
<?php //include("tpl/events.php");?>
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
 <h2 class="box expanded">
						<span class="corner b-tl"></span>
						<span class="corner gr-bl"></span>
						<span class="corner b-tr"></span>
<span class="corner b-br"></span><a class="title" href="#Principal-Sponsor">Development Partners</a>
		</h2>
 <!-- .box -->
					<div class="logo-box-slider" id="logo-listing-principal" style="padding:0;">
						<span class="corner wg-bl"></span>
						<span class="corner wg-br"></span>
						<ul class=" listing">
							<li class="logo" style="padding-left:5px; padding-top:10px; padding-bottom:10px; padding-right:5px;">
							  <table width="100%" height="119" border="0">
							    <tr>
							      <td align="center" valign="middle" width="28%"><a href="http://www.agriterra.org/en/" target="_blank"><img src="content/images/development_partners_01.jpg" alt="" width="53" height="49" border="0"></a></td>
							      <td align="center" valign="middle" width="23%"><a href="http://www.coopscanada.coop/" target="_blank"><img src="content/images/development_partners_04.jpg" alt="" width="44" height="45" border="0"></a></td>
							      <td align="center" valign="middle" width="26%"><a href="http://www.cordaid.nl/" target="_blank"><img src="content/images/development_partners_06.jpg" alt="" width="52" height="45" border="0"></a></td>
							      <td align="center" valign="middle" width="23%"><a href="http://www.rabobank.com/" target="_blank"><img src="content/images/development_partners_08.jpg" alt="" width="44" height="47" border="0"></a></td>
						        </tr>
							    <tr>
							      <td colspan="4" valign="middle"><img src="content/images/did_canda.jpg" width="190" height="40"></td>
						        </tr>
						      </table>
							</li>
						</ul>
		</div><!-- .box --><!-- .box -->
					<h2 class="box expanded">
						<span class="corner b-tl"></span>
						<span class="corner gr-bl"></span>
						<span class="corner b-tr"></span>
						<span class="corner b-br"></span><a class="title" href="#Principal-Sponsor">Asian Statistics</a>
</h2><!-- .box -->
					<div class="logo-box-slider" id="logo-listing-principal" style="padding:0;">
						<span class="corner wg-bl"></span>
						<span class="corner wg-br"></span>
						
							  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
							    <tr>
							      <td align="left" class="txtstatistics">&nbsp;</td>
						        </tr>
							    <tr>
							      <td align="left" class="txtstatistics"><div align="center">Individual Members : 41,987,000</div></td>
						        </tr>
							    <tr>
							      <td align="left" class="txtstatistics"><div align="center">Credit Unions : 22,325</div></td>
						        </tr>
							    <tr>
							      <td align="left" class="txtstatistics"><div align="center">Assist US$ : 86,913, Million</div></td>
						        </tr>
							    <tr>
							      <td align="left" class="txtstatistics"><div align="center">Countries : 23</div></td>
						        </tr>
							    <tr>
							      <td align="left" class="txtstatistics">&nbsp;</td>
						        </tr>
						      </table>
							
</div>
					<h2 class="box expanded">
						<span class="corner b-tl"><div class="audio_sign"></div></span>
						<!--
                        <span class="corner gr-bl"></span>
						<span class="corner b-tr"></span>
						<span class="corner b-br"></span>
                        -->
                      <a class="title" href="#Principal-Sponsor">ACCU SONGS</a>
</h2><!-- .box -->
					<div class="logo-box-slider" id="logo-listing-principal" style="padding:0;">
						
						<span class="corner wg-br"></span>
                        <ul class=" listing">
							<li class="logo" style="padding-left:5px; padding-top:10px;">
							  <button type="button" name="AACCU SONG" id="AACCU SONG" title="Download Accu Song" class="accu-button" onClick="javascript: document.location.replace('download.php?path_id=6&publication_name=accu_song.mp3');" style="height:45px; float:left; width:210px; font-weight:bold; color:#036; text-decoration:blink;font-size:12px" ><strong>One Voice One Family</strong><br>(<strong>ACCU SONG</strong>)
                              </button>
                                </li>
                                <li class="logo" style="padding-left:5px; padding-top:10px;">
                            <button type="button" name="AACCU SONG" id="AACCU SONG" title="Accu 40th Anniversary Song" class="accu-button" onClick="javascript: document.location.replace('download.php?path_id=6&publication_name=we_are_asian_credit_union_united_as_one.mp3');" style="height:45px; width:210px; font-weight:bold; color:#036; text-decoration:blink;font-size:12px" ><img src="/images/audio.png" alt="" class="accu_image_icon" /> <strong> 40th Anniversary Song</strong></button>
                            </li>
					  </ul>
					</div><!-- .box --><!-- .box -->
                   
					<!-- .box -->
</div>
<!-- .widget.link-box -->

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

<div class="widget link-box box">
    <h2 class="box expanded">
		<span class="corner b-tl"></span>
		<span class="corner gr-bl"></span>
		<span class="corner b-tr"></span>
		<span class="corner b-br"></span><a class="title" href="#link-box-content_ctl12">Useful Links</a> 
	</h2><!-- .box -->
    <ul class="tertiary-navigation" id="link-box-content_ctl12">
		
        <li class="first  "></li>
            
        <li class=" "></li>
            
        <li class=" last"></li>
            <li class=" last"></li>
	</ul> 
	
</div>
<div class="widget logo-box box"><!-- .box -->
</div> <!-- .widget.link-box -->
				
<script type="text/javascript">
$(function(){
$('#industry-supporters').slippy({
pageSelector: 'ul.listing',
maxPages: 6,
totalPages: 6,
pageSize:1,
autoSlide: true,
autoSlideDelay: 4000
});

});
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
                at.src = '../s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4df33de459429749';
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
