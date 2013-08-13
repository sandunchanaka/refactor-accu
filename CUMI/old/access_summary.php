<?php
	require_once('access_includes/access_config.php');
	require_once ('access_class/db.class.php');
	require_once ('access_class/access_class.php');
	
	if(!isset ($_SESSION['cu_name']))
	{
		echo "<script type=\"text/javascript\" >document.location.replace('access_branding.php?msg=6');</script>";
	}
	session_start();
	$d=isset($_GET['d'])?$_GET['d']:'';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="access_style/FREE.css" />
<title>Access Branding</title>
<style type="text/css">
.td_heght{
	height:1px;
	background:#DDDDDD;
	width:inherit
}
.td_heght_w{
	height:1px;
	background:#FFFFFF;
	width:inherit
}
</style>
</head>

<body>
<table width="840" height="469" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="body_boarder" id="Table_01">
<tr>
		<td height="102" align="center">
		 	 
<!-- ImageReady Slices (index_01.psd) -->
<table id="Table_01" width="843" height="102" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td align="center" bgcolor="#DDDDDD"><img src="access_image/access.jpg" width="843" height="100" /></td>
	</tr>
	<tr>
		<td height="2" class="menuubar_image" align="center">		</td>
	</tr>
</table>
<!-- End ImageReady Slices -->        </td>
  </tr>
	<tr>
		<td height="19" bgcolor="#DDDDDD">
        
        
        <form action="access_control/access_control.php?mode=que&d=$d" method="post" name="form1" id="form1">
          <table align="center" width="450" height="149" border="0" cellpadding="0" cellspacing="0" bordercolor="#DDDDDD" bgcolor="#FCFCFC">
            <tr>
              <td height="23" colspan="5" bgcolor="#DDDDDD">&nbsp;</td>
            </tr>
            <tr>
              <td width="12" height="155" rowspan="3" bgcolor="#DDDDDD">&nbsp;</td>
              <td width="144" height="21" align="left" bgcolor="#DDDDDD" class="headline" ><?php  echo $_SESSION['cu_name'];?>              </td>
              <td width="65" align="center" bgcolor="#DDDDDD" class="headline" >
                <input type="hidden" name="hdn_cu_id" id="hdn_cu_id" value="<?php echo $d;?>" />              </td>
              <td width="212" align="right" nowrap="nowrap" bgcolor="#DDDDDD" class="headline" >Access analyse year for <?php  echo $_SESSION['year'];?>              </td>
              <td width="17" rowspan="3" bgcolor="#DDDDDD">&nbsp;</td>
            </tr>
            <tr>
              <td height="18" colspan="3" bgcolor="#DDDDDD" class="errortext"><?php require_once('access_message/access_message.php'); ?>              </td>
            </tr>
            <tr>
              <td height="36" colspan="3" align="left" bgcolor="#DDDDDD">
              <table width="100%" height="54" border="1">
              	 <tr>
                    <td width="74%" height="23">Question Category</td>
                    <td width="2%">&nbsp;</td>
                   <td width="24%">Marks</td>
              	 </tr>
              <?php 
			  	$cate_code=access::check_summary($d,$_SESSION['year']);
				//echo count($cate_code);exit;
			  	for($a=0;$a<count($cate_code);$a++)
				{
					$row=each($cate_code);
					?>
        		
                    <tr>
                      <td height="23">
                      <?php
                      	$CatProsp=access::get_mi_category_name($row['value']['CatCode']);
						echo $CatProsp['CatProsp'];
                      ?>
                      </td>
                      <td>&nbsp;</td>
                      <td>
                      <?php
                      	$total=access::get_marks($_SESSION['year'],$d,$row['value']['CatCode']);
						echo $total['total'];
                      ?>
                      </td>
                    </tr>
                    <?
				}
			  ?>
              </table>
              </td>
            </tr>
            <tr>
              <td height="23" colspan="5" bgcolor="#DDDDDD">&nbsp;</td>
            </tr>
          </table>
        </form>
</td>
  </tr>
	<tr>
		<td height="19" valign="top">
			 
            <table id="Table_02" width="843" height="43" border="0" cellpadding="0" cellspacing="0" align="center">
               <tr>
                 <td width="843" height="43" class="Footter_image"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                 <tr class="menubar_font">
                       <td bgcolor="#DDDDDD" class="">&nbsp;</td>
                       <td width="8%" bgcolor="#DDDDDD" class="menubar_font">&nbsp;</td>
                       <td width="2%" bgcolor="#DDDDDD" class="menubar_font">&nbsp;</td>
                       <td width="10%" bgcolor="#DDDDDD" class="menubar_font">&nbsp;</td>
                       <td width="2%" bgcolor="#DDDDDD" class="menubar_font">&nbsp;</td>
                       <td width="8%" bgcolor="#DDDDDD" class="menubar_font">&nbsp;</td>
                       <td bgcolor="#DDDDDD">&nbsp;</td>
                   </tr>
                     <tr>
                       <td colspan="7" align="center" bgcolor="#DDDDDD" class="menubar_font">CopyRight &copy; 2008 Association of Asian Confederation of Credit Unions </td>
                   </tr>
                 </table></td>
               </tr>
             </table></td>
  </tr>
</table>

</body>
</html>