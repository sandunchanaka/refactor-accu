<style>
.logged-user{float:left;padding:10px 0 0 510px;}
li.logged-user ul{list-style:none;margin:0;}
li.logged-user ul li{color:#444;float:left;font-size:12px;}

</style>
<?php if($_SESSION["CUUSERNAME"] !=""){ ?>
<ul>
        <li><a href="#"><img src="content/siteimages/user.png" width="16" height="16" /><?php echo $_SESSION["CUUSERNAME"];?></a></li>
        <li class="separator">\</li>
		<li><a href="Controller/user_control.php?mode=culogout"><span class="manage"></span>Logout</a></li>
</ul>
<?php } ?>