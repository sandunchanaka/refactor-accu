<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center">
    <?php 
    echo $pages->display_pages();
    echo "<span style=\"margin-left:25px\"> ". $pages->display_jump_menu(). $pages->display_items_per_page() . "</span>";
    echo "Page $pages->current_page of $pages->num_pages";  echo "&nbsp;&nbsp;&nbsp;&nbsp;  Total No of Records ".$pages->items_total;
    ?>
    </td>
  </tr>
</table>