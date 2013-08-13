<?php 	
    require_once('includes/access_config.php');
	require_once ('classes/db.class.php');
	require_once ('access_class/access_class.php');
?>
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
</style><table width="200" height="133" border="0">
<tr>
      <td width="215">
        <form id="form1" name="form1" method="post" action="access_control/access_control.php?mode=logging ">
  <table width="200" height="125" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td colspan="5" align="center" bgcolor="#C5CFE3"><label class="IntroText_new">Access Bineding</label></td>
                            </tr>
                            <tr>
                              <td colspan="5" align="left" bgcolor="#C5CFE3"><span style="color:#F00"><?php require_once('access_message/access_message.php'); ?></span>                              </td>
          </tr>
                            <tr>
                              
                              <td width="3" height="28" align="left" valign="top" bgcolor="#C5CFE3"></td>
                              <td width="29" align="left" valign="top" bgcolor="#C5CFE3"><label class="Index_heading_01">User</label> </td>
                              <td width="4" valign="top" bgcolor="#C5CFE3">&nbsp;</td>
                              <td width="157" align="left" valign="top" bgcolor="#C5CFE3">
                              <?php $res=access::get_union();
							  //echo count($res);exit;
							  ?>
                              <span id="spryselect1">
                              <label>
                              
                              <select name="cmb_name" id="cmb_name">
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
                              <td width="7" align="left" valign="top" bgcolor="#C5CFE3">&nbsp;</td>
                            </tr>
                            <tr>
                              <td width="3" height="28" align="left" valign="top" bgcolor="#C5CFE3"></td>
                              <td height="28" align="left" valign="top" bgcolor="#C5CFE3"><label class="Index_heading_01">Pass</label></td>
                              <td valign="top" bgcolor="#C5CFE3">&nbsp;</td>
                              <td align="left" valign="top" bgcolor="#C5CFE3"><span id="sprytxt_Password">
                            <label>
                              <input name="txt_Password" type="password" class="login_boxes" id="txt_Password" />
                              <span class="passwordRequiredMsg">*</span></label>
  </span></td>
                              <td align="left" valign="top" bgcolor="#C5CFE3">&nbsp;</td>
                            </tr>
                            <tr>
                              <td height="13" colspan="5" valign="top" bgcolor="#C5CFE3"><table width="188" border="0" cellspacing="0" cellpadding="1">
                      <tr>
                                    <td width="129" height="20" align="right">&nbsp;</td>
                                <td width="55" align="right"><input type="submit" name="btn_Submit" id="btn_Submit" value="Loging"  class="img_border"/></td>
                                </tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td height="19" colspan="5" bgcolor="#C5CFE3"><label><a href="access_register.php" class="IntroText_new"><u>Register</u></a></label></td>
                            </tr>
          </table>
        </form>
      </td>
  </tr>
  </table>
<script type="text/javascript">
var sprypassword1 = new Spry.Widget.ValidationPassword("sprytxt_Password");
var sprypassword2 = new Spry.Widget.ValidationPassword("sprypassword2");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {invalidValue:"-1"});
</script>

