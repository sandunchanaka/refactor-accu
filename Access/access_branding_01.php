<?Php
//require_once('includes/config.php');
	require_once('access_includes/access_config.php');
	require_once ('access_class/db.class.php');
	require_once ('access_class/access_class.php');
	session_unset();
	session_destroy();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
	<script src="access_SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <link href="access_SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
a:hover {
	color: #00F;
}
-->
</style>
<title>Access Branding</title>
<link href="css/bgimage.css" rel="stylesheet" type="text/css" />

<link href="css/aaccu.css" rel="stylesheet" type="text/css" />
<link href="../css/bgimage.css" rel="stylesheet" type="text/css" />
<!-- CSS -->
<link rel="stylesheet" href="css/lightbox.css" media="screen,projection" type="text/css" />

<!-- JavaScript -->
<script type="text/javascript" src="access_script/prototype.js"></script>
<script type="text/javascript" src="access_script/lightbox.js"></script>
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:621px;
	top:534px;
	width:70px;
	height:16px;
	z-index:1;
	text-align: center;
}
-->
</style>
</head>

<body>
<table width="840" height="594" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="body_boarder" id="Table_01">
<tr>
		<td height="533" align="center">
		 	 
<!-- ImageReady Slices (index_01.psd) -->
<table id="Table_01" width="843" height="127" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td align="center"><img src="access_image/access.jpg" width="843" height="100" /></td>
	</tr>
	<tr>
		<td height="27" align="center" bgcolor="#DDDDDD"><table width="90%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="50" colspan="2" align="center" class="IntroText_new">ACCESS Branding Assessment Tool</td>
            </tr>
          <tr>
            <td height="74" colspan="2"><p class="aboutusbod">INTRODUCTION</p>
              <p>To succeed in today&rsquo;s increasingly competitive environment,  credit unions need superior brand intelligence.&nbsp;  ACCESS-A1 Competitive Choice for Excellence in Service and Soundness  will arm you with the critical insight you need to build the optimal organization  wide brand strategy. It will show you how returns from a well-managed brand can  be greater than those of any other business activity.</p>
              <br />
              This  diagnostics tool would help&nbsp; in  developing branding strategies for credit unions capitalizing the competitive  advantage. This would also be the basis for ACCU&rsquo;s member organizations in  providing technical assistance for members to implement the branding strategies  and developing advertising materials that will serve as model for credit  unions. <br />
              <br />
              The  branding strategies will define the role of the Credit Union Movement as a new  leader in the Financial Service Sector.&nbsp;  In so doing, it will promote those characteristics that differentiate  credit unions from other financial institutions in the marketplace.&nbsp; Further, branding will also communicate our  capabilities to a broad national audience that does not realize how closely  attuned their values are with those of credit unions.&nbsp; Most importantly, credit union operation will  turn around into a dynamic and creative cooperative financial institution.<br />
              <br /></td>
          </tr>
          <tr>
            <td height="141" colspan="2"><table width="60%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td colspan="3" align="left" class="big">
                    </td>
              </tr>
              
              <tr>
                <td width="3%" align="center" bgcolor="#DDDDDD">&nbsp;</td>
                <td width="94%" align="center" valign="bottom" bgcolor="#DDDDDD"><img src="access_image/que_head.gif" alt="" width="100%" height="16" /></td>
                <td width="3%" align="center" bgcolor="#DDDDDD">&nbsp;</td>
              </tr>
              <tr>
                <td width="3%" align="left" bgcolor="#DDDDDD">&nbsp;</td>
                <td width="94%" align="left" valign="top" bgcolor="#FFFFFF">
             
                
              <table width="368" height="186" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#D1D1D1">
              <form id="form1" name="form1" method="post" action="access_control/access_control.php?mode=logging ">
                <tr>
                  <td height="37" colspan="5" align="left" bgcolor="#DDDDDD"><label class="IntroText_new"> &nbsp;&nbsp;&nbsp;&nbsp;Access Branding</label></td>
                </tr>
                <tr>
                  <td colspan="5" align="left" bgcolor="#FFFFFF"><span style="color:#F00">
                    <?php require_once('access_message/access_message.php'); ?>
                    </span> </td>
                  </tr>
                <tr>
                  <td width="17" height="28" align="left" valign="top" bgcolor="#FFFFFF"></td>
                  <td width="75" align="left" valign="top" bgcolor="#FFFFFF"><label class="Index_heading_01">Username</label>                    </td>
                  <td width="16" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                  <td width="196" align="left" valign="top" bgcolor="#FFFFFF"><?php $res=access::get_union();
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
                    <span class="selectInvalidMsg"> *</span><span class="selectRequiredMsg">*</span></span></td>
                  <td width="64" align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                  </tr>
                <tr>
                  <td height="28" align="left" valign="top" bgcolor="#FFFFFF"></td>
                  <td height="28" align="left" valign="top" bgcolor="#FFFFFF"><label class="Index_heading_01">Year</label></td>
                  <td valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                  <td align="left" valign="top" bgcolor="#FFFFFF"><span id="spryselect2">
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
                    <span class="selectInvalidMsg">*</span><span class="selectRequiredMsg">lease select an item.</span></span></td>
                  <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                  </tr>
                <tr>
                  <td width="17" height="28" align="left" valign="top" bgcolor="#FFFFFF"></td>
                  <td height="28" align="left" valign="top" bgcolor="#FFFFFF"><label class="Index_heading_01">Password</label></td>
                  <td valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                  <td align="left" valign="top" bgcolor="#FFFFFF"><span id="sprytxt_Password1">
                    <label>
                      <input name="txt_Password" type="password" class="login_boxes" id="txt_Password" />
                      <span class="passwordRequiredMsg">*</span></label>
                    </span></td>
                  <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
                  </tr>
                <tr>
                  <td height="13" colspan="5" valign="top" bgcolor="#FFFFFF"><table width="188" border="0" cellspacing="0" cellpadding="1">
                    <tr>
                      <td width="129" height="20" align="right">&nbsp;</td>
                      <td width="55" align="right"><input type="submit" name="btn_Submit" id="btn_Submit" value="Log in"  class="img_border"/></td>
                      </tr>
                    </table></td>
                  </tr>
              </form>     
                <tr>
                  <td height="19" colspan="4" bgcolor="#FFFFFF"><label><a href="access_register.php" class="IntroText_new"><u>Register </u></a> <span class="IntroText_new">New Credit Union</span></label></td>
                  <td height="19" bgcolor="#FFFFFF">
                  
                  <p>
		<div id="box1" style="display:none">
        <!--------------------------                    -->       
        <form name="form2" id="form2" method="post" action="access_control/access_control.php?mode=log_admin">
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="5" align="center" valign="bottom" bgcolor="#C5CFE3"><img src="access_image/rechts_oben.gif" width="100%" height="15" /></td>
            </tr>
            <tr>
              <td width="6" bgcolor="#FFFFFF">&nbsp;</td>
              <td colspan="3" align="center" bgcolor="#C5CFE3"><label class="IntroText_new">Access Bineding Admin logging</label></td>
              <td width="7" bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td colspan="3" bgcolor="#FFFFFF"><?php /*require_once('access_message/access_message.php'); */?></td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <td height="31" bgcolor="#FFFFFF">&nbsp;</td>
              <td width="64" align="left" valign="middle" bgcolor="#FFFFFF"><label class="Index_heading_01">Username</label></td>
              <td width="3" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
              <td width="164" align="left" valign="middle" bgcolor="#FFFFFF"><span id="sprytxt_user">
                <label>
                  <input type="text" name="txt_user" id="txt_user" />
                  <span class="textfieldRequiredMsg"> *</span></label>
              </span></td>
              <td  valign="top" bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td height="33" align="left" valign="middle" bgcolor="#FFFFFF"><label class="Index_heading_01">Password</label></td>
              <td valign="bottom" bgcolor="#FFFFFF">&nbsp;</td>
              <td align="left" valign="middle" bgcolor="#FFFFFF"><span id="sprytxt_Password_admin">
                <label>
                  <input name="txt_Password_admin" type="password" class="login_boxes" id="txt_Password_admin" />
                  <span class="passwordRequiredMsg"> *</span></label>
              </span></td>
              <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <td bgcolor="#FFFFFF">&nbsp;</td>
              <td colspan="3" valign="top" bgcolor="#C5CFE3"><table width="100%" border="0" cellspacing="0" cellpadding="1">
                <tr>
                  <td width="70" height="20" align="right" bgcolor="#FFFFFF">&nbsp;</td>
                  <td width="73" align="center" bgcolor="#FFFFFF"><label>
                    <input name="btn_cancel" type="button" class="img_border" id="btn_cancel" value="Cancel" onclick="window.location.href='access_branding.php'"; />
                  </label></td>
                  <td width="134" align="center" bgcolor="#FFFFFF"><input type="button" name="btn_Submit2" id="btn_Submit2" value="Logging"  class="img_border" onclick="window.location.href='access_control/access_control.php?mode=log_admin&u='+txt_user.value+'&p='+txt_Password_admin.value"/></td>
                </tr>
              </table></td>
              <td bgcolor="#FFFFFF">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="5" valign="top" ><img src="access_image/rechts_unten.gif" width="100%" height="15" /></td>
            </tr>
          </table>
        </form>
      <!-----------------------------------    -->
      </div>
		<a href="#" onclick="new Lightbox.base('box1')">admin</a></td>
                  </tr>
                </table>
           
            
                </td>
                <td width="3%" align="left" bgcolor="#DDDDDD">&nbsp;</td>
              </tr>
              <tr>
              	
                <td width="3%" align="center" bgcolor="#DDDDDD"></td>
                <td width="94%" align="center" valign="top" bgcolor="#DDDDDD"><img src="access_image/que_fot.gif" width="100%" height="16" /></td>
                <td width="3%" align="center" bgcolor="#DDDDDD">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3" bgcolor="#DDDDDD">&nbsp;</td>
              </tr>
        </table></td>
        </tr>
          <tr>
            <td width="69%" height="19">&nbsp;</td>
            <td width="3%">&nbsp;</td>
          </tr>
        </table></td>
  </tr>
</table>
<!-- End ImageReady Slices -->        </td>
  </tr>
	<tr>
		<td height="19" class="Footter_image"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr class="menubar_font">
            <td class="">&nbsp;</td>
            <td width="8%" class="menubar_font">&nbsp;</td>
            <td width="2%" class="menubar_font">&nbsp;</td>
            <td width="10%" class="menubar_font">&nbsp;</td>
            <td width="2%" class="menubar_font">&nbsp;</td>
            <td width="8%" class="menubar_font">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="24" colspan="7" align="center" class="menubar_font">CopyRight &copy; 2008 Association of Asian Confederation of Credit Unions </td>
          </tr>
        </table></td>
  </tr>
</table>
<!-- End ImageReady Slices -->

<script type="text/javascript">
var sprypassword1 = new Spry.Widget.ValidationPassword("sprytxt_Password1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprytxt_Password_admin");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {invalidValue:"-1"});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {invalidValue:"-1"});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytxt_user", "none");
</script>
</body>
</html>