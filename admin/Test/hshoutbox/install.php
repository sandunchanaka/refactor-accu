<?php
$type = $_POST['type'];

require_once "./auth/dbconnect.php";
//echo "====$type=====***********$messq//////////";

if(($hostname == "" || $dbname == "" || $username == "") || $type=="changedb")
{
	if($type=="createdb" && $type!="createtables") {
	
	 echo "<div align=center style='color: green;'><b>Collecting Required Details
		<meta http-equiv=\"refresh\" content=\"5; url=install.php\">
		<br>Please Wait You will be Redirected for next step
	  </div>";
	}

	if(!isset($type)) {	
		include "./auth/inputdbname.php";
	}
}
?>

<head>
<style>
.ta{background-color: ffff44;}
.rad{color:red; font-weight:bold; background-color: ffff44;}
</style>
</head>


<?php

if($type=="createdb")
{
	$username = $_POST['username'];
	$password = $_POST['pass'];
	$hostname = $_POST['hostname'];
	$dbname = $_POST['dbname'];

	$file = "./auth/dbconnect.php"; 
	$open = fopen($file, "w");
	fwrite($open,"<?php\n\n \$sqluser = \"".$username."\";\n \$sqlpwd = \"".$password."\";\n \$sqlhost = \"".$hostname."\";
		\n \$dbname = \"".$dbname."\";\n\n ?>");
	fclose($open);

}

if($type=="createdb"){
	include "auth/message.php";
}
else if($type=="createtables"){
	include "auth/create.php";
}
else if($type=="updateadmin"){
	include "auth/updateadmin.php";
}

?>
