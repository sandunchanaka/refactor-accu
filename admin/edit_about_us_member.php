<?php 
require_once('../includes/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once('classes/about_us_member.class.php');
$u_le_id=isset($_GET['u_le_id'])?$_GET['u_le_id']:'';
$u_id=isset($_GET['u_id'])?$_GET['u_id']:'';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Panel</title>
<link href="css/master.css" rel="stylesheet" type="text/css" />
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body onload="MM_preloadImages('images/frontpage2.png')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php include (ADMIN_TPL_PATH.'overall_top.tpl');?></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="59%"><?php include (ADMIN_TPL_PATH.'cpannel.tpl');?></td>
    <td width="41%"><div id="content"><table border="0" align="center" cellpadding="2" cellspacing="2">
            <tr>
              <td><div align="center"><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"><img src="images/frontpage.png" alt="Home" name="Image4" width="48" height="48" border="0" id="Image4" /></a><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"></a><a href="select.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/frontpage2.png',1)"><br />
              </a><span class="txt_ash">Home</span></div></td>
              <td><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td><div align="center"><a href="about_us_member.php"><img src="images/ph_community.gif" width="36" height="36" /></a><br />
                <span class="txt_ash">Board Member</span></div></td>
              <td><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td><div align="center"><img src="images/ph_training.gif" width="36" height="36" /><br />
                  Edit Board Member</div></td>
            </tr>
          </table>
    </div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><div id="content"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td bgcolor="#F1F3F5">
          <?php 
		  	$result=user_level::get_user_member_data($u_id);
		  ?>
          <form name="form1" id="form1" method="post" action="controlers/about_us_member_controler.php?mode=edit_member_reg">
            <table width="100%"  border="0" cellspacing="2" cellpadding="2">
              <tr>
                <td colspan="5" class="adminlist"><strong>New User Profile</strong></td>
                </tr>
              <tr>
                <td width="10%">&nbsp;</td>
                <td colspan="4"><div id="error"><?php include('messages/about_us_member.message.php'); ?></div></td>
                </tr>
              <tr>
                <td>
                <input type="hidden" name="hdn_u_le_id" id="hdn_u_le_id" value="<?php echo $u_le_id;?>" />
                <input type="hidden" name="hdn_u_id" id="hdn_u_id" value="<?php echo $u_id ;?>" />
                </td>
                <td width="18%">First Name</td>
                <td width="2%">:</td>
                <td colspan="2"><span id="sprytextfield8">
                  <label>
                    <input type="text" name="txt_first_name" id="txt_first_name" value="<?php echo $result['user_first_name'];?>" />
                  </label>
</span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>Family Name</td>
                <td>:</td>
                <td colspan="2"><span id="sprytextfield4">
                  <label>
                    <input type="text" name="txt_last_name" id="txt_last_name" value="<?php echo $result['user_last_name'];?>" />
                  </label>
</span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>E-mail</td>
                <td>:</td>
                <td colspan="2"><span id="sprytextfield2">
                  <label><span id="sprytxt_email">
                    <input type="text" name="txt_email" id="txt_email" value="<?php echo $result['email'];?>"/>
                    <span class="textfieldRequiredMsg">Email address is required.</span></span><span class="textfieldRequiredMsg">E-mail is required.</span></label>
</span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>Telephone Number</td>
                <td>:</td>
                <td colspan="2"><span id="sprytextfield5">
                  <input type="text" name="txt_tpNo" id="txt_tpNo" value="<?php echo $result['tel'];?>"/>
</span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>Fax</td>
                <td>:</td>
                <td colspan="2"><span id="sprytextfield7">
                  <label>
                    <input type="text" name="txt_fax" id="txt_fax" value="<?php echo $result['fax'];?>" />
                  </label>
</span></td>
              </tr>
              <tr>
                <td><input type="hidden" name="hdn_pass" id="hdn_pass" value="<?php echo $result['pass'];?>"/></td>
                <td>Old password</td>
                <td>&nbsp;</td>
                <td colspan="2"><span id="sprytextfield9">
                  <label>
                    <input type="text" name="txt_old_pass" id="txt_old_pass" />
                  </label>
                </span>(If you want to re new user name and pass word you must type old pass word)</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td width="10%"><input name="Submit" type="submit" class="button" value="Update" /></td>
                <td width="60%"><input name="Submit2" type="button" class="button" value="Cancel" onclick="window.location.href='edit_about_us_member_type.php'" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="5" class="adminlist">&nbsp;</td>
                </tr>
            </table>
          </form></td>
        </tr>
      </table></div></td>
  </tr>
  <tr>
    <td><?php include (ADMIN_TPL_PATH.'footer.tpl');?></td>
  </tr>
</table>
<script type="text/javascript">
<!--
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytxt_email", "none");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {isRequired:false});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {isRequired:false});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "none", {isRequired:false});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "none", {isRequired:false});
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "none", {isRequired:false});
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9", "none", {isRequired:false});
//-->
</script>
</body>
</html>
