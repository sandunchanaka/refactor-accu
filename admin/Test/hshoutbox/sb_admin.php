<?PHP
/* DO NOT CHANGE ANYTHING BELOW THIS LINE UNLESS YOU KNOW WHAT YOU ARE DOING! */
session_start();
include "header.php";
$salt = "Kz";
$systemMessage = "";
if($_POST['action']=='login') {
	$fh = fopen("pw","r");
	if(($line=fgets($fh))!=-1) {
		list($un,$secret) = explode("%|%",$line);
		if($secret==crypt($_POST['uname'].'/'.$_POST['pwd'],$salt)) {
			$_SESSION['admin']=time();
			$_SESSION['sb_user']=$_POST['uname'];
		} else {
			$systemMessage="Invalid username or password";
		}
		fclose($fh);
	} else {
		$systemMessage="I/O error";
	}
} else if($_POST['action']=='logout') {
	session_destroy();
	echo '<meta http-equiv="refresh" content="1; url=about.php">';	
	//header("Location: ./about.php");
	exit(0);
}
?>
<link rel="stylesheet" href="contact.css" />
<td>
<div align="center" id="pageContent">
	<?PHP
		if(!$_SESSION['admin']) {
	?>
	<h2>ShoutboxAdmin :: Login</h2>
	<form action="sb_admin.php" method="post">
		<input type="hidden" name="action" value="login" />
		<span id="errorMessage"><?=$systemMessage?></span>
		<table border="0">
			<tr><td>Username:</td><td><input type="text" name="uname" /></td></tr>
			<tr><td>Password:</td><td><input type="password" name="pwd" /></td></tr>
			<tr><td align="right" colspan="2"><input type="submit" value="Login" style="font-weight:bold" /></td></tr>
		</table>	
	</form>
	<?PHP
		} else {
			require_once('./auth/dbconnect.php');	
			mysql_pconnect($sqlhost,$sqluser,$sqlpwd);
			mysql_select_db($dbname);

			
		if($_GET['action']=="del") {
			$selection = $_POST['selector'];
			$i = 0;
			$query = "";
			foreach($selection as $message) {
				if($i>0) $query .= " OR ";
				$query .= "id=$message";
				$i++;
			}
			$res = mysql_query("DELETE FROM sb_chat WHERE $query");
			if($res) {
				echo '<script type="text/javascript">self.location.href=\'sb_admin.php\'</script>';
			} else {
				echo mysql_error();
			}
		} elseif($_GET['action']=="flush") {
			$res = mysql_query("DELETE FROM sb_chat");
			if($res) {
				echo '<script type="text/javascript">self.location.href=\'sb_admin.php\'</script>';
			} else {
				echo mysql_error();
			}
		} elseif($_POST['action']=="chpass") {
				
			$t1 = $_POST['username'];
			$t2 = $_POST['pwd'];
			$secret = crypt($_POST['username'].'/'.$_POST['pwd'],$salt);
			$fh = fopen("./pw","w+");
			if($fh) {
				flock($fh, LOCK_EX);
				fwrite($fh,$_POST['username']);
				fwrite($fh,'%|%');
				fwrite($fh,"$secret");
				$_SESSION['sb_user']=$_POST['username'];
				echo '<h2>Password changed</h2><a href="sb_admin.php">Go back</a>';
				flock($fh, LOCK_UN);
				fclose($fh);
			} else {
				echo mysql_error();
			}
		} elseif($_GET['action']=="chpassform") {
?>
<script type="text/javascript">
function checkForm() {
	if(document.form1.username.value==""||document.form1.pwd.value=="") {
		alert('All the fields are required.');
		return false;
	}
	if(document.form1.pwd.value!=document.form1.password1.value) {
		alert('Passwords do not match.');
		return false;
	}
	return true;
}
</script>
<h2>ShoutboxAdmin :: Change Password</h2>
	<form action="sb_admin.php" method="post" onsubmit="return checkForm()" name="form1" >
		<input type="hidden" name="action" value="chpass" />
		<table border="0">
			<tr><td>Username:</td><td><input type="text" name="username" value="<?=$_SESSION['sb_user']?>" /></td></tr>
			<tr><td>Password:</td><td><input type="password" name="pwd" /></td></tr>
			<tr><td>Password verification:</td><td><input type="password" name="password1" /></td></tr>
			<tr><td align="right" colspan="2"><input type="submit" value="Change password" style="font-weight:bold" /></td></tr>
		</table>	
	</form>
<?PHP
		} else {
	?>
	<script type="text/javascript">
		function selectAll() {
			var selectors = document.list.selector;
			alert(selectors[0]);
			for(i=0;i<selectors.length;i++) {
				selectors[i].checked=document.getElementById('sel_all').checked;
			}
		}
		function flush() {
			if(confirm("Flushing the shoutbox means removing all it's contents. This operation is irreversible. Are you sure that you want to proceed?")) {
				self.location.href="sb_admin.php?action=flush";			
			}
		}
	</script>
	<!--div align="left">
		<form action="sb_admin.php" method="post">
			<input type="hidden" name="action" value="logout" />
			<input type="submit" value="Logout" />
			<input type="button" value="Change password" onclick="self.location.href='sb_admin.php?action=chpassform'" />
		</form>	
	</div-->
	<span id="errorMessage"><?=$systemMessage?></span>
	<?PHP
$limit = 50;
$page = intval($_GET['page']);
if(!$page) $page = 0;
if($row = mysql_fetch_array(mysql_query("SELECT COUNT(id) FROM sb_chat"))) $numrows = $row[0];
$pages = intval($numrows/$limit);
if($numrows%$limit) $pages++;
if($pages < 1) $total = 1;
else $total = $pages;
$first = $page+1;
if(($page+$limit)/$limit < $pages && $pages > 1) $last = $page+$limit;
else $last = $numrows;
?>
<div align="left">
Messages from <?=(($first>$last)?0:$first)?> to <?=$last?> of <?=$numrows?><br />
</div>
	<form action="?action=del" method="POST" name="list" onsubmit="return confirm('Are you sure that you want to delete the selected messages?')">
<div align="left">
	<input type="submit" value="Delete selection" />&nbsp;<input type="button" value="Flush the shoutbox" onclick="flush()" />
</div>
	<table border="0" width="100%">
	<tr class="table_head"><td><!-- input type="checkbox" id="sel_all" onclick="selectAll()" / -->&nbsp;</td><td>Author</td><td>Message</td></tr>	
<?PHP
$res = mysql_query("SELECT * FROM sb_chat ORDER BY id DESC LIMIT $page, $limit");
if($res) {
	$i=0;
	while($row =mysql_fetch_array($res)) {
?>
<tr style="background:<?=(($i%2)?'#ddd':'#eee')?>">
<td width="2%">
<input type="checkbox" name="selector[]" value="<?=$row['id']?>" />
</td>
<td><?=(stripslashes($row['posteur']))?></td>
<td><?=(stripslashes($row['message']))?></td>
</tr>
<?PHP
	$i++;
	}
}
?>
	</table>
<?PHP
	if($page > 0) {
		$back_page = $page-$limit;
?>
<a href="?page=<?=$back_page?>">&laquo; previous page</a>
<?PHP
	}
	for($i=1;$i<=$pages;$i++) {
		$page_num = $limit*($i-1);
		if($page_num!=$page) {
?>
<a href="?page=<?=$page_num?>"><?=$i?></a>
<?PHP
		} else {
?>
<b><?=$i?></b>
<?PHP
		}
	}
	if(($page+$limit)/$limit < $pages && $pages > 1) {
		$next_page = $page+$limit;
?>
<a href="?page=<?=$next_page?>">next page &raquo;</a>
<?PHP
	}
?>
	</form>
	<?PHP
		}
	}
	?>
</div>
</td>
<?php
include "footer.php";
?>
