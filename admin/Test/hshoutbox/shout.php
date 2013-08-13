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





