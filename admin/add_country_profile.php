<?php 
require_once('../includes/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once(ADMIN_CLASS_PATH.'location.class.php');
require_once(ADMIN_CLASS_PATH.'country.class.php');
include(ADMIN_PATH.'FCKeditor/fckeditor.php') ;
$country = Country :: GetCountry_data($_REQUEST['countryid']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Panel</title>
<link href="css/master.css" rel="stylesheet" type="text/css" />
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
</head>

<body onload="MM_preloadImages('images/frontpage2.png','images/user2.png','images/categories.png')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php include (ADMIN_TPL_PATH.'overall_top.tpl');?></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="64%"><?php include (ADMIN_TPL_PATH.'cpannel.tpl');?></td>
    <td width="36%"><div id="content">
      <table width="100%" border="0" cellpadding="2" cellspacing="2">
        <tr>
          <td width="76"><div align="center"><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"><img src="images/frontpage.png" alt="Home" name="Image4" width="48" height="48" border="0" id="Image4" /></a><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"></a><a href="select.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/frontpage2.png',1)"><br />
          </a><span class="txt_ash">Home</span></div></td>
          <td width="48"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
          <td width="63"><div align="center"><a href="country.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/categories.png',1)"><img src="images/impressions.png" alt="User Manager" name="Image5" width="48" height="48" border="0" id="Image5" /></a><br />
                  <span class="txt_ash">Country</span> </div></td>
          <td width="53"><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
          <td width="78"><div align="center"><img src="images/addedit.png" width="48" height="48" /><br />
            New Country </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><div id="content"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td bgcolor="#F1F3F5"><form name="form1" id="form1" method="post" action="controlers/country_controler.php?mode=addprofile">
            <table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td colspan="4" class="adminlist"><div align="center"><strong>Insert Country Profile </strong></div></td>
                </tr>
              <tr>
                <td colspan="4"><div id="error"><?php include(ADMIN_MESSAGES.'country.message.php'); ?>
                </div></td>
                </tr>
              <tr>
                <td colspan="4">&nbsp;</td>
                </tr>
              
              <tr>
                <td colspan="4" valign="top"><table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#E8F0F9">
                  <tr>
                    <td height="29" colspan="4" bgcolor="#F1F3F5" class="button_fonts"> <div align="center">
                        <?php if($country['country_flag'] != NULL){?><img src="../upload_images/Country_flag/thumb/<?php echo $country['country_flag']; ?>" />  &nbsp;&nbsp;
                        <?php } echo $country['country_name'];?></div></td>
                  </tr>
                  <tr>
                    <td colspan="4" bgcolor="#F1F3F5"></td>
                  </tr>
                  <tr>
                    <td height="29" bgcolor="#F1F3F5"  class="fonts"><input type="hidden" name="country_id" id="country_id" value="<?php echo $_REQUEST['countryid']; ?>" /></td>
                    <td height="29" bgcolor="#F1F3F5" class="login_text">&nbsp;</td>
                    <td height="30" colspan="2" bgcolor="#F1F3F5">
              <!--                         
                    <select name="countryName" id="countryName">
                      <option value="0">Select Country Name</option>
 						<?php 
						/*$country = Country :: GetCountry();
						for($a;$a<count($country);$a++){
						$row = each($country); */
						
						?>
 		                     <option value="<?php// echo $row["value"]["country_id"];  ?>"><?php //echo $row["value"]["country_name"];  ?></option>
                    <?php// } ?>
                    </select> --></td>
                  </tr>
                  <tr>
                    <td width="249" height="26" bgcolor="#F1F3F5"  class="fonts">Population In Million </td>
                    <td width="32" height="26" bgcolor="#F1F3F5" class="login_text"><div align="center">:</div></td>
                    <td height="30" colspan="2" bgcolor="#F1F3F5"><input name="txt_population_milion" type="text" class="login_text" id="txt_population_milion" /></td>
                  </tr>
                  <tr>
                    <td height="22" bgcolor="#F1F3F5" class="fonts">Population Growth Per Year </td>
                    <td height="22" bgcolor="#F1F3F5" class="fonts"><div align="center"><span class="login_text">:</span></div></td>
                    <td height="30" colspan="2" bgcolor="#F1F3F5" class="fonts"><input name="txt_population_growth_per_year" type="text" class="login_text" id="txt_population_growth_per_year" /></td>
                  </tr>
                  <tr>
                    <td height="22" bgcolor="#F1F3F5" class="fonts">GDP (Billions) </td>
                    <td height="22" bgcolor="#F1F3F5"><div align="center"><span class="login_text">:</span></div></td>
                    <td height="30" colspan="2" bgcolor="#F1F3F5"><span class="fonts">
                      <input name="txt_gdp_bilion" type="text" class="login_text" id="txt_gdp_bilion" />
                    </span></td>
                  </tr>
                  <tr>
                    <td height="22" bgcolor="#F1F3F5" class="fonts">GNI Per Capital </td>
                    <td height="22" bgcolor="#F1F3F5" class="fonts"><div align="center"><span class="login_text">:</span></div></td>
                    <td height="30" colspan="2" bgcolor="#F1F3F5" class="fonts"><input name="txt_gni" type="text" class="login_text" id="txt_gni" /></td>
                  </tr>
                  <tr>
                    <td height="22" bgcolor="#F1F3F5" class="fonts">Exchange Rate </td>
                    <td height="22" bgcolor="#F1F3F5"><div align="center"><span class="login_text">:</span></div></td>
                    <td height="30" colspan="2" bgcolor="#F1F3F5"><span class="fonts">
                      <input name="txt_exchange_rate" type="text" class="login_text" id="txt_exchange_rate" />
                    </span></td>
                  </tr>
                  <tr>
                    <td height="22" bgcolor="#F1F3F5" class="fonts">CU presentation </td>
                    <td height="22" bgcolor="#F1F3F5"><div align="center"><span class="login_text">:</span></div></td>
                    <td height="30" colspan="2" bgcolor="#F1F3F5"><span class="fonts">
                      <input name="txt_cu_present" type="text" class="login_text" id="txt_cu_present" /></span></td>
                  </tr>
                  <tr>
                    <td height="27" bgcolor="#F1F3F5">&nbsp;</td>
                    <td height="27" bgcolor="#F1F3F5">&nbsp;</td>
                    <td width="4" height="27" bgcolor="#F1F3F5">&nbsp;</td>
                    <td width="415" bgcolor="#F1F3F5" class="banner_text">&nbsp;</td>
                  </tr>
                  
                </table>                  </td>
                </tr>             
              
              
              <tr>
                <td width="6%">&nbsp;</td>
                <td width="9%">&nbsp;</td>
                <td width="27%">&nbsp;</td>
                <td width="58%"><input name="btn_add" type="submit" class="button" value="    Add    " id="btn_add" />
                  <input name="btn_cancel" type="button" class="button" value="   Cancel   " onclick="window.location.href='new_country.php'" id="btn_cancel" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
          </form></td>
        </tr>
      </table></div></td>
  </tr>
  <tr>
    <td class="adminlist">&nbsp;</td>
  </tr>
  <tr>
    <td><?php include (ADMIN_TPL_PATH.'footer.tpl');?></td>
  </tr>
</table>
</body>
</html>
