<?php 	
    require_once('includes/access_config.php');
	require_once ('classes/db.class.php');
	require_once ('access_class/access_class.php');
?>
<html><!-- InstanceBegin template="/Templates/accu_temp.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<?php 
//session_start();
if(isset($_SESSION['user_id']) || !isset($_GET['page']))
{

	session_destroy();
	session_unset();
}

?>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Association Of Asia Confederation Credit Union</title>
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

<!-- InstanceEndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="shortcut icon" href="../../images/animated_favicon.gif" />
<link href="../../css/aaccu.css" rel="stylesheet" type="text/css">
<link href="../../css/bgimage.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../../css/chromestyle2.css" />

<script type="text/javascript" src="../../Scripts/chrome.js">
</script>

<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
<script type="text/javascript" language="javascript">
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
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- ImageReady Slices (index_01.psd) -->
<table width="840" height="183" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="body_boarder" id="Table_01">
<tr>
		<td height="127" align="center">
		 	 
<!-- ImageReady Slices (index_01.psd) -->
<table id="Table_01" width="843" height="127" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td align="center"><img src="../../images/heading_01.jpg" width="843" height="100"></td>
	</tr>
	<tr>
		<td height="27" class="menuubar_image" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="10%">
            
            <div class="chromestyle" id="chromemenu">
<ul>
<li><a href="../../index.php">Home</a></li>
<li><a href="../../about_us1.php" rel="dropmenu1">About Us</a></li>
<li><a href="../../publication.php" rel="dropmenu2">Publication</a></li>
<li><a href="../../member_catagary.php" rel="dropmenu3">Member</a></li>	
<li><a href="../../image_gallery.php" rel="dropmenu4">Gallery</a></li>	
<li><a href="../../cu_solutions.php" rel="dropmenu5">CU Solution</a></li>	
<li><a href="../../accu_forum_page.php" rel="dropmenu6">Forum</a></li>	
</ul>
</div>

<!--2nd drop down menu -->                                                   
<div id="dropmenu1" class="dropmenudiv" style="width:170px">
<a href="../../about_us1.php">Introduction </a>
<a href="../../about_us5.php">Membership </a>
<a href="../../about_us3.php">Organizational Structure</a>
<a href="../../about_us6.php">Board of Directors</a>
<a href="../../about_us7.php">Management</a>
<a href="../../about_us2.php">Products And Services</a>
<a href="../../about_us4.php">Careers</a></div>


<!--3rd drop down menu -->                                                
<div id="dropmenu2" class="dropmenudiv" style="width:170px">
<?php 
	$pt =0;
	$p_types = Member :: GetAllPublicationTypes();
	for($pt=0;$pt<count($p_types);$pt++){
		$pub_type1 = each($p_types);	
?>
<a href="pub_documents.php?pub_cat_id=<?php echo $pub_type1['value']['publication_cat_id']; ?>&cat_name=<?php echo $pub_type1['value']['pub_cat_name']; ?>"><?php echo $pub_type1['value']['pub_cat_name']; ?></a>
<?php } ?>
</div>

<!--4th drop down menu -->                                                   
<div id="dropmenu3" class="dropmenudiv" style="width:170px;">
<?php 
	$m = 0;
	$members_types = Member :: GetMemberTypes();
	for($m;$m<count($members_types);$m++){
		$member_row = each($members_types);	
?>
<a href="members.php?mem_type_id=<?php echo $member_row['value']['member_type_id'];?>"><?php echo $member_row['value']['member_type_name'];?></a>
<?php } ?>
</div>


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
		<td height="19"><!-- InstanceBeginEditable name="Body" -->
        <table width="100%" border="1">
  <tr>
    <td width="9%">&nbsp;</td>
    <td class="IntroText_new">ACCESS Branding Assessment Tool</td>
    <td width="18%">&nbsp;</td>
  </tr>
  <tr>
    <td height="74">&nbsp;</td>
    <td><p class="aboutusbod">INTRODUCTION</p>
      <p class="aboutusbod">ACCU is a regional network of Credit Unions, which has vision of Sustainable Credit<br>
        Unions in Asia. ACCU developed standards for Asian credit unions following internationally<br>
        accepted norms necessary for credit unions to compete and sustain in the market environment.<br>
        The Asian credit union regulation does not impose Credit Union business standards or best<br>
        practice. ACCU undertook the project on Branding Credit Union in Asia to promote standards<br>
        and best practices in Asian credit unions.<br>
        This project provided very comprehensive standard on credit union operation in Asia.<br>
        The project included technical assistance and management tools to reach the standard. It is<br>
        intended that this list will also provide a good source of information for new users of the<br>
        standards. These standards are regarded as management goals.</p>
      </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="53">&nbsp;</td>
    <td>
    
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
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="46">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<script type="text/javascript">
var sprypassword1 = new Spry.Widget.ValidationPassword("sprytxt_Password");
var sprypassword2 = new Spry.Widget.ValidationPassword("sprypassword2");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {invalidValue:"-1"});
</script>
		
		
		
		
		
		
		
		
		
		
		<!-- InstanceEndEditable --></td>
  </tr>
	<tr>
		<td height="19" valign="top">
			 
             <!-- ImageReady Slices (index_01.psd) -->          <!-- End ImageReady Slices -->      <table id="Table_02" width="843" height="43" border="0" cellpadding="0" cellspacing="0" align="center">
               <tr>
                 <td width="843" height="43" class="Footter_image"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td>&nbsp;</td>
                       <td width="8%" class="menubar_font"><a href="../../index.php"><span class="menubar_font">Home</span></a></td>
                       <td width="2%" class="menubar_font">|</td>
                       <td width="10%" class="menubar_font"><a href="../../contact_us.php"><span class="menubar_font">Contact us</span></a></td>
                       <td width="2%" class="menubar_font">|</td>
                       <td width="8%" class="menubar_font"><a href="../../about_us1.php"><span class="menubar_font">About Us</span></a></td>
                       <td>&nbsp;</td>
                     </tr>
                     <tr>
                       <td colspan="7" class="menubar_font">CopyRight &copy; 2008 Association of Asian Confederation of Credit Unions </td>
                     </tr>
                 </table></td>
               </tr>
             </table></td>
  </tr>
</table>
<!-- End ImageReady Slices -->
</body>
<!-- InstanceEnd --></html>