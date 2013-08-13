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
<script type="text/javascript" src="access_script/get_union_data1.js"></script>



<link href="../css/aaccu.css" rel="stylesheet" type="text/css" />
<link href="../css/bgimage.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/animated_favicon.gif" />
<link href="css/aaccu.css" rel="stylesheet" type="text/css">
<link href="css/bgimage.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/chromestyle2.css" />

<script type="text/javascript" src="Scripts/chrome.js"></script>
<script src="access_SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="css/aaccu.css" rel="stylesheet" type="text/css">
<link href="access_SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="840" height="178" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="body_boarder" id="Table_01">
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
	  <td height="19" bgcolor="#DDDDDD"></td>
  </tr>
	<tr>
	  <td height="19" bgcolor="#DDDDDD"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td colspan="3" align="left" class="big">  </td>
              </tr>
              
              <tr>
                <td width="18%" align="center" bgcolor="#DDDDDD">&nbsp;</td>
                <td width="63%" align="center" valign="bottom" bgcolor="#DDDDDD"><img src="access_image/que_head.gif" alt="" width="100%" height="16" /></td>
                <td width="19%" align="center" bgcolor="#DDDDDD">&nbsp;</td>
              </tr>
              <tr>
                <td width="18%" align="left" bgcolor="#DDDDDD">&nbsp;</td>
                <td width="63%" align="left" valign="top" bgcolor="#FFFFFF">
                 <form name="form1" id="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                   <table width="100%" border="0" cellpadding="0" cellspacing="0">
                     <tr>
                       <td>&nbsp;</td>
                       <td><span style="color:#F00"><?php require_once('access_message/access_message.php'); ?></span></td>
                       <td>&nbsp;</td>
                     </tr>
                     <tr>
                        <td width="3%">&nbsp;</td>
                     	<td width="94%">
                        	<table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                           <td colspan="3">
                           Credit 
                           Union<?php $res=access::get_union();
                                  //echo count($res);exit;
                            ?>
                          <span id="spryselect1">
                              <label>
                                <select name="n" id="n" >
                                  <option value="-1">Select</option>
                                  <?php 
                                         for($a=0;$a<count($res);$a++)
                                        {
                                          $row=each($res);
                                          ?>
                                  <option value="<?php echo $row['value']['reg_id']; ?>"  ><?php echo $row['value']['name'] ; ?></option>
                                  <?php	
                                        }
                                      
                                      ?>
                                </select>
                 </label>
                             <span class="selectInvalidMsg">*</span> <span class="selectRequiredMsg">*</span></span>
                           
                           </td>
                           <td width="29%">Year <span id="sprycmb_year">
                           <label>
                               <select name="y" id="y">
                               <option value="-1">Select</option>
                            <?php 
                            for($a=2000;$a<=date('Y');$a++)
                            {
                                ?>
                                <option value="<?php echo $a;?>" ><?php echo $a;?></option>
                                <?php
                            }
                          ?>
                               
                               </select>
                             </label>
                           <span class="selectInvalidMsg">*</span><span class="selectRequiredMsg">*</span></span></td>
                           <td width="12%"><label>
                             <input type="submit" name="btn_process" id="btn_process" value="Process" />
                           </label></td> <!--onclick="Showdata(n.value,y.value)"-->
                       		</tr>
                       		</table>
                       </td>
                       <td width="3%">&nbsp;</td>
                     </tr>
                     <tr>
                       <td  align="center">&nbsp;</td>
                       <td align="center">&nbsp;</td>
                       <td align="center">&nbsp;</td>
                     </tr>
                     <tr>
                       <td align="center">&nbsp;
                       	
                       </td>
                       <td align="center">
                       <?php 
					   if(isset($_POST['btn_process'])==true)
					   {
						   $n=isset($_POST['n'])?$_POST['n']:'';
						   $y=isset($_POST['y'])?$_POST['y']:'';
						   $_SESSION['name']=$n;
						   $_SESSION['year']=$y; 
						  //echo $_SESSION['name'].$_SESSION['year']; exit;						 
						   include_once('access_admin_summary_display.php');
					   }
					   ?>
                       </td>
                       <td align="center">&nbsp;</td>
                     </tr>
                     <tr>
                       <td  align="center">&nbsp;</td>
                       <td  align="center">&nbsp;</td>
                       <td  align="center">&nbsp;</td>
                     </tr>
                     <tr>
                       <td  align="center">&nbsp;</td>
                       <td align="center"><table width="103%" border="1" cellpadding="0" class="" style="border-collapse:collapse">
                         <tr class="banner_text">
                           <td width="37%" height="91" align="center" bgcolor="#DDDDDD">Branding</td>
                           <td width="35%" align="center" bgcolor="#DDDDDD">SCORE</td>
                           <td width="28%" align="center" bgcolor="#DDDDDD">EQUIVALENT %
                             provided that there
                             is no percentage
                             lower than 50% in
                             any perspective</td>
                         </tr>
                         <tr>
                           <td height="24"><span class="intro_text">&nbsp;Bronze</span></td>
                           <td align="center"><span class="intro_text">208-242</span></td>
                           <td align="center"><span class="intro_text">60-70%</span></td>
                         </tr>
                         <tr>
                           <td height="24"><span class="intro_text">&nbsp;Silver</span></td>
                           <td align="center"><span class="intro_text">243-278</span></td>
                           <td align="center"><span class="intro_text">71-80%</span></td>
                         </tr>
                         <tr>
                           <td height="24"><span class="intro_text">&nbsp;Gold</span></td>
                           <td align="center"><span class="intro_text">279-313</span></td>
                           <td align="center"><span class="intro_text">81-90%</span></td>
                         </tr>
                         <tr>
                           <td height="24"><span class="intro_text">&nbsp;Platinum</span></td>
                           <td align="center"><span class="intro_text">Above 313</span></td>
                           <td align="center"><span class="intro_text">above 90%</span></td>
                         </tr>
                       </table></td>
                       <td align="center">&nbsp;</td>
                     </tr>
                     
                   </table>
</form>
        
             
               </td>
                <td width="19%" align="left" bgcolor="#DDDDDD">&nbsp;</td>
              </tr>
              <tr>
              	
                <td width="18%" align="center" bgcolor="#DDDDDD"></td>
                <td width="63%" align="center" valign="top" bgcolor="#DDDDDD"><img src="access_image/que_fot.gif" width="100%" height="16" /></td>
                <td width="19%" align="center" bgcolor="#DDDDDD">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3" bgcolor="#DDDDDD"><table width="100%" border="0">
                  <tr>
                    <td width="10%">&nbsp;</td>
                    <td width="10%">&nbsp;</td>
                    <td width="47%">&nbsp;</td>
                    <td width="23%"><form id="form2" name="form2" method="post" action="">
                      <label>
                        <input name="btn_exit" type="button" class="button" id="btn_exit" value="EXIT" onClick="window.location.href='access_page.php?d=<?php echo $d;?>'"/>
                      </label>
                    </form></td>
                    <td width="10%">&nbsp;</td>
                  </tr>
                </table></td>
              </tr>
        </table></td>
  </tr>
	<tr>
		<td height="19" bgcolor="#DDDDDD">
                
       
        
</td>
</tr>
	<tr>
		<td height="19" valign="top">
			 
            <table id="Table_02" width="843" height="43" border="0" cellpadding="0" cellspacing="0" align="center">
               <tr>
                 <td width="843" height="43" class="Footter_image"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                 <tr class="menubar_font">
                       <td class="">&nbsp;</td>
                       <td width="8%" class="menubar_font">&nbsp;</td>
                       <td width="2%"  class="menubar_font">&nbsp;</td>
                       <td width="10%"  class="menubar_font">&nbsp;</td>
                       <td width="2%"  class="menubar_font">&nbsp;</td>
                       <td width="8%" class="menubar_font">&nbsp;</td>
                       <td >&nbsp;</td>
                   </tr>
                     <tr>
                       <td colspan="7" align="center" class="menubar_font">CopyRight &copy; 2008 Association of Asian Confederation of Credit Unions </td>
                   </tr>
                 </table></td>
               </tr>
          </table></td>
  </tr>
</table>

<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {invalidValue:"-1"});
var spryselect2 = new Spry.Widget.ValidationSelect("sprycmb_year", {invalidValue:"-1"});
</script>

</body>
</html>