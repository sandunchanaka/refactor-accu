<?php
/*session_start();
if(!isset($_SESSION['user_id']))
{
	echo "<script type=\"text/javascript\">window.location.replace('member-login.php');</script>";
}*/
include("tpl/header2.tpl");
require_once('common/about_us_doc.class.php');
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
                <li class="" ><a href="#">About Us</a></li>
                
                <li class="separator">\</li>
                <li class="current" ><a href="#">Board Member Documents </a></li>
                
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
		    <!--MOD_14e32e5e-fc48-4606-87f5-30a956e95732-->
		    <div class="content-container"> <span class="clearfix"></span>
		      <h1>Board Member Documents</h1>
              
		      <div class="content-body content-body-nobg">
		        <table width="100%" height="144" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="31" colspan="5">&nbsp;</td>
              </tr>
              <tr>
                <td width="10%" height="56">&nbsp;</td>
                <td colspan="3" align="center" valign="top"><table width="100%" border="0">
                  <tr>
                    <td width="47%" align="center"><a href="member-login.php?doctype=1&level=<?php echo $_SESSION['level_id']; ?>"></a><a href="member-login.php?doctype=1&level=<?php echo $_SESSION['level_id']; ?>"><img src="content/images/0746906.jpg" width="170" height="128"></a></td>
                    <td width="11%">&nbsp;</td>
                    <td width="42%" align="center" valign="top"><a href="member-login.php?doctype=2&level=<?php echo $_SESSION['level_id']; ?>"><img src="content/images/0862230.jpg" width="170" height="128"></a></td>
                  </tr>
                  <tr>
                    <td align="center"><span class="banner_text">Board of Directors Meeting  of ACCU</span></td>
                    <td>&nbsp;</td>
                    <td align="center"><span class="banner_text">Annual General Meeting of  ACCU</span></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table></td>
                <td width="10%">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="5">&nbsp;</td>
              </tr>
            </table>
		      </div>
	        </div>
		    <!--/MOD_14e32e5e-fc48-4606-87f5-30a956e95732-->
	      </div>
		  <!-- #content -->
<div id="primary">
<?php include("tpl/about-us-side-box.tpl");?>
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
