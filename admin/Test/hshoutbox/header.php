<html>
  <head>
     <style>
        .ta{background-color:#ffff44;}
        .rad{color:red; font-weight:bold; background-color:#ffff44;}
        .head{font-size: 22px; height: 60px; border: 1px solid #99bbff; background-color:#dddddd; color: #3377ff; font-family: verdana, arial, san-serif;}
        .links{font-size: 14px; color: green; font-family: verdana, arial, san-serif; text-decoration:none;}
        .maintext{font-size: 13px; color: #fefefe; font-family: verdana, arial, san-serif; padding:20px;}
	.bulin{background-color:#aaccff; text-decoration: none; border: 0px; padding:0px; color: green; }
	.bulin:hover{cursor: pointer; color:#bb0000;}
	
     </style>
  </head>

  <body bgcolor=#efefef style="margin: 0px;">
       <table width=75% height=100% bgcolor=#aaccff cellpadding=0 cellspacing=0 align=center>
           <tr><td align=center valign=center class=head>
                          HIOX SHOUTBOX
           </td></tr>
	   <tr align=center><td valign=top>
	   <form action="sb_admin.php" method="post">
	   <a class=links href="about.php">About Us</a>&nbsp;|&nbsp;
	   <a class=links href="sb_admin.php">Control Panel</a>&nbsp;|&nbsp;
	   <a class=links href="code.php">Get Code</a>&nbsp;|&nbsp;
	   <a class=links href="readme.php">Instruction</a>&nbsp;|&nbsp;
             <input type="hidden" name="action" value="logout" >
             <input class=bulin type="button" value="Change password" onclick="self.location.href='sb_admin.php?action=chpassform'" />&nbsp;|&nbsp;
	   <a class=links target="blank" href="http://www.hscripts.com/support.php">Report</a>&nbsp;|&nbsp;
             <input class=bulin type="submit" value="Logout" >
           </form><br>
	   </td></tr>
           <tr>
