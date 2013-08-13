<table width=100% height=100% border=0 align=center><tr><td align=center>

<script language=javascript>
function check()
{
var un = document.setf.usern.value;
var pw = document.setf.passw.value;

	if(un.length<5)
	{
		alert("Enter a proper username of atleast 5 character inlength")
		return false;
	}
	if(pw.length<5)
	{
		alert("Enter a proper password of atleast 5 character inlength")
		return false;
	}
return true;
}
</script>

<table align=center width=300 height=300>
	<tr><td style="color: #aa2233; font-size: 15px;" align=center>
		HIOX DB Installation Manager
	</td></tr>
	<tr bgcolor=#aaddaa><td style="color: #000088; font-size: 14px; padding:10px; ">
		Tables are created successfully.
		Now update your admin username and password.
		<form name=setf method=POST action="<?php echo $PHP_SELF;?>" onsubmit="return check()">
		<input name="type" type=hidden value="updateadmin">
		<table>
			<tr>
				<td style="color:#000088;font-size:14px;">User Name -</td>
				<td><input name="username" type=text></td>
			</tr>
			<tr>
				<td style="color:#000088;font-size:14px;">Pass Word -</td>
				<td ><input name="pwd" type=password></td>
			</tr>
			<tr><td colspan="2" align="center"><input type=submit value="Next ->"></td></tr>
		</table>
		</form>
	</td></tr>
</table>

</td></tr></table>
