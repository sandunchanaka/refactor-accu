<div class="widget logo-box box"><!-- .box -->

<?php include("tpl/globle-afiliation.tpl");?>
<?php include("tpl/development-partners.tpl");?>

</div><!-- .widget.link-box -->

<script  type="text/javascript"> // <![CDATA[
$(document).ready(function() {
      $('#logo-listing-platinum').slippy({
              pageSelector: 'ul.listing',
              maxPages: 6,
              totalPages: 6,
              pageSize:1,
             autoSlide: true,
             autoSlideDelay: 4000,
             direction: 'left'
       });
     $('#logo-listing-gold').slippy({
              pageSelector: 'ul.listing',
              maxPages: 2,
              totalPages: 2,
              pageSize:1,
             autoSlide: true,
             autoSlideDelay: 5000,
             direction: 'left'
     
     });
});
//>
</script>
<!--/MOD_c5659e04-dad1-41e9-ad2f-a22be5fef04b-->