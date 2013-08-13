<?php 
$page = 27;
include("tpl/header2.tpl");
require_once('classes/registration.class.php');

$reg_id = 0;

$reg_id = isset( $_GET['reg_id'] )?$_GET['reg_id']:0;
if($reg_id != 0 ){	
	$get_data_01 = Registration :: Get_registration_data_back_form_three($reg_id,1);
	$get_data_02 = Registration :: Get_registration_data_back_form_three($reg_id,2);
	$get_data_03 = Registration :: Get_registration_data_back_form_three($reg_id,3);
	$get_data_04 = Registration :: Get_registration_data_back_form_three($reg_id,4);
	$get_data_05 = Registration :: Get_registration_data_back_form_three($reg_id,5);	
}

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
                <li class="" ><a href="#">Registration Form</a></li>
                
                <li class="separator">\</li>
                <li class="current" ><a href="#">Accommodation & Meeting Package</a></li>
                
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
	<div id="main">
		<div class="container">
		  <div id="content" class="print-area">
		    <!--MOD_14e32e5e-fc48-4606-87f5-30a956e95732-->
		    <div class="content-container"> <span class="clearfix"></span>
		      <h1>Accommodation & Meeting Package</h1>
		      
		      <div class="content-body content-body-nobg">
               <form action="Controller/registrationr_control.php?mode=reg_03" method="post" name="form3">
               <input type="hidden" name="hdn_reg_id" id="hdn_reg_id" value="<?php echo $reg_id; ?>">
		        <h3><span>Accommodation & Meeting Package</span></h3>
		        <table width="100%" cellspacing="0" class="general-table">
		          <tbody>
		            <tr class="header">
		              <th colspan="2" class="normal-header">Registration closes on June 30, 2013</th>
		              <th colspan="4" class="normal-header">Residential International Participants</th>
	                </tr>
	              </tbody>
		          <tbody>
		            <tr class="header">
                      <td width="2%" class="normal-td">&nbsp;</td>
		              <td width="44%" class="normal-td">&nbsp;</td>
		              <td colspan="2" align="center" class="normal-tdx"><h4>Early Bird by March 31, 2013</h4></td>
		              <td colspan="2" align="center" class="normal-tdx"><h4>Regular After March 31, 2013</h4></td>
	                </tr>
                    </tbody>
                    <tbody>
		            <tr class="header">
		              <td height="23" colspan="2" align="center" class="normal-td"><h4>EVENTS</h4></td>
		              <td width="14%" align="center" class="normal-tdx"><h4>Twin Room (in US$)</h4></td>
		              <td width="14%" align="center" class="normal-tdx"><h4>Single Room (In US$)</h4></td>
		              <td width="13%" align="center" class="normal-tdx"><h4>Twin Room (In US$)</h4></td>
		              <td width="13%" align="center" class="normal-tdx"><h4>Single Room (In US$)</h4></td>
	                </tr>
                    </tbody>
                    <tbody>
		            <tr>
		              <td class="normal-td">&nbsp;</td>
		              <td class="normal-td"><h5>Asian Credit Union Forum, September 8-15</h5></td>
		              <td class="normal-td">&nbsp;</td>
		              <td class="normal-td">&nbsp;</td>
		              <td class="normal-td">&nbsp;</td>
		              <td class="normal-td">&nbsp;</td>
	                </tr>
		            <tr>
		              <td class="normal-td">&nbsp;</td>
		              <td class="normal-td">
                      <?php 
					  echo $get_data_01['question'];
					  ?>
          <label>
            <input name="chk_hrd_01" type="checkbox" id="chk_hrd_01" value="101" <?php if($get_data_01 ==true && $get_data_01['question'] == 1){echo "checked=\"checked\" ";}?> />
            HRD/
            <input name="chk_youth_01" type="checkbox" id="chk_youth_01" value="102" <?php if($get_data_01 ==true && $get_data_01['question'] == 102){echo "checked=\"checked\" ";}?> />
            Youth/
            <input name="chk_women_01" type="checkbox" id="chk_women_01" value="103" <?php if($get_data_01 ==true && $get_data_01['question'] == 103){echo "checked=\"checked\" ";}?> />
            Women</label>
                      </td>
		              <td class="normal-td"><label>
          <input name="chk_price_01" type="checkbox" id="chk_price_01" value="985" <?php if($get_data_01 ==true && $get_data_01['e_price_t'] == 985){echo "checked=\"checked\" ";}?> />
          985</label></td>
		              <td class="normal-td"><label>
          <input name="chk_price_02" type="checkbox" id="chk_price_02" value="1350" <?php if($get_data_01 ==true && $get_data_01['e_price_s'] == 1350){echo "checked=\"checked\" ";}?> />
          1,350 </label></td>
		              <td class="normal-td"><label>
          <input name="chk_price_03" type="checkbox" id="chk_price_03" value="1085" <?php if($get_data_01 ==true && $get_data_01['a_price_t'] == 1085){echo "checked=\"checked\" ";}?> />
          1,085</label></td>
		              <td class="normal-td"><label>
          <input name="chk_price_04" type="checkbox" id="chk_price_04" value="1450" <?php if($get_data_01 ==true && $get_data_01['a_price_s'] == 1450){echo "checked=\"checked\" ";}?> />
          1,450</label></td>
	                </tr>
		            <tr>
		              <td class="normal-td"><input name="chk_02" type="checkbox" id="chk_02" value="2" <?php if($get_data_02 ==true && $get_data_02['question'] == 2){echo "checked=\"checked\" ";}?> /></td>
		              <td class="normal-td"><h5>8-16 (CEOs of ACCU member organizations)</h5></td>
		              <td class="normal-td"><label>
          <input name="chk_price_05" type="checkbox" id="chk_price_05" value=" 1100" <?php if($get_data_02 ==true && $get_data_02['e_price_t'] == 1100){echo "checked=\"checked\" ";}?> />
           1,100</label></td>
		              <td class="normal-td"><label>
          <input name="chk_price_06" type="checkbox" id="chk_price_06" value="1525" <?php if($get_data_02 ==true && $get_data_02['e_price_s'] == 1525){echo "checked=\"checked\" ";}?> />
          1,525</label></td>
		              <td class="normal-td"><label>
          <input name="chk_price_07" type="checkbox" id="chk_price_07" value="1200" <?php if($get_data_02 ==true && $get_data_02['a_price_t'] == 1200){echo "checked=\"checked\" ";}?> />
          1,200 </label></td>
		              <td class="normal-td"><label>
          <input name="chk_price_08" type="checkbox" id="chk_price_08" value="1625" <?php if($get_data_02 ==true && $get_data_02['a_price_s'] == 1625){echo "checked=\"checked\" ";}?> />
          1,625 </label></td>
	                </tr>
		            <tr>
		              <td class="normal-td"><input name="chk_03" type="checkbox" id="chk_03" value="3" <?php if($get_data_03 ==true && $get_data_03['question'] == 3){echo "checked=\"checked\" ";}?> /></td>
		              <td class="normal-td"><h5>Asian Credit Union Forum, September 11 - 15</h5></td>
		              <td class="normal-td"><label>
          <input name="chk_price_09" type="checkbox" id="chk_price_09" value="625" <?php if($get_data_03 ==true && $get_data_03['e_price_t'] == 625){echo "checked=\"checked\" ";}?> />
          625</label></td>
		              <td class="normal-td"><label>
          <input name="chk_price_10" type="checkbox" id="chk_price_10" value="850" <?php if($get_data_03 ==true && $get_data_03['e_price_s'] == 850){echo "checked=\"checked\" ";}?> />
          850</label></td>
		              <td class="normal-td"><label>
          <input name="chk_price_11" type="checkbox" id="chk_price_11" value="725" <?php if($get_data_03 ==true && $get_data_03['a_price_t'] == 725){echo "checked=\"checked\" ";}?> />
          725</label></td>
		              <td class="normal-td"><label>
          <input name="chk_price_12" type="checkbox" id="chk_price_12" value="950" <?php if($get_data_03 ==true && $get_data_03['a_price_s'] == 950){echo "checked=\"checked\" ";}?> />
          950</label></td>
	                </tr>
		            <tr>
		              <td class="normal-td"><input name="chk_04" type="checkbox" id="chk_04" value="4" <?php if($get_data_04 ==true && $get_data_04['question'] == 4){echo "checked=\"checked\" ";}?> /></td>
		              <td class="normal-td"><h5>Asian Credit Union Forum PLUS Annual General Meeting, September 11 - 16</h5></td>
		              <td class="normal-td"><label>
          <input name="chk_price_13" type="checkbox" id="chk_price_13" value="1100" <?php if($get_data_04 ==true && $get_data_04['e_price_t'] == 1100){echo "checked=\"checked\" ";}?> />
          750</label></td>
		              <td class="normal-td"><label>
          <input name="chk_price_14" type="checkbox" id="chk_price_14" value="675" <?php if($get_data_04 ==true && $get_data_04['e_price_s'] == 675){echo "checked=\"checked\" ";}?> />
          1,000 </label></td>
		              <td class="normal-td"><label>
          <input name="chk_price_15" type="checkbox" id="chk_price_15" value="850" <?php if($get_data_04 ==true && $get_data_04['a_price_t'] == 850){echo "checked=\"checked\" ";}?> />
          850 </label></td>
		              <td class="normal-td"><label>
          <input name="chk_price_16" type="checkbox" id="chk_price_16" value="1100" <?php if($get_data_04 ==true && $get_data_04['a_price_s'] == 1100){echo "checked=\"checked\" ";}?> />
          1,100 </label></td>
	                </tr>
		            <tr>
		              <td class="normal-td"><input name="chk_05" type="checkbox" id="chk_05" value="5" <?php if($get_data_05 ==true && $get_data_05['question'] == 5){echo "checked=\"checked\" ";}?> /></td>
		              <td class="normal-td"><h5>Non - Member Fee</h5></td>
		              <td class="normal-td"><label>
          <input name="chk_price_17" type="checkbox" id="chk_price_17" value="100" <?php if($get_data_05 ==true && $get_data_05['e_price_t'] == 100){echo "checked=\"checked\" ";}?> />
          100 </label></td>
		              <td class="normal-td"><label>
          <input name="chk_price_18" type="checkbox" id="chk_price_18" value="100" <?php if($get_data_05 ==true && $get_data_05['e_price_s'] == 100){echo "checked=\"checked\" ";}?> />
          100 </label></td>
		              <td class="normal-td"><label>
          <input name="chk_price_19" type="checkbox" id="chk_price_19" value="50" <?php if($get_data_05 ==true && $get_data_05['a_price_t'] == 50){echo "checked=\"checked\" ";}?> />
          100 </label></td>
		              <td class="normal-td"><label>
          <input name="chk_price_20" type="checkbox" id="chk_price_20" value="100" <?php if($get_data_05 ==true && $get_data_05['a_price_s'] == 100){echo "checked=\"checked\" ";}?> />
          100 </label></td>
	                </tr>
		            <tr>
		              <td class="normal-td">&nbsp;</td>
		              <td class="normal-td">Total</td>
		              <td colspan="4" class="normal-td">&nbsp;</td>
		              </tr>
	              </tbody>
	            </table><br><br>
                <table width="100%" border="0">
                <tr>
                  <td width="53%">&nbsp;</td>
                  <td width="10%"><input type="button" name="btn_back" id="btn_back" value="  &lt;&lt; Back    " onClick="window.location.href='registration_form_02.php?reg_id=<?php echo $reg_id; ?>'" class="pagebutton"></td>
                  <td width="37%"><input type="submit" name="btn_next" id="btn_next" value="   Next&gt;&gt;   " class="pagebutton" ></td>
                </tr>
              </table>
                <br>
<br>
                 <h4>The registration fee is inclusive of accommodation in single/twin room, field visit, conference kit, and meals from the date of arrival and breakfast on the day of departure. The date quoted includes arrival and departure.</h4>
</form>
</div>
	        </div>
		    <!--/MOD_14e32e5e-fc48-4606-87f5-30a956e95732-->
	      </div>
         
		  <!-- #content -->
<div id="primary">
<?php include("tpl/about-us-side-box.tpl");?>
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
