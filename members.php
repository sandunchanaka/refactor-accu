<?php 
$page = $_GET["page"];
include("tpl/header2.tpl");?>
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
                <li class="current" ><a href="#"> <?php 
		$mem_type_name = Member :: MembertypeName($_REQUEST['mem_type_id']);
		echo $mem_type_name['member_type_name']; 
	 ?></a></li>
                
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
		        <h1><?php echo $mem_type_name['member_type_name'];?></h1>
		        
                
                <div class="content-body content-body-nobg">
		         <?php 
  	if (isset($_REQUEST['mem_type_id'])){?>
               
		          

       <?php  if($_REQUEST['mem_type_id'] == 4){
	   			
				$result_affmem_con=Member::Getmember_country(4);
					for($x=0;$x<count($result_affmem_con);$x++)
					{
						$row_affmem_con=each($result_affmem_con);
				
				
		   ?>
        
          
         			<?php 
						$result_country_name=Member::GetCountry_name($row_affmem_con['value']['country_id']);	?>
                        <h3><span><?php echo($result_country_name['country_name']); ?></span></h3>
                    <?php
						
						$i=0;
						$result_affmem=Member::Getmember_new(4,$row_affmem_con['value']['country_id']);
						
						for($a=0;$a<count($result_affmem);$a++)
						{
							$row=each($result_affmem);
							$i=1;
					?>
 <div class="section-body">
 <ul class="speaker-list">
                     <li class="speaker INITIAL_P"><a href="member_details.php?mem_id=<?php echo $row["member_id"]; ?>&page=<?php echo $_GET["page"]; ?>">
                    <?php if($row["member_sign"]!=NULL){ ?>
                    <img src="upload_images/member_logos/thumb/<?php echo $row["member_sign"];?>" width="50" height="50" />
                   <?php } ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["value"]["member_name"];?> <?php if($row["value"]["member_abbrevation"] != "") { ?>- (<?php echo $row["value"]["member_abbrevation"].")"; } ?></a>
                   <span class="countryflg" style="float:right;"><a href="member_details.php?mem_id=<?php echo $row["value"]["member_id"]; ?>"><img src="upload_images/Country_flag/thumb/<?php echo $result_country_name["country_flag"];?>" /></a></span>
        <span class="designation">Address : <?php 
									
							if($row['value']['street1']!='')
							{
								echo $row['value']['street1'];
							}
							if($row['value']['street2']!='')
							{
								echo ','.$row['value']['street2'];
							}
							if($row['value']['city']!='')
							{
								echo ','.$row['value']['city'];
							}	
							if($row['value']['postal_code']!='')
							{
								echo ','.$row['value']['postal_code'];
							}
							if($result_country_name['country_name'] !='')
							{
								echo ' - '.$result_country_name['country_name'];
							}
						
					?> </span>
                    <?php if($row["value"]["phone_no"] != "") { ?>
        <span class="company">Tel : <?php  echo $row["value"]["phone_no"]; ?></span>,<br/><?php }?>
        <?php if ($row["value"]["email"] != "") { ?>
        <span class="country" style="padding-left:12px;">Email : <?php  echo $row["value"]["email"]; ?></span>
        <?php }?>
        
        </li>
           
        </ul>
        </div>
          <?php }?>
          

         <?php }}
		 		else {
					$i=0;
					$member = Member::Getmember($_REQUEST['mem_type_id']);
					foreach ($member as $row) {	
					
					
		  ?>
           <div class="section-body">
 <ul class="speaker-list">
                    <li class="speaker INITIAL_P"><a href="member_details.php?mem_id=<?php echo $row["member_id"]; ?>&page=<?php echo $_GET["page"]; ?>">
                    <?php if($row["member_sign"]!=NULL){ ?>
                    <img src="upload_images/member_logos/thumb/<?php echo $row["member_sign"];?>" width="50" height="50" />
                   <?php } ?>
                   
                    &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["member_name"];?> <?php if($row["member_abbrevation"] != "") { ?>- (<?php echo $row["member_abbrevation"].")"; } ?></a>
                    <span class="countryflg" style="float:right;"><a href="member_details.php?mem_id=<?php echo $row["member_id"]; ?>"><img src="upload_images/Country_flag/thumb/<?php echo $row["country_flag"];?>" /></a></span>
        <span class="designation">Address : <?php 
									
							if($row['street1']!='')
							{
								echo $row['street1'];
							}
							if($row['street2']!='')
							{
								echo ','.$row['street2'];
							}
							if($row['city']!='')
							{
								echo ','.$row['city'];
							}	
							if($row['postal_code']!='')
							{
								echo ','.$row['postal_code'];
							}
							if($result_country_name['country_name'] !='')
							{
								echo ' - '.$result_country_name['country_name'];
							}
						
					?> </span>
                    <?php if($row["phone_no"] != "") { ?>
        <span class="company">Tel : <?php  echo $row["phone_no"]; ?></span>,<br/><?php }?>
        <?php if ($row["email"] != "") { ?>
        <span class="country"  style="padding-left:12px;">Email : <?php  echo $row["email"]; ?></span>
        <?php }?>
        <!--<span id="countryimg"><img src="upload_images/Country_flag/thumb/<?php //echo $row["country_flag"];?>" width="53" height="33" style="float:right;"/></span>-->
        </li>
          
        </ul>
        </div>
          
        <?php } } ////////////////////////////////////////////////////////////////////////////////////////////////////////// ?>
      
                   <?php
				}
			  ?>
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
</html>
