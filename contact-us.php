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
	      <p></p>
	      <!--<h2 class="section-header"><span>Fields marked with ( <span class="asterisk">*</span> ) are mandatory.</span></h2>-->
          <h4><span>Fields marked with ( <span class="asterisk">*</span> ) are mandatory.</span></h4>
	      <div class="section-body">
          <form name="contact_us" id="contact_us" action="contact-submit.php" method="post" enctype="multipart/form-data">
	        <fieldset id="frmRegUrInterest">
	          <ul class="form">
	            
	            <li class="field">
	              <label for="ctl19_ddlTitle" class="required">Title:<span class="asterisk">*</span><small style="display:none">Please select your title.</small></label>
	              <div class="field-value field-value-full">
	                <select name="ctl19_ddlTitle" id="ctl19_ddlTitle" class="validate required">
	                  <option value="">Please Select</option>
	                  <option value="Mr">Mr</option>
	                  <option value="Ms">Ms</option>
	                  <option value="Mrs">Mrs</option>
	                  <option value="Miss">Miss</option>
                    </select>
	                &nbsp;
	                <div><small></small></div>
                  </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_txtFirstName" class="required"> Name:<span class="asterisk">*</span><small style="display:none">Please enter your first name.</small></label>
	              <div class="field-value field-value-full">
	                <input name="ctl00$ctl19$txtFirstName" type="text" maxlength="100" id="ctl19_txtFirstName" class="textbox validate required" />
	                &nbsp; <small></small> </div>
	              <span class="clear"></span> </li>
	            
	            <li class="field">
	              <label for="ctl19_txtCompanyName" class="required">Company Name:<span class="asterisk">*</span><small style="display:none">Please enter your company name.</small></label>
	              <div class="field-value field-value-full">
	                <input name="ctl00$ctl19$txtCompanyName" type="text" maxlength="300" id="ctl19_txtCompanyName" class="textbox validate required" />
	                <small></small> &nbsp; </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_txtMailingAddress" class="required">Mailing Address:<span class="asterisk">*</span><small style="display:none">Please enter your mailing address.</small></label>
	              <div class="field-value field-value-full">
	                <textarea name="ctl00$ctl19$txtMailingAddress" rows="2" cols="20" id="ctl19_txtMailingAddress" class="medium validate required autolimit">
        </textarea>
	                <small></small> &nbsp; </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_txtPOBox" class="required">PO Box / Post Code:<span class="asterisk">*</span><small style="display:none">Please enter your P.O. Box number or Post Code.</small></label>
	              <div class="field-value field-value-full">
	                <input name="ctl00$ctl19$txtPOBox" type="text" maxlength="300" id="ctl19_txtPOBox" class="textbox validate required" />
	                <small></small> &nbsp; </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_txtCity" class="required">City / Town:<span class="asterisk">*</span><small style="display:none">Please enter your city / town name</small></label>
	              <div class="field-value field-value-full">
	                <input name="ctl00$ctl19$txtCity" type="text" maxlength="300" id="ctl19_txtCity" class="textbox validate required" />
	                <small></small> &nbsp; </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_txtState">State / Province:<small style="display:none">Please enter your state / province name</small></label>
	              <div class="field-value field-value-full">
	                <input name="ctl00$ctl19$txtState" type="text" maxlength="300" id="ctl19_txtState" class="textbox" />
                  </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_ddlCountry" class="required">Country:<span class="asterisk">*</span><small style="display:none">Please select your country.</small></label>
	              <div class="field-value field-value-full">
	                <select name="ctl00$ctl19$ddlCountry" id="ctl19_ddlCountry" class="validate required">
	                  <option value="">Please Select</option>
	                  <?php 
						$country = Accu_Forum :: GetCountry();
						for($a=0;$a<count($country);$a++){
						$row = each($country); 
						
						?>
                    <option value="<?php echo $row['value']['country_id'];?>"/>                  
                    <?php echo $row['value']['country_name'];?>
                    <?php } ?>
                    </select>
	                <div><small></small></div>
	                &nbsp; </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_txtWebsite" class="required">Website:<span class="asterisk">*</span><small>Please enter your company's website. Please do not include http://</small></label>
	              <div class="field-value field-value-full">
	                <input name="ctl00$ctl19$txtWebsite" type="text" maxlength="300" id="ctl19_txtWebsite" class="textbox validate required url" />
	                <small></small> &nbsp;&nbsp; </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_txtPhoneCountryCode" class="required">Company Phone:<span class="asterisk">*</span><small>Please enter your business telephone number. <nobr>e.g. +971-4-1234567</nobr></small></label>
	              <div class="field-value field-value-full">
	                <input name="ctl00$ctl19$txtPhoneCountryCode" type="text" maxlength="6" id="ctl19_txtPhoneCountryCode" title="Country Code" class="textbox textbox-code validate required" />
	                <input name="ctl00$ctl19$txtPhoneCityCode" type="text" maxlength="6" id="ctl19_txtPhoneCityCode" title="City Code" class="textbox textbox-code validate required" />
	                <input name="ctl00$ctl19$txtPhoneNumber" type="text" maxlength="10" id="ctl19_txtPhoneNumber" title="Number" class="textbox textbox-phone validate required" />
	                <div><small></small></div>
	                &nbsp; </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_txtFaxCountryCode">Fax Number:<small>Please enter your fax number. <nobr>e.g. +971-4-1234567</nobr></small></label>
	              <div class="field-value field-value-full">
	                <input name="ctl00$ctl19$txtFaxCountryCode" type="text" maxlength="6" id="ctl19_txtFaxCountryCode" title="Country Code" class="textbox textbox-code" />
	                <input name="ctl00$ctl19$txtFaxCityCode" type="text" maxlength="6" id="ctl19_txtFaxCityCode" title="City Code" class="textbox textbox-code" />
	                <input name="ctl00$ctl19$txtFaxNumber" type="text" maxlength="10" id="ctl19_txtFaxNumber" title="Number" class="textbox textbox-phone" />
                  </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_txtMobileCountryCode">Mobile Number:<small>Please enter your mobile number. <nobr>e.g. +971-50-1234567</nobr></small></label>
	              <div class="field-value field-value-full">
	                <input name="ctl00$ctl19$txtMobileCountryCode" type="text" maxlength="6" id="ctl19_txtMobileCountryCode" title="Country Code" class="textbox textbox-code" />
	                <input name="ctl00$ctl19$txtMobileCityCode" type="text" maxlength="6" id="ctl19_txtMobileCityCode" title="City Code" class="textbox textbox-code" />
	                <input name="ctl00$ctl19$txtMobileNumber" type="text" maxlength="10" id="ctl19_txtMobileNumber" title="Number" class="textbox textbox-phone" />
                  </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_txtEmail" class="required">Email:<span class="asterisk">*</span><small style="display:none">Please enter your email address.</small></label>
	              <div class="field-value field-value-full">
	                <input name="ctl00$ctl19$txtEmail" type="text" maxlength="300" id="ctl19_txtEmail" class="textbox validate required email" />
	                <small></small> &nbsp;&nbsp; </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label>Message:</label>
	              <div class="field-value field-value-full">
	                <textarea name="message" rows="2" cols="20" id="ctl00$ctl19$txtMailingAddress" class="medium validate required autolimit">
                      </textarea>
                  </div>
	              <span class="clear"></span> </li>
	            <li class="actions">
	              <input type="submit" name="ctl00$ctl19$btnSubmit" value="Submit" id="ctl19_btnSubmit" class="main-button" />
                </li>
              </ul>
            </fieldset>
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
