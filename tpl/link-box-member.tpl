<div class="widget submenu">
    <ul class="submenu">
    <?php if($page == 41){ ?>
        <li class="  current"><a href="member-category.php" ><span class="icons"></span>Members</a></li>
        <?php }else{ ?>
        <li class=" "><a href="member-category.php" ><span class="icons"></span>Members</a></li>
        <?php } ?>
         <?php 
            $m = 0;
            @$members_types = Member :: GetMemberTypes();
            for($m;$m<count($members_types);$m++){
                $member_row = each($members_types);	
                 $pageid = 	40+$m +2;
        ?>
        <?php if($page == $pageid){ ?>
        <li class="  current"><a href="members.php?mem_type_id=<?php echo $member_row["value"]["member_type_id"];?>&amp;mem_type=<?php echo $member_row["value"]["member_type_name"]; ?>&page=4<?php echo $m+2;?>"><span class="icons"></span><?php echo $member_row['value']['member_type_name'];?></a></li>
        <?php }else{ ?>
        <li class="  "><a href="members.php?mem_type_id=<?php echo $member_row["value"]["member_type_id"];?>&amp;mem_type=<?php echo $member_row["value"]["member_type_name"]; ?>&page=4<?php echo $m+2;?>"><span class="icons"></span><?php echo $member_row['value']['member_type_name'];?></a></li>
        <?php } ?>
        <?php } ?>
     </ul>
</div><!-- .widget.submenu -->
