<?php
$hid = $_POST['type'];

if($hid=="updateadmin"){
	$t1 = $_POST['username'];
	$t2 = $_POST['pwd'];
	$salt = "Kz";
	$secret = crypt($_POST['username'].'/'.$_POST['pwd'],$salt);
	$fh = fopen("pw","w+");
	if($fh) {
		flock($fh, LOCK_EX);
		fwrite($fh,$_POST['username']);
		fwrite($fh,'%|%');
		fwrite($fh,"$secret");
		flock($fh, LOCK_UN);
		fclose($fh);
		include "message2.php";
	} else {
		echo "<table width=100% height=100% align=center><tr><td>
			<table bgcolor=#aaddaa align=center width=300 height=300><tr>
			<td style=\"color: #aa2233; font-size: 15px;\" align=center>";
		echo "<form method=POST action=$PHP_SELF>";
		echo "<input type=hidden name=type value=changedb>";
		echo "<br><br><br>Unable to connect to the database. <br>
				Please check your database entries <br><input type=submit value=dbentries>";
		echo "</form>";
		echo(" </td></tr></table> </td></tr></table>");		

		echo mysql_error();
	}
}
?>
