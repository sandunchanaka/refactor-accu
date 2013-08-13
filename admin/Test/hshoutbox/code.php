<?php
@session_start();
if(isset($_SESSION['sb_user']))
{   
include "header.php";
?>
<td align=center>
	<table width=400 height=250 align=center class=maintext>
        <tr><td><font color="#000000">
	Copy the below code and paste it between the &lt;head&gt;&lt;/head&gt; tags of your page.</font> <br><br>
	<form name="select_all">
	<textarea readonly style="color: green; font-size: 13px;" name="text_area" rows="10" cols="80" border=0px>
        <?php
		$url = $_SERVER['SCRIPT_FILENAME'];
		$pp = strrpos($url,"/");
		$url = substr($url,0,$pp);
		$ura = $_SERVER['SCRIPT_NAME'];
		$host = $_SERVER['SERVER_NAME'];
		$ser = "http://$host";
		$ura= $ser.$ura;
		$pp1 = strrpos($ura,"/");
		$ura = substr($ura,0,$pp1);
echo "
&lt?php
  $"."hm = \"$url\";
  $"."hm2 = \"$ura\";
?&gt;\n";

echo '<link rel="stylesheet" href="<?php echo($hm2); ?>/sb_style.css" type="text/css">
<script language="javascript">
var way="<?php echo "$hm2/shoutbox.php"; ?>";
var war="<?php echo "$hm2/warning.png"; ?>";
</script>
<script src="<?php echo($hm2); ?>/js/ajax.js" type="text/javascript"></script>
<script src="<?php echo($hm2); ?>/js/shoutbox.js" type="text/javascript"></script>';
        ?>
	</textarea><br>
	<input type="button" value="Select All" onClick="javascript:this.form.text_area.focus();this.form.text_area.select();">
	</form>
	</td></tr>
	<tr><td><font color="#000000">

	 Change Your <font color="red"> &lt;body&gt;</font> tag as &lt;<font color="red">body onload="sbInit()"&gt;</font>
	<br><br> 
	copy the below code to display Shoutbox<br><br></font>

	<font color=#660000 size=-0>
	<?php
	echo "&lt;?php
	 include \"$"."hm/shout.php\";
	?&gt;";
	?>
	</font>
	</td></tr>
        </table>
</td>
<?php
include "footer.php";
} else {
include "sb_admin.php";

}
?>
