<?php 
require_once('includes/config.php');
require_once('classes/db.class.php');
require_once('common/news.class.php');
require_once('common/events.class.php');
require_once('common/customer.class.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<!-- InstanceBegin template="/Templates/New Template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Rajeeda Holdings</title>
<link rel="stylesheet" type="text/css" href="css/multi/tree.css">
<script language="javascript" type="text/javascript" src="js/flipmenu.js"></script>
<!--
<script type="text/javascript" src="js/yahoo.js" ></script>
<script type="text/javascript" src="js/event.js" ></script>
<script type="text/javascript" src="js/treeview.js" ></script>
<script type="text/javascript" src="js/jktreeview.js" ></script>





<style type="text/css">

body {font: normal 11px verdana, sans-serif; color: #333; line-height: 19px;}
a { text-decoration: underline; color: #46546C; }
a:hover { text-decoration: underline; color: #4d77c3; }
#tree1 {width:250px;padding: 10px;float:left;}
#tree2 {width:250px;padding: 10px;float:left;}
#tree3 {width:250px;padding: 10px;float:left;}

</style>-->

<!-- InstanceEndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="style.css" rel="stylesheet" type="text/css" />
    <!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>

<body>
  <div id="wrapper">
      <div id="header">
          <div class="tr"><div class="br"><div class="bl">
            <h1><img src="images/logo.gif" width="203" height="49" alt="Software Company" /></h1>
              <h1>&nbsp;</h1>
            <ul id="nav-top">
        <li><a href="index.php">Home</a>  &nbsp;&nbsp;|&nbsp;&nbsp;</li>
              <li><a href="Products.php">Product </a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                  <li><a href="company.php">Company</a> &nbsp;&nbsp;|&nbsp;&nbsp;</li>
                  <li><a href="Capacity.php">Capacity</a>  &nbsp;&nbsp;|&nbsp;&nbsp;</li>
                  <li><a href="Customers.php">Customers</a>  &nbsp;&nbsp;|&nbsp;&nbsp;</li>
                  <li><a href="ContactUs.php">Contacts</a></li>
            </ul><!-- end top-nav -->
          </div>
          </div></div><!-- end .corners -->
      </div><!-- end header -->
      <div id="body">
          <div id="cap">
            <table width="801" height="204" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="202" height="191" align="center" valign="top"><table width="80%" height="196" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="30" align="center"><h3>Members Loging</h3></td>
                  </tr>
                  <tr>
                    <td>
                    	<form id="form1" name="form1" method="post" action="New Template.dwt.php">
                        <table width="200" height="102" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="73" height="22" align="right">User Name</td>
                            <td width="3">&nbsp;</td>
                            <td width="124"><input type="text" name="txt_UserName" id="txt_UserName" class="login_boxes" /></td>
                          </tr>
                          <tr>
                            <td align="right">Password</td>
                            <td>&nbsp;</td>
                            <td><input type="password" name="txt_Password" id="txt_Password"  class="login_boxes"/></td>
                          </tr>
                          <tr>
                            <td height="13" colspan="3"><table width="183" border="0" cellspacing="0" cellpadding="1">
                    <tr>
                                  <td width="129" height="24" align="right"><input type="submit" name="btn_Submit" id="btn_Submit" value="Loging"  class="button"/></td>
                              <td width="50"><div align="right">
                                <input type="reset" name="btn_Reset" id="button" value="Cancel"  class="button"/>
                              </div></td>
                              </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td height="13" colspan="3">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="13" colspan="3"><table width="200" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="21">&nbsp;</td>
                                <td width="154" align="right"><div align="left">If you are not a member please <a href="user_forum.php">Registere Here</a></div></td>
                                <td width="25">&nbsp;</td>
                              </tr>
                            </table></td>
                          </tr>
                        </table>
                    </form></td>
                  </tr>
                  <tr>
                    <td height="24" align="center"><table width="192" border="0" cellspacing="2" cellpadding="2">
                      <tr>
                        <td height="28" colspan="4" align="center"><h3>Our Main Partners</h3></td>
                      </tr>
                      <tr>
                        <td width="47" align="center"><a><img src="images/Logos/SANASA1.jpg" alt="SANASA" width="30" height="30" /></td>
                        <td width="40" align="center"><img src="images/Logos/Rural Bank.jpg" alt="Rural Bank" width="30" height="30" /></td>
                        <td width="43" align="center"><a href="http://www.aaccu.coop/http://www.aaccu.coop/http://www.aaccu.coop/http://www.aaccu.coop/http://www.aaccu.coop/http://www.aaccu.coop/http://www.aaccu.coop/http://www.aaccu.coop/" target="_blank"><img src="images/Logos/Accu.jpg" alt="ACCU" width="30" height="30" /></a></td>
                        <td width="36" align="center"><a href="http://www.care.org/" target="_blank"><img src="images/Logos/Care.jpg" alt="Care" width="30" height="30" /></a></td>
                      </tr>
                      <tr>
                        <td colspan="2" align="center"><a href="http://stromme.org/" target="_blank"><img src="images/Logos/Stroma.jpg" alt="Stromme Fundation" width="80" height="30" /></a></td>
                        <td colspan="2" align="center"><a href="http://www.rajeeda.org/vintara" target="_blank"><img src="images/Logos/Vintara.jpg" alt="Vintara Development" width="80" height="30" /></a></td>
                      </tr>
                    </table>                      <h3>&nbsp;</h3></td>
                  </tr>
                  <tr>
                    <td align="center"><table width="200" border="0">
                      <tr>
                        <td width="5">&nbsp;</td>
                        <td width="102" align="right">&nbsp;</td>
                        <td width="63">&nbsp;</td>
                        <td width="12">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td align="right">Local Organizations</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td align="right">Local Members</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td align="right">Creadit Unions</td>
                        <td>100</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td align="right">World Wide Members</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
              <td width="357" valign="top"><table width="100%" height="26" border="0" cellpadding="0" cellspacing="0">
            <tr>
                      <td width="3%" height="26">&nbsp;</td>
                      <td width="94%" valign="top"><!-- InstanceBeginEditable name="Body" -->
                          <table width="100%" height="324" border="0">
                            <tr>
                              <td height="108"><p>Since the beginning of organization, our products and services are spread across the country. 
So far we are serving more than 100 organizations, Including Rural development banks, Sanasa Societies and Care, Stromme, Vintara NGOs. Among our customers, 15 Sanasa organizations won ISO certificate and one organization won productivity award in year 2006.</p></td>
                            </tr>
                            <tr>
                              <td height="210" align="center"><table width="87%" height="225" border="0">
                                <tr>
                                  <td width="68%" align="left" valign="middle">District</td>
                                  <td width="32%" align="left" valign="middle">Number Of Organizations</td>
                                </tr>
                                <tr>
                                  <td height="191" colspan="2" align="left" valign="top"><!--
								  	<?php								 
										$district=customer::GetDistrict();
										for($x=0;$x<count($district);$x++)
										{ 
											$row1=each($district);
										
												echo "<ul>".$row1['value']['district']."</ul>";
												$organizations=customer::district_organization($row1['value']['district']);
										  ?>
								   </td>
                                   <td align="left" valign="top">
								   		<?php echo count($organizations);?>                                  
                                   </td>
                                </tr>
                                <tr>
                                	<td height="48" align="left" valign="middle"><ul>
									  <?php
                                            
                                            for($y=0;$y<count($organizations);$y++)
                                            {
                                                $row2=each($organizations);
                                                ?><li>&nbsp;&nbsp;&nbsp;&nbsp;<?php
                                                    echo $row2['value']['organization_name'];
                                                ?></li><?php	
                                            }
                                            ?></ul><?php								 		
                                      	}
                                  	  ?> 
                                                                 	 	
                                      
                                      <div id="tree3" class="treemenu"></div>
                                      <script type="text/javascript">									  	
										var palmtree=new jktreeview("tree3")
									  
                                      <?php 
                                      $district=customer::GetDistrict();
									  for($x=0;$x<count($district);$x++)
									  { 
										$row1=each($district);
									  ?>
									 	
										var branch=palmtree.addItem("<?php echo $row1['value']['district'];?>")
									 
									  <?php 
									  	for($y=0;$y<count($organizations);$y++)
                                        {
                                           $row2=each($organizations);
										   ?>
                                           	
												palmtree.addItem("<?php echo $row2['value']['organization_name'];?>",branch, "")
                                            </script>
										   <?php
										   								
									    }
										
									  }		
									  ?>
                                      <script type="text/javascript">
										palmtree.addItem("Mozilla Dev Center", "", "")
										var branch4=palmtree.addItem("CSS Drive") //A TREE BRANCH WITH NO URL FOR ITSELF
											palmtree.addItem("CSS Gallery", branch4, "") //Add this item to branch4
											palmtree.addItem("Web Design News", branch4, "") //Add this item to branch3
											palmtree.addItem("CSS Compressor", branch4, "http://www.cssdrive.com/index.php/main/csscompressor/") //Add this item to branch3
										palmtree.addItem("Ajaxian", "", "")
										palmtree.treetop.draw(); //REQUIRED LINE: Initalize tree
                                      
                                      </script>  -->
                                    <ul class="flipMenu">
                                        <?php 
                                      $id=customer::GetDistrict();
										for($x=0;$x<count($district);$x++)
										{ 
											$row1=each($id);										
											?>
                                        <li>
                                          <table width="311">
                                            <tr>
                                              <td width="203" align="left">
											  <?php 
											  	$district=customer::dis_name($row1['value']['district_id']);
											   	echo $district['district_name'];
												$organizations=customer::district_organization($row1['value']['district_id']);
											?></td>
                                              <td width="96" align="left"><?php echo count($organizations);?></td>
                                            </tr>
                                          </table>
                                          <ul>
                                            <?php
											
											for($y=0;$y<count($organizations);$y++)
                                            {
                                                $row2=each($organizations);
                                                ?>
                                            <li style="color:#000000">
                                              <table width="311">
                                                <tr>
                                                  <td width="200">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row2['value']['organization_name'];?></td>
                                                  <td width="94" align="left">&nbsp;</td>
                                                </tr>
                                              </table>
                                            </li>
                                            <?php	
                                            }
											?>
                                          </ul>
                                        </li>
                                        <?Php
											
										}		
									  ?>
                                    </ul></td>
                                </tr>
                              </table></td>
                            </tr>
                      </table>
                <!-- InstanceEndEditable --></td>
                      <td width="3%">&nbsp;</td>
                </tr>
                  </table></td>
<td width="242" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="4%">&nbsp;</td>
                      <td width="92%"><table width="232" border="0">
                        <tr>
                          <td colspan="3" align="center"><h3>Company News</h3></td>
                        </tr>
                        <tr>
                          <td colspan="3"><table width="100%" border="0">
                            <tr>
                              <?php 
						  						
							$result=News::GetNews();
							for($a=0;$a<count($result);$a++)
							{
							$row=each($result);
							?>
                              <td valign="top"><img src="images/Bulate.png" width="15" height="15" /></td>
                              <td colspan="3"><?php
								echo $row['value']['title'];
							
						  ?></td>
                            </tr>
                            <tr>
                              <td width="8%">&nbsp;</td>
                              <td width="38%">&nbsp;</td>
                              <td width="26%">&nbsp;</td>
                              <td width="28%"><?php
						  		echo $row['value']['add_date'];
						   ?></td>
                            </tr>
                            <tr>
                              <td colspan="4"></td>
                            </tr>
                            
                            <?php
						   }
						    ?>
                          </table></td>
                        </tr>
                        <tr>
                          <td width="202" height="15" align="right"><a href="More_news.php">More News</a></td>
                          <td height="15" colspan="2" align="center">
                          	<a href="More_news.php"><img src="images/0050_pfeil.png" /></a>                          </td>
                        </tr>
                        <tr>
                          <td height="5" colspan="3" align="center"><h3>&nbsp;</h3></td>
                        </tr>
                        <tr>
                          <td colspan="3" align="center"><h3>Events</h3></td>
                        </tr>
                        <tr>
                          <td colspan="3"><table width="100%" height="58" border="0">
                            <tr>
                              <?php 
						  						
							$show_events=Events::GetEvents();
							
							for($a=0;$a<count($show_events);$a++)
							{
								$row=each($show_events);
							?>
                              <td height="20" valign="top"><img src="images/Bulate.png" width="15" height="15" /></td>
                              <td height="20" colspan="3"><?php
								echo $row['value']['title'];
						  ?></td>
                            </tr>
                            <tr>
                              <td width="9%" height="20">&nbsp;</td>
                              <td width="40%"><?php
						  		echo $row['value']['start_date'];
						   ?></td>
                              <td width="21%">&nbsp;</td>
                              <td width="30%"><?php
						  		echo $row['value']['end_date'];
						   ?></td>
                            </tr>
                            <tr>
                              <td colspan="4"></td>
                            </tr>
                            
                            <?php
						   }
						    ?>
                          </table></td>
                        </tr>
                        <tr>
                          <td width="202" height="15" colspan="2" align="right"><a href="More_events.php">More Events</a></td>
                          <td width="20" height="15" align="center"><a href="More_events.php"><img src="images/0050_pfeil.png" /></a></td>
                        </tr>
                      </table></td>
                      <td width="4%">&nbsp;</td>
              </tr>
                  </table></td>
              </tr>
              <tr>
                <td height="0" align="center">&nbsp;</td>
                <td height="0">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
        </div>
          <!-- end buy --><!-- end capabilities -->
        <!-- end news -->
<div id="footer"><div>
  <div>
              Powered by Rajeeda Copyrights@2008</div>
</div></div><!-- end footer -->
      </div><!-- end body -->
  </div><!-- end wrapper -->
</body>
<!-- InstanceEnd --></html>
