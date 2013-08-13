<?php 
$page = 27;
include("tpl/header2.tpl");
$events_id = $_REQUEST['event_id'];
$event = Events ::GetOneEvents($events_id);
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
                <li class="" ><a href="#">Events</a></li>
                
                <li class="separator">\</li>
                <li class="current" ><a href="#"><?php echo $event["event_name"]; ?></a></li>
                
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
		      <h1><?php echo $event["event_name"]; ?></h1>
		      
		      <div class="content-body content-body-nobg" style="overflow:auto;">
		      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="97%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="62%" valign="top" class="aboutus_text">Start Date : <?php 
					$startdate = strtotime($event["event_starting_date"]);
					echo date("l F d, Y",$startdate); ?> <br>
                      End Date :  <?php 
					  $enddate = strtotime($event["event_end_date"]);
					  echo date("l F d, Y", $enddate); ?></td>
                    <td width="38%" valign="top"><?php if($event['event_image'] !=''){?><img src="upload_images/event_image/<?php echo $event['event_image']; ?>" height="170" align="left" style="border:1px solid #83a1be" with="230"/> <?php }?></td>
                  </tr>
                </table></td>
                </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="aboutus_text"><table width="90%" border="0" cellspacing="0" cellpadding="0" align="center">
                      <tr>
                        <td class="aboutus_text"><?php echo $event["description"]; ?> </td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>
                    
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="22" bgcolor="#83a1be" class="linkTest">&nbsp;&nbsp;<strong>Related Documents</strong></td>
                      </tr>
                   	  <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <?php 
					  $files = News::Get_UploadFile($event["event_id"],'ED');
						$i=1;
						for($a=0;$a<count( $files);$a++){
						$row = each( $files);
						$i=0;
					 ?>
                      <tr>
                        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="1%">&nbsp;</td>
                            <td width="2%"><img src="content/images/arrow_01.jpg" width="23" height="20"></td>
                            <td width="97%" class="aboutus_text"> <a <?php if($row['value']['file_name'] !=''){ ?> href="download.php?path_id=2&publication_name=<?php echo $row['value']['file_data']; }?>"> <span class="aboutus_text"><?php echo $row["value"]["file_name"]; ?></span></a></td>
                          </tr>
                        </table></td>
                      </tr>
                     <?php }
					 if($i==1){ ?>
					  <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="11%" class="normal_text">No Related Documents</td>
                          </tr>
                        </table>
                     <?php
					 }
					 ?>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                  </table>                  </td>
                  </tr>
                  <tr>
                    <td></td>
                </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
              </table>		       
	          </div>
	        </div>
		    <!--/MOD_14e32e5e-fc48-4606-87f5-30a956e95732-->
	      </div>
		  <!-- #content -->
<div id="primary">
<?php include("tpl/development-partners-home.tpl");?>
  <?php include("tpl/accu-song.tpl");?>
 <!-- .box -->
  <?php include("tpl/aniversary-song.tpl");?>				
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
