<?php 
require_once('../includes/config.php');
require_once(ADMIN_PATH.'header_includes.php');
$member_id =isset($_GET['member_id'])?$_GET['member_id']:'';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Panel</title>
<link href="css/master.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/JavaScript">
<!--
function reload()
{	
	//document.write("In reload");
	var val_member_name=document.form1.txt_member_name.value ;
	var val_member_abbrevation=document.form1.txt_member_abbrevation.value ;
	var val_member_signature=document.form1.up_member_signature.value ;
	var val_URL=document.form1.txt_URL.value ;
	var val_email=document.form1.txt_email.value ;
	var val_active=document.form1.cmb_active.value ;
	
	
	self.location='new_member_basic_details.php?member_name=' + val_member_name + '&member_abbrevation=' + val_member_abbrevation + '&member_signature=' + val_member_signature + '&URL=' + val_URL+ '&email=' + val_email + '&active=' + val_active;
}



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
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>

<body onload="MM_preloadImages('images/frontpage2.png','images/user2.png')">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php include (ADMIN_TPL_PATH.'overall_top.tpl');?></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="64%" height="92" valign="bottom"><?php include (ADMIN_TPL_PATH.'cpannel.tpl');?></td>
    <td width="36%"><div id="content">
      <table width="300" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td width="50" height="84"><div align="center"><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"><img src="images/frontpage.png" alt="Home" name="Image4" width="48" height="48" border="0" id="Image4" /></a><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"></a><a href="select.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/frontpage2.png',1)"><br />
          </a><span class="txt_ash">Home</span></div></td>
          <td width="41"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
          <td width="81"><div align="center"><a href="member.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/user2.png',1)"><img src="images/user.png" alt="User Manager" name="Image5" width="48" height="48" border="0" id="Image5" /></a><br />
                  <span class="txt_ash">Member Manager</span> </div></td>
          <td width="41"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
          <td width="52"><div align="center"><img src="images/support.png" /><br />
            Edit Member </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><div id="content"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td bgcolor="#F1F3F5"><form name="form1" id="form1" method="post" enctype="multipart/form-data" action="controlers/membercontroler.php?mode=add_staff&member_id=<?php echo $member_id;?>">
          
          
            <table width="80%"  border="0" align="center" cellpadding="2" cellspacing="2" class="cls_border">
              <tr>
                <td colspan="5"><div id="title">New Member Profile --&gt;&gt;Board of Directors</div></td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td class="title" align="left"><div id="title_2"></div></td>
                <td class="title" align="left">&nbsp;</td>
                <td colspan="2" align="left" class="title">&nbsp;</td>
              </tr>
              <tr>
                <td width="2%">&nbsp;</td>
                <td colspan="4"><div id="error"><?php include(ADMIN_MESSAGES.'member.message.php'); ?></div></td>
                </tr>
                
                
                
                <?php
				



				 
				 $title	    	=isset($_GET['title'])?$_GET['title']:'';
				 $name      	=isset($_GET['name'])?$_GET['name']:'';
				 $position_no	=isset($_GET['position_no'])?$_GET['position_no']:'';
				 $Position  	=isset($_GET['Position'])?$_GET['Position']:'';
				 $Postal_Code   =isset($_GET['Postal_Code'])?$_GET['Postal_Code']:'';
				 {
				 
				?>
			  
               
              <tr>
                <td>&nbsp;</td>
                <td width="19%">Title</td>
                <td width="1%">:</td>
                <td colspan="2"><label>
                  <select name="cmb_title" id="cmb_title">
                  	<option value="select">Select>></option>
                   <option value="Mr.">Mr.</option>
                    <option value="Miss.">Miss.</option>
                    <option value="Ms.">Ms.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Rev.">Rev.</option>
                    <option value="Atty.">Atty.</option>
                    <option value="Drs.">Drs.</option>
					<option value="Dr.">Dr.</option>
                    <option value="Engr.">Engr.</option>	
                    <option value="Prof.">Prof.</option>	
                    <option value="Asst. Prof.">Asst. Prof.</option>	
                    <option value="Assoc. Prof.">Assoc. Prof.</option>	
                    <option value="Maj. Gen.">Maj. Gen.</option>			
                    <option value="Other">Other.</option>
                  </select>
                </label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>Name</td>
                <td>:</td>
                <td colspan="2"><input name="txt_name" type="text" id="txt_name" size="45" /></td>
              </tr>
              <tr>
                <td height="26">&nbsp;</td>
                <td>Borde Of Derector</td>
                <td>:</td>
                <td colspan="2">
                <select name="cmb_position_no" id="cmb_position_no">
                  <option value="select">Select>></option>
                  <?php 
						for($a=1;$a<=30;$a++)
						{                  
                    		echo "<option value=\" ".$a."\">".$a."</option>";
						}
					?>
                </select>
                <input name="txt_Position" type="text" id="txt_Position" />                </td>
              </tr>
              
              
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="hidden" name="hdn_member_id" id="hdn_member_id" value="<?php echo $_GET['member_id'];?>" /></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td width="54%">
                	<input name="btn_add" type="submit" class="button" value="   Add&gt;&gt;  " id="btn_add" onclick="reload();" />                
                	<!-- <input name="btn_cancel" type="button" class="button" value="Cancel" onclick="window.location.href='new_member_basic_details.php'" id="btn_cancel" /> -->               </td>
                <td width="24%"><label>
                  <input name="btn_finish" type="button" class="button" id="btn_finish" value="  Finish  " onclick="window.location.href='member.php'" />
                </label></td>
              </tr>
              <?php }?>
            </table>
          </form></td>
        </tr>
      </table></div></td>
  </tr>
  <tr>
    <td><?php include (ADMIN_TPL_PATH.'footer.tpl');?></td>
  </tr>
</table>
</body>
</html>