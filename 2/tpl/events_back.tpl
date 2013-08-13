<div class="widget news-mini-list">

<h2 class="home"><a href="#">ACCU Events</a><a href="#" class="icons feed-icon">News RSS Feed</a></h2>

    

<div class="news-listing meta-dynamic-content-container" style="height: 403px;">

	<ul class="listing absolute" style="height: 403px;">

   <?php 

								$event = Events::GetEvents();	

								//echo count($event);

								for($be =0;$be<count($event);$be++){

								$row_e = each($event);

    						 ?>

    <li class="news news-with-image first" style="width: 350px; display: list-item;">

    	<div class="image-thumbnail">

        <a href="#"><img src="content/siteimages/no-image_220x147.jpg" alt="Sun Shines on Renewable Energy as an Economic Force "></a>

        </div>

        <div class="details"><span class="date" title="17/12/2012"><?php echo $row_e["value"]['event_starting_date'];?> <!--////Monday December 17, 2012--></span>

        <h4><a href="#" title="<?=nl2br($row_e["value"]["event_name"])?>"><?=nl2br($row_e["value"]["event_name"])?></a></h4>

        <p class="excerpt"><span class="meta-info">

        <a href="#" class="read-more">read more…</a></span></p></div>

        <span class="clear"></span>

    </li>

     <?php } ?>



     </ul><!-- .listing -->

</div><!-- .news-listing.meta-dynamic-content-container -->

	

    <ul class="pager">

    	<li class="meta-dotted-pages"><a href="#" title="Go to page 5" class="icons gray-bullet-icon">Page 5</a></li>

    	<li class="meta-dotted-pages"><a href="#" title="Go to page 4" class="icons gray-bullet-icon">Page 4</a></li>

        <li class="meta-dotted-pages"><a href="#" title="Go to page 3" class="icons gray-bullet-icon">Page 3</a></li>

        <li class="meta-dotted-pages current"><a href="#" title="Go to page 2" class="icons gray-bullet-icon">Page 2</a></li>

        <li class="meta-dotted-pages"><a href="#" title="Go to page 1" class="icons gray-bullet-icon">Page 1</a></li>

        <li class="meta-all-items">

			<a href="#" title="View all news items">View All</a>

		</li>

	</ul> <!-- .pager -->

    

</div>





<hr />