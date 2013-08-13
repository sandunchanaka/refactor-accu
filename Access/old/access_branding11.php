<?Php
//require_once('includes/config.php');
	require_once('../includes/access_config.php');
	require_once ('../classes/db.class.php');
	require_once ('access_class/access_class.php');
	session_unset();
	session_destroy();
?>
<html>
<head>

<title>Association Of Asia Confederation Credit Union</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="shortcut icon" href="images/animated_favicon.gif" />
<link href="css/aaccu.css" rel="stylesheet" type="text/css">
<link href="css/bgimage.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/chromestyle2.css" />

<script type="text/javascript" src="Scripts/chrome.js"></script>

 	<link href="style.css" rel="stylesheet" type="text/css" />
	<script src="access_SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
    <script src="access_SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
	<link href="access_SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
  	<link href="access_SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
    <link href="css/aaccu.css" rel="stylesheet" type="text/css">

<style type="text/css">
<!--
a:hover {
	color: #00F;
}
-->
</style>


<script type="text/javascript" language="javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
//-->
</script>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- ImageReady Slices (index_01.psd) -->
<table width="840" height="183" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="body_boarder" id="Table_01">
<tr>
		<td height="127" align="center">
		 	 
<!-- ImageReady Slices (index_01.psd) -->
<table id="Table_01" width="843" height="127" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td align="center">&nbsp;</td>
	</tr>
	<tr>
		<td height="27" class="menuubar_image" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="10%"><!--2nd drop down menu -->
              <!--3rd drop down menu -->                                                
              <!--4th drop down menu -->                                                   

<script type="text/javascript">

cssdropdown.startchrome("chromemenu")

</script>            </td>
            </tr>
      </table>		</td>
	</tr>
</table>
<!-- End ImageReady Slices -->        </td>
  </tr>
	<tr>
		<td height="19">
          <table width="100%" border="1">
            <tr>
              <td width="28%">&nbsp;</td>
      <td width="69%" class="IntroText_new">ACCESS Branding Assessment Tool</td>
      <td width="3%">&nbsp;</td>
    </tr>
            <tr>
              <td height="74">&nbsp;</td>
      <td colspan="2"><p class="aboutusbod">INTRODUCTION</p>
        <p class="text">ACCU is a regional network of Credit Unions, which has vision of Sustainable Credit 
          Unions in Asia. ACCU developed standards for Asian credit unions following internationally 
          accepted norms necessary for credit unions to compete and sustain in the market environment.<br>
          The Asian credit union regulation does not impose Credit Union business standards or best 
          practice. ACCU undertook the project on Branding Credit Union in Asia to promote standards 
          and best practices in Asian credit unions.</p>
        <p class="text"><br>
          This project provided very comprehensive standard on credit union operation in Asia.
          The project included technical assistance and management tools to reach the standard. It is 
          intended that this list will also provide a good source of information for new users of the<br>
          standards. These standards are regarded as management goals.</p></td>
      </tr>
            <tr>
              <td height="141">&nbsp;</td>
      <td colspan="2">
        
        <form id="form1" name="form1" method="post" action="access_control/access_control.php?mode=logging ">
          <table width="368" height="125" border="0" cellpadding="0" cellspacing="0" bgcolor="#D1D1D1">
            <tr>
              <td colspan="5" align="center" bgcolor="#E2E8F1"><label class="IntroText_new">Access Bineding</label></td>
                </tr>
            <tr>
              <td colspan="5" align="left" bgcolor="#E2E8F1"><span style="color:#F00">
                <?php require_once('access_message/access_message.php'); ?></span>                              </td>
            </tr>
            <tr>
              
              <td width="3" height="28" align="left" valign="top" bgcolor="#E2E8F1"></td>
                  <td width="29" align="left" valign="top" bgcolor="#E2E8F1"><label class="Index_heading_01">User</label> </td>
                  <td width="4" valign="top" bgcolor="#E2E8F1">&nbsp;</td>
                  <td width="157" align="left" valign="top" bgcolor="#E2E8F1">
                    <?php $res=access::get_union();
							  //echo count($res);exit;
							  ?>
                    <span id="spryselect1">
                    <label>
                    <select name="cmb_name" id="cmb_name" >
                      <option value="-1">Select</option>
                      <?php 
                                 for($a=0;$a<count($res);$a++)
                                {
                                  $row=each($res);
                                  ?>
                      <option value="<?php echo $row['value']['reg_id']; ?>"><?php echo $row['value']['name'] ; ?></option>
                      <?php	
                                }
                              
                              ?>
                    </select>
                    </label>
                  <span class="selectInvalidMsg">*</span>  <span class="selectRequiredMsg">*</span></span></td>
                  <td width="7" align="left" valign="top" bgcolor="#E2E8F1">&nbsp;</td>
                </tr>
            <tr>
              <td height="28" align="left" valign="top" bgcolor="#E2E8F1"></td>
              <td height="28" align="left" valign="top" bgcolor="#E2E8F1"><label class="Index_heading_01">Year</label></td>
              <td valign="top" bgcolor="#E2E8F1">&nbsp;</td>
              <td align="left" valign="top" bgcolor="#E2E8F1"><span id="spryselect2">
                <label>
                <select name="cmb_year" id="cmb_year">
                  <option value="-1">Select</option>
                  <?php 
				  	for($a=2000;$a<=date('Y');$a++)
					{
						?>
                        <option value="<?php echo $a;?>"><?php echo $a;?></option>
                        <?php
					}
				  ?>
                </select>
                </label>
                <span class="selectInvalidMsg">*</span>                <span class="selectRequiredMsg">Please select an item.</span></span></td>
              <td align="left" valign="top" bgcolor="#E2E8F1">&nbsp;</td>
            </tr>
            <tr>
              <td width="3" height="28" align="left" valign="top" bgcolor="#E2E8F1"></td>
                  <td height="28" align="left" valign="top" bgcolor="#E2E8F1"><label class="Index_heading_01">Pass</label></td>
                  <td valign="top" bgcolor="#E2E8F1">&nbsp;</td>
                  <td align="left" valign="top" bgcolor="#E2E8F1"><span id="sprytxt_Password">
                  <label>
                      <input name="txt_Password" type="password" class="login_boxes" id="txt_Password" />
                    <span class="passwordRequiredMsg">*</span></label>
                  </span></td>
                  <td align="left" valign="top" bgcolor="#E2E8F1">&nbsp;</td>
                </tr>
            <tr>
              <td height="13" colspan="5" valign="top" bgcolor="#E2E8F1"><table width="188" border="0" cellspacing="0" cellpadding="1">
                <tr>
                  <td width="129" height="20" align="right">&nbsp;</td>
                                <td width="55" align="right"><input type="submit" name="btn_Submit" id="btn_Submit" value="Loging"  class="img_border"/></td>
                      </tr>
                </table></td>
                </tr>
            <tr>
              <td height="19" colspan="5" bgcolor="#E2E8F1"><label><a href="access_register.php" class="IntroText_new"><u>Register </u></a> <span class="IntroText_new">New Credit Union</span></label></td>
                </tr>
            </table>
          </form>      </td>
      </tr>
            <tr>
              <td height="96">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
            <tr>
              <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
      </table></td>
  </tr>
	<tr>
		<td height="19" valign="top">
			 
             <!-- ImageReady Slices (index_01.psd) -->          <!-- End ImageReady Slices -->      <table id="Table_02" width="843" height="43" border="0" cellpadding="0" cellspacing="0" align="center">
               <tr>
                 <td width="843" height="43" class="Footter_image"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td width="30" height="133" class="menubar_font">&nbsp;</td>
                     </tr>
                 </table></td>
               </tr>
             </table></td>
  </tr>
</table>
<!-- End ImageReady Slices -->

<script type="text/javascript">
var sprypassword1 = new Spry.Widget.ValidationPassword("sprytxt_Password");
var sprypassword2 = new Spry.Widget.ValidationPassword("sprypassword2");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {invalidValue:"-1"});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {invalidValue:"-1"});
</script>
</body>
</html>