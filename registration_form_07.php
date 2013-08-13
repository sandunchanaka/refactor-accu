<?php include("tpl/header2.tpl");

$reg_id = $_REQUEST['reg_id'];

if($reg_id != '' ){	
	$get_data = Registration :: Get_registration_data_back($reg_id);
	//echo $get_data['room_type']; exit;
}
?>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
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
        Registration</a></li>
                <li class="separator">\</li>
                <li class="" ><a href="#">Travel Information - Return</a></li>
                
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
	      <h1> Travel Information - Return</h1>
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
           <form action="Controller/registrationr_control.php?mode=reg_07" method="post" name="form5">
<table width="100%" border="0">
            <tr>
              <td width="6%">&nbsp;</td>
              <td width="88%" class="banner_text">&nbsp;</td>
              <td width="6%">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td> <span class="errormsg">
                <?php //include('common/registration_massage.php'); ?>
              <input type="hidden" name="hdn_reg_id" id="hdn_reg_id" value="<?php echo $reg_id; ?>">
</span></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><table width="100%" border="0">
                <tr>
                  <td width="33%" class="eventreg_text">Airline</td>
                  <td width="4%">:</td>
                  <td width="63%"><span id="sprytextfield1">
                    <label>
                      <input name="txt_airline" type="text" class="r_texbox" id="txt_airline" size="40" value="<?php echo $get_data['d_airline']; ?>">
                    <span class="textfieldRequiredMsg">*</span>                    </label>
                  </span></td>
                </tr>
                <tr>
                  <td class="eventreg_text">Flight Number </td>
                  <td>:</td>
                  <td><span id="sprytextfield2">
                    <label>
                      <input name="txt_flight_no" type="text" class="r_texbox" id="txt_flight_no" value="<?php echo $get_data['d_flight_no']; ?>">
                    <span class="textfieldRequiredMsg">*</span>                    </label>
                  </span></td>
                </tr>
                <tr>
                  <td class="eventreg_text">Departure  City </td>
                  <td>:</td>
                  <td><span id="sprytextfield3">
                    <label>
                      <input name="txt_arrival_city" type="text" class="r_texbox" id="txt_arrival_city"  value="<?php echo $get_data['d_city']; ?>">
                    <span class="textfieldRequiredMsg">*</span>                    </label>
                  </span></td>
                </tr>
                <tr>
                  <td class="eventreg_text">Departure Airport </td>
                  <td>:</td>
                  <td><span id="sprytextfield4">
                    <label>
                      <input name="txt_arrival_airport" type="text" class="r_texbox" id="txt_arrival_airport" value="<?php echo $get_data['d_airport']; ?>">
                    <span class="textfieldRequiredMsg">*</span>                    </label>
                  </span></td>
                </tr>
                <tr>
                  <td class="eventreg_text">Date &amp; Time </td>
                  <td>:</td>
                  <td><span id="sprytextfield5">
                    <label>
                      <input name="txt_date_time" type="text" class="r_texbox" id="txt_date_time" value="<?php echo $get_data['d_date_and_time']; ?>">
                    <span class="textfieldRequiredMsg">*</span>                    </label>
                  </span></td>
                </tr>
                <tr>
                  <td class="eventreg_text">&nbsp;</td>
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
                  <td width="10%"><input type="button" name="btn_back" id="btn_back" value="  &lt;&lt; Back    " onClick="window.location.href='registration_form_06.php?reg_id=<?php echo $reg_id; ?>'"></td>
                  <td width="37%"><input type="submit" name="btn_next" id="btn_next" value="     Submit    "></td>
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
         <script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none");
//-->
</script>
</body>
</html>
