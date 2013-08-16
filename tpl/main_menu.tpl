<div id="main-menu">
<ul class="primary-navigation">

    <li class="first"><span class="tl corner"></span><span class="bl corner"></span><a href="index.php" class=""><span class="toi">HOME</span></a>
        <!--<ul class="level-two">
        <li class=" "><a href="Portal/about-us/overview.php" class="second-level">Defence Seminar 2013</a></li>
           <li class=" "><a href="Portal/about-us/2012Seminar.php" class="second-level">Defence Seminar 2012</a></li>
           <li class=" "><a href="Portal/about-us/2011Seminar.php" class="second-level">Defence Seminar 2011</a></li>
        <li class=" last"><a href="Portal/about-us/Theslarmy.php" class="second-level">The Sri Lanka Army</a></li>
        </ul>-->
    </li>
	<li class="first"><a href="#" class=""><span class="toi">ABOUT US</span></a>
        <ul class="level-two">
         <li class=" "><a href="introduction.php" class="second-level">Introduction</a></li>
        <li class=" "><a href="membership.php" class="second-level">Membership</a></li>
        <li class=" "><a href="organizational-structure.php" class="second-level">Organizational Structure</a></li>
        <li class=" "><a href="board-of-directors.php" class="second-level">Board of Directors</a></li>
        <li class=" "><a href="management.php" class="second-level">Management</a></li>
        <li class=" "><a href="product-and-services.php" class="second-level">Products And Services</a></li>
        <li class=" "><a href="awardees.php" class="second-level">Awardees</a></li>
        <li class=" "><a href="careers.php" class="second-level">Careers </a></li>
        </ul>
	</li>
    <li class="first"><a href="publications.php"  onclick="window.location.href='publications.php'" class=""><span class="toi">LIBRARY</span></a>
        <ul class="level-two">
        <?php 
            $pt =0;
            @$p_types = Member :: GetAllPublicationTypes();
            for($pt=0;$pt<count($p_types);$pt++){
                $pub_type1 = each($p_types);	
        ?>
        <li class=" "><a href="publication-documents.php?pub_cat_id=<?php echo $pub_type1['value']['publication_cat_id']; ?>&cat_name=<?php echo $pub_type1['value']['pub_cat_name']; ?>&page=3<?php echo $pt+2;?>" class="second-level"><?php echo $pub_type1['value']['pub_cat_name']; ?></a></li>
        <?php } ?>
        
        </ul>
	</li>
        <li class="first"><a href="member-category.php" class="" onclick="window.location.href='member-category.php'"><span class="toi">MEMBERS</span></a>
        <ul class="level-two">
        <?php 
            $m = 0;
            @$members_types = Member :: GetMemberTypes();
            for($m;$m<count($members_types);$m++){
                $member_row = each($members_types);	
        ?>
        <li class=" "><a href="members.php?mem_type_id=<?php echo $member_row["value"]["member_type_id"];?>&amp;mem_type=<?php echo $member_row["value"]["member_type_name"]; ?>&page=4<?php echo $m+2;?>" class="second-level"><?php echo $member_row['value']['member_type_name'];?></a></li>
        <?php } ?>
        </ul>
	</li>
    <li class="first"><a href="cu-solutions.php" class="" onclick="window.location.href='cu-solutions.php'"><span class="toi">CU SOLUTIONS</span></a>
        <ul class="level-two">
        <?php 
		  $c = 0;
		  @$cu_solution =  CU_Solutions::GetSolutions();
		  for($c;$c<count($cu_solution);$c++){
		  $cu_solution_row = each($cu_solution);			
		?>
        <li class=" "><a href="cu-solutions.php?cusol_id=<?php echo $cu_solution_row['value']['solution_id'];?>&#name<?php echo $cu_solution_row['value']['solution_id'];?>" class="second-level"><?php echo $cu_solution_row['value']['solution_name'];?></a></li>
        <?php } ?>
        </ul>
	</li>
    <li class="first"><a href="#" class=""><span class="toi">GALLERY</span></a>
        <ul class="level-two">
        <li class=" "><a href="photogallery.php" class="second-level">Photo Gallery</a></li>
        <li class=" "><a href="#" class="second-level">Video Gallery</a></li>
        </ul>
	</li>
<li class="first"><a href="http://www.aaccu.asia/accu-forum/" class=""><span class="toi">FORUM</span></a>
	</li>

</ul><!-- .primary-navigation -->
    <ul class="primary-navigation">
      <li class="first"><span class="tr corner"></span><span class="br corner"></span><a href="contact-us.php" class=""><span class="toi">CONTACT US</span></a>
        
      </li>
    </ul>
    <span class="clear"></span>
    <p></p>
</div><!-- #main-menu -->
<script type="text/javascript">
//<![CDATA[
    $(document).ready(function () {
        $('#main-menu ul.primary-navigation a.first-level').textToImage({ styleName: 'mainmenu', languageCode: 'en-gb', direction: 'ltr', enableHover: false, keepText: true, callback: function (e) { e.parent().addClass('loaded'); } });
        // select current item
        var href = window.location.href.toLowerCase();
        if (href.indexOf('index.php') > 0) {
            var item = $('#main-menu ul li a[href*="index.php"]');
            item.parent().addClass('selected');
        } else {
            var item = null;
            $('#main-menu ul li a').each(function () {
                if (href.indexOf($(this).attr('href')) > 0) {
                    item = $(this);
                }
            });
            if (item != null) {
                item.parents('li:last').addClass('selected');
            }
        }

        //remove click on items with child nodes
        $('#main-menu ul.primary-navigation').children().each(function () {
            if ($(this).find('ul').length > 0) {
                $(this).find('a:first').click(function (event) {
                    event.preventDefault();
                });
            }
        });
        jqueryslidemenu.buildmenu('main-menu');
    });
// ]]>
</script>
<span class="clearfix"></span>
