<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" >
<title>Shoutbox</title>
<!-- Shoutbox to include in the <head> section -->
<!--BEGIN SHOUTBOX HEAD-->
<link rel="stylesheet" href="sb_style.css" type="text/css" />
<script language="javascript">
var way="shoutbox.php";
var war="warning.png";
</script>
<script src="js/ajax.js" type="text/javascript"></script>
<script src="js/shoutbox.js" type="text/javascript"></script>
<!--END SHOUTBOX HEAD-->
</head>
<body onload="sbInit()">
<p>&nbsp;</p>
<!-- BEGIN SHOUTBOX -->
<div id="shoutbox" style="width:300px">
	<div id="sb_chatLog">
	</div>
	<table border="0">
		<tr><td><b>Nickname:</b></td><td><input type="text" id="sb_nick" /></td></tr>	
		<tr><td><b>Message:</b></td><td><input type="text" id="sb_msg" onkeypress="if(event.keyCode==13){sendMessage();return false;}" /></td></tr>	
		<tr><td align="right" colspan="2"><input type="button" value="Say it!" onclick="sendMessage()" style="font-weight: bold; background: #000;" /></td></tr>
		<tr><td align="right" colspan="2" style="font-size:10px; text-decoration:none;">
                <a style="font-size:10px; text-decoration:none;" href="http://hscripts.com">H</a> </td></tr>
	</table>
	<div id="sb_warning"></div>
</div>
<!-- END SHOUTBOX -->
</body>
</html>
