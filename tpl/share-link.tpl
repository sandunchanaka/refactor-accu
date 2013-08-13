<ul>
		<li><a href="#" class="share-link"><span></span>Share</a></li>
		<li class="meta-separator">|</li>
		<li><a href="index.php" title="Go to homepage" class="home-link">Home</a></li>
		<li><a href="#" title="Send to friend" class="send-link">Send to friend</a></li>
		<li><a href="#" title="Printable version" class="print-link">Printable version</a></li>
		<li><a href="#" title="Increase font size" class="inc-font-link">Increase font size</a></li>
		<li><a href="#" title="decrease font size" class="dec-font-link">Decrease font size</a></li>
	</ul>
    <div style="display:none">
        <div id="send_to_friend_dialog" title="Send to Friend">
            <fieldset>
                <ul class="form compact-form">
                    <li class="field"><label class="required">Your Name <span class="asterisk">*</span><small>Please enter your name</small></label>
                        <div class="field-value"><input type="text" name="fromName" class="textbox required" maxlength="255" /><small></small></div>
                        <span class="clear"></span>
                    </li>
                    <li class="field"><label class="required">Your Email ID <span class="asterisk">*</span><small>Please enter your email address</small></label>
                        <div class="field-value"><input type="text" name="fromEmail" class="textbox email required" maxlength="255" /><small></small></div>
                        <span class="clear"></span>
                    </li>
                    <li class="field"><label class="required">Your Friend's Name <span class="asterisk">*</span><small>Please enter your friend's name</small></label>
                        <div class="field-value"><input type="text" name="toName" class="textbox required" maxlength="255" /><small></small></div>
                        <span class="clear"></span>
                    </li>
                    <li class="field"><label class="required">Your Friend's Email ID <span class="asterisk">*</span><small>Please enter your friend's email address</small></label>
                        <div class="field-value"><input type="text" name="toEmail" class="textbox email required" maxlength="255" /><small></small></div>
                        <span class="clear"></span>
                    </li>
                    <li class="field">
                        <label class="required">Message <span class="asterisk">*</span><small>Please enter your message</small></label>
                        <div class="field-value"><textarea name="comments" rows="5" cols="45" class="medium auto-grow limit required" maxlength="1000"></textarea><span class="clearfix"></span><small></small></div>
                        <span class="clear"></span>
                    </li>
                    <li class="actions">
                        <input type="button" class="main-button submit" value="Send" /><div class="message loading">&nbsp;</div>
                    </li>
                </ul>
            </fieldset>
            <div class="success" style="display:none;">
                Email has been sent successfully.
                <br />
                <br />
                <br />
                <br />
                <br />
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $.fi.languageId = 1;
            $.fi.languageCode = 'en-GB';

            $('a.dec-font-link').click(function (event) {
                event.preventDefault();

                var b = $('body');
                if (b.hasClass('large')) b.removeClass('large').addClass('medium');
                else {
                    b.removeClass('medium');
                }
            });

            $('a.inc-font-link').click(function (event) {
                event.preventDefault();

                var b = $('body');
                if (b.hasClass('medium')) b.removeClass('medium').addClass('large');
                else if (!b.hasClass('large')) {
                    b.addClass('medium');
                }
            });

            $('#send_to_friend_dialog').dialog({ width: 500, height: 'auto' });
            $('#send_to_friend_dialog').find('fieldset').ajaxForm({
                url:'services/AjaxHandler.asmx/SubmitSendToFriend',
                postData: function(p){
                    p.title = $.trim($(document.head).find('title').text());
                    p.link = 'index.php';
                    return p;
                }
            });

            $('a.print-link').click(function (event) {
                event.preventDefault();
                var w = window.open("Portal/print.php","Test");
            });

            $('a.send-link').click(function (event) {
                event.preventDefault();
                $('#send_to_friend_dialog').dialog('show');
            });
        });
    </script>
    
    <script type="text/javascript"> 
        var addthis_config = {
            ui_delay: 200,
            services_exclude: 'print, email'
        }
        $(document).ready(function () {
            if ($('a.share-link').length > 0) {
                $('a.share-link').addClass('addthis_button').attr('href', 'http://www.addthis.com/bookmark.php?v=300&amp;pubid=ra-50f61d0d21c698a2');
				var addthis_config = {"data_track_addressbar":true};
                var at = document.createElement('script');
                at.type = 'text/javascript';
                at.async = true;
                at.src = '//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50f61d0d21c698a2';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(at, s);
            }
        });
    </script>