<?php
   $link = mysql_pconnect($sqlhost,$sqluser,$sqlpwd);

   if($link)
   {

 	$dbcon = mysql_select_db($dbname); 

	if($dbcon)
	{
	    	$result = mysql_query("CREATE TABLE sb_chat(id int(11) NOT NULL AUTO_INCREMENT,posteur varchar(255) COLLATE utf8_bin NOT NULL,message varchar(255) COLLATE utf8_bin NOT NULL,PRIMARY KEY(id)) ENGINE=MYISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;",$link);

		@mysql_free_result($link);

	 	if (!$result)
		{
		    echo(" <table width=100% height=100% align=center><tr><td>
				<table bgcolor=#aaddaa align=center width=300 height=300><tr>
				<td style=\"color: #aa2233; font-size: 15px;\" align=center>
				 Unable to create tables.<br>");
		    echo("Your tables might have already been created.</td></tr></table> </td></tr></table>");

		}

		else
 	        {
			if(filesize("./pw")<1)
				include "adminpass.php";
			else
				include "message2.php";
		}
	}
	else
	{
		$vv =false;
	}
   }
   else
   {
	$vv =false;
   }

   if($vv === false)
   {
       echo	"<table width=100% height=100% align=center><tr><td>
		<table bgcolor=#aaddaa align=center width=300 height=300><tr>
			<td style=\"color: #aa2233; font-size: 15px;\" align=center>";
       echo "<form method=POST action=$PHP_SELF>";
       echo "<input type=hidden name=type value=changedb>";
       echo "<br><br><br>Unable to connect to the database. <br>
        	Please check your database entries <br><input type=submit value=dbentries>";
       echo "</form>";
       echo(" </td></tr></table> </td></tr></table>");

   }
?>

