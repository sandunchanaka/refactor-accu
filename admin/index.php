<?php
require_once ('../includes/config.php');
if(isset($_SESSION['adminid']))
{
	session_unset();
	session_destroy();	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel - Login</title>
<link href="css/master.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  
  <tr>
    <td><?php include (ADMIN_TPL_PATH.'overall_top.tpl');?></td>
  </tr>
  <tr>
    <td><div align="center" id="login">
      <table width="383" height="22" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td bgcolor="#F1F3F5"><table width="100%" border="0" cellspacing="2" cellpadding="2">
            <tr>
              <td width="40%" valign="top">
                <img src="images/security.png" width="64" height="64" />
                <p>Welcome to Site</p>
                <p>Use a valid username and password to gain access to the administration panel.</p> 
				</td>
              <td width="60%" valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="2">
                <tr>
                  <td><div id="login_title">Login</div></td>
                </tr>
                <tr>
                  <td><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
                    <tr>
                      <td bgcolor="#E9ECEF"><div align="left" style="margin-left:5px; margin-right:5px;"><form action="controlers/admincontroler.php?mode=login" method="post"><table width="100%" border="0" cellspacing="2" cellpadding="2">
                        <tr>
                          <td><div id="error"><?php include(ADMIN_PATH.'messages.php');?></div></td>
                        </tr>
                        <tr>
                          <td><div id="lable">Username:</div></td>
                        </tr>
                        <tr>
                          <td><label>
                            <input name="user" type="text" class="login_boxes" id="user" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><div id="lable">Password:</div></td>
                        </tr>
                        <tr>
                          <td><label>
                            <input name="pass" type="password" class="login_boxes" id="pass" />
                          </label></td>
                        </tr>
                        <tr>
                          <td><label>
                            <input class="button" type="submit" name="Submit" value="Login" />
                          </label></td>
                        </tr>
                      </table>
                      </form></div></td>
                    </tr>
                  </table></td>
                </tr>
              </table></td>
            </tr>
          </table></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><?php include (ADMIN_TPL_PATH.'footer.tpl');?></td>
  </tr>
</table>

</body>
</html>
