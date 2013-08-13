READ ME:
=========

This software is developed and copyrighted by HIOX Softwares.
This version is shoutbox-1.2


How To Install:
================
a) Unzip the download.
b) Create a database namely shoutbox.
c) Set read, write permission to the file hshoutbox/auth/dbconnect.php and hshoutbox/pw (only for linux users)
d) Execte the file hshoutbox/install.php on your browser and fill the required 
admin details where ever required. This will install the product.

Note: After successful installation of the script, please remove/delete the install.php and 
      Set chmod 644 permission for hshoutbox/auth/dbconnect.php 

Embedding the shoutbox on a page:
==================================
1. select Get Code link/menu and follow the given instruction.
2. copy the code code given in textbox and paste it between the <head></head> tags of your page.
3. change Your  <body> tag as <body onload="sbInit()">
4. Add the following code to display the shoutbox
	 <?php include "$hm/shout.php"; ?> 
5. To delete the shoutbox messages login as admin using hshoutbox/sb_admin.php 
	a.) To delete particular message, select messages and click Delete Selection menu.
	b.) To delete all messages, click Flush the shoutbox menu.

Additionnal information:
*************************
1. There is a CSS file called sb_style.css that you can edit in order to change the look of the shoutbox. The width can be defined by editing the width property of the first <div> in the hshoutbox/shout.php


Our team also involves in developing customized scripts and user specific
scripts. Any requirements on outsourcing or project/product development, do
get in touch with us(support@hscripts.com).

On any suggestions mail to us at support@hscripts.com

Visit us at http://www.hscripts.com
Visit us at http://www.hioxindia.com
