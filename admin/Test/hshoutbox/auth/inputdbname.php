<table align=center height=100% width=100%>
<tr><td>

<table bgcolor=adeade align=center style="border: 1px #266266 solid;">
<?php
$file = "./auth/dbconnect.php";
 if(!is_readable($file) or !is_writeable($file)) {
    echo "<tr width=400 height=20>
		<td align=center style=\"color: 787322; font-family: arial,verdana,san-serif; font-size:13px;\">
			Incorrect file permissions for dbconnect.php! <br>
	                Must be in read,write mode during installaton.<br>
	  </td></tr>";
 }
?>


<tr width=400 height=20><td align=center bgcolor="266266" 
style="color: ffffff; font-family: arial,verdana,san-serif; font-size:13px;">
 Enter Database Details </td></tr>
<tr width=400 height=20><td>
 <form name=setf method=POST action=<?php echo $PHP_SELF;?>>
	<table style="color:#121212; font-family: arial,verdana,san-serif; font-size:13px;">
	<tr><td>HOST NAME </td><td><input class="ta" name="hostname"  type=text value=<?php echo "$sqlhost";?> ></td></tr>
	<tr><td>DB NAME </td><td><input class="ta" name="dbname"  type=text value=<?php echo "$dbname";?> ></td></tr>
	<tr><td>User NAME </td><td><input class="ta" name="username"  type=text value=<?php echo "$sqluser";?> ></td></tr>
	<tr><td>Password </td><td><input class="ta" name="pass"  type=text value=<?php echo "$sqlpwd";?> ></td></tr>
	<input name="type" type=hidden value="createdb"></td></tr>
	<tr><td></td><td><input type=submit value="Install"></td></tr>
	</table>
 </form>
</td></tr></table>

</td></tr></table>
