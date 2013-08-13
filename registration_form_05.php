<?php include("tpl/header2.tpl");

$reg_id = $_REQUEST['reg_id'];
if($reg_id != '' ){	
	$get_data = Registration :: Get_registration_data_back($reg_id);
	//echo $get_data['room_type']; exit;
}
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
		<li class="" ><a href="#">
        Registration Form &gt;&gt; </a></li>
                <li class="separator">\</li>
                <li class="" ><a href="#">Lodging</a></li>
                
<!--                <li class="separator">\</li>
                <li class="current" ><a href="#">Photo Gallery</a></li>-->
                
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
	    <!--MOD_0aff5a33-3102-49f5-9e46-91d7a3735978-->
	    <div class="content-container"> <span class="clearfix"></span>
	      <h1>Registration Form &gt;&gt; Lodging</h1>
	      <p></p>
	      <!--<h2 class="section-header"><span>Fields marked with ( <span class="asterisk">*</span> ) are mandatory.</span></h2>-->
          <h4>
          <?php if($_GET["msg"] !="" || $_GET["msg"] !=0){?>
          <span class="errormsg" style="color:#D00;">
                <?php include('common/registration_massage.php'); ?>
              
</span>
          <?php }?>
          </h4>
	      <div class="section-body">
          <form action="Controller/registrationr_control.php?mode=reg_05" method="post" name="form5">
           <input type="hidden" name="hdn_reg_id" id="hdn_reg_id" value="<?php echo $reg_id; ?>">
           <table width="100%" border="0">
            <tr>
              <td width="6%">&nbsp;</td>
              <td width="88%" class="banner_text">&nbsp;</td>
              <td width="6%">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><table width="100%" border="0">
                <tr>
                  <td width="33%" class="eventreg_text">Type of Room required</td>
                  <td width="4%">:</td>
                  <td width="63%"><table width="100%" border="0">
                    <tr class="eventreg_text">
                      <td width="45%">
                      
                      <p>
                        <label>
                          <input type="radio" name="rdo_room_type" value="1" id="rdo_room_type_0" <?php if($get_data['room_type'] == 1 ){echo "checked=\"checked\" ";}?>>
                          Single</label>
                        
                        <label>
                          <input type="radio" name="rdo_room_type" value="2" id="rdo_room_type_1" <?php if($get_data['room_type'] == 2 ){echo "checked=\"checked\" ";}?>>
                          Twin Sharing</label>
                       
                      </p>
                      </td>
                      <td>
                        <p>
                          <label>
                            <input type="radio" name="rdo_room_type2" value="3" id="rdo_room_type2_0" <?php if($get_data['room_type'] == 3 ){echo "checked=\"checked\" ";}?>>
                            Non-smoking</label>
                          
                          <label>
                            <input type="radio" name="rdo_room_type2" value="4" id="rdo_room_type2_1" <?php if($get_data['room_type'] == 4 ){echo "checked=\"checked\" ";}?>>
                            Smoking</label>
                          
                        </p></td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <td class="eventreg_text">Check in Date</td>
                  <td>:</td>
                  <td><label>
                    <input name="txt_chkin_date" type="text" class="r_texbox" id="txt_chkin_date" size="15" value="<?php echo $get_data['chk_in_date']; ?>">
                  </label><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.form5.txt_chkin_date);return false;" ><img class="PopcalTrigger" align="absmiddle" src="admin/date_calander/calbtn.gif" width="34" height="22" border="0" alt="" /></a></td>
                </tr>
                <tr>
                  <td class="eventreg_text">Check out Date</td>
                  <td>:</td>
                  <td><label>
                    <input name="txt_chkout_date" type="text" class="r_texbox" id="txt_chkout_date" size="15" value="<?php echo $get_data['chk_out_date']; ?>">
                  </label><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.form5.txt_chkout_date);return false;" ><img class="PopcalTrigger" align="absmiddle" src="admin/date_calander/calbtn.gif" width="34" height="22" border="0" alt="" /></a></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><table width="100%" border="0">
                <tr>
                  <td width="53%">&nbsp;</td>
                  <td width="10%">
                  <input type="button" name="btn_back" id="btn_back" value="  &lt;&lt; Back    " onClick="window.location.href='registration_form_04.php?reg_id=<?php echo $reg_id; ?>'"></td>
                  <td width="37%"><input type="submit" name="btn_next" id="btn_next" value="   Next&gt;&gt;   "></td>
                </tr>
              </table></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
        </form>
          </div>
	      <script type="text/javascript">
    //<!--
        $(document).ready(function () {
            $('#frmRegUrInterest').xForm(
                { 
                    submitMessage: 'Saving your information... Please wait!' 
                }
            );
            
            try{
                if(window.location.hash.length > 4){
                    var urlHash = window.location.hash.replace('#!','').toLowerCase();
                
                    $('#frm_Interests input').each(function(){
                        var id = $(this).attr('id').toLowerCase();
                        if(id.indexOf(urlHash)>0) $(this).attr('checked',true);
                    });
                }
            }catch(er){
            }
            
        });
    //-->
        </script>
        </div>
	    <!--/MOD_0aff5a33-3102-49f5-9e46-91d7a3735978-->
      </div>
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
<iframe width=174 height=189 name="gToday:normal:agenda.js" id="gToday:normal:agenda.js" src="admin/date_calander/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>