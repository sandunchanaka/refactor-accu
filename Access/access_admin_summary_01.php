<?php
	require_once('access_includes/access_config.php');
	require_once ('access_class/db.class.php');
	require_once ('access_class/access_class.php');
	//session_unset();
	//public $count='';
	if((!isset($_SESSION['cu_name'])) && (!isset($_SESSION['u_id'])))
	{
		echo "<script type=\"text/javascript\" >document.location.replace('access_branding.php?msg=6');</script>";
	}
	//session_start();
	$d=isset($_GET['d'])?$_GET['d']:'';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="access_style/FREE.css" />
<title>Access Branding</title>
<script type="text/javascript" src="access_script/get_union_data1.js"></script>
<link rel="shortcut icon" href="images/animated_favicon.gif" />
<link href="css/aaccu.css" rel="stylesheet" type="text/css">
<link href="css/bgimage.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/chromestyle2.css" />

<script type="text/javascript" src="Scripts/chrome.js"></script>

</head>

<body topmargin="0">
<table border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="body_boarder" id="Table_01">
<tr>
		<td height="102" align="center">
		 	 
<!-- ImageReady Slices (index_01.psd) -->
<table id="Table_01" width="843" height="102" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td align="center" bgcolor="#DDDDDD"><img src="access_image/access_01_01.jpg" width="840" height="118" /></td>
	</tr>
	<tr>
		<td height="2" class="menuubar_image" align="center">		</td>
	</tr>
</table>
<!-- End ImageReady Slices -->        </td>
  </tr>
	<tr>
	  <td height="19" bgcolor="#D6EBFF"></td>
  </tr>
	<tr>
	  <td height="19" bgcolor="#D6EBFF">&nbsp;</td>
  </tr>
	<tr>
		<td height="19" bgcolor="#D6EBFF"></td>
</tr>
	<tr>
		<td align="center" valign="top" class="Footter_image">&nbsp;</td>
  </tr>
</table>


</body>
</html>