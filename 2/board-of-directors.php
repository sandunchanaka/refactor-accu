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
                <li class="" ><a href="#">About Us</a></li>
                
                <li class="separator">\</li>
                <li class="current" ><a href="#">Board of Directors </a></li>
                
    </ul>
</li>
<!--/MOD_904e4620-9cfd-4f59-a547-b87256ff6026-->
<!--MOD_25a1441f-8ac1-4d7e-be18-bf68bf52572d-->

<li class="share-utilities">
	<ul>
		<li><a href="#" class="share-link"><span></span>Share</a></li>
		<li class="meta-separator">|</li>
		<li><a href="../home-1.aspx.htm" tppabs="http://www.worldfutureenergysummit.com/portal/home.aspx" title="Go to homepage" class="home-link">Home</a></li>
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
                    p.link = '2013-exhibition-and-summit.aspx.htm'/*tpa=http://www.worldfutureenergysummit.com/Portal/about-wfes/overview/2013-exhibition-and-summit.aspx*/;
                    return p;
                }
            });

            $('a.print-link').click(function (event) {
                event.preventDefault();
                var w = window.open("../../print.aspx.htm"/*tpa=http://www.worldfutureenergysummit.com/Portal/print.aspx*/,"Test");
            });

            $('a.send-link').click(function (event) {
                event.preventDefault();
                $('#send_to_friend_dialog').dialog('show');
            });
        });
    </script>
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
		    <!--MOD_14e32e5e-fc48-4606-87f5-30a956e95732-->
		    <div class="content-container"> <span class="clearfix"></span>
		      <h1>Board of Directors 2012 to 2014</h1>
		      <div class="content-body content-body-nobg">
		        <p>&nbsp;</p>
		        <div class="section-body"  style="border:none;">
		          <ul class="sectors">
		            <li><img src="content/board-of-directors/cculb_chairman_copy1.jpg" width="138" height="164">
                    <label> Mr.Simon Pereira <strong>President CCULB, Bangladesh </strong></label></li>
		            <li><img src="content/board-of-directors/mr._kadel_copy1.jpg" width="138" height="164">
                    <label>Mr.Min Raj Kadel  <strong>1st Vice President
NEFSCUN, Nepal</strong></label>
                    </li>
		            <li><img src="content/board-of-directors/mr._romanus_woga_____2nd_president__accu__cuco___indonesia_copy1.jpg" width="138" height="164"> <label>Mr.Romanus Woga <strong>2nd Vice Presidnet
CUCO, Indonesia</strong></label></li>
		            <li><img src="content/board-of-directors/ms._soledad_v._cabangis_secretary_copy1.jpg" width="138" height="164">
                    <label> Ms.Soledad V. Cabangis <strong>Secretary
NATCCO, Philippines</strong></label>
                    </li>
		           
	              </ul>
		          <div class="clear">&nbsp;</div>
	            </div><br><br><br>
  <div class="section-body" style="border:none;">
		          <ul class="sectors">
		            <li><img src="content/board-of-directors/cud_4161.jpg" width="138" height="164">
                    <label>Mr.Mana Sudsanguan <strong>Treasurer
CULT, Thailand </strong></label>
                    </li>
		            <li><img src="content/board-of-directors/ranjith_hettiaracchi.jpg" width="138" height="164">
                    <label> Mr.Ranjith Hettiarachchi  <strong>Chief Executive Officer
ACCU, Thailand</strong></label>
                    </li>
		            	      
</ul>
          <div class="clear"></div>
		        </div>
		      </div>
	        </div>
		    <!--/MOD_14e32e5e-fc48-4606-87f5-30a956e95732-->
	      </div>
		  <!-- #content -->
<div id="primary">
				<!--MOD_9047d8df-9686-4c20-a693-c0acb5a0f5dd--><!-- .widget.submenu -->

<!--/MOD_9047d8df-9686-4c20-a693-c0acb5a0f5dd-->
<!--MOD_e026c2a1-52ab-450b-b4bf-00824fea0eed-->

<?php include("tpl/side-box-about-us-menu.tpl");?>
<?php include("tpl/side-box-2-banner.tpl");?>
<!--MOD_65939e92-9b9e-4277-928d-88f9006769d3-->
<?php include("tpl/side-box-menu-nav.tpl");?>
				
<!--/MOD_575d437e-a587-4518-a9bd-db05ef7c0c3d-->
<!--MOD_9f686459-466a-40ba-8b3f-d59770851f58-->
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
