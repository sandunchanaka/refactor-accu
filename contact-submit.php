<?php include("tpl/header2.tpl");?>
<?php 
   $countryd = Accu_Forum :: GetCountryName($_POST['ctl00$ctl19$ddlCountry']);
   $countryname = $countryd["country_name"];
$to = "accu@aaccu.coop";
//$to = "sandunchanaka@gmail.com";
$subj = $_POST['ctl19_ddlTitle']." ".$_POST['ctl00$ctl19$txtFirstName']." Inquiry From - www.aaccu.com Website";
$msg = "<table align=\"left\">
  <tr>
    <td class=\"eventreg_text\">Event Name</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class=\"eventreg_text\">Name of Participant</td>
    <td width=\"2%\">:</td>
    <td width=\"62%\"><label>".$_POST['ctl19_ddlTitle']." ".$_POST['ctl00$ctl19$txtFirstName']."</label></td>
  </tr>
  <tr>
    <td valign=\"top\" class=\"eventreg_text\">Company Name</td>
    <td valign=\"top\">:</td>
    <td class=\"eventreg_text\"><label>".$_POST['ctl00$ctl19$txtCompanyName']."</label></td>
  </tr>
  <tr>
    <td class=\"eventreg_text\">Mailling Address</td>
    <td>:</td>
    <td>".$_POST['ctl00$ctl19$txtMailingAddress']."</td>
  </tr>
  <tr>
    <td valign=\"top\" class=\"eventreg_text\">PO Box / Post Code</td>
    <td valign=\"top\">:</td>
    <td><label>".$_POST['ctl00$ctl19$txtPOBox']."</label></td>
  </tr>
  <tr>
    <td class=\"eventreg_text\">Country </td>
    <td>:</td>
    <td>".$_POST['ctl00$ctl19$txtCity']." </td>
  </tr>
  <tr>
    <td class=\"eventreg_text\">State / Province</td>
    <td>:</td>
    <td>".$_POST['ctl00$ctl19$txtState']."</td>
  </tr>
  <tr>
    <td class=\"eventreg_text\">Country </td>
    <td>:</td>
    <td>".$countryname."</td>
  </tr>
  <tr>
    <td class=\"eventreg_text\">Website </td>
    <td>:</td>
    <td>".$_POST['ctl00$ctl19$txtWebsite']."</td>
  </tr>
  <tr>
    <td class=\"eventreg_text\">Company Phone</td>
    <td>:</td>
    <td><label>".$_POST['ctl00$ctl19$txtPhoneCountryCode']." - ".$_POST['ctl00$ctl19$txtPhoneCityCode']." ".$_POST['ctl00$ctl19$txtPhoneNumber']."</label></td>
  </tr>
  <tr>
    <td class=\"eventreg_text\">Fax</td>
    <td>&nbsp;</td>
    <td>".$_POST['ctl00$ctl19$txtFaxCountryCode']." - ".$_POST['ctl00$ctl19$txtFaxCityCode']." ".$_POST['ctl00$ctl19$txtFaxNumber']."</td>
  </tr>
  <tr>
    <td class=\"eventreg_text\">Mobile Number</td>
    <td>&nbsp;</td>
    <td>".$_POST['ctl00$ctl19$txtMobileCountryCode']." - ".$_POST['ctl00$ctl19$txtMobileCityCode']." ".$_POST['ctl00$ctl19$txtMobileNumber']."</td>
  </tr>
  <tr>
    <td class=\"eventreg_text\">Email</td>
    <td>&nbsp;</td>
    <td>".$_POST['ctl00$ctl19$txtEmail']."</td>
  </tr>
  <tr>
    <td class=\"eventreg_text\">Message;</td>
    <td>:</td>
    <td>".$_POST['ctl00$ctl19$txtMailingAddress']."</td>
  </tr>
  <tr>
    <td colspan=\"3\" class=\"eventreg_text\">&nbsp;</td>
  </tr>
</table>";
$head = "MIME-Version: 1.0\r\nContent-Type: text/html; charset=ISO-8859-1\r\nFrom:".$get_data['name_of_part']."<".$get_data['email']."> \r\nBcc:ranjith@aaccu.coop\r\nBcc:sandunchanaka@gmail.com";
//echo $msg;
mail($to, $subj, $msg, $head); ?>

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
                <li class="" ><a href="#">Contact us</a></li>
                
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
	      <h1>Register Your Interest</h1>
	      <p>Thank 
              you for your inquiry.<br>
             
              We will contact you. </p>
	      <!--<h2 class="section-header"><span>Fields marked with ( <span class="asterisk">*</span> ) are mandatory.</span></h2>-->
          
	      <div class="section-body"></div>
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
