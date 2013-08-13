<?php include("tpl/header2.tpl");

$reg_id = isset( $_GET['reg_id'] )?$_GET['reg_id']:0;
if($reg_id != 0 ){	
	$get_data = Registration :: Get_registration_data_back($reg_id);
	
}
$get_eventdata = Registration ::  Get_event_name_by_eventID($get_data['event_id']);
$members = Registration :: Get_member_name_BY_ID($get_data['name_of_member']);
$country = Registration :: GetCountryNameBYID($get_data['country_id']);
					

 if($get_data['gender'] == 1){ $title ="Mr."; }
 elseif($get_data['gender'] == 2){$title ="Mrs.";}
 elseif($get_data['gender'] == 3){ $title ="Miss.";}
           
//$to = "accu@aaccu.coop";
$to = "sandunchanaka@gmail.com";
$subj = $get_data['name_of_part']." Registered For ".$get_eventdata['event_name'];
$msg = "<table>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Event Name</strong></td>
    <td>:</td>
    <td><strong>
   ".$get_eventdata['event_name']."</strong>
    </td>
  </tr>
  <tr>
    <td colspan=\"3\"><table align=\"left\">
      <tr>
        <td class=\"eventreg_text\">Name of Participant</td>
        <td width=\"2%\">:</td>
        <td width=\"62%\">
          <label>".$get_data['name_of_part']."</label>
       </td>
      </tr>
      <tr>
        <td valign=\"top\" class=\"eventreg_text\">Gender</td>
        <td valign=\"top\">:</td>
        <td class=\"eventreg_text\">
          <label>".$title."          
            </label>
         </td>
      </tr>
      <tr>
        <td class=\"eventreg_text\">Name of Member </td>
        <td>:</td>
        <td>".
					$members['member_name']."
        </td>
      </tr>
      <tr>
        <td valign=\"top\" class=\"eventreg_text\">Organization Address</td>
        <td valign=\"top\">:</td>
        <td>
          <label>
           ".$get_data['organization_address']."
          </label>
       </td>
      </tr>
      <tr>
        <td class=\"eventreg_text\">Country </td>
        <td>:</td>
        <td>". 
		$country['country_name']."
       </td>
      </tr>
      <tr>
        <td class=\"eventreg_text\">Work Phone </td>
        <td>:</td>
        <td>".$get_data['work_phone']."</td>
      </tr>
      <tr>
        <td class=\"eventreg_text\">Cell Phone </td>
        <td>:</td>
        <td>
		".$get_data['cell_phone']."</td>
      </tr>
      <tr>
        <td class=\"eventreg_text\">Fax </td>
        <td>:</td>
        <td>".$get_data['fax']."</td>
      </tr>
      <tr>
        <td class=\"eventreg_text\">Email </td>
        <td>:</td>
        <td>
          <label>".$get_data['email']."</label>
       </td>
      </tr>
      <tr>
        <td class=\"eventreg_text\">Organization website </td>
        <td>:</td>
        <td>
          <label>".$get_data['organization_url']."
            </label>
          </td>
      </tr>
      <tr>
         <td colspan=\"3\" class=\"eventreg_text\"><a href=\"http://www.aaccu.asia/registration_email.php?reg_id=".$reg_id."\">If you want to more details pls refer this link</a></td>
      </tr>
    </table></td>
  </tr>
</table>";
$head = "MIME-Version: 1.0\r\nContent-Type: text/html; charset=ISO-8859-1\r\nFrom:".$get_data['name_of_part']."<".$get_data['email']."> \r\nBcc:ranjith@aaccu.coop\r\nBcc:sandunchanaka@gmail.com";
mail($to, $subj, $msg, $head); ?>
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
		<li class="" ><a href="#">
        Registration Form &gt;&gt; </a></li>
                <li class="separator">\</li>
                <li class="" ><a href="#">Completed</a></li>
                
<!--                <li class="separator">\</li>
                <li class="current" ><a href="#">Photo Gallery</a></li>-->
                
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
	    <!--MOD_0aff5a33-3102-49f5-9e46-91d7a3735978-->
	    <div class="content-container"> <span class="clearfix"></span>
	      <h1>Event Registration Details</h1><br><br>
		<table width="80%" align="center">
  <tr>
    <td width="36%" class="banner_text"><strong>Event Name</strong></td>
    <td width="2%">:</td>
    <td width="62%" class="banner_text"><strong>
      <?php
   $get_eventdata = Registration ::  Get_event_name_by_eventID($get_data['event_id']);
	echo $get_eventdata['event_name'];
   ?> </strong>
      </td>
  </tr>
  <tr>
    <td colspan="3">
    <form id="form" action="#" method="post" name="form">
    <fieldset>
      <h3>
        <legend class="banner_text">Registration Form &gt;&gt; Personal Information</legend>
      </h3>
      <table width="100%" border="0" align="center">
        <tr>
          <td width="36%" class="eventreg_text">Name of Participant</td>
          <td width="2%">:</td>
          <td width="62%" class="eventreg_text"><label><?php echo $get_data['name_of_part']; ?></label></td>
          </tr>
        <tr>
          <td valign="top" class="eventreg_text">Gender</td>
          <td valign="top">:</td>
          <td class="eventreg_text"><label>
            <?php 
		   if($get_data['gender'] == 1){echo "Mr."; }
		   elseif($get_data['gender'] == 2){echo "Mrs.";}
		   elseif($get_data['gender'] == 3){echo "Miss.";}?>
            </label></td>
          </tr>
        <tr>
          <td class="eventreg_text">Name of Member </td>
          <td>:</td>
          <td class="eventreg_text"><?php 
					$members = Registration :: Get_member_name_BY_ID($get_data['name_of_member']);
					echo $members['member_name'];?></td>
          </tr>
        <tr>
          <td valign="top" class="eventreg_text">Organization Address</td>
          <td valign="top">:</td>
          <td class="eventreg_text"><label> <?php echo $get_data['organization_address']; ?> </label></td>
          </tr>
        <tr>
          <td class="eventreg_text">Country </td>
          <td>:</td>
          <td class="eventreg_text"><?php 
					$country = Registration :: GetCountryNameBYID($get_data['country_id']);
					echo $country['country_name'];
				 ?></td>
          </tr>
        <tr>
          <td class="eventreg_text">Work Phone </td>
          <td>:</td>
          <td class="eventreg_text"><label> <?php echo $get_data['work_phone']; ?></label></td>
          </tr>
        <tr>
          <td class="eventreg_text">Cell Phone </td>
          <td>:</td>
          <td class="eventreg_text"><?php echo $get_data['cell_phone']; ?></td>
          </tr>
        <tr>
          <td class="eventreg_text">Fax </td>
          <td>:</td>
          <td class="eventreg_text"><label> <?php echo $get_data['fax']; ?></label></td>
          </tr>
        <tr>
          <td class="eventreg_text">Email </td>
          <td>:</td>
          <td class="eventreg_text"><label> <?php echo $get_data['email']; ?></label></td>
          </tr>
        <tr>
          <td class="eventreg_text">Organization website </td>
          <td>:</td>
          <td class="eventreg_text"><label> <?php echo $get_data['organization_url']; ?> </label></td>
          </tr>
        <tr>
          <td class="eventreg_text">Passport No.</td>
          <td>:</td>
          <td class="eventreg_text"><label> <?php echo $get_data['passport_no']; ?></label></td>
          </tr>
        <tr>
          <td class="eventreg_text">Place of Issue </td>
          <td>:</td>
          <td class="eventreg_text"><label> <?php echo $get_data['place_of_issue']; ?> </label></td>
          </tr>
        <tr>
          <td class="eventreg_text">Date of expiration </td>
          <td>:</td>
          <td class="eventreg_text"><label> <?php echo $get_data['exp_date']; ?> </label></td>
          </tr>
        <tr>
          <td class="eventreg_text">Nationality </td>
          <td>:</td>
          <td class="eventreg_text"><label> <?php echo $get_data['nationality']; ?></label></td>
          </tr>
        <tr>
          <td valign="top" class="eventreg_text"> picture</td>
          <td valign="top">:</td>
          <td class="eventreg_text"><label>
            <?php if($get_data['up_image'] !=''){?>
            <img src="upload_images/event_registration/thumb/<?php echo $get_data['up_image'];?>" width="100" height="130">
            <?php } ?>
            </label>
            <br></td>
          </tr>
        <tr>
          <td class="eventreg_text">Name as it would appear  on a badge</td>
          <td>:</td>
          <td class="eventreg_text"><label> <?php echo $get_data['name_badge']; ?> </label></td>
          </tr>
        <tr>
          <td valign="top" class="eventreg_text"> upload   organization's </td>
          <td valign="top" class="eventreg_text">:</td>
          <td class="eventreg_text"> <?php if($get_data['up_file'] !=''){?> <?php echo $get_data['up_file']; } ?></td>
          </tr>
        <tr>
          <td valign="top" class="eventreg_text">Brief organization  description </td>
          <td valign="top" class="eventreg_text">:</td>
          <td class="eventreg_text"><label> <?php echo $get_data['brief_desc']; ?> </label></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
      </table>
    </fieldset>
    
    </form>
    
    </td>
  </tr>
  <tr>
    <td colspan="3">
    <form action="Controller/registrationr_control.php?mode=reg_03" method="post" name="form3">
        <table width="100%" border="0">
            <tr>
              <td width="88%" class="banner_text"><h3>Registration Form >> Registration Fee </h3></td>
              </tr>
            <tr>
              <td><span class="errormsg">
                <?php include('common/registration_massage.php'); ?>
                <input type="hidden" name="hdn_reg_id" id="hdn_reg_id" value="<?php echo $reg_id; ?>">
</span></td>
              </tr>
            <tr>
              <td><table width="100%" border="0">
                <tr>
                  <td colspan="3" class="aboutusbod"> Prices are in US dollars(US$)</td>
                  </tr>
                <tr>
                  <td width="96%" colspan="2">&nbsp;</td>
                  <td width="4%">&nbsp;</td>
                  </tr>
                <tr>
                  <td colspan="3"><table width="100%" border="1" style="border-collapse:collapse">
                    <tr>
                      <td width="63%" height="53" rowspan="2" class="reg_table_coloum">REGISTRATION CLOSES AUGUST &nbsp;10, 2012</td>
                      <td colspan="4" align="center" class="reg_table_coloum">Residential - International</td>
                      </tr>
                    <tr>
                      <td colspan="2"><table width="100%" border="0">
                        <tr>
                          <td align="center" class="reg_table_coloum_heading">Early Bird by</td>
                          </tr>
                        <tr>
                          <td align="center" class="reg_table_coloum">May 31, 2012</td>
                          </tr>
                        </table></td>
                      <td colspan="2"><table width="100%" border="0">
                        <tr>
                          <td align="center" class="reg_table_coloum_heading">Regular after</td>
                          </tr>
                        <tr>
                          <td align="center" class="reg_table_coloum">May 31, 2012</td>
                          </tr>
                        </table></td>
                      </tr>
                    <tr>
                      <td width="63%" align="center" class="eventreg_text"><strong class="reg_table_coloum">Conference</strong></td>
                      <td colspan="2" align="center" class="reg_table_coloum">Twin(US$)</td>
                      <td colspan="2" align="center" class="reg_table_coloum">Single(US$)</td>
                      </tr>
                    <tr>
                      <td class="eventreg_text">
                        <?php 
					  echo $get_data_01['question'];
					  ?>
                        <label>
                          <input name="chk_hrd_01" type="checkbox" id="chk_hrd_01" value="101" <?php if($get_data_01 ==true && $get_data_01['question'] == 1){echo "checked=\"checked\" ";}?>>
                          HRD/
                          <input name="chk_youth_01" type="checkbox" id="chk_youth_01" value="102" <?php if($get_data_01 ==true && $get_data_01['question'] == 102){echo "checked=\"checked\" ";}?>>
                          Youth/
                          <input name="chk_women_01" type="checkbox" id="chk_women_01" value="103" <?php if($get_data_01 ==true && $get_data_01['question'] == 103){echo "checked=\"checked\" ";}?>>
                          Women Workshop <strong><u>PLUS</u></strong> Asian Credit <br>
                          Union Forum, &nbsp;&nbsp;Sept.  2- 9., 2012 .</label></td>
                      <td width="9%" class="eventreg_text"><label>
                        <input name="chk_price_01" type="checkbox" id="chk_price_01" value="650" <?php if($get_data_01 ==true && $get_data_01['e_price_t'] == 650){echo "checked=\"checked\" ";}?>>
                        850</label></td>
                      <td width="9%" class="eventreg_text"><label>
                        <input name="chk_price_02" type="checkbox" id="chk_price_02" value="900" <?php if($get_data_01 ==true && $get_data_01['e_price_s'] == 900){echo "checked=\"checked\" ";}?>>
                        1200
                        </label></td>
                      <td width="10%" class="eventreg_text"><label>
                        <input name="chk_price_03" type="checkbox" id="chk_price_03" value="700" <?php if($get_data_01 ==true && $get_data_01['a_price_t'] == 700){echo "checked=\"checked\" ";}?>>
                        900</label></td>
                      <td width="9%" class="eventreg_text"><label>
                        <input name="chk_price_04" type="checkbox" id="chk_price_04" value="950" <?php if($get_data_01 ==true && $get_data_01['a_price_s'] == 950){echo "checked=\"checked\" ";}?>>
                        1250</label></td>
                      </tr>
                    <tr>
                      <td class="eventreg_text"><label>
                        <input name="chk_02" type="checkbox" id="chk_02" value="2" <?php if($get_data_02 ==true && $get_data_02['question'] == 2){echo "checked=\"checked\" ";}?>>
                        <strong></strong>&nbsp;CEOs  <strong><u>PLUS </u></strong>Asian Credit Union Forum <strong>&nbsp;<u>PLUS</u></strong> General Meeting , Sept. 2 - 10 ,2012&nbsp;(CEOs  of ACCU member organizations) .</label></td>
                      <td class="eventreg_text"><label>
                        <input name="chk_price_05" type="checkbox" id="chk_price_05" value="725" <?php if($get_data_02 ==true && $get_data_02['e_price_t'] == 725){echo "checked=\"checked\" ";}?>>
                        950</label></td>
                      <td class="eventreg_text"><label>
                        <input name="chk_price_06" type="checkbox" id="chk_price_06" value="1000" <?php if($get_data_02 ==true && $get_data_02['e_price_s'] == 1000){echo "checked=\"checked\" ";}?>>
                        1,350</label></td>
                      <td class="eventreg_text"><label>
                        <input name="chk_price_07" type="checkbox" id="chk_price_07" value="775" <?php if($get_data_02 ==true && $get_data_02['a_price_t'] == 775){echo "checked=\"checked\" ";}?>>
                        1000
                        </label></td>
                      <td class="eventreg_text"><label>
                        <input name="chk_price_08" type="checkbox" id="chk_price_08" value="1050" <?php if($get_data_02 ==true && $get_data_02['a_price_s'] == 1050){echo "checked=\"checked\" ";}?>>
                        1,400
                        </label></td>
                      </tr>
                    <tr>
                      <td class="eventreg_text"><label>
                        <input name="chk_03" type="checkbox" id="chk_03" value="3" <?php if($get_data_03 ==true && $get_data_03['question'] == 3){echo "checked=\"checked\" ";}?>>
                        Asian Credit Union Forum,  Sept. 5 - 9. 2012 .</label></td>
                      <td class="eventreg_text"><label>
                        <input name="chk_price_09" type="checkbox" id="chk_price_09" value="425" <?php if($get_data_03 ==true && $get_data_03['e_price_t'] == 425){echo "checked=\"checked\" ";}?>>
                        525</label></td>
                      <td class="eventreg_text"><label>
                        <input name="chk_price_10" type="checkbox" id="chk_price_10" value="575" <?php if($get_data_03 ==true && $get_data_03['e_price_s'] == 575){echo "checked=\"checked\" ";}?>>
                        725</label></td>
                      <td class="eventreg_text"><label>
                        <input name="chk_price_11" type="checkbox" id="chk_price_11" value="475" <?php if($get_data_03 ==true && $get_data_03['a_price_t'] == 475){echo "checked=\"checked\" ";}?>>
                        575</label></td>
                      <td class="eventreg_text"><label>
                        <input name="chk_price_12" type="checkbox" id="chk_price_12" value="625" <?php if($get_data_03 ==true && $get_data_03['a_price_s'] == 625){echo "checked=\"checked\" ";}?>>
                        775</label></td>
                      </tr>
                    <tr>
                      <td class="eventreg_text"><label><input name="chk_04" type="checkbox" id="chk_04" value="4" <?php if($get_data_04 ==true && $get_data_04['question'] == 4){echo "checked=\"checked\" ";}?>>
                        Asian Credit Union Forum <strong><u>PLUS</u></strong> General Meeting,&nbsp;Sept. 5-10. 2012 </label> </td>
                      <td class="eventreg_text"><label>
                        <input name="chk_price_13" type="checkbox" id="chk_price_13" value="500" <?php if($get_data_04 ==true && $get_data_04['e_price_t'] == 500){echo "checked=\"checked\" ";}?>>
                        625</label></td>
                      <td class="eventreg_text"><label>
                        <input name="chk_price_14" type="checkbox" id="chk_price_14" value="675" <?php if($get_data_04 ==true && $get_data_04['e_price_s'] == 675){echo "checked=\"checked\" ";}?>>
                        875
                        </label></td>
                      <td class="eventreg_text"><label>
                        <input name="chk_price_15" type="checkbox" id="chk_price_15" value="550" <?php if($get_data_04 ==true && $get_data_04['a_price_t'] == 550){echo "checked=\"checked\" ";}?>>
                        675
                        </label></td>
                      <td class="eventreg_text"><label>
                        <input name="chk_price_16" type="checkbox" id="chk_price_16" value="725" <?php if($get_data_04 ==true && $get_data_04['a_price_s'] == 725){echo "checked=\"checked\" ";}?>>
                        925
                        </label></td>
                      </tr>
                    <tr>
                      <td class="eventreg_text"><label>
                        <input name="chk_05" type="checkbox" id="chk_05" value="5" <?php if($get_data_05 ==true && $get_data_05['question'] == 5){echo "checked=\"checked\" ";}?>>
                        Non-Member Fee (added  if registrant is not an affiliate of ACCU member).</label></td>
                      <td valign="middle" class="eventreg_text"><label>
                        <input name="chk_price_17" type="checkbox" id="chk_price_17" value="50" <?php if($get_data_05 ==true && $get_data_05['e_price_t'] == 50){echo "checked=\"checked\" ";}?>>
                        50
                        </label></td>
                      <td class="eventreg_text"><label>
                        <input name="chk_price_18" type="checkbox" id="chk_price_18" value="50" <?php if($get_data_05 ==true && $get_data_05['e_price_s'] == 50){echo "checked=\"checked\" ";}?>>
                        50
                        </label></td>
                      <td class="eventreg_text"><label>
                        <input name="chk_price_19" type="checkbox" id="chk_price_19" value="50" <?php if($get_data_05 ==true && $get_data_05['a_price_t'] == 50){echo "checked=\"checked\" ";}?>>
                        50
                        </label></td>
                      <td class="eventreg_text"><label>
                        <input name="chk_price_20" type="checkbox" id="chk_price_20" value="50" <?php if($get_data_05 ==true && $get_data_05['a_price_s'] == 50){echo "checked=\"checked\" ";}?>>
                        50 </label></td>
                      </tr>
                    <tr>
                      <td height="23" class="reg_table_coloum">Total</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    </table></td>
                </tr>
                </table></td>
            </tr>
            </table>
        </form>
    </td>
  </tr>
  <tr>
    <td colspan="3">
    <form action="Controller/registrationr_control.php?mode=reg_04" method="post" name="form4">
        <table width="100%" border="0">
            <tr>
              <td width="88%" class="banner_text"><h3>Registration Form  >> Payment Information</h3></td>
              </tr>
            <tr>
              <td><span class="errormsg">
                <?php include('common/registration_massage.php'); ?>
                <input type="hidden" name="hdn_reg_id" id="hdn_reg_id" value="<?php echo $reg_id; ?>">
</span></td>
              </tr>
            <tr>
              <td><table width="100%" border="0">
                <tr>
                  <td>&nbsp;</td>
                  </tr>
                <tr>
                  <td class="eventreg_text"><label >
                    <input name="chk_06" type="checkbox" id="chk_06" value="6" <?php if($get_data_06 == true && $get_data_06['question'] == 6){echo "checked=\"checked\" ";}?>></label> 
                    Bank draft of US$  
                    <input name="txt_bank_draft" type="text" disabled class="r_texbox" id="txt_bank_draft" value="<?php if($get_data_06 == true){echo $get_data_06['e_price_t']; }?>" size="20"> 
                    is enclosed.&nbsp; 
                    </td>
                  </tr>
                <tr>
                  <td class="eventreg_text"><label>
                    <input name="chk_07" type="checkbox" id="chk_07" value="7" <?php if($get_data_07 == true && $get_data_07['question'] == 7){echo "checked=\"checked\" ";}?>></label>
                    Bank transfer of US$  
                    <input name="txt_bank_transfer" type="text" disabled class="r_texbox" id="txt_bank_transfer" value="<?php if($get_data_07 == true){echo $get_data_07['e_price_t']; }?>" size="20"> 
                    was made to the ACCU. Bank receipt is enclosed.&nbsp;&nbsp;&nbsp;&nbsp; <strong>&nbsp;&nbsp;</strong></td>
                  </tr>
                <tr>
                  <td><table width="80%" border="0" align="center">
                    <tr>
                      <td width="15%" class="aboutusbod">Bank Name</td>
                      <td width="3%">:</td>
                      <td width="82%" class="eventreg_text">Bangkok Bank Public  Company Limited </td>
                      </tr>
                    <tr>
                      <td class="aboutusbod">Branch</td>
                      <td>:</td>
                      <td class="eventreg_text">Khlongchan</td>
                      </tr>
                    <tr>
                      <td class="aboutusbod">Account No.</td>
                      <td>:</td>
                      <td class="eventreg_text">156-4-30210-5</td>
                      </tr>
                    <tr>
                      <td class="aboutusbod">Account Type</td>
                      <td>: </td>
                      <td class="eventreg_text">Savings</td>
                      </tr>
                    <tr>
                      <td class="aboutusbod">Swift Code</td>
                      <td>:</td>
                      <td class="eventreg_text">BKKBTHBK</td>
                      </tr>
                    <tr>
                      <td valign="top" class="aboutusbod">Address</td>
                      <td>:</td>
                      <td valign="top" class="eventreg_text"> No. 52, Seri Thai Road, Bangkapi, Bangkok 10240, Thailand.</td>
                      </tr>
                    <tr>
                      <td colspan="3" class="eventreg_text">Bank receipt is  enclosed.</td>
                      </tr>
                    </table></td>
                  </tr>
                
                <tr>
                  <td class="eventreg_text">&nbsp;</td>
                  </tr>
                <tr>
                  <td class="eventreg_text"><label>
                    <input name="chk_08" type="checkbox" id="chk_08" value="8" <?php if($get_data_08 == true && $get_data_08['question'] == 8){echo "checked=\"checked\" ";}?>></label>
                    Payment of US$
                    <input name="txt_payment_01" type="text" disabled class="r_texbox" id="txt_payment_01" value="<?php if($get_data_08 == true){echo $get_data_08['e_price_t']; }?>" size="20"> 
                    was made to the national federation </td>
                  </tr>
                <tr>
                  <td class="eventreg_text"><input name="txt_payment_02" type="text" class="r_texbox" id="txt_payment_02" value="<?php if($get_data_08 == true){echo $get_data_08['e_price_s']; }?>" size="30" readonly="readonly"> 
                    as per Official Receipt of which copy is  enclosed.</td>
                  </tr>
              </table></td>
              </tr>
            </table>
        </form>
    </td>
    </tr>
  <tr>
    <td colspan="3">
     <form action="Controller/registrationr_control.php?mode=reg_05" method="post" name="form5">
        <table width="100%" border="0">
            <tr>
              <td width="88%" class="banner_text"><h3>Registration Form  >> Lodging</h3></td>
              </tr>
            <tr>
              <td><span class="errormsg">
                <?php include('common/registration_massage.php'); ?>
                <input type="hidden" name="hdn_reg_id" id="hdn_reg_id" value="<?php echo $reg_id; ?>">
</span></td>
              </tr>
            <tr>
              <td><table width="100%" border="0">
                <tr>
                  <td colspan="3" class="eventreg_text"><span class="About_US_link_This">ACCOMODATION and Meeting Packages </span></td>
                  </tr>
                <tr>
                  <td width="33%" class="eventreg_text">Type of Room required</td>
                  <td width="4%">:</td>
                  <td width="63%"><table width="100%" border="0">
                    <tr class="eventreg_text">
                      <td width="21%"><label>
                        <input name="chk_room_01" type="checkbox" id="chk_room_01" value="1" <?php if($get_data9['room_type'] == 1 || $get_data9['room_type'] == 3 ){echo "checked=\"checked\" ";}?>>Non-Smoking </label>                      </td>
                      <td width="27%"><label>
                        <input type="checkbox" name="chk_room_02" id="chk_room_02" value="2"  <?php if($get_data9['room_type'] == 2 || $get_data9['room_type'] == 3 ){echo "checked=\"checked\" ";}?>>Smoking
                        </label></td>
                      <td width="46%">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                <tr>
                  <td class="eventreg_text">Check in Date</td>
                  <td>:</td>
                  <td><label>
                    <input name="txt_chkin_date" type="text" disabled class="r_texbox" id="txt_chkin_date" value="<?php echo $get_data9['chk_in_date']; ?>" size="15">
                    </label></td>
                  </tr>
                <tr>
                  <td class="eventreg_text">Check out Date</td>
                  <td>:</td>
                  <td><label>
                    <input name="txt_chkout_date" type="text" disabled class="r_texbox" id="txt_chkout_date" value="<?php echo $get_data9['chk_out_date']; ?>" size="15">
                    </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table></td>
              </tr>
            </table>
        </form>
    </td>
    </tr>
  <tr>
    <td colspan="3">
    <form action="Controller/registrationr_control.php?mode=reg_07" method="post" name="form5">
<table width="100%" border="0">
            <tr>
              <td width="88%" class="banner_text"><h3>Registration Form  >> Travel Information – Return</h3></td>
              </tr>
            <tr>
              <td> <span class="errormsg">
                <?php include('common/registration_massage.php'); ?>
                <input type="hidden" name="hdn_reg_id" id="hdn_reg_id" value="<?php echo $reg_id; ?>">
</span></td>
              </tr>
            <tr>
              <td><table width="100%" border="0">
                <tr>
                  <td width="33%" class="eventreg_text">Airline</td>
                  <td width="4%">:</td>
                  <td width="63%"><span id="sprytextfield1">
                    <label>
                      <input name="txt_airline" type="text" disabled class="r_texbox" id="txt_airline" value="<?php echo $get_data['d_airline']; ?>" size="40">
                    </label>
                    </span></td>
                  </tr>
                <tr>
                  <td class="eventreg_text">Flight Number </td>
                  <td>:</td>
                  <td><span id="sprytextfield2">
                    <label>
                      <input name="txt_flight_no" type="text" disabled class="r_texbox" id="txt_flight_no" value="<?php echo $get_data['d_flight_no']; ?>">
                    </label>
                  </span></td>
                  </tr>
                <tr>
                  <td class="eventreg_text">Departure  City </td>
                  <td>:</td>
                  <td><span id="sprytextfield3">
                    <label>
                      <input name="txt_arrival_city" type="text" disabled class="r_texbox" id="txt_arrival_city"  value="<?php echo $get_data['d_city']; ?>">
                    </label>
                  </span></td>
                  </tr>
                <tr>
                  <td class="eventreg_text">Departure Airport </td>
                  <td>:</td>
                  <td><span id="sprytextfield4">
                    <label>
                      <input name="txt_arrival_airport" type="text" disabled class="r_texbox" id="txt_arrival_airport" value="<?php echo $get_data['d_airport']; ?>">
                    </label>
                    </span></td>
                  </tr>
                <tr>
                  <td class="eventreg_text">Date &amp; Time </td>
                  <td>:</td>
                  <td><span id="sprytextfield5">
                    <label>
                      <input name="txt_date_time" type="text" disabled class="r_texbox" id="txt_date_time" value="<?php echo $get_data['d_date_and_time']; ?>">
                    </label>
                  </span></td>
                  </tr>
                <tr>
                  <td class="eventreg_text">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  </tr>
                </table></td>
            </tr>
            </table>
        </form>
    </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
	    </div>
	    <!--/MOD_0aff5a33-3102-49f5-9e46-91d7a3735978-->
      </div>
	  <div id="primary">
<?php include("tpl/globle-afiliation.tpl");?>	
<?php include("tpl/development-partners-home.tpl");?>			
 <?php include("tpl/e-coop.tpl");?>				
 <?php include("tpl/access-tool.tpl");?>	                
 <?php include("tpl/benchmark.tpl");?>					
 <?php //include("tpl/co-op-year.tpl");?>
<?php include("tpl/social-media-sidebox.tpl");?>
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
</html>
