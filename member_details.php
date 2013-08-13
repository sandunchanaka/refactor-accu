<?php include("tpl/header2.tpl");
$page = $_GET["page"];
?>
<?php 
			  if(isset($_REQUEST['mem_id']))
			  {
			  	$i=0;
				$memberdetails = Member::GetmemberDetais($_REQUEST['mem_id']);
				for($a=0;$a<count($memberdetails);$a++){
				$row = each($memberdetails);	
				$i=1;
  	  			$type = $row["value"]["member_type_id"];
			  ?>
<body>
    <div id="fb-root"></div>

    <div id="header">
		<div class="container">
			<div id="branding">
				<?php include("tpl/logo.tpl");?>
<div id="masdar-logo">
					
				</div>
			</div><!-- #branding -->
			<div id="access">
				<div class="skip-link screen-reader-text"><a href="#content" title="skip to content">Skip to content</a></div>
				<div id="utilities">
                <?php include("tpl/utilities.tpl");?>
<span class="clear"></span>
<?php include("tpl/main_menu.tpl");?>			</div><!-- #access -->
			<div id="header-banners">
				<div id="primary-header">
					
				</div>
				<div id="secondary-header">
					<ul class="xoxo">
						
					</ul>
				</div><!-- #secondary-header -->
				<div id="tertiary-header">
					<span class="corner g-tl"></span>
					<span class="corner g-tr"></span>
					<span class="corner gb-bl"></span>
					<span class="corner gb-br"></span>
					<ul class="xoxo">
						<!--MOD_904e4620-9cfd-4f59-a547-b87256ff6026-->

<li class="breadcrumb">
    <ul>
        <li><a href="index.php">Home</a></li>
        

        
                <li class="separator">\</li>
                <li class="" ><a href="#">Members</a></li>
                
                <li class="separator">\</li>
                <li class="current" ><a href="#"> <?php echo $row["value"]["member_name"];?></a></li>
                
    </ul>
</li>
<!--/MOD_904e4620-9cfd-4f59-a547-b87256ff6026-->
<!--MOD_25a1441f-8ac1-4d7e-be18-bf68bf52572d-->

<li class="share-utilities">
<?php include("tpl/share-link.tpl");?>
</li>
<!--/MOD_25a1441f-8ac1-4d7e-be18-bf68bf52572d-->

					</ul>
				</div>
				<span class="clear"></span>
			</div><!-- #header-banners -->
			<span class="clear"></span>
		</div><!-- .container -->
	</div> 
    <!-- #header -->
	<div id="main">		<div class="container">
		  <div id="content" class="print-area">
		    <div id="content2" class="print-area">
		      <!--MOD_14e32e5e-fc48-4606-87f5-30a956e95732-->
		      <div class="content-container"> <span class="clearfix"></span>
		        <h1><?php echo $row["value"]["member_name"];?></h1>
                <div class="content-body content-body-nobg">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="64%">&nbsp;</td>
              <td colspan="2">&nbsp;</td>
            </tr>
             
            <tr>
              <td valign="top"><table width="100%" align="center" cellpadding="0" cellspacing="0">
                
                <tr style="">
                  <td width="2%" height="27"><div align="right"><img src="images/sub_but_left.gif" width="9" height="27"></div></td>
                  <td width="91%" background="images/sub_but_scroll.gif" class="banner_text" ><strong><?php echo $row["value"]["member_name"];?> </strong></td>
                  <td width="7%" height="27" class="login_text_white"><img src="images/sub_but_right.gif" width="10" height="27"></td>
                </tr>
                <tr>
                  <td class="login_text">&nbsp;</td>
                  <td class="login_text"><span class="news_index"><?php echo $row["value"]["member_abbrevation"]; ?></span></td>
                  <td class="login_text">&nbsp;</td>
                </tr>
                <tr >
                  <td height="83" class="login_text">&nbsp;</td>
                  <td valign="top" class="login_text"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="61%" height="18" valign="bottom" class="news_index">&nbsp;</td>
                        <td width="39%" rowspan="4"><div align="center"><?php if($row["value"]["member_sign"] != ''){?><img src="upload_images/member_logos/<?php echo $row["value"]["member_sign"]; ?>" width="131" height="103"><?php }?></div></td>
                      </tr>
                      <tr class="news_index">
                        <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td class="news_index"><?php
									
									/*if($row["value"]["Address"]=='')
									{*/
										if($row['value']['street1']!='')
										{
											echo $row['value']['street1'].','."<br/>";
										}
										if($row['value']['street2']!='')
										{
											echo $row['value']['street2'].','."<br/>";
										}
										if($row['value']['city']!='')
										{
											echo $row['value']['city'].','."<br/>";
										}
										if($row['value']['postal_code']!='')
										{
											echo $row['value']['postal_code'].','."<br/>";
										}	
										if($row['value']['country_name']!='')
										{
											echo $row['value']['country_name'].'.';
										}
									/*}
									elseif($row["value"]["Address"]!='')
									{
										echo $row['value']['Address'];
									}*/		 
							    ?>                              </td>
                            </tr>
                        </table></td>
                      </tr>
                      <tr class="news_index">
                        <td height="18" valign="top"class="news_index">&nbsp;</td>
                      </tr>
                      <tr class="news_index">
                        <td height="18" valign="top">&nbsp;</td>
                      </tr>
                  </table></td>
                  <td class="login_text">&nbsp;</td>
                </tr>
                <tr style="background-color: #{cycle values = 'CCD9FF, A6BCFF'}">
                  <td class="login_text">&nbsp;</td>
                  <td class="login_text">&nbsp;</td>
                  <td class="login_text">&nbsp;</td>
                </tr>
                <tr style="background-color: #{cycle values = 'CCD9FF, A6BCFF'}">
                  <td class="login_text">&nbsp;</td>
                  <td class="news_index">&nbsp;</td>
                  <td class="login_text">&nbsp;</td>
                </tr>
               <?php if($row["value"]["phone_no"] != ''){ ?>
                <tr style="background-color: #{cycle values = 'CCD9FF, A6BCFF'}">
                  <td class="login_text">&nbsp;</td>
                  <td class="news_index">Phone : <?php echo $row["value"]["phone_no"]; ?></td>
                  <td class="login_text">&nbsp;</td>
                </tr>
               <?php } ?>
               <?php if ($row["value"]["fax_no"] != ''){ ?>
                <tr style="background-color: #{cycle values = 'CCD9FF, A6BCFF'}">
                  <td class="login_text">&nbsp;</td>
                  <td class="news_index">Fax: <?php echo $row["value"]["fax_no"]; ?></td>
                  <td class="login_text">&nbsp;</td>
                </tr>
                <?php } ?>
                <?php if ($row["value"]["email"] != ''){ ?>
                <tr style="background-color: #{cycle values = 'CCD9FF, A6BCFF'}">
                  <td class="login_text">&nbsp;</td>
                  <td class="news_index">Email: <?php echo $row["value"]["email"]; ?></td>
                  <td class="login_text">&nbsp;</td>
                </tr>
                <?php } ?>
                <?php if ($row["value"]["url"] != '') { ?>
                <tr style="background-color: #{cycle values = 'CCD9FF, A6BCFF'}">
                  <td class="login_text">&nbsp;</td>
                  <td class="news_index">URL: <?php echo $row["value"]["url"]; ?> </td>
                  <td class="login_text">&nbsp;</td>
                </tr>
                <?php } ?>
                <tr style="background-color: #{cycle values = 'CCD9FF, A6BCFF'}">
                  <td class="login_text">&nbsp;</td>
                  <td class="login_text">&nbsp;</td>
                  <td class="login_text">&nbsp;</td>
                </tr>
                <tr style="background-color: #{cycle values = 'CCD9FF, A6BCFF'}">
                  <td class="login_text">&nbsp;</td>
                  <td class="login_text">
                  <?php 
				  $contactperson = Member :: CountContactPerson($row["value"]["member_id"]);
				  $countcontact	 = $contactperson['totalcontact'];
				  if($countcontact != 0){
				  ?>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="91%" height="25" class="news_index"><strong>Contact Person:</strong></td>
                      <td width="3%">&nbsp;</td>
                    </tr>
                    <?php
					$i=0;
					$contactperson = Member::GetContactPerson($row["value"]["member_id"]);
					for($b=0;$b<count($contactperson);$b++){
					$row1 = each($contactperson);	
					$i=1;
				
				?>
                    <tr>
                      <td class="text"><?php echo $row1["value"]["title"]; ?>.<?php echo $row1["value"]["contact_person"]."-". $row1["value"]["post"]; ?></td>
                      <td>&nbsp;</td>
                    </tr>
                   <?php if($row1["value"]["contact_address"] !=''){?>
                    <tr>
                      <td class="text"><?php  echo "Address  :  ".$row1["value"]["contact_address"]; ?></td>
                      <td>&nbsp;</td>
                    </tr>
                    <?php }
					if($row1["value"]["telephone"] !=''){
					?>
                    <tr>
                      <td class="text"><?php  echo "Telephone  :  ".$row1["value"]["telephone"]; ?></td>
                      <td>&nbsp;</td>
                    </tr>
                    <?php }
					if($row1["value"]["fax"] !=''){
					?>
                    <tr>
                      <td class="text"><?php  echo "Fax  :  ".$row1["value"]["fax"]; ?></td>
                      <td>&nbsp;</td>
                    </tr>
                    <?php }
					if($row1["value"]["email"] !=''){ 
					?>
                    <tr>
                      <td class="text"><?php echo "E mail  :  ".$row1["value"]["email"]; ?></td>
                      <td>&nbsp;</td>
                    </tr>
                    <?php }
					if($row1["value"]["url"] !=''){ 
					?>
                    <tr>
                      <td class="text"><?php echo "Web site  :  ".$row1["value"]["url"]; ?></td>
                      <td>&nbsp;</td>
                    </tr>
                    <?php
				  	}
					}
				   ?>
                  </table>
                  <?php }?>
                  
                  </td>
                  <td class="login_text">&nbsp;</td>
                </tr>
                <tr style="background-color: #{cycle values = 'CCD9FF, A6BCFF'}">
                  <td class="login_text">&nbsp;</td>
                  <td class="login_text">&nbsp;</td>
                  <td class="login_text">&nbsp;</td>
                </tr>
                <tr style="background-color: #{cycle values = 'CCD9FF, A6BCFF'}">
                  <td class="login_text">&nbsp;</td>
                  <td class="login_text">
                  
                  <?php 
				  $Regu = Member :: CountContactPerson($row["value"]["member_id"]);
				  $countreg	 = $Regu['totalcontact'];
				  if($countreg != 0){
				  ?>
                  
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="91%" class="news_index"><strong>Regulator: </strong></td>
                      <td width="3%">&nbsp;</td>
                    </tr>
                    <?php
					$j=0;
					$regulator = Member::GetRegulator($row["value"]["member_id"]);
					for($r=0;$r<count($regulator);$r++){
					$row2 = each($regulator);	
					$j=1;
				
				?>
                    <tr>
                      <td class="text"><?php echo $row2["value"]["title"].$row2["value"]["reg_name"]." - ".$row2["value"]["reg_desc"]; ?></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="text"><?php echo $row2["value"]["reg_address"]; ?></td>
                      <td>&nbsp;</td>
                    </tr>
                    <?php
				  	}
				   ?>
                  </table>
                  <?php }?>
                  
                  </td>
                  <td class="login_text">&nbsp;</td>
                </tr>
                <tr style="background-color: #{cycle values = 'CCD9FF, A6BCFF'}">
                  <td class="login_text">&nbsp;</td>
                  <td class="login_text">&nbsp;</td>
                  <td class="login_text">&nbsp;</td>
                </tr>
                <tr style="background-color: #{cycle values = 'CCD9FF, A6BCFF'}">
                  <td class="login_text">&nbsp;</td>
                  <td class="news_index" valign="top">
                  <?php 
				  $staffmem = Member :: CountStaffmember($row["value"]["member_id"]);
				  $countstaff	 = $staffmem['totalstaffmem'];
				  if($countstaff != 0){
				  ?>
                  
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="87%" class="news_index"><strong>Board of Directors:</strong></td>
                        <td width="8%">&nbsp;</td>
                      </tr>
                      <?php
					$k=0;
					$staff = Member::GetMemberStaff($row["value"]["member_id"]);
					for($s=0;$s<count($staff);$s++){
					$row3 = each($staff);	
					$k=1;
				
				?>
                      <tr>
                        <td class="text"><?php echo $row3["value"]["board_of_directors"]; ?> - <?php echo $row3["value"]["title"]. $row3["value"]["name"]; ?></td>
                        <td>&nbsp;</td>
                      </tr>
                      <?php
				  	}
				   ?>
                  </table>
                  <?php }?>
                  </td>
                  <td class="login_text">&nbsp;</td>
                </tr>
                <tr style="background-color: #{cycle values = 'CCD9FF, A6BCFF'}">
                  <td class="login_text">&nbsp;</td>
                  <td class="text">&nbsp;</td>
                  <td class="login_text">&nbsp;</td>
                </tr>
              </table></td>
              <td colspan="2" valign="top"><?php 
			  		/*$db1 = new DB_Sql;
					$query = "SELECT * FROM member_staff WHERE member_id='".$db->f('member_id')."'";		
					$db1->query($query);
					$i=0;
					while($db1->next_record()){*/
					$countryProfile = Member ::GetCountryProfile($row["value"]["country_id"]);
					
					
			  ?>
                <table width="100%" cellpadding="0" cellspacing="0" align="center">
                
                <tr style="">
                  <td width="14%" height="27"><div align="right"><img
			src="images/sub_but_left.gif" width="9" height="27" /></div></td>
                  <td width="79%" background="images/sub_but_scroll.gif" class="banner_text" ><div align="center"><strong><?php echo $row["value"]["country_name"]; ?></strong></div></td>
                  <td width="7%" height="27" class="login_text_white"><img src="images/sub_but_right.gif" width="9"
			height="27" /></td>
                </tr>
                <tr>
                  <td colspan="3" class="login_text">&nbsp;</td>
                  </tr>
                <tr >
                  <td height="19" colspan="3" class="login_text"><div align="center"><img src="upload_images/Country_flag/<?php echo $row["value"]["country_flag"];?>" width="120" height="72" class="img_border"></div></td>
                  </tr>
                <tr style="background-color: #{cycle values = 'CCD9FF, A6BCFF'}">
                  <td colspan="3" class="login_text">&nbsp;</td>
                  </tr>
                <tr style="background-color: #{cycle values = 'CCD9FF, A6BCFF'}">
                  <td colspan="3" class="login_text">
                  <?php if($countryProfile["country_profile_id"] != "") { ?>
                  
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="50%" valign="top" class="news_index"><div class="news_index">
                        <div align="right">Population </div>
                      </div></td>
                      <td width="6%" class="news_index">&nbsp;</td>
                      <td width="50%" height="20" valign="top" class="news_index"><?php echo $countryProfile["population_milion"];?></td>
                    </tr>
                    <tr>
                      <td valign="top" class="news_index"><div align="right">Pop. Growth</div></td>
                      <td class="news_index">&nbsp;</td>
                      <td height="20" valign="top" class="news_index"><?php echo $countryProfile["popul_growth_anual"];?>% </td>
                    </tr>
                    <tr>
                      <td valign="top" class="news_index"><div>
                        <div align="right">G D P</div>
                      </div></td>
                      <td class="news_index">&nbsp;</td>
                      <td height="20" valign="top" class="news_index"><?php echo $countryProfile["gdp_billion"];?></td>
                    </tr>
                    <tr>
                      <td valign="top" class="news_index"><div>
                        <div align="right">GNI per Capita</div>
                      </div></td>
                      <td class="news_index">&nbsp;</td>
                      <td height="20" valign="top" class="news_index"> US$<?php echo $countryProfile["gni_per_capi"];?></td>
                    </tr>
                    <tr>
                      <td valign="top" class="news_index"><div>
                        <div align="right">Exchange Rate </div>
                      </div></td>
                      <td class="news_index">&nbsp;</td>
                      <td height="20" valign="top" class="news_index">US$1 = <?php echo $countryProfile["exchange_rate"];?></td>
                    </tr>
                    <tr>
                      <td valign="top" class="news_index"><div>
                        <div align="right">CU Penetration </div>
                      </div></td>
                      <td class="news_index">&nbsp;</td>
                      <td height="20" valign="top" class="news_index"><?php echo $countryProfile["cu_pentration"];?></td>
                    </tr>
                    <tr>
                      <td class="news_index">&nbsp;</td>
                      <td class="news_index">&nbsp;</td>
                      <td class="news_index">&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="3">&nbsp;</td>
                    </tr>
                  </table>                  <?php } ?>                  </td>
                  </tr>
              </table>
              <?php //} ?>              </td>
            </tr>
            <tr>
            <td colspan="3"><div align="center"><a class="intro_text" <?php 
					//$membertype = member :: getmemebrtypeid($memberid)
			?>href="members.php?mem_type_id=<?php echo $type;?>">&lt;&lt;Back</a></div></td>
            </tr>
            
          </table>
                </div>
                
		      </div>
		      <!--/MOD_14e32e5e-fc48-4606-87f5-30a956e95732-->
	        </div>
	  </div>
		  <!-- #content -->
<div id="primary">
<?php include("tpl/member-side-bar.tpl");?>
</div><!-- #primary -->
		  <div id="secondary">
				
		  </div><!-- #secondary -->
			<span class="clear"></span>
	  </div><!-- .container -->
	</div><!-- #main -->
	<div id="footer">
		<div id="primary-footer">
			<div class="container">
                <!--MOD_2811f601-6cbd-414b-98a0-36eea2b10c7c-->

 <?php include("tpl/footer-menu.tpl");?>

<!--/MOD_2811f601-6cbd-414b-98a0-36eea2b10c7c-->

			</div><!-- .container -->
		</div><!-- #primary-footer -->
		<div id="secondary-footer">
			<div class="container">
				<div class="primary">
                    <!--MOD_f39b07bd-de39-4cb5-9ab5-ba58220f5c82-->
                  <!--/MOD_f39b07bd-de39-4cb5-9ab5-ba58220f5c82-->

                    <span class="clear"></span>
			  </div>
				<div class="secondary">
                <?php include("tpl/footer-text.tpl"); ?>
					<span class="clear"></span>
				</div>
				<span class="clear"></span>
			</div><!-- .container -->
		</div><!-- #secondary-footer -->
	</div><!-- #footer -->
	
    </form>
    <!-- AddThis Button BEGIN  -->
    <script type="text/javascript"> 
        var addthis_config = {
            ui_delay: 200,
            services_exclude: 'print, email'
        }
        $(document).ready(function () {
            if ($('a.share-link').length > 0) {
                $('a.share-link').addClass('addthis_button').attr('href', 'http://www.addthis.com/bookmark.php?v=250&username=ra-4df33de459429749');
                var at = document.createElement('script');
                at.type = 'text/javascript';
                at.async = true;
                at.src = '../../../../s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4df33de459429749'/*tpa=http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4df33de459429749*/;
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(at, s);
            }
        });
    </script>
    <!-- AddThis Button END -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-10296834-28']);
  _gaq.push(['_setDomainName', 'none']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www/') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
<?php }} ?>
</html>
