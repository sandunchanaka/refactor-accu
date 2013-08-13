<?php 
if($_SESSION['cuuser_id'] !=''){
	echo 'Welcome '.$_SESSION['cuuser_id'].'...';
}
else{
?>
<link href="css/main.css" rel="stylesheet" type="text/css" />
  <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
  <script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
  <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
  
  <style type="text/css">
<!--
#form1 table {
	font-weight: bold;
}
.lable_txt{
	font:Verdana, Geneva, sans-serif;
	color:#000;
	font-size:13px;
	font-weight:600;
}
-->
  </style>
  <link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<table width="234" border="0">
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td width="7" height="94">&nbsp;</td>
    <td width="164">
    
    
    <table width="210" border="0">
  <tr>
    <td width="234"><form id="form1" name="form1" method="post" action="Controller/user_control.php?mode=culogin">
       <fieldset>
                <legend class="nntext">Accu Member Login </legend>
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="3" align="left"><span style="color:#F00; font-size:12px; font-family:Tahoma, Geneva, sans-serif">
            <?php if(isset($_GET['error'])){ echo "Incorrect User name or Pass word.";}?>
          </span></td>
        </tr>
        <tr>
          <input name="hdn_page" class="loginBoxes" id="hdn_page" type="hidden" value="<?php echo $_GET['publication_name'];?>" />
          <td width="65" height="28" align="left" valign="top"><label class="nntext">User Name </label></td>
          <td width="1" align="left" valign="top"></td>
          <td width="133" align="left" valign="top"><span id="sprytxt_UserName">
            <label>
              <input type="text" name="txt_UserName" class="loginBoxes" id="txt_UserName"  size="15" />
              <span class="textfieldRequiredMsg">*</span></label>
          </span></td>
        </tr>
        <tr>
          <td width="65" height="29" align="left" valign="top"><label class="nntext">Password</label></td>
          <td align="left" valign="top"></td>
          <td width="133" align="left" valign="top"><span id="sprypassword3"><label>
            <input name="txt_Password" type="password" class="loginBoxes" id="txt_Password" size="15" />
            <span class="passwordRequiredMsg">*</span>          </label>
          </span></td>
        </tr>
        <tr>
          <td height="13" colspan="3"><table width="100%" border="0">
            <tr>
              <td align="right"><div align="right">
                <a href="#" class="lbAction" rel="deactivate"><button type="reset" class="lbutton" align="left">Cancel</button></a>
                <input type="submit" name="btn_Submit" id="btn_Submit" value="Loging"  class="lbutton" align="right"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </div></td>
            </tr>
          </table></td>
        </tr>
       </table>
        </fieldset>
    </form></td>
  </tr>
</table>


</td>
    <td width="7">&nbsp;</td>
  </tr>
  <tr>
    <td height="21" colspan="3">&nbsp;</td>
  </tr>
</table>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytxt_UserName", "none", {hint:"UserName.......", validateOn:["blur"]});
var sprypassword1 = new Spry.Widget.ValidationPassword("sprytxt_Password", {validateOn:["blur"]});
var sprypassword2 = new Spry.Widget.ValidationPassword("sprypassword2");
var sprypassword3 = new Spry.Widget.ValidationPassword("sprypassword3");
</script>
<?php 
}
?>