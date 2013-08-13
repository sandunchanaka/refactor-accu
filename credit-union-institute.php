<?php 
//$page = 25;
include("tpl/header2.tpl");?>
<script type="text/javascript" src="js/jquery.js" ></script>
<script type="text/javascript" src="js/jquery.validate.js" ></script>
<script language="javascript">
	
	$.validator.setDefaults({
	submitHandler: function() { alert("submitted!"); }
});

$().ready(function() {
	// validate the comment form when it is submitted
	$("#form_regx").validate();

});
</script>


<style type="text/css">
form.cmxform label.error, label.error {
	/* remove the next line when you have trouble in IE6 with labels in list */
	color: red;
	font-style: italic
}
div.error { display: none; }	
input{ height:15px; }
</style>
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
                <li class="" ><a href="introduction.php">About Us</a></li>
                
                <li class="separator">\</li>
                <li class="current" ><a href="#">Credit Union Institute </a></li>
                
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
		    <!--MOD_193d7b35-20e1-4c93-8b8d-a4abb0e294e3-->
		    <div class="content-container"> <span class="clear"></span>
		      <iframe src="content/documents/e_learning_promotion_aa.pdf?embedded=true" style="width:760px; height:1000px;" frameborder="0"  pdfOpenParams: { zoom: '700,700,700'}></iframe> 
		     <br><br>
			<h2>APPLICATION  OF  INTENTION TO PARTICIPATE IN E-LEARNING PROGRAM</h2>
           <br/>
           <form action="credit_union_institute_email.php" method="post" enctype="multipart/form-data" name="form_reg" id="form_reg" class="cmxform">
           <p><strong>Course Interest </strong>(Please mark X in front of the course interest):</p>
           <table cellspacing="0" >
		          <tbody class="data">
		            <tr>
		              <td class="normal-td"><input name="chk_01" id="chk_01" type="checkbox" value="1"></td>
		              <td class="normal-td">Credit Union Director's Competency Course (CUDCC)</td>
	                </tr>
		            <tr>
		              <td class="normal-td"><input name="chk_02" id="chk_02" type="checkbox" value="1"></td>
		              <td class="normal-td">Credit Union CEO's Competency Course (CUCCC)</td>
	                </tr>
		            <tr>
		              <td class="normal-td"><input name="chk_03" id="chk_03" type="checkbox" value="1"></td>
		              <td class="normal-td">Credit Union Audit/Supervisory Committee's Competency Course (CUASCC)</td>
	                </tr>
		            <tr>
                      <td class="normal-td"><input name="chk_04" id="chk_04" type="checkbox" value="1"></td>
		              <td class="normal-td">Credit Union Loan Officer's Competency Course (CULOCC)</td>
	                </tr>
	              </tbody>
             </table>
                <br/><br/>
 <table width="100%" border="0">
  <tr>
    <td width="19%" class="normal-td" style="vertical-align:top;">Title :</td>
    <td width="27%" class="normal-td"><select name="cmb_title" id="cmb_title" required>
      <option value="Mr.">Mr.</option>
      <option value="Mrs.">Mrs.</option>
    </select></td>
    <td width="54%" class="normal-td">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" class="normal-td" style="vertical-align:top;">Name :</td>
    <td class="normal-td"><input name="txt_name" type="text" id="txt_name" size="30" required></td>
    <td class="normal-td">Surname : 
      <input name="txt_surname" type="text" id="txt_surname" size="30" required></td>
  </tr>
  <tr>
    <td valign="top" class="normal-td" style="vertical-align:top;">Male/Female :</td>
    <td class="normal-td">
      <label>
        <input type="radio" name="rdo_status" value="male" id="rdo_status_0">
        Male</label>
      <label>
        <input type="radio" name="rdo_status" value="female" id="rdo_status_1">
        Female</label>
    </td>
    <td class="normal-td">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" class="normal-td" style="vertical-align:top;">Mailing Address :</td>
    <td colspan="2" class="normal-td"><textarea name="txt_address" cols="40" rows="3" id="txt_address" required></textarea></td>
    </tr>
  <tr>
    <td class="normal-td">Phone : </td>
    <td colspan="2" class="normal-td"><table width="100%" border="0">
      <tr>
        <td>Home : 
          <input name="txt_home_phone" type="text" id="txt_home_phone" ></td>
        <td>Work : 
          <input name="txt_work_phone" type="text" id="txt_work_phone" ></td>
        <td>Mobile : 
          <input name="txt_mobile" type="text" id="txt_mobile" ></td>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td class="normal-td">&nbsp;</td>
    <td colspan="2" class="normal-td"><table width="100%" border="0">
      <tr>
        <td>Email :
          <input name="txt_email" type="text" id="txt_email" ></td>
        <td>Skype :
          <input name="txt_skype" type="text" id="txt_skype" ></td>
        <td>Facebook :
          <input name="txt_facebook" type="text" id="txt_facebook" ></td>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td colspan="3" class="normal-td">Position in Credit Union : 
      <input name="txt_credit_union_position" type="text" id="txt_credit_union_position" size="60"></td>
    </tr>
  <tr>
    <td colspan="3" class="normal-td">Name &nbsp;and&nbsp; Address  of Credit Union : 
      <input name="txt_credit_union_address" type="text" id="txt_credit_union_address" size="60"></td>
    </tr>
  <tr>
    <td colspan="3" class="normal-td">Name of Federation Affiliated : 
      <input name="txt_name_of_federation" type="text" id="txt_name_of_federation" size="60"></td>
    </tr>
  <tr>
    <td class="normal-td">&nbsp;</td>
    <td class="normal-td">&nbsp;</td>
    <td class="normal-td">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" class="normal-td">Please send the application for to me. The   50% discounted registration fee US$ 300 fund will be transferred  on before July 15, 2013 to  ACCU .</td>
    </tr>
  <tr>
    <td class="normal-td">&nbsp;</td>
    <td class="normal-td">&nbsp;</td>
    <td class="normal-td">&nbsp;</td>
  </tr>
  <tr>
    <td class="normal-td">&nbsp;</td>
    <td class="normal-td">&nbsp;</td>
    <td class="normal-td"><input type="submit" name="button" id="button" value="Submit" style="height:30px; width:120px; font-weight:bold;"></td>
  </tr>
</table><br>
<table width="100%" border="0">
  <tr>
    <td><p><strong>Association  of Asian Confederation of Credit Unions<br>
8th Floor, U Tower Building, No. 411, Srinakarin Rd., Suanluang, &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <br>
Bangkok 10250, Thailand&nbsp; &nbsp;&nbsp;&nbsp;  Email: <a href="mailto:elarning@aaccu.coop">elarning@aaccu.coop</a> (66)-2-7044253-54&nbsp;&nbsp;  Fax: (66)-2-7044255<br>
Website: <a href="http://www.aaccu.asia" target="_blank">www.aaccu.asia</a>;&nbsp; <a href="http://www.aaccu.coop" target="_blank">www.aaccu.coop</a></strong></p></td>
  </tr>
</table><br>
<table width="100%" border="0">
  <tr>
    <td><p><strong>Bank  Transfer &nbsp;Account Name:</strong>&nbsp;<br>
      <strong>Asian&nbsp; confederation of credit Unions</strong> <br>
      <strong>Bangkok&nbsp; Bank Ltd:</strong>&nbsp;&nbsp;&nbsp; </p>
      <strong>Acco.  No.r:</strong>&nbsp;&nbsp;&nbsp;  840 180 0019 100064 501<br>
      <strong>SWIFT Code</strong> | BKKBTHK</td>
    <td><p><strong>Send  a &nbsp;Bank&nbsp;  Draft &nbsp;or postal order to </strong><br>
      Payable  in any currency y to:<br>
  <strong>Asian&nbsp; confederation of credit Unions</strong></p>
Send to:</td>
  </tr>
</table>

           </form>
           
		    </div>
		    <!--/MOD_193d7b35-20e1-4c93-8b8d-a4abb0e294e3-->
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
