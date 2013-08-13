<?php
require_once ('../includes/config.php');
require_once('../classes/db.class.php');

$bd = mysql_connect(DB_HOST, DB_USER, DB_PWD) or die("DB_HOST, DB_USER, DB_PWD");
mysql_select_db(DB_DB, $bd) or die(DB_DB);

if($_POST['page']) {
	$page = $_POST['page'];
	$cur_page = $page;
	$page -= 1;
	$per_page = 1;
	$previous_btn = true;
	$next_btn = true;
	$first_btn = true;
	$last_btn = true;
	$start = $page * $per_page;
	
	$query_pag_data = "SELECT * from  testimonials LIMIT $start, $per_page";
	$result_pag_data = mysql_query($query_pag_data) or die('MySql Error' . mysql_error());
	$msg = "";
	
	$msg .= '<h2>Testimonials</h2>';
		$msg .= '<div class="testimonials">';
			$msg .= '<ul class="listing general-listing">';
				
				while ($row = mysql_fetch_array($result_pag_data)) {
	
					$msg .= '<li data-page="1" class="testimonial testimonial-with-image">';
					$msg .= '<div class="details">';
						//$msg .= '<a href="#"><img src="content/siteimages/no-image_220x147.jpg" alt="Sun Shines on Renewable Energy as an Economic Force "></a>';
						//$msg .= '</div>';
						//$getdate = strtotime($row['event_starting_date']);
						//$msg .= '<div class="details"><span class="date" title="'.date("l F d, Y", $getdate).'">'.date("l F d, Y", $getdate).'</span>';
						$msg .='<h3>'.$row['t_heading'].'</h3>';
						$msg .= '<p>'.$row['t_message'].'</p>';
						$msg .= '<span class="meta-name">'.$row['t_writter'].'</span>';
						$msg .= '</div>';
						$msg .= '<span class="clear"></span>';
					$msg .= '</li>';
	
			 }
			 
		   $msg .= '</ul>';
		$msg .= '</div>';
		
	$msg = "<div class='data'><ul>" . $msg . "</ul></div>"; // Content for Data
	
	
	/* --------------------------------------------- */
	$query_pag_num = "SELECT COUNT(*) AS count FROM testimonials";
	$result_pag_num = mysql_query($query_pag_num);
	$row = mysql_fetch_array($result_pag_num);
	$count = $row['count'];
	$no_of_paginations = ceil($count / $per_page);
	
	/* ---------------Calculating the starting and endign values for the loop----------------------------------- */
	if ($cur_page >= 7) {
		$start_loop = $cur_page - 3;
		if ($no_of_paginations > $cur_page + 3)
			$end_loop = $cur_page + 3;
		else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
			$start_loop = $no_of_paginations - 6;
			$end_loop = $no_of_paginations;
		} else {
			$end_loop = $no_of_paginations;
		}
	} else {
		$start_loop = 1;
		if ($no_of_paginations > 7)
			$end_loop = 7;
		else
			$end_loop = $no_of_paginations;
	}
	/* ----------------------------------------------------------------------------------------------------------- */
	$msg .= "<div class='pagination'><ul>";
	
	for ($i = $start_loop; $i <= $end_loop; $i++) {
		if ($cur_page == $i)
			$msg .= "<li p='$i' style='color:#fff;background-color:#006699;' class='active'></li>";
		else
			$msg .= "<li p='$i' class='active'></li>";
	}
	
	//$allrecords .="<a href='news-highlights.php' title='View all Events'>View All</a>";
	//$total_string = "<span class='total' a='$no_of_paginations'><b>" . $allrecords . "</b></span>";
	//$msg = $msg . "</ul>".$total_string."</div>";
	
	//$total_string = "<span class='total' a='$no_of_paginations'>Page <b>" . $cur_page . "</b> of <b>$no_of_paginations</b></span>";
	//$msg = $msg . "</ul>".$total_string."</div>";
	$msg = $msg . "</ul></div>";
	echo $msg;
}