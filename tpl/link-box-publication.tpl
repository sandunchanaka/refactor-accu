<div class="widget submenu">
    <ul class="submenu">
    <?php if($page == 31){ ?>
        <li class="  current"><a href="publications.php" ><span class="icons"></span>Library</a></li>
        <?php }else{ ?>
        <li class=" "><a href="publications.php" ><span class="icons"></span>Library</a></li>
        <?php } ?>
         <?php 
            $pt =0;
            $p_types = Member :: GetAllPublicationTypes();
            for($pt=0;$pt<count($p_types);$pt++){
                $pub_type1 = each($p_types);
                $pageid = 	30+$pt +2;
        ?>
        <?php if($page == $pageid){ ?>
        <li class="  current"><a href="publication-documents.php?pub_cat_id=<?php echo $pub_type1['value']['publication_cat_id']; ?>&cat_name=<?php echo $pub_type1['value']['pub_cat_name']; ?>&page=3<?php echo $pt+2;?>"><span class="icons"></span><?php echo $pub_type1['value']['pub_cat_name']; ?></a></li>
        <?php }else{ ?>
        <li class="  "><a href="publication-documents.php?pub_cat_id=<?php echo $pub_type1['value']['publication_cat_id']; ?>&cat_name=<?php echo $pub_type1['value']['pub_cat_name']; ?>&page=3<?php echo $pt+2;?>"><span class="icons"></span><?php echo $pub_type1['value']['pub_cat_name']; ?></a></li>
        <?php } ?>
        <?php } ?>
     </ul>
</div><!-- .widget.submenu -->
