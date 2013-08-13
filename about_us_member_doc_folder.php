<?php 
session_start();
if(!isset($_SESSION['user_id']))
{
	echo "<script type=\"text/javascript\">window.location.replace('member-login.php');</script>";
}
include("tpl/header2.tpl");
require_once('common/about_us_doc.class.php');
$doc_type = $_REQUEST['doctype'];
$user_level = $_SESSION['level_id'];

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
		        <?php 
			  	$docfolder = about_us::Get_Documents_Folder($user_level,$doc_type);
				//echo count($docfolder); 
				
				if(count($docfolder) > 1 ){
				for($a=0;$a<count($docfolder);$a++){
				$row = each($docfolder);		
				// echo $row["value"]["pub_cat_image"]; 
			  ?>
              <table width="100%" cellpadding="0" cellspacing="0">
                <tr >
                  <td width="2%" height="19" class="login_text">&nbsp;</td>
                  <td width="98%" class="login_text"><table width="100%" border="0" cellspacing="1" cellpadding="1">
                    <tr>
                      <td valign="top"><table width="100%" border="0" cellspacing="1" cellpadding="1" class="cls_border">
                        <tr>
                          <td height="22" colspan="2" bgcolor="#BCCEFE" class="Sub_heading" style="background-color: #83a1be"><table width="100%" border="0" cellspacing="1" cellpadding="1">
                            <tr>
                              <td width="72%"><span class="linkTest"><a href="about_us_member_documents.php?doctype=<?php echo $doc_type; ?>&level=<?php echo $_SESSION['level_id']; ?>&docfolder=<?Php echo $row["value"]["user_doc_folder_id"]; ?>" class="linkTest">&nbsp;&nbsp;&nbsp;<?php echo $row["value"]["user_doc_folder_name"]; ?></a></span></td>
                              <td width="28%" class="linkTest"><a href="about_us_member_documents.php?doctype=<?php echo $doc_type; ?>&level=<?php echo $_SESSION['level_id']; ?>&docfolder=<?Php echo $row["value"]["user_doc_folder_id"]; ?>" class="linkTest">
                                <?php $doc_tot =  about_us::DocCount($user_level,$doc_type,$row["value"]["user_doc_folder_id"]);
					  					echo $doc_tot["total"];?>
                                &nbsp;&nbsp; Documents </a></td>
                            </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td colspan="2"><table width="100%" border="0">
                            <tr>
                              <td width="10%"><?php if($row["value"]["pub_cat_image"] !=''){ ?>
                                <img src="upload_images/Publication/<?php echo $row["value"]["pub_cat_image"]; ?>" />
                                <?php }?></td>
                              <td width="90%" height="78" colspan="3" valign="top"><div align="justify" class="normal_text"><?php echo $row["value"]["description"]; ?></div></td>
                            </tr>
                          </table></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table></td>
                </tr>
                <tr style="background-color: #{cycle values = 'CCD9FF, A6BCFF'}">
                  <td class="login_text">&nbsp;</td>
                  <td class="login_text">&nbsp;</td>
                </tr>
              </table>
            <?php
			  }
				}
			  ?><br>
            <a href="javascript:history.go(-1);"><span class="normal_text">back &gt;&gt;</span></a>
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
