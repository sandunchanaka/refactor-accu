<?php include("tpl/header2.tpl");

$reg_id = 0;
$reg_id = isset( $_GET['reg_id'] )?$_GET['reg_id']:0;
if($reg_id != 0 ){	
	$get_data = Registration :: Get_registration_data_back($reg_id);
	
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
        Registration Form </a></li>
                <li class="separator">\</li>
                <li class="" ><a href="#">Personal Information</a></li>
                
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
	      <h1>Personal Information</h1>
	      <p></p>
	      <!--<h2 class="section-header"><span>Fields marked with ( <span class="asterisk">*</span> ) are mandatory.</span></h2>-->
          <h4>
          <?php if($_GET["msg"] !="" || $_GET["msg"] !=0){?>
          <span class="errormsg" style="color:#D00;">
                <?php include('common/registration_massage.php'); ?>
              
</span>
<?php }else{?>
          <span>Fields marked with ( <span class="asterisk">*</span> ) are mandatory.</span>
          <?php }?>
          </h4>
	      <div class="section-body">
           <form action="Controller/registrationr_control.php?mode=reg_02" method="post" enctype="multipart/form-data" name="form2">
	        <input type="hidden" name="hdn_reg_id" id="hdn_reg_id" value="<?php echo $reg_id; ?>">
            <fieldset id="frmRegUrInterest">
	          <ul class="form">
	            
	            <li class="field">
	              <label for="ctl19_ddlTitle" class="required">Title:<span class="asterisk">*</span><small style="display:none">Please select your title.</small></label>
	              <div class="field-value field-value-full">
	                <label>
                      <input type="radio" name="rdo_gender" value="1" id="rdo_gender" <?php if($get_data['gender'] == 1){echo "checked=\"checked\" ";}?>>
                      Mr.</label>
                   
                    <label>
                      <input type="radio" name="rdo_gender" value="2" id="rdo_gender" <?php if($get_data['gender'] == 2){echo "checked=\"checked\" ";}?>>
                      Mrs.</label>
                   
                    <label>
                      <input type="radio" name="rdo_gender" value="3" id="rdo_gender" <?php if($get_data['gender'] == 3){echo "checked=\"checked\" ";}?>>
                      Miss</label>
	                &nbsp;
	                <div><small></small></div>
                  </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_txtFirstName" class="required"> Name of Participant:<span class="asterisk">*</span><small style="display:none">Please enter your first name.</small></label>
	              <div class="field-value field-value-full">
	                 <input name="txt_name_of_participant" type="text" class="textbox validate required" id="txt_name_of_participant" maxlength="100" value="<?php echo $get_data['name_of_part']; ?>">
                   
	                &nbsp; <small></small> </div>
	              <span class="clear"></span> </li>
	            
	            <li class="field">
	              <label for="ctl19_txtCompanyName" class="required">Name of Member:<span class="asterisk">*</span><small style="display:none">Please enter your company name.</small></label>
	              <div class="field-value field-value-full">
	                <select name="cmb_name_of_member" id="cmb_name_of_member" class="validate required">
                      <option value="">Select Name</option>
                      <?php 
					$members = Registration :: Get_member_name();
					for($am=1;$am<=count($members);$am++)
					{
						$row_m = each($members); 
				?>
						<option value="<?php echo $row_m['value']['member_id'];?>" <?php if($row_m['value']['member_id']==$get_data['name_of_member']){echo "selected=\"selected\" ";}?>/>
						<?php echo $row_m['value']['member_name'];?>	
                        </option>
				  <?php } 
				 ?>
                    </select>
	                <small></small> &nbsp; </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_txtMailingAddress" class="required">Organization Address :<span class="asterisk">*</span><small style="display:none">Please enter your mailing address.</small></label>
	              <div class="field-value field-value-full">
	                 <textarea name="txa_org_address" id="txa_org_address" rows="2" cols="20" class="medium validate required autolimit"><?php echo $get_data['organization_address']; ?></textarea>
                   
                  <small></small> &nbsp; </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_txtPOBox" class="required">Country:<span class="asterisk">*</span><small style="display:none">Please enter your P.O. Box number or Post Code.</small></label>
	              <div class="field-value field-value-full">
	                <select name="cmb_country" id="cmb_country" class="validate required">
                      <option value="">Select Country</option>
                      <?php 
					$country = Registration :: GetCountry();
					for($a=1;$a<=count($country);$a++)
					{
						$row = each($country); 
				?>
						<option value="<?php echo $row['value']['country_id'];?>" <?php if($row['value']['country_id']==$get_data['country_id']){echo "selected=\"selected\" ";}?>/>
						<?php echo $row['value']['country_name'];?>	
                        </option>
				  <?php } 
				 ?>
                      </select>
	                <small></small> &nbsp;&nbsp; </div>
	              <span class="clear"></span> </li>
	            </li>
	            <li class="field">
	              <label for="ctl19_txtWebsite" class="required">Organization website :<span class="asterisk">*</span><small>Please enter your company's website. Please do not include http://</small></label>
	              <div class="field-value field-value-full">
	               <input type="text" name="txt_website" id="txt_website" maxlength="100" value="<?php echo $get_data['organization_url']; ?>" class="textbox validate required">
	                <small></small> &nbsp;&nbsp; </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_txtPhoneCountryCode" class="required">Work Phone :<span class="asterisk">*</span><small>Please enter your business telephone number. <nobr>e.g. +971-4-1234567</nobr></small></label>
	              <div class="field-value field-value-full">
	                  <input name="txt_phone" type="text" class="textbox validate required"  id="txt_phone" maxlength="100" value="<?php echo $get_data['work_phone']; ?>">
	                <div><small></small></div>
	                &nbsp; </div>
	              <span class="clear"></span> </li>
                  
                  <li class="field">
	              <label for="ctl19_txtPhoneCountryCode" class="required">Cell Phone :<span class="asterisk">*</span><small>Please enter your business telephone number. <nobr>e.g. +971-4-1234567</nobr></small></label>
	              <div class="field-value field-value-full">
	                  <input name="txt_cellphone" type="text" maxlength="100" id="txt_phone" value="<?php echo $get_data['cell_phone']; ?>" class="textbox validate required" >
	                <div><small></small></div>
	                &nbsp; </div>
	              <span class="clear"></span> </li>
                  
	            <li class="field">
	              <label for="ctl19_txtFaxCountryCode">Fax Number:<small>Please enter your fax number. <nobr>e.g. +971-4-1234567</nobr></small></label>
	              <div class="field-value field-value-full">
	                
	                <input type="text" name="txt_fax" id="txt_fax" maxlength="100" value="<?php echo $get_data['fax']; ?>" class="textbox validate required" >
                  </div>
	              <span class="clear"></span> </li>
	            
	            <li class="field">
	              <label for="ctl19_txtEmail" class="required">Email:<span class="asterisk">*</span><small style="display:none">Please enter your email address.</small></label>
	              <div class="field-value field-value-full">
	               <input type="text" name="txt_email" id="txt_email" value="<?php echo $get_data['email']; ?>"  class="textbox validate required email">
                   
	                <small></small> &nbsp;&nbsp; </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label>Passport No :</label>
	              <div class="field-value field-value-full">
	                <input type="text" name="txt_passport" id="txt_passport" maxlength="100" value="<?php echo $get_data['passport_no']; ?>" class="textbox validate required" >
                  </div>
	              <span class="clear"></span> </li>
                  
                   <li class="field">
	              <label>Place of Issue :</label>
	              <div class="field-value field-value-full">
	                <input type="text" name="txt_place_of_issue" id="txt_place_of_issue" class="textbox validate required" value="<?php echo $get_data['place_of_issue']; ?>">
                  </div>
	              <span class="clear"></span> </li>
                  
                  
                   <li class="field">
	              <label>Date of expiration :</label>
	              <div class="field-value field-value-full">
	                <input type="text" name="txt_exp_date" id="txt_exp_date" style="width:90px;" class="textbox validate required" value="<?php echo $get_data['exp_date']; ?>"><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.form2.txt_exp_date);return false;" ><img class="PopcalTrigger" align="absmiddle" src="admin/date_calander/calbtn.gif" width="34" height="22" border="0" alt="" /></a>
                  </div>
	              <span class="clear"></span> </li>
                  
                  
                   <li class="field">
	              <label>Nationality :</label>
	              <div class="field-value field-value-full">
	               <input type="text" name="txt_nationality" id="txt_nationality" class="textbox validate required" value="<?php echo $get_data['nationality']; ?>">
                  </div>
	              <span class="clear"></span> </li>
                  
                   <li class="field">
	              <label>Upload your picture  (max. 250kB)  :</label>
	              <div class="field-value field-value-full">
	                <label>
				  <?php if($get_data['up_image'] !=''){?> <img src="upload_images/event_registration/thumb/<?php echo $get_data['up_image'];?>" width="50" height="50"><?php } ?>
                  
                    <input type="file" name="txt_up_poto" id="txt_up_poto" class="r_file">
                    <input type="hidden" name="hdn_up_poto" id="hdn_up_poto" value="<?php echo $get_data['up_image']; ?>">
                  </label><br>image size must be(80 &times; 60)
                  </div>
	              <span class="clear"></span> </li>
                  
                  
                   <li class="field">
	              <label>Name as it would appear  on a badge :</label>
	              <div class="field-value field-value-full">
	                <input name="txt_name_of_badge" type="text" class="textbox validate required" id="txt_name_of_badge" size="50" value="<?php echo $get_data['name_badge']; ?>">                  </div>
	              <span class="clear"></span> </li>
                  
                   <li class="field">
	              <label>Please upload your  organization's  :</label>
	              <div class="field-value field-value-full">
	               <?php if($get_data['up_file'] !=''){?> <?php echo $get_data['up_file']; } ?>
                  <br>
				<label>
                    <input type="file" name="up_org" id="up_org" class="r_file">
                  </label><input name="hdn_org_file" type="hidden" value="<?php echo $get_data['up_file']; ?>">
                  </div>
	              <span class="clear"></span> </li>
                  
                  <li class="field">
	              <label>Brief organization  description's  :</label>
	              <div class="field-value field-value-full">
	               <?php if($get_data['up_file'] !=''){?> <?php echo $get_data['up_file']; } ?>
                  <br>
				<label>
                   <textarea name="txa_brief_desc" cols="30" rows="3" class="medium validate required autolimit" id="txa_brief_desc"><?php echo $get_data['brief_desc']; ?></textarea>
                  </label>
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
<iframe width=174 height=189 name="gToday:normal:agenda.js" id="gToday:normal:agenda.js" src="admin/date_calander/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>
