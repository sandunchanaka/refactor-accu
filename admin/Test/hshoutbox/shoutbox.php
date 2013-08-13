<?php
session_start();
require_once('./auth/dbconnect.php');	
header('Content-type: application/json');
mysql_pconnect($sqlhost,$sqluser,$sqlpwd);
mysql_select_db($dbname);

$result = "[]";
$status = "OK";

if($_POST['action']=='send') {
	$msg = addslashes($_POST['msg']);
	$msg = preg_replace('/</','&lt;',$msg);
	$msg = preg_replace('/>/','&gt;',$msg);
	$nick = addslashes($_POST['nick']);
	mysql_query("INSERT INTO sb_chat (posteur, message) VALUES ('$nick','$msg')");
	if(mysql_affected_rows()>0) {
		$status = 'SENT';
	} else {
		$status = 'ERROR';
	}
} elseif($_POST['action']=='init') {
	$res = mysql_query("SELECT * FROM sb_chat ORDER BY id DESC LIMIT 5");
	if($res) {
		$result = "[";
		$i=0;
		$status='OK';
		while($row = mysql_fetch_array($res)) {
			if($i>0)
					$result .=",";
				$i++;
			$result .= '{"id":'.$row['id'].',"author":"'.$row['posteur'].'","message":"'.$row['message'].'"}';
		}
		$result .= "]";
	}
} else {
	$startAt = intval($_POST['start']);
	$res = mysql_query("SELECT * FROM sb_chat WHERE id>$startAt ORDER BY id DESC");
	if($res) {
		$result = "[";
		$i=0;
		while($row = mysql_fetch_array($res)) {
			if($i>0)
					$result .=",";
				$i++;
			$result .= '{"id":'.$row['id'].',"author":"'.$row['posteur'].'","message":"'.$row['message'].'"}';
		}
		$result .= "]";
	}
}
?>
{
	"status": "<?=$status?>",
	"result": <?=$result?>
}
