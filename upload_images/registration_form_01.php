<?Php
require_once('includes/config.php');
require_once('classes/db.class.php');
require_once('common/member.class.php');
require_once('common/publication.class.php');
require_once('classes/registration.class.php');

$reg_id = 0;
$getevent_id = $_GET['id'];

$reg_id = isset( $_GET['reg_id'] )?$_GET['reg_id']:0;

if($reg_id !=0 ){
	echo $reg_id;
	$get_data = Registration :: Get_registration_data_back($reg_id);
	$getevent_id = $get_data['event_id'];
	//echo $getevent_id; exit;
}

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
<!-- InstanceEndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="shortcut icon" href="images/animated_favicon.gif" />
<link href="css/aaccu.css" rel="stylesheet" type="text/css">
<link href="css/bgimage.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/chromestyle2.css" />

<script type="text/javascript" src="Scripts/chrome.js">
</script>

<!-- InstanceBeginEditable name="head" -->
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">
<!-- InstanceEndEditable -->
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
		<td align="center"><img src="images/heading_01.jpg" width="843" height="100"></td>
	</tr>
	<tr>
		<td height="27" class="menuubar_image" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="10%">
            
            <div class="chromestyle" id="chromemenu">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="about_us1.php" rel="dropmenu1">About Us</a></li>
<li><a href="publication.php" rel="dropmenu2">Publication</a></li>
<li><a href="member_catagary.php" rel="dropmenu3">Member</a></li>	
<li><a href="image_gallery.php" rel="dropmenu4">Gallery</a></li>	
<li><a href="cu_solutions.php" rel="dropmenu5">CU Solution</a></li>	
<li><a href="accu_forum_page.php" rel="dropmenu6">Forum</a></li>	
</ul>
</div>

<!--2nd drop down menu -->                                                   
<div id="dropmenu1" class="dropmenudiv" style="width:170px">
<a href="about_us1.php">Introduction </a>
<a href="about_us5.php">Membership </a>
<a href="about_us3.php">Organizational Structure</a>
<a href="about_us6.php">Board of Directors</a>
<a href="about_us7.php">Management</a>
<a href="about_us2.php">Products And Services</a>
<a href="about_us4.php">Careers</a></div>


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
	     <form action="Controller/registrationr_control.php?mode=reg_01" method="post" name="form1">
        <table width="100%" border="0">
            <tr>
              <td width="6%">&nbsp;</td>
              <td width="88%" class="banner_text">Registration Form</td>
              <td width="6%">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td class="errormsg"><?php include('common/registration_massage.php'); ?>
              <input type="hidden" name="hdn_reg_id" id="hdn_reg_id" value="<?php echo $reg_id; ?>"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><table width="80%" border="0" align="center">
                <tr>
                  <td colspan="3"><img src="images/pdf_file.jpg"> &nbsp;&nbsp;<a href="download.php?path_id=4&publication_name=Forum_Brochure_Malaysia_2011_March_25.pdf"><span class="banner_text">Forum Brochure Malaysia 2011 March</span></a></td>
                </tr>
                <tr>
                  <td width="21%">&nbsp;</td>
                  <td width="3%">&nbsp;</td>
                  <td width="76%">&nbsp;</td>
                </tr>
                <tr>
                  <td class="eventreg_text">Event Name</td>
                  <td>:</td>
                  <td><span id="spryselect1">
                  <label>
                    <select name="cmb_event_name" id="cmb_event_name" class="r_texbox" style="width:320px;">
                    <option value="-1">Select Event Name</option>
                    <?php 
						$event_Name = Registration :: Get_event_name();
						for($a=0;$a<count($event_Name);$a++){
						$row = each($event_Name); 
						
						?>
                    <option value="<?php echo $row['value']['event_id'];?>" <?php if($row['value']['event_id'] == $getevent_id){echo "selected=\"selected\" ";}?> />                  
                    <?php echo $row['value']['event_name']."---".$row['value']['event_id'];?>
                    <?php } ?>
                    </select>
                  </label>
                  <span class="selectInvalidMsg">*</span>                  <span class="selectRequiredMsg">*</span></span></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><table width="100%" border="0">
                <tr>
                  <td width="53%">&nbsp;</td>
                  <td width="13%"><label>
                    <input type="submit" name="btn_next" id="btn_next" value="Next  &gt;&gt;">
                  </label></td>
                  <td width="34%">&nbsp;</td>
                </tr>
              </table></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
        </form>
         <script type="text/javascript">
<!--
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {invalidValue:"-1"});
//-->
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
                       <td width="8%" class="menubar_font"><a href="index.php"><span class="menubar_font">Home</span></a></td>
                       <td width="2%" class="menubar_font">|</td>
                       <td width="10%" class="menubar_font"><a href="contact_us.php"><span class="menubar_font">Contact us</span></a></td>
                       <td width="2%" class="menubar_font">|</td>
                       <td width="8%" class="menubar_font"><a href="about_us1.php"><span class="menubar_font">About Us</span></a></td>
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