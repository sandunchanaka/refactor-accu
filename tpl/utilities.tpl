<div id="utilities">
                    <!--MOD_58bdd46d-376c-47b8-9057-bfbba55b80e0-->

<ul class="xoxo">
	<li class="date">
    <?php //echo date("l").",&nbsp;&nbsp;".date("F")."&nbsp;&nbsp;".date("d").",&nbsp;&nbsp;".date("Y"); ?>
	<?php echo date("l, F d, Y"); ?>
	</li><!-- .date -->
</ul>
<span class="clear"></span>
<ul class="xoxox">
	<li class="search">
		<input type="text" id="txtHSearch" name="hSearch" value="Search Site" title="Search Site" class="textbox" />
		<input type="submit" class="search" value="Search" id="btnHSearch" />
	</li><!-- .search -->
    
	<li class="header-menu">
		<ul class="horizontal-menu">
			
     <li class="menu-item  "><a href="index.php" >Home</a></li>
            
     <li class="menu-item  "><a href="contact-us.php" >Contact Us</a></li>
            
     <li class="menu-item last "><a href="#">Advanced Search</a></li>
            
		</ul><!-- .horizontal-menu -->
	</li><!-- .header-menu -->
</ul><!-- .xoxo -->
<span class="clear"></span>
<script type="text/javascript">
    $(document).ready(function () {
        $('#btnHSearch').click(function (event) {
            event.preventDefault();
            window.location.href = 'Portal/advanced-search.aspx-query=.htm'/*tpa=http://www.worldfutureenergysummit.com/Portal/advanced-search.aspx?query=*/ + $(this).parent().find('input.textbox').val();
        });

        $('#txtHSearch').focus(function () {
            if ($(this).val().toLowerCase() == $(this).attr('title').toLowerCase()) {
                $(this).val('');
            }
        }).blur(function () {
            if ($.trim($(this).val()).length === 0) {
                $(this).val($(this).attr('title'));
            }
        }).bind('keypress', function (e) {
            var code = (e.keyCode ? e.keyCode : e.which);
            if (code == 13) { //Enter keycode
                //Do something
                e.preventDefault();
                $('#btnHSearch').click();
            }
        });
    });
</script>
				</div>
<span class="clear"></span>

			  </div><!-- #utilities -->