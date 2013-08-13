<?php include("tpl/header2.tpl");?>
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
                <li class="" ><a href="#">Contact us</a></li>
                
<!--                <li class="separator">\</li>
                <li class="current" ><a href="#">Photo Gallery</a></li>-->
                
    </ul>
</li>
<!--/MOD_904e4620-9cfd-4f59-a547-b87256ff6026-->
<!--MOD_25a1441f-8ac1-4d7e-be18-bf68bf52572d-->

<li class="share-utilities">
	<ul>
		<li><a href="#" class="share-link"><span></span>Share</a></li>
		<li class="meta-separator">|</li>
		<li><a href="../home-1.aspx.htm" tppabs="http://www.worldfutureenergysummit.com/portal/home.aspx" title="Go to homepage" class="home-link">Home</a></li>
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
                    p.link = '2013-exhibition-and-summit.aspx.htm'/*tpa=http://www.worldfutureenergysummit.com/Portal/about-wfes/overview/2013-exhibition-and-summit.aspx*/;
                    return p;
                }
            });

            $('a.print-link').click(function (event) {
                event.preventDefault();
                var w = window.open("../../print.aspx.htm"/*tpa=http://www.worldfutureenergysummit.com/Portal/print.aspx*/,"Test");
            });

            $('a.send-link').click(function (event) {
                event.preventDefault();
                $('#send_to_friend_dialog').dialog('show');
            });
        });
    </script>
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
	    <!--MOD_0aff5a33-3102-49f5-9e46-91d7a3735978-->
	    <div class="content-container"> <span class="clearfix"></span>
	      <h1>Register Your Interest</h1>
	      <p></p>
	      <h2 class="section-header"><span>Fields marked with ( <span class="asterisk">*</span> ) are mandatory.</span></h2>
	      <div class="section-body">
	        <fieldset id="frmRegUrInterest">
	          <ul class="form">
	            
	            <li class="field">
	              <label for="ctl19_ddlTitle" class="required">Title:<span class="asterisk">*</span><small style="display:none">Please select your title.</small></label>
	              <div class="field-value field-value-full">
	                <select name="ctl00$ctl19$ddlTitle" id="ctl19_ddlTitle" class="validate required">
	                  <option value="">Please Select</option>
	                  <option value="Mr">Mr</option>
	                  <option value="Ms">Ms</option>
	                  <option value="Mrs">Mrs</option>
	                  <option value="Miss">Miss</option>
                    </select>
	                &nbsp;
	                <div><small></small></div>
                  </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_txtFirstName" class="required"> Name:<span class="asterisk">*</span><small style="display:none">Please enter your first name.</small></label>
	              <div class="field-value field-value-full">
	                <input name="ctl00$ctl19$txtFirstName" type="text" maxlength="100" id="ctl19_txtFirstName" class="textbox validate required" />
	                &nbsp; <small></small> </div>
	              <span class="clear"></span> </li>
	            
	            <li class="field">
	              <label for="ctl19_txtCompanyName" class="required">Company Name:<span class="asterisk">*</span><small style="display:none">Please enter your company name.</small></label>
	              <div class="field-value field-value-full">
	                <input name="ctl00$ctl19$txtCompanyName" type="text" maxlength="300" id="ctl19_txtCompanyName" class="textbox validate required" />
	                <small></small> &nbsp; </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_txtMailingAddress" class="required">Mailing Address:<span class="asterisk">*</span><small style="display:none">Please enter your mailing address.</small></label>
	              <div class="field-value field-value-full">
	                <textarea name="ctl00$ctl19$txtMailingAddress" rows="2" cols="20" id="ctl19_txtMailingAddress" class="medium validate required autolimit">
        </textarea>
	                <small></small> &nbsp; </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_txtPOBox" class="required">PO Box / Post Code:<span class="asterisk">*</span><small style="display:none">Please enter your P.O. Box number or Post Code.</small></label>
	              <div class="field-value field-value-full">
	                <input name="ctl00$ctl19$txtPOBox" type="text" maxlength="300" id="ctl19_txtPOBox" class="textbox validate required" />
	                <small></small> &nbsp; </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_txtCity" class="required">City / Town:<span class="asterisk">*</span><small style="display:none">Please enter your city / town name</small></label>
	              <div class="field-value field-value-full">
	                <input name="ctl00$ctl19$txtCity" type="text" maxlength="300" id="ctl19_txtCity" class="textbox validate required" />
	                <small></small> &nbsp; </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_txtState">State / Province:<small style="display:none">Please enter your state / province name</small></label>
	              <div class="field-value field-value-full">
	                <input name="ctl00$ctl19$txtState" type="text" maxlength="300" id="ctl19_txtState" class="textbox" />
                  </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_ddlCountry" class="required">Country:<span class="asterisk">*</span><small style="display:none">Please select your country.</small></label>
	              <div class="field-value field-value-full">
	                <select name="ctl00$ctl19$ddlCountry" id="ctl19_ddlCountry" class="validate required">
	                  <option value="">Please Select</option>
	                  <option value="AE">United Arab Emirates</option>
	                  <option value="US">United States</option>
	                  <option value="GB">United Kingdom</option>
	                  <option value="FR">France</option>
	                  <option value="CA">Canada</option>
	                  <option value="">---------------------------------</option>
	                  <option value="AF">Afghanistan</option>
	                  <option value="AX">Aland Islands</option>
	                  <option value="AL">Albania</option>
	                  <option value="DZ">Algeria</option>
	                  <option value="AS">American Samoa</option>
	                  <option value="AD">Andorra</option>
	                  <option value="AO">Angola</option>
	                  <option value="AI">Anguilla</option>
	                  <option value="AQ">Antarctica</option>
	                  <option value="AG">Antigua And Barbuda</option>
	                  <option value="AR">Argentina</option>
	                  <option value="AM">Armenia</option>
	                  <option value="AW">Aruba</option>
	                  <option value="AU">Australia</option>
	                  <option value="AT">Austria</option>
	                  <option value="AZ">Azerbaijan</option>
	                  <option value="BS">Bahamas</option>
	                  <option value="BH">Bahrain</option>
	                  <option value="BD">Bangladesh</option>
	                  <option value="BB">Barbados</option>
	                  <option value="BY">Belarus</option>
	                  <option value="BE">Belgium</option>
	                  <option value="BZ">Belize</option>
	                  <option value="BJ">Benin</option>
	                  <option value="BM">Bermuda</option>
	                  <option value="BT">Bhutan</option>
	                  <option value="BO">Bolivia, Plurinational State Of</option>
	                  <option value="BQ">Bonaire, Saint Eustatius And Saba</option>
	                  <option value="BA">Bosnia And Herzegovina</option>
	                  <option value="BW">Botswana</option>
	                  <option value="BV">Bouvet Island</option>
	                  <option value="BR">Brazil</option>
	                  <option value="IO">British Indian Ocean Territory</option>
	                  <option value="BN">Brunei Darussalam</option>
	                  <option value="BG">Bulgaria</option>
	                  <option value="BF">Burkina Faso</option>
	                  <option value="BI">Burundi</option>
	                  <option value="KH">Cambodia</option>
	                  <option value="CM">Cameroon</option>
	                  <option value="CA">Canada</option>
	                  <option value="CV">Cape Verde</option>
	                  <option value="KY">Cayman Islands</option>
	                  <option value="CF">Central African Republic</option>
	                  <option value="TD">Chad</option>
	                  <option value="CL">Chile</option>
	                  <option value="CN">China</option>
	                  <option value="CX">Christmas Island</option>
	                  <option value="CC">Cocos (Keeling) Islands</option>
	                  <option value="CO">Colombia</option>
	                  <option value="KM">Comoros</option>
	                  <option value="CG">Congo</option>
	                  <option value="CD">Congo, The Democratic Republic Of The</option>
	                  <option value="CK">Cook Islands</option>
	                  <option value="CR">Costa Rica</option>
	                  <option value="CI">Cote D&#39;Ivoire</option>
	                  <option value="HR">Croatia</option>
	                  <option value="CU">Cuba</option>
	                  <option value="CW">Curacao</option>
	                  <option value="CY">Cyprus</option>
	                  <option value="CZ">Czech Republic</option>
	                  <option value="DK">Denmark</option>
	                  <option value="DJ">Djibouti</option>
	                  <option value="DM">Dominica</option>
	                  <option value="DO">Dominican Republic</option>
	                  <option value="EC">Ecuador</option>
	                  <option value="EG">Egypt</option>
	                  <option value="SV">El Salvador</option>
	                  <option value="GQ">Equatorial Guinea</option>
	                  <option value="ER">Eritrea</option>
	                  <option value="EE">Estonia</option>
	                  <option value="ET">Ethiopia</option>
	                  <option value="FK">Falkland Islands (Malvinas)</option>
	                  <option value="FO">Faroe Islands</option>
	                  <option value="FJ">Fiji</option>
	                  <option value="FI">Finland</option>
	                  <option value="FR">France</option>
	                  <option value="GF">French Guiana</option>
	                  <option value="PF">French Polynesia</option>
	                  <option value="TF">French Southern Territories</option>
	                  <option value="GA">Gabon</option>
	                  <option value="GM">Gambia</option>
	                  <option value="GE">Georgia</option>
	                  <option value="DE">Germany</option>
	                  <option value="GH">Ghana</option>
	                  <option value="GI">Gibraltar</option>
	                  <option value="GR">Greece</option>
	                  <option value="GL">Greenland</option>
	                  <option value="GD">Grenada</option>
	                  <option value="GP">Guadeloupe</option>
	                  <option value="GU">Guam</option>
	                  <option value="GT">Guatemala</option>
	                  <option value="GG">Guernsey</option>
	                  <option value="GN">Guinea</option>
	                  <option value="GW">Guinea-Bissau</option>
	                  <option value="GY">Guyana</option>
	                  <option value="HT">Haiti</option>
	                  <option value="HM">Heard Island And Mcdonald Islands</option>
	                  <option value="VA">Holy See (Vatican City State)</option>
	                  <option value="HN">Honduras</option>
	                  <option value="HK">Hong Kong</option>
	                  <option value="HU">Hungary</option>
	                  <option value="IS">Iceland</option>
	                  <option value="IN">India</option>
	                  <option value="ID">Indonesia</option>
	                  <option value="IR">Iran, Islamic Republic Of</option>
	                  <option value="IQ">Iraq</option>
	                  <option value="IE">Ireland</option>
	                  <option value="IM">Isle Of Man</option>
	                  <option value="IT">Italy</option>
	                  <option value="JM">Jamaica</option>
	                  <option value="JP">Japan</option>
	                  <option value="JE">Jersey</option>
	                  <option value="JO">Jordan</option>
	                  <option value="KZ">Kazakhstan</option>
	                  <option value="KE">Kenya</option>
	                  <option value="KI">Kiribati</option>
	                  <option value="KP">Korea, Democratic People&#39;S Republic Of</option>
	                  <option value="KR">Korea, Republic Of</option>
	                  <option value="KW">Kuwait</option>
	                  <option value="KG">Kyrgyzstan</option>
	                  <option value="LA">Lao People&#39;S Democratic Republic</option>
	                  <option value="LV">Latvia</option>
	                  <option value="LB">Lebanon</option>
	                  <option value="LS">Lesotho</option>
	                  <option value="LR">Liberia</option>
	                  <option value="LY">Libyan Arab Jamahiriya</option>
	                  <option value="LI">Liechtenstein</option>
	                  <option value="LT">Lithuania</option>
	                  <option value="LU">Luxembourg</option>
	                  <option value="MO">Macao</option>
	                  <option value="MK">Macedonia, The Former Yugoslav Republic Of</option>
	                  <option value="MG">Madagascar</option>
	                  <option value="MW">Malawi</option>
	                  <option value="MY">Malaysia</option>
	                  <option value="MV">Maldives</option>
	                  <option value="ML">Mali</option>
	                  <option value="MT">Malta</option>
	                  <option value="MH">Marshall Islands</option>
	                  <option value="MQ">Martinique</option>
	                  <option value="MR">Mauritania</option>
	                  <option value="MU">Mauritius</option>
	                  <option value="YT">Mayotte</option>
	                  <option value="MX">Mexico</option>
	                  <option value="FM">Micronesia, Federated States Of</option>
	                  <option value="MD">Moldova, Republic Of</option>
	                  <option value="MC">Monaco</option>
	                  <option value="MN">Mongolia</option>
	                  <option value="ME">Montenegro</option>
	                  <option value="MS">Montserrat</option>
	                  <option value="MA">Morocco</option>
	                  <option value="MZ">Mozambique</option>
	                  <option value="MM">Myanmar</option>
	                  <option value="NA">Namibia</option>
	                  <option value="NR">Nauru</option>
	                  <option value="NP">Nepal</option>
	                  <option value="NL">The Netherlands</option>
	                  <option value="NC">New Caledonia</option>
	                  <option value="NZ">New Zealand</option>
	                  <option value="NI">Nicaragua</option>
	                  <option value="NE">Niger</option>
	                  <option value="NG">Nigeria</option>
	                  <option value="NU">Niue</option>
	                  <option value="NF">Norfolk Island</option>
	                  <option value="MP">Northern Mariana Islands</option>
	                  <option value="NO">Norway</option>
	                  <option value="OM">Oman</option>
	                  <option value="PK">Pakistan</option>
	                  <option value="PW">Palau</option>
	                  <option value="PS">Palestinian Territory, Occupied</option>
	                  <option value="PA">Panama</option>
	                  <option value="PG">Papua New Guinea</option>
	                  <option value="PY">Paraguay</option>
	                  <option value="PE">Peru</option>
	                  <option value="PH">Philippines</option>
	                  <option value="PN">Pitcairn</option>
	                  <option value="PL">Poland</option>
	                  <option value="PT">Portugal</option>
	                  <option value="PR">Puerto Rico</option>
	                  <option value="QA">Qatar</option>
	                  <option value="RE">Reunion</option>
	                  <option value="RO">Romania</option>
	                  <option value="RU">Russian Federation</option>
	                  <option value="RW">Rwanda</option>
	                  <option value="BL">Saint Barthelemy</option>
	                  <option value="SH">Saint Helena, Ascension And Tristan Da Cunha</option>
	                  <option value="KN">Saint Kitts And Nevis</option>
	                  <option value="LC">Saint Lucia</option>
	                  <option value="MF">Saint Martin (French Part)</option>
	                  <option value="PM">Saint Pierre And Miquelon</option>
	                  <option value="VC">Saint Vincent And The Grenadines</option>
	                  <option value="WS">Samoa</option>
	                  <option value="SM">San Marino</option>
	                  <option value="ST">Sao Tome And Principe</option>
	                  <option value="SA">Saudi Arabia</option>
	                  <option value="SN">Senegal</option>
	                  <option value="RS">Serbia</option>
	                  <option value="SC">Seychelles</option>
	                  <option value="SL">Sierra Leone</option>
	                  <option value="SG">Singapore</option>
	                  <option value="SX">Sint Maarten (Dutch Part)</option>
	                  <option value="SK">Slovakia</option>
	                  <option value="SI">Slovenia</option>
	                  <option value="SB">Solomon Islands</option>
	                  <option value="SO">Somalia</option>
	                  <option value="ZA">South Africa</option>
	                  <option value="GS">South Georgia And The South Sandwich Islands</option>
	                  <option value="ES">Spain</option>
	                  <option value="LK">Sri Lanka</option>
	                  <option value="SD">Sudan</option>
	                  <option value="SR">Suriname</option>
	                  <option value="SJ">Svalbard And Jan Mayen</option>
	                  <option value="SZ">Swaziland</option>
	                  <option value="SE">Sweden</option>
	                  <option value="CH">Switzerland</option>
	                  <option value="SY">Syrian Arab Republic</option>
	                  <option value="TW">Taiwan, Province Of China</option>
	                  <option value="TJ">Tajikistan</option>
	                  <option value="TZ">Tanzania, United Republic Of</option>
	                  <option value="TH">Thailand</option>
	                  <option value="TL">Timor-Leste</option>
	                  <option value="TG">Togo</option>
	                  <option value="TK">Tokelau</option>
	                  <option value="TO">Tonga</option>
	                  <option value="TT">Trinidad And Tobago</option>
	                  <option value="TN">Tunisia</option>
	                  <option value="TR">Turkey</option>
	                  <option value="TM">Turkmenistan</option>
	                  <option value="TC">Turks And Caicos Islands</option>
	                  <option value="TV">Tuvalu</option>
	                  <option value="UG">Uganda</option>
	                  <option value="UA">Ukraine</option>
	                  <option value="AE">United Arab Emirates</option>
	                  <option value="GB">United Kingdom</option>
	                  <option value="US">United States</option>
	                  <option value="UM">United States Minor Outlying Islands</option>
	                  <option value="UY">Uruguay</option>
	                  <option value="UZ">Uzbekistan</option>
	                  <option value="VU">Vanuatu</option>
	                  <option value="VA">Vatican City State</option>
	                  <option value="VE">Venezuela, Bolivarian Republic Of</option>
	                  <option value="VN">Viet Nam</option>
	                  <option value="VG">Virgin Islands, British</option>
	                  <option value="VI">Virgin Islands, U.S.</option>
	                  <option value="WF">Wallis And Futuna</option>
	                  <option value="EH">Western Sahara</option>
	                  <option value="YE">Yemen</option>
	                  <option value="ZM">Zambia</option>
	                  <option value="ZW">Zimbabwe</option>
                    </select>
	                <div><small></small></div>
	                &nbsp; </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_txtWebsite" class="required">Website:<span class="asterisk">*</span><small>Please enter your company's website. Please do not include http://</small></label>
	              <div class="field-value field-value-full">
	                <input name="ctl00$ctl19$txtWebsite" type="text" maxlength="300" id="ctl19_txtWebsite" class="textbox validate required url" />
	                <small></small> &nbsp;&nbsp; </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_txtPhoneCountryCode" class="required">Company Phone:<span class="asterisk">*</span><small>Please enter your business telephone number. <nobr>e.g. +971-4-1234567</nobr></small></label>
	              <div class="field-value field-value-full">
	                <input name="ctl00$ctl19$txtPhoneCountryCode" type="text" maxlength="6" id="ctl19_txtPhoneCountryCode" title="Country Code" class="textbox textbox-code validate required" />
	                <input name="ctl00$ctl19$txtPhoneCityCode" type="text" maxlength="6" id="ctl19_txtPhoneCityCode" title="City Code" class="textbox textbox-code validate required" />
	                <input name="ctl00$ctl19$txtPhoneNumber" type="text" maxlength="10" id="ctl19_txtPhoneNumber" title="Number" class="textbox textbox-phone validate required" />
	                <div><small></small></div>
	                &nbsp; </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_txtFaxCountryCode">Fax Number:<small>Please enter your fax number. <nobr>e.g. +971-4-1234567</nobr></small></label>
	              <div class="field-value field-value-full">
	                <input name="ctl00$ctl19$txtFaxCountryCode" type="text" maxlength="6" id="ctl19_txtFaxCountryCode" title="Country Code" class="textbox textbox-code" />
	                <input name="ctl00$ctl19$txtFaxCityCode" type="text" maxlength="6" id="ctl19_txtFaxCityCode" title="City Code" class="textbox textbox-code" />
	                <input name="ctl00$ctl19$txtFaxNumber" type="text" maxlength="10" id="ctl19_txtFaxNumber" title="Number" class="textbox textbox-phone" />
                  </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_txtMobileCountryCode">Mobile Number:<small>Please enter your mobile number. <nobr>e.g. +971-50-1234567</nobr></small></label>
	              <div class="field-value field-value-full">
	                <input name="ctl00$ctl19$txtMobileCountryCode" type="text" maxlength="6" id="ctl19_txtMobileCountryCode" title="Country Code" class="textbox textbox-code" />
	                <input name="ctl00$ctl19$txtMobileCityCode" type="text" maxlength="6" id="ctl19_txtMobileCityCode" title="City Code" class="textbox textbox-code" />
	                <input name="ctl00$ctl19$txtMobileNumber" type="text" maxlength="10" id="ctl19_txtMobileNumber" title="Number" class="textbox textbox-phone" />
                  </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label for="ctl19_txtEmail" class="required">Email:<span class="asterisk">*</span><small style="display:none">Please enter your email address.</small></label>
	              <div class="field-value field-value-full">
	                <input name="ctl00$ctl19$txtEmail" type="text" maxlength="300" id="ctl19_txtEmail" class="textbox validate required email" />
	                <small></small> &nbsp;&nbsp; </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <label>Message:</label>
	              <div class="field-value field-value-full">
	                <textarea name="message" rows="2" cols="20" id="ctl00$ctl19$txtMailingAddress" class="medium validate required autolimit">
                      </textarea>
                  </div>
	              <span class="clear"></span> </li>
	            <li class="actions">
	              <input type="submit" name="ctl00$ctl19$btnSubmit" value="Submit" id="ctl19_btnSubmit" class="main-button" />
                </li>
              </ul>
            </fieldset>
          </div>
	      <script type="text/javascript">
    //<!--
        $(document).ready(function () {
            $('#frmRegUrInterest').xForm(
                { 
                    submitMessage: 'Saving your information... Please wait!' 
                }
            );
            
            try{
                if(window.location.hash.length > 4){
                    var urlHash = window.location.hash.replace('#!','').toLowerCase();
                
                    $('#frm_Interests input').each(function(){
                        var id = $(this).attr('id').toLowerCase();
                        if(id.indexOf(urlHash)>0) $(this).attr('checked',true);
                    });
                }
            }catch(er){
            }
            
        });
    //-->
        </script>
        </div>
	    <!--/MOD_0aff5a33-3102-49f5-9e46-91d7a3735978-->
      </div>
	  <div id="primary">
				<!--MOD_9047d8df-9686-4c20-a693-c0acb5a0f5dd--><!-- .widget.submenu -->

<!--/MOD_9047d8df-9686-4c20-a693-c0acb5a0f5dd-->
<!--MOD_e026c2a1-52ab-450b-b4bf-00824fea0eed-->

<?php include("tpl/link-box-publication.tpl");?>
<?php include("tpl/side-box-2-banner.tpl");?>
<!--MOD_65939e92-9b9e-4277-928d-88f9006769d3-->
<?php include("tpl/side-box-menu-nav.tpl");?>
				
<!--/MOD_575d437e-a587-4518-a9bd-db05ef7c0c3d-->
<!--MOD_9f686459-466a-40ba-8b3f-d59770851f58-->
<?php include("tpl/social-media-sidebox.tpl");?><!-- .widget.html-part -->

<!--/MOD_9f686459-466a-40ba-8b3f-d59770851f58-->

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
