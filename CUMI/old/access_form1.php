<?php 	
    require_once('includes/access_config.php');
	require_once('classes/db.class.php');
	require_once('access_class/access_class.php');
	
	
	if($_POST['btn_submit']==true)
	{
		
	}
	
	
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="access_style/FREE.css" rel="stylesheet" /> 
<title>Untitled Document</title>
<style type="text/css">
.td_heght{
	height:1px;
	background:#DDDDDD;
	width:inherit
}
</style>
<?php
	$mi_cate_code  	=isset($_GET['mi_cate_code'])?$_GET['mi_cate_code']:'';
	$mi_cate_name	=isset($_GET['mi_cate_name'])?$_GET['mi_cate_name']:'';
	$Category		=isset($_GET['Category'])?$_GET['Category']:'';
?>
</head>

<body>
<form id="form1" name="form1" method="post" action="access_control/access_control.php?mode=form">
  <table width="75%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="3" class="errortext">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td class="headline">
      	<?php 
			$result=access::get_mi_category_CatProsp($mi_cate_code);
			echo $result['CatProsp'];
			
		?>      
        <input type="hidden" name="hdn_mi_cate_code" id="hdn_mi_cate_code" value="<?php echo $mi_cate_code;?>" />        </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="23">&nbsp;</td>
      <td colspan="2"><span class="errortext">
        <?php require_once('access_message/access_message.php');echo $Category;?>
      </span></td>
    </tr>
    <tr>
      <td width="7%" height="154">&nbsp;</td>
      <td>
      	<?php
			$result1=access::get_mi_category_data($mi_cate_code);
			for($a=0;$a<count($result1);$a++)
			{
				$row1=each($result1); 
			
		?>	
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left" bgcolor="#C9C9C9" class="big">
                    <strong><?php echo $row1['value']['Category'];?></strong>                </td>
                <td bgcolor="#C9C9C9">&nbsp;</td>
              </tr>
              
              <tr>
                <td colspan="2" align="center" bgcolor="#DDDDDD"><img src="access_image/que_head.gif" width="98%" height="15" /></td>
              </tr>
              <tr>
                <td colspan="2" align="center" bgcolor="#DDDDDD">
                
				<?php
						
						$result2=access::get_mi_caegoryoptions_data($row1['value']['CatID']);
						for($b=0;$b<count($result2);$b++)
						{
							$row2=each($result2);
					?>
                  <table width="98%" border="0" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bgcolor="#E2E2E2">
                    <tr>                      
                      <td width="24" bgcolor="#FFFFFF">&nbsp;</td>
                      <td width="24" valign="top" bgcolor="#FFFFFF"><label>
                        <input type="radio" name="rdb_<?php echo $row2['value']['CatID'];?>" id="rdb_<?php echo $row2['value']['CatID'];?>" value="<?php echo $row2['value']['Marks'];//echo $row2['value']['MarkOption'];?>" />
                      </label></td>
                      <td width="9" align="center" valign="top" bgcolor="#FFFFFF"><strong>:</strong></td>
                      <td width="374" valign="top" bgcolor="#FFFFFF" class="regular"><label><?php echo $row2['value']['OptionName'];?></label></td>
                      <td width="19" bgcolor="#FFFFFF"><input type="hidden" name="hdn_mark_<?php echo $row2['value']['CatID'];?>" id="hdn_mark_<?php echo $row2['value']['CatID'];?>" value="<?php echo $row2['value']['Marks'];?>"/>                      </td>
                      <td width="24" align="center" bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
                    <div class="td_heght"></div>
                  </table>
                <?php		
						}
					?></td>
              </tr>
              <tr>
              	
                <td colspan="2" align="center" bgcolor="#DDDDDD"><div class="td_heght"></div>
                	<img src="access_image/que_fot.gif" width="98%" height="15" />                </td>
              </tr>
              <tr>
                <td colspan="2" bgcolor="#DDDDDD">&nbsp;</td>
              </tr>
        </table>
	  <?php 
		  }
		?>      </td>
      <td width="6%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="right" valign="middle"><label>
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit &gt;&gt;" class="button" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
