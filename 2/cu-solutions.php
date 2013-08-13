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
                <li class="" ><a href="#">CU Solutions</a></li>
                
                <!--<li class="separator">\</li>-->
                <li class="current" ><a href="#"> <?php //echo $row["value"]["member_name"];?></a></li>
                
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
	    <!--MOD_40c17c06-3db5-4603-9845-a2ceafb4f537-->
	    <div class="content-container"> <span class="clear"></span>
	      <h1>Credit Union Solutions</h1>
          <p>Central to ACCU’s role is an endless imagination of technical and management innovation to keep the credit union relevance. We have developed six credit union solutions adopting sound business practices and will ensures that the solutions keep up with changes in market environment and the complex situation in credit union operations.
We are very pleased that our members have made a tremendous move to build upon these solutions.</p>
         <br/>
	     <!-- <h2 class="section-header"><span>Search By</span></h2>
	      <div class="section-body" id="exhibitorListFiltering">
	        <fieldset class="flexible">
	          <ul class="form">
	            <li class="field">
	              <label for="ctl19_txtKeywords">Keywords</label>
	              <div class="field-value">
	                <input name="ctl00$ctl19$txtKeywords" type="text" id="ctl19_txtKeywords" class="textbox full-textbox" />
                  </div>
	              <span class="clear"></span> </li>
	            <li class="field">
	              <div class="half">
	                <label for="ctl19_ddlExhibitors">Exhibitor</label>
	                <div class="field-value">
	                  <select name="ctl00$ctl19$ddlExhibitors" id="ctl19_ddlExhibitors">
	                    <option selected="selected" value="">All Exhibitors</option>
	                    <option value="874b8e4a-0e73-489e-8c04-aaeb53c8b0f0">Abengoa</option>
	                    <option value="2a98503d-8af2-4c96-be7d-d96a342d3155">ABU DHABI CHAMBER OF COMMERCE &amp; INDUSTRY</option>
	                    <option value="7135cd2d-fddd-4446-822e-41e797282e27">Abu Dhabi National Energy Company</option>
	                    <option value="7ada16e0-e229-4670-9b9f-a8fc1fe32781">Abu Dhabi National Oil Company (ADNOC)</option>
	                    <option value="068fed25-f53a-41de-b544-34110ce61168">Abu Dhabi Tourism &amp; Culture Authority</option>
	                    <option value="5bc7382d-c475-4c67-857d-83e66c78bf65">Activ Solar</option>
	                    <option value="b9e5497d-160c-4521-b09c-ead0cf7f885d">ADETEF</option>
	                    <option value="7aca7798-e55c-4b19-a59d-e505e403b42b">AGI - AGENZIA GIORNALISTICA ITALIA</option>
	                    <option value="841a5161-419e-4994-82a8-87a805e88609">Al Futtaim Motors - Lexus </option>
	                    <option value="7e9a8bf4-7d69-4df7-9b5e-1c797972d365">Al Iktissad Wal-Aamal</option>
	                    <option value="31bd1fee-ddfc-49da-ab02-625b2c085d93">All Real Technology Co., LTD.</option>
	                    <option value="49d329d7-de42-4cd5-8141-edd653662178">ALSA Solar Systems Limited L.L.C.</option>
	                    <option value="4da50f9f-5922-41b0-8f2d-37c4e65dd928">ALSTOM</option>
	                    <option value="e04ec012-decc-4a56-9288-5f9693347029">Alternative Energy Africa</option>
	                    <option value="319bde7f-83f1-45fe-9d04-53c950997a6e">AMANDUS KAHL GmbH &amp; Co. KG</option>
	                    <option value="ccfde5cb-3a09-475b-a7f2-e3f2d302d6b8">Apollon Solar</option>
	                    <option value="964032f9-2739-4312-891d-1f5222df1b3b">AQUANETTO AG</option>
	                    <option value="ce9be4cd-66e7-4fa4-996d-8d1942260ba9">Arabian Publication</option>
	                    <option value="93e4a6e6-4c5b-4d7f-8125-30ee9f776ea0">Arabian Reach - Green Middle East</option>
	                    <option value="9f897e9a-7519-463f-96ed-a753032dfa16">AREVA</option>
	                    <option value="182f9e53-7e88-4fcf-a9cd-e20d955a9374">ARIA TECHNOLOGIES</option>
	                    <option value="b9dbef4b-3ebe-4cd3-9b8b-364130d4771a">AsiaToday</option>
	                    <option value="9d2af461-bfb7-41c8-b3dd-965d56c9f31a">AS-TECHNOLOGY SRL</option>
	                    <option value="d9b44d8f-39c8-4647-813c-eac7d3bcc673">Asy Medya Group - Energy World</option>
	                    <option value="d667779d-bd9b-427c-bce1-7bf07a2d2160">Atkepp Ltd</option>
	                    <option value="523dbdfa-5faf-4c96-b6d1-c731b90201ca">AUGIER SAS</option>
	                    <option value="0fc8008d-30a1-4850-9bc7-d3b44ca653b8">Axpo Kompogas Ltd.</option>
	                    <option value="978a556a-5200-4967-b3fb-ea5267d70e39">BAE Batterien GmbH</option>
	                    <option value="72c04793-ba6e-4632-b096-e99277754634">Baer Measurements LLC</option>
	                    <option value="8022dd0e-3508-48e1-bd97-f0726e2232db">BECKHOFF Automation GmbH/Dynamic Security LLC</option>
	                    <option value="d09539f1-f0c8-4577-a5b8-dce8abc280f2">Beijing Bestpower Technology &amp; Engineering Co., Ltd</option>
	                    <option value="0cd42a14-39fc-41ce-97e3-38f63c2f5715">Beijing Bridge International Fairs Co. Ltd.</option>
	                    <option value="460e552b-6378-4f87-bde9-383d069b399f">Beijing Remote Power Renewable Energy Science Technology Developing Co,.Ltd. </option>
	                    <option value="7f3e8bbc-3e01-4d93-b1de-3c1a220d4ea6">Beijing Sunda Solar Energy Technology Co., Ltd.</option>
	                    <option value="6f362a33-84a4-42f5-a3f8-8beded00f119">Beijing Zhongguancun Overseas Science Park Co., Ltd</option>
	                    <option value="ad536be1-439a-4d6e-a2cb-19786caccc7b">BELIMO Automation FZE</option>
	                    <option value="df87c683-7543-4918-a90c-53ae683f81b4">Bmd Solar Alternatif Enerji Sistemleri</option>
	                    <option value="6b932814-63eb-400c-844c-690a7a17a310">BNL Clean Energy AG</option>
	                    <option value="549b958b-21d4-4ed2-b870-366a9e54e8a7">Bumbou</option>
	                    <option value="e8897bf6-b00e-47c3-95bc-ffcddc3cca4f">Bureau of Waterworks, Tokyo Metropolitan Government</option>
	                    <option value="6d73d40c-c70e-4500-a114-c7490822a688">BYD Company Limited</option>
	                    <option value="4fb0ed59-a04f-4811-97e0-b0d3428846cf">Cairpol</option>
	                    <option value="7c85789f-a580-4646-8382-d4eef4d18705">Calpak-Cicero Hellas Sa</option>
	                    <option value="49a2243e-0722-4bc9-a6d7-2fcd1c238029">Canadian Solar EMEA GmbH</option>
	                    <option value="49c25a9e-737c-4679-8df9-fd8c3e8ea877">Capital Business ME - Neopromo</option>
	                    <option value="dcf7c038-1be4-4a0e-ad5a-4d3d60ac278a">Catecar Industries SA</option>
	                    <option value="2ce0a708-84a7-4229-a417-966c2fe6361f">CESI S.p.A</option>
	                    <option value="d97a6d48-6842-4940-b380-82018bdf41ae">Changzhou Trina Solar Co., Ltd.</option>
	                    <option value="27bb49dd-3b87-4731-a99a-89548d08b1d6">CLA-VAL EUROPE SARL</option>
	                    <option value="815ff2be-562b-4171-bdc2-60473141bf1a">Clean Energy Pipeline (VB Research)</option>
	                    <option value="24bdf525-af18-4868-a088-3848bdb9a004">CleantechAlps</option>
	                    <option value="4e0a5265-8e0f-4436-9b94-5fa4d2634a22">Club ADEME International</option>
	                    <option value="c38ab4eb-2383-4c63-9468-8a373126cb1d">Conergy Asia &amp; ME PTE. Ltd.</option>
	                    <option value="7addb8ad-781b-420c-8dda-7eb62d199daf">Corvus Energy</option>
	                    <option value="15141dd5-2f30-4c17-8b5e-94e0c2311816">CPI - BGreen Magazine</option>
	                    <option value="e8d3dbfb-9557-4818-a804-d81c25231888">Data Media Systems Global</option>
	                    <option value="b4fdf477-bce5-49ce-9f5a-2683701d4eb3">DCNS</option>
	                    <option value="b9f84c2b-70b7-4ae3-b480-825ba9b9a1b8">DENTSU INC.</option>
	                    <option value="b9d29492-a434-4618-8004-008087abf4ce">Designwerk GmbH</option>
	                    <option value="3dbaae96-c482-4c5e-abab-d1a63d08248e">DET NORSKE VERITAS (DNV)</option>
	                    <option value="14915746-6dd9-46af-b6e4-420d5f055a66">Deutsche Amphibolin-Werke von Robert Murjahn Stiftung &amp; Co.KG</option>
	                    <option value="08edad00-0ad5-45a0-8f97-7c531cf8d0c3">Dimas Sa</option>
	                    <option value="5732b8ca-660b-469c-9f29-bab1806d689e">Dolphin Energy</option>
	                    <option value="ecccaa66-dc9e-4a50-9966-6687288e8010">DONGEIECOS Co., Ltd</option>
	                    <option value="6c17778b-d0ee-411a-afd1-5438b8822e22">Doosan Heavy Industries &amp; Construction Co., Ltd.</option>
	                    <option value="3482d129-ea06-4e80-adf9-695ae83c91a4">Doosan Heavy industries &amp; Construction Power BG</option>
	                    <option value="0392fb87-4089-4fd6-b031-c1e9e6f42478">Durafos Inc.</option>
	                    <option value="ed6d46bc-7578-42ca-9a02-b8f9ffb86512">Eco-Business</option>
	                    <option value="c2277ab0-39be-419b-a871-51ebd5935e73">Ecoling Partner Ltd.</option>
	                    <option value="ad9ac3ed-c12d-4f4f-a30b-40576d4063ea">ECONATION DISTRIBUTION &amp; LOGISTICS</option>
	                    <option value="20660daf-41a4-46c8-94bd-45682f5add31">EDF - CIS</option>
	                    <option value="aca143f9-3afe-4ad2-907c-638ec4c76e8e">edf solar GmbH </option>
	                    <option value="c79189a4-2261-4c71-81e9-5541bcc523be">EESA Verbundinitiative c/o VDI/VDE Innovation + Technik GmbH</option>
	                    <option value="d5252975-2ef0-4613-a50a-f8379c383b9b">Eldan Recycling A/S</option>
	                    <option value="78e0c429-9e9c-4163-84fd-fdae84bce6c8">ELECNOR, S.A</option>
	                    <option value="6611278e-cee5-4f7b-bb81-f41d1a4af771">Emirates Aluminium</option>
	                    <option value="3b02e835-b8e6-4fab-a473-603c2f48a041">Emirates Authority for Standardization and Metrology(E.S.M.A)</option>
	                    <option value="954fd096-273d-4ff2-9471-4c29ca5376ba">Emirates Environmental Group</option>
	                    <option value="5db4cbdb-a069-472f-b3ab-422c51728c51">Emirates Nuclear Energy Corporation</option>
	                    <option value="7aacc431-6b97-4963-a186-ecc51c6585e7">Emirates Solar Industry Association</option>
	                    <option value="af8b7ce2-73d7-4358-8974-d51967c7cb38">EmiratesGreen Electrical and Mechanical Trading</option>
	                    <option value="9169955b-a467-45e7-8a65-ea0d59b24d63">empuron AG</option>
	                    <option value="e9fab790-356f-4a39-8131-8c0e1619f9ac">Energia Today</option>
	                    <option value="9ca4f62a-a7ff-47a3-82d3-55e54bfc3a88">Energia.sk</option>
	                    <option value="e426e591-7be5-458b-8a22-208c5e68e4eb">Energy &amp; Enviro Finland</option>
	                    <option value="d6dad9d2-2397-4935-8e80-1552e01c45ca">Energy Blitz</option>
	                    <option value="989fd621-0908-437c-8987-1922d674789d">Energy Efficiency News</option>
	                    <option value="3bb2d800-9a3e-4602-aec2-be49243f62b8">Energy Exemplar Pty Ltd</option>
	                    <option value="f32020bd-a59c-4b77-b85c-00e0947ad74b">Energy Intelligence</option>
	                    <option value="0768ce3b-74f3-4690-9534-83dfd303863d">Energy Press</option>
	                    <option value="205eda64-693a-4f09-a6da-7a26b2588b74">Energy Professionals Association</option>
	                    <option value="9cb14bff-f6b3-41d8-b41c-29185dab3b26">Energy Update Magazine</option>
	                    <option value="81bd0d46-655d-4860-a299-f521b5bbb4eb">Enswico AG</option>
	                    <option value="3a1d1fa7-6e0f-43bf-8eee-b094a6383604">Environment and Protected Areas Authority-Gov.of Sharjah</option>
	                    <option value="b89f3399-8ff2-40b0-9c68-80ac5a9c59cf">Environmental Centre for Arab Towns</option>
	                    <option value="acfd2b58-e907-48ff-a910-31d08639fdbf">Environnement S.A</option>
	                    <option value="92d48224-4111-42d8-9940-d6b1d47429a4">Ernst &amp; Young</option>
	                    <option value="a92b4290-b2ce-4881-b12e-07eadce9b463">Etihad Airways</option>
	                    <option value="d625df4b-9548-4266-99e0-385a239871ad">ETIHAD RAIL</option>
	                    <option value="101ccdfd-8021-48c4-9a5f-f7105cb618cc">Eurabia Media</option>
	                    <option value="ca40962f-14a2-4304-b49b-8d2f8399ebb3">Euroasia Industry</option>
	                    <option value="e20b8295-2900-42e5-a89e-a117b2238dba">Everphoton Energy Corp.</option>
	                    <option value="dc074291-f74a-4039-b314-a82ddbcc66b9">Excel Industry Co. LLC</option>
	                    <option value="31a8d1b1-0537-4f92-bc93-ef89b62e1183">expotec</option>
	                    <option value="66e92ef9-221c-4817-9028-ce1b4eb9ce89">Exxon Mobil Corporation</option>
	                    <option value="4b757165-63d4-47d7-bd78-e83048b8f6aa">Fabbrica Trentina Conduttori</option>
	                    <option value="9c3cbfc2-6070-4a74-aa86-1c9d2cd1d7dd">Federal Ministry for the Environment, Nature Conservation and Nuclear Safety</option>
	                    <option value="b9646d5c-b11e-4b80-b779-dae883019f17">First Solar</option>
	                    <option value="d6040602-689f-4c27-bbbb-3630a868d28a">Flamco Middle East</option>
	                    <option value="33fccbca-8913-4955-9e93-89d387cdb1c3">Flanders Investment &amp;Trade</option>
	                    <option value="dee94cc1-24d5-4e7f-b206-2844f253349d">Fondation Petite Cause, Grande Effets</option>
	                    <option value="a9429d43-14e5-4284-ac8f-9e7b5ecddc5a">Forbes Middle East Magazine</option>
	                    <option value="44547fe4-c32e-45b7-9fb8-4b3b07287a98">Fortytwo Environmental Consultancy</option>
	                    <option value="c0e20522-78e7-401d-9aa2-63f6ad28630d">Fraunhofer Institute for Ceramic Technologies and Systems IKTS</option>
	                    <option value="b7fabb20-e628-42de-889f-eee923a22c00">Fraunhofer Institute for Nondestructive Testing, Dresden branch (IZFP-D)</option>
	                    <option value="19a8fc16-96d1-4ddf-806b-1b46c6a7d9ea">Freiburg Wirtschaft Touristik und Messe GmbH &amp; Co. KG</option>
	                    <option value="7505963c-c047-4510-acb1-cae559e008ab">Fronius International GmbH</option>
	                    <option value="c1775788-f2d3-4ef7-bbc7-3899c87b3857">Frost &amp; Sullivan</option>
	                    <option value="bbbd86e2-30d2-4ea8-b7a6-41de0baba7e5">FuelCell Energy Solutions GmbH </option>
	                    <option value="2a2c90e6-1eb9-42f8-86d1-0b3806d69fa1">Fujairah Municipality Environment Protection and Development Department</option>
	                    <option value="6bbb890e-f3d9-496d-923d-878ac067fec9">FUTURA</option>
	                    <option value="db21d8d3-fe44-4345-ae7e-d75a562868f4">Gebr. Schmid GmbH</option>
	                    <option value="395fc1ed-2621-433d-809e-10b27ff10c11">General Electric</option>
	                    <option value="87e895a7-b384-4ba9-84ab-72ab3bcb4d9d">GeoModel SOLAR</option>
	                    <option value="4f06a066-5515-477c-bef4-727b980bfe49">Gestamp Solar</option>
	                    <option value="9bdb9c25-6c89-4c9c-bdcb-b50101598e9e">GF Piping Systems</option>
	                    <option value="263f5b4b-195e-42c3-8141-f8d252f4ba10">GIGA SOLAR MATERIALS CORP.</option>
	                    <option value="c0b666f1-4bf0-4570-ba80-dc04a40e83fc">GL Garrad Hassan</option>
	                    <option value="6513d6c2-7aa5-434c-8684-c6869ad4b631">Global Green Growth Institute</option>
	                    <option value="425bc1f3-6e39-4496-bfd3-9b40d2a923b0">Gogreen2 Marketing Ltd</option>
	                    <option value="f421d76c-6e91-4e1b-a1f4-6f8c5a47c132">Gold Wind Science &amp; Technology</option>
	                    <option value="8bd905d9-5ad7-43bb-a462-08bb18cd29e3">Goldwind International Holdings(Hong Kong)Ltd.</option>
	                    <option value="dfa37ebf-d695-4f49-98b2-be46621df977">Green Car Design</option>
	                    <option value="05fe46e9-e8a7-4fde-857f-7b36b13fe8fb">Grundfos Gulf Distribution FZE</option>
	                    <option value="5b575610-1885-4cfc-af3f-d37aabcd5295">Gulf Oil and Gas</option>
	                    <option value="4a446649-e231-4035-9d5f-5364a4a69fd6">Haisung Industrial Systems Co., LTD.</option>
	                    <option value="0d31825a-a1f7-4073-bd37-29e35d24d0b3">HANERGY HOLDING GROUP</option>
	                    <option value="16220af3-964d-41a4-8802-c65c98d77d8f">HANSEO PRECISION METER</option>
	                    <option value="770cc50a-c4c1-4ba3-84f0-1c98f4f7f21d">Heliocentris Energiesysteme GmbH</option>
	                    <option value="735789e9-23db-40c4-a114-131d0513665e">HELLENIC FOREIGN TRADE BOARD</option>
	                    <option value="75f5f598-f913-4c36-8f4a-311b6e2d07ba">Hess Lichttechnik GmbH </option>
	                    <option value="d05d37e0-19d5-479c-b9a5-76481f52fdae">Hitachi Zosen Corporation</option>
	                    <option value="1bcd37cd-7b88-4d62-9de7-b5c42c5cf25f">Hitachi, Ltd.</option>
	                    <option value="e0250abc-b747-4797-8614-47d230b3f8d7">Hofstetter Umwelttechnik AG</option>
	                    <option value="ebaf4ccc-209f-4549-94a7-8affb178daf9">HORIBA Europe GmbH.</option>
	                    <option value="fb7866c4-48e0-4090-8e95-5be9bffb1415">HYSEO</option>
	                    <option value="5058eb76-43c9-4156-adca-88e9053d134a">Hyundai E&amp;C</option>
	                    <option value="b787936d-6285-4f3b-8100-6951a17289da">IBG Ltd.</option>
	                    <option value="b9a44d94-fab4-4373-bbff-a46daf958795">IDEA POLYSILICON COMPANY</option>
	                    <option value="0b703f61-9357-45a4-9e49-b370fa32a150">Ilion Energy Ltd</option>
	                    <option value="2c4e44e6-ae07-4f56-b0b8-a45f80942119">IMETH AG</option>
	                    <option value="ca0d5037-1dab-4d59-91ef-1cee3afd44da">Inficon GmbH</option>
	                    <option value="26802bd5-c894-4bce-b693-7b972e5a5c04">INGETEAM SRL</option>
	                    <option value="89a55e3a-394f-444f-86e0-1316298d2bdc">Innovation Norway</option>
	                    <option value="3eeed4ce-3597-45cd-bf97-532791e015e3">INNOVATIVE ENVIRONMENTAL TECHNOLOGIES PVT. LTD.</option>
	                    <option value="5ba8b6c7-1272-43f2-aa97-f67e95fabc9b">INPEX Group JODCO</option>
	                    <option value="09e6a577-2ccd-49c9-b4b0-110d7ff2a598">Intelligent Energy</option>
	                    <option value="b0ead1a4-e8ba-4b8a-b14b-d7b2e87f97d6">International Center on Small Hydro Power</option>
	                    <option value="a4506d81-d115-4b07-a45f-9ca737ed4e2a">International Organization for Cooperation</option>
	                    <option value="e9ba9e62-b7a0-4c1a-8711-420efd4943d4">International Waste Industries</option>
	                    <option value="a116f512-d592-4e02-bb1a-d2245de967f4">IPROPLAN Planungsgesellschaft mbH </option>
	                    <option value="fd36e568-76f4-4b25-9935-1d53840c0a37">IRENA</option>
	                    <option value="899e4669-1c17-4033-ab60-c241ad7cc637">Iseo-Environnement</option>
	                    <option value="b99f9d70-6c60-421c-833e-6330467993db">ISOFOTON SA</option>
	                    <option value="f99f0ce2-101e-4bac-a44c-d8bd10460504">ISOLUX CORS&#193;N</option>
	                    <option value="c1ed4846-7f48-4a14-aa49-29c8cb4cd912">ISPA- NET Consulting</option>
	                    <option value="8be4223d-26f0-4260-bb4e-2a850fe976c9">Ital Parts Group Srl.</option>
	                    <option value="068a3f2b-2686-4d45-b034-eda65797d75f">Italian Trade Commission</option>
	                    <option value="37f40f62-d008-4ae3-bb75-134d808d3af5">JA Solar Holdings Co., Ltd.</option>
	                    <option value="63282e88-1fe6-4275-b88b-c74dbf66bb51">J-ACTION- Team SULTANA</option>
	                    <option value="d0b338a5-835b-4469-b8f5-b767cf2c4b9a">Japan Cooperation Center for the Middle East</option>
	                    <option value="12f30aec-fb18-4085-8cd0-15069bda78e3">Japan Oil, Gas and Metals National Corporation</option>
	                    <option value="fe44be22-e8f7-4f8c-a1e7-65b7f88a16ee">Japanese Business Alliance for Smart Energy Worldwide</option>
	                    <option value="539c0030-931e-4137-ba6d-fb01bb167f93">Jiangsu International Economic Consultants Inc.</option>
	                    <option value="4f67a153-c91d-4d1a-9048-04428c784d48">Jiangsu Sunchi New Energy Co., Ltd.</option>
	                    <option value="8d938201-713f-4fd8-aa0e-cd7ebfcb812b">Jiangyin Huafang New Energy Hi-tech Equipment Co.,Ltd</option>
	                    <option value="e4625473-1f37-4cc5-baf0-64e1e149e7f2">Jing Mu Int&#39;l. Exhibition Co. Ltd.</option>
	                    <option value="e2dbbd16-145e-438b-9b96-08db9aef456b">Jinko Solar Co., Ltd.</option>
	                    <option value="174e3684-ed54-4c7a-baea-4192d46de580">Jotun</option>
	                    <option value="c170bba3-b775-4c1f-9bad-8860a8e9797e">JSR MICRO</option>
	                    <option value="f8d27b2f-9123-41dd-9e07-e97bcee35b51">JUSUNG ENGINEERING Co.,Ltd.</option>
	                    <option value="68b2d064-b59b-434e-b09c-11a0c83f779f">K&#228;lte Bast G.m.b.H. </option>
	                    <option value="d61e4e7e-abfe-441c-9243-06fce8900b3c">KEPCO ENC</option>
	                    <option value="0641c7a9-54c9-45d1-8da5-f7e9c472aae3">KEPCO NF(Newclear Fuel)</option>
	                    <option value="595ea381-1fe5-4a0f-a5d5-67890d44e78f">KEPCO Plant Service&amp;Engineering Co.,Ltd</option>
	                    <option value="83229649-c0ea-4474-b21b-67f443d2e171">Keppel Seghers Engineering Singapore Pte Ltd</option>
	                    <option value="baedd0d7-6046-465f-b65e-b7968eac73f5">KETEP(Korea Institute of Energy Evaluation &amp; Planning)</option>
	                    <option value="038dac26-c583-4a76-9756-c944c85e31fd">KHALIFA UNIVERSITY OF SCIENCE</option>
	                    <option value="316076ba-b217-46d8-9a65-f9bb9fa75550">KHNP(Korea Hydro &amp; Nuclear Power Co., Ltd.</option>
	                    <option value="91ab23a9-b9a1-4886-9c03-f4c02281f94c">KIER(Korea Institute of Energy Research)</option>
	                    <option value="4d146a90-4eb1-4106-9bd1-2b04f80f354c">Kirchner Solar Group GmbH</option>
	                    <option value="73900517-69d8-4277-9f89-730d268e054f">KMW Inc.</option>
	                    <option value="00356497-aee7-430d-95f2-25b0b45738d3">KNUBIX GmbH </option>
	                    <option value="885a6440-e654-4ec7-8e8f-4117d4af1563">Kobelco Eco-Solutions Co., LTD</option>
	                    <option value="20f86328-06cd-4b3d-8524-84497da8ce02">KOTRA</option>
	                    <option value="bd59a8aa-6c59-42ed-bb6e-8db513ae72dd">KRINNER Schraubfundamente GmbH</option>
	                    <option value="3d228b4b-9eff-45f8-b05f-45355df63381">KUBOTA Corporation</option>
	                    <option value="1c22c237-8011-49f2-abea-ebb22bc4af05">LAMINARIA BVBA</option>
	                    <option value="3c4aac4e-a4bf-4abc-be3d-103cd0119707">LDK Solar Hi-Tech(Nanchang) Co., LTD.</option>
	                    <option value="94bce045-9677-4b4f-a41b-cc4a1f3502fc">M+W Group</option>
	                    <option value="5cd37717-a5f5-4e62-98f5-f4173ce9cf48">Maersk Oil Middle East A/S</option>
	                    <option value="9eec4f33-d412-4320-af8f-73c54c4c3d74">Manz AG</option>
	                    <option value="effbd492-8382-447e-b467-cc5630ac6577">MariMatic Oy</option>
	                    <option value="a4b8dcd0-79c1-4703-851d-56d0101d0a30">Matasistem srl</option>
	                    <option value="879d79d1-5645-45cd-a8c4-0793d1ab1675">ME Systems GmbH</option>
	                    <option value="40c5f2aa-6aae-4d29-a1b0-6e172ec63337">Mediaquest Corp</option>
	                    <option value="50d37ec3-00d3-4f7f-829e-7ca42603e833">MEIDENSHA CORPORATION</option>
	                    <option value="aa4f0c6f-7d7c-4b3f-8fc2-c42690cdf593">Microhumus</option>
	                    <option value="063bd33d-0e73-4835-abed-5806aa2f7786">Ministry of Economic Development &amp; Innovation</option>
	                    <option value="f24a4865-a82a-4cf9-b988-76e36a24d756">Mitsubishi Corporation</option>
	                    <option value="308b8fb2-0e61-4089-b14a-fe0be3c0d999">Mitsubishi Electric Corporation</option>
	                    <option value="d5ac208a-57d1-4b0e-bfb6-6879eeaebdf7">Mitsubishi Heavy Industries, Ltd.</option>
	                    <option value="71b12ec1-4d22-4c54-9a55-81367c49da6c">Mitsui &amp; Co., Middle East Ltd. Dubai</option>
	                    <option value="c5cbaf4a-3bfa-4058-b18c-612cba3bb0ba">Modern Power Systems</option>
	                    <option value="0c340fdd-11a6-428b-b01a-64afab792f9c">My Planet Guides - Myuaeguide</option>
	                    <option value="3e2a37b5-b0c8-49c2-a883-786edd2e5d32">NEM Middle East</option>
	                    <option value="227db7d1-bd17-4138-8c71-bc1c668d1e92">NEOENERGY CLEAN ENERGY</option>
	                    <option value="807fc305-13f0-4705-9c74-a0ff9dabd269">NEST AS</option>
	                    <option value="38b7a9a4-aa5b-4106-a618-fe7715d1eadd">New Energy and Industrial Technology Development Organization</option>
	                    <option value="c739bf4c-15ba-48dc-a9c2-7f4f5116a921">New York University Abu Dhabi</option>
	                    <option value="f8a19970-af5c-4309-b0be-3e40b73791c5">NGK Insulators, Ltd.</option>
	                    <option value="476e179c-73d1-4eef-b4fb-4c2514120393">NIASA NEFF Y ASOCIADOS, SA</option>
	                    <option value="20110418-5ef6-4d41-bb95-3f37097e2bfd">NOZON TECHNOLOGIES</option>
	                    <option value="ec529e63-5869-4148-ad9f-8ed5ab8aedc0">NUMOV / German Near and Middle East Association</option>
	                    <option value="2a295859-59b7-42e4-b5ba-fdbb5c849743">NVterra SA</option>
	                    <option value="8eab48b7-86ab-43fc-9557-57ac37517bb9">Obayashi Corporation</option>
	                    <option value="4f3be8f1-40bd-4ed4-afbd-85420d078e13">Occidental Oil and Gas International</option>
	                    <option value="a692c343-1608-4b5f-8aa1-df621cd4d149">Oerlikon Solar Ltd.</option>
	                    <option value="7bc1ce67-38aa-4ab8-9603-8b87e66d90c2">Oil &amp; Gas Directory Middle East</option>
	                    <option value="176352db-5603-417b-887f-476c1cf861c6">Oil &amp; Gas News</option>
	                    <option value="4927bfdb-bc6f-41d0-af30-65262a0b1b30">Oil and Gas Magazine</option>
	                    <option value="a298c0ad-16e4-42c9-9534-67e3dcff8c5a">Oil Review Middle East</option>
	                    <option value="ff6a5b75-af97-4e67-b299-b30ebb2c3395">Okaya &amp; Co., Ltd</option>
	                    <option value="74512b08-7d5c-4640-a572-3f647670d95b">Oxford Business Group</option>
	                    <option value="aba17ae3-58d9-4797-8d3e-d2bbfff4ece8">PALSOLAR Mechanics &amp; Energy Solutions</option>
	                    <option value="d7590b6a-2e6e-43f5-995d-c847d72a2755">P-D Industriegesellschaft mbH</option>
	                    <option value="b5c3096d-b493-4d7b-9a48-174c7d369c00">PERLIGHT SOLAR CO., LTD</option>
	                    <option value="b44485ee-862c-4593-b8f9-1287dc3e366b">PERPETUM ENERGY</option>
	                    <option value="ba6f3143-326c-4d2c-b486-60b7790220f3">PHILIPS</option>
	                    <option value="6595a9cd-271c-4592-997c-6875669ea0aa">Phono Solar Technology Co., LTD. (SUMEC)</option>
	                    <option value="29334662-4fa7-4d12-8440-cabe65b3bb4d">Photon</option>
	                    <option value="9074e28b-90c3-4052-ad0d-7349802accc6">PIKE Research</option>
	                    <option value="7f7192c9-a35e-4d75-836f-1bf424b2a2dc">PONOVO POWER CO.,LTD</option>
	                    <option value="ab89cb3c-526a-421c-a9be-d96eb74c2a75">Power-One Italy SPA</option>
	                    <option value="d8f1a0bb-f208-423e-a284-74dd15dde3d4">Premier Solar Technologies LLC</option>
	                    <option value="05b48c57-7fd7-4334-8f8d-3090efad5f55">Pricewaterhouse Coopers</option>
	                    <option value="eb1104f5-c3f6-4ed7-a4d0-90214ac307a3">PV Magazine</option>
	                    <option value="a003b11e-7950-469e-80e8-87516e91d13f">PV-Kraftwerker GmbH &amp; Co. KG </option>
	                    <option value="fc427028-d337-458c-be1b-e57de7e344a9">Qatar Steel Company</option>
	                    <option value="bd06ae22-a09e-4449-9be5-3c471cd453da">Qingdao Jiaoyang Lamping Co., Ltd.</option>
	                    <option value="6b076702-f3e9-4ec3-bf97-a45f18e0498b">Ravano Green Power Srl</option>
	                    <option value="56b26819-afcd-4713-99ed-d003208e5e1c">Recharge &amp; Upstream Newspapers</option>
	                    <option value="e9dcda72-a86d-4420-95c3-e385f7df22a6">Rechsand Science&amp;Technology Group</option>
	                    <option value="cb384310-06e7-44a4-8254-2dc01a660ea7">Reed Exhibitions ISG Japan</option>
	                    <option value="2b9a0391-89eb-4383-8c23-5d95ccd3f1af">REFUsol GmbH </option>
	                    <option value="1c264dab-22af-4f15-b424-3e1b4eae03d5">REGEN POWERTECH</option>
	                    <option value="52fc00d4-8490-4f69-94ca-9d511a97fc68">Regent Climate Connect Knowledge Solutions Private Limited</option>
	                    <option value="9cdeecbb-0277-4e9f-a08f-7e8fe205ff5a">Renesola Ltd</option>
	                    <option value="67ef916b-50c1-4e17-bc19-84e818569b09">RERI AG (Renewable Energy Research &amp; Investment)</option>
	                    <option value="0eb4faec-a11c-43c6-836b-2282f6da8fc8">Retema</option>
	                    <option value="78b98337-aa6e-487e-9968-4a6afacc4c40">Revista Panorama Industrial</option>
	                    <option value="c8c95394-abf0-4319-ad12-0276c54cb1ed">Revolve Magazine</option>
	                    <option value="0a3292e5-c086-4f32-a23c-97043d501abb">Ruud Lighting Arabia LLC</option>
	                    <option value="bcc26447-bb8a-46b5-86b7-71f363a416d4">Samsung C&amp;T Corporation</option>
	                    <option value="3a57db40-f70c-422c-8654-f8e955c3f3d0">Saxony Economic Development Corporation </option>
	                    <option value="6d2f325f-275c-419b-984d-ed2ccd968cde">Schneider Electric</option>
	                    <option value="57b5e9db-9c28-41b3-bcdb-b39f3a686102">Scottish Development International</option>
	                    <option value="70a7405a-4129-4695-aa12-658ac6b13aa7">SEMI PVGroup</option>
	                    <option value="d4648864-b515-4aaf-9b30-e022a16276f9">SENAAT(GENERAL HOLDING COMPANY )</option>
	                    <option value="2ee6072c-40f5-46a3-9482-3c268d556884">Sener Ingenieria&#39;y Sistemas S.A.</option>
	                    <option value="46b2451f-0fdb-4d66-a917-af5f2b89b53a">SERBOT AG</option>
	                    <option value="a5aaf927-904d-4863-858d-58ae9e5d9365">SET selected electronic technologies GmbH</option>
	                    <option value="63c9dcf8-7af9-4007-a641-c130526a0ccf">SGL Carbon GmbH</option>
	                    <option value="300eb0df-d687-488c-957b-89993dcdb280">Shanghai Chiko Solar Technology Co., Ltd.</option>
	                    <option value="037f4b49-48cf-405a-9b5d-3e9d0b835ed6">Shell International</option>
	                    <option value="fd96d498-80bc-4675-b2a8-d6cc749428d9">Siemens LLC</option>
	                    <option value="dff2f4d4-394f-4ca7-99b3-a4f88d7b0d06">Singapore International Energy Week</option>
	                    <option value="b16e3de6-7457-489c-8cfc-fee643f1115b">SkyFuel, Inc.</option>
	                    <option value="e92fd531-cf4b-41e7-9b4d-c598973cc81b">SMA Solar Technology AG</option>
	                    <option value="7e46e46f-4b27-460f-a39f-f4fb7ba5fe48">SMART SAVING ENERGY LLC</option>
	                    <option value="922ee56e-bb06-48a5-b891-79b341e3cff8">SOITEC GMBH</option>
	                    <option value="c7e223ef-c093-45ba-a66f-e8129750fb13">SOLARPROOF </option>
	                    <option value="464f4b86-eed4-4f83-9f01-cb300785b1d6">Solar-PV Management Magazine</option>
	                    <option value="ff875167-14bd-411d-85ff-256ec55e3070">Solartech co., ltd</option>
	                    <option value="32b058d0-f5bc-4da4-97b7-03e03c200d5e">SolarWorld AG</option>
	                    <option value="ce2c293e-7618-4ae1-8b91-0b10c2f0dd4e">SOLE U.A.E.</option>
	                    <option value="6e1b4bbe-8594-47ed-be58-1cccf0b72404">SOLON Energy GmbH</option>
	                    <option value="ec34f8d3-12e5-4e08-a189-33d2bd294dab">Sonkyo Energy SL</option>
	                    <option value="785e4441-d23e-466e-bdd3-81a9acbd59ff">SOUGHA EST.</option>
	                    <option value="a364cfb2-2772-45f6-82c7-72bd9177c10e">SRB Energy</option>
	                    <option value="2b71235c-781a-4170-a5d8-c180ca9eedbb">State Company on Alternative and Renewabel Energy Sources of the Republic of Azerbaijan</option>
	                    <option value="14c11346-b5e0-4b51-bd5a-449bb254d05d">Statistic Center Abu Dhabi</option>
	                    <option value="7a12ad55-aa3a-4e4d-b3a2-4b208d262473">Statoil</option>
	                    <option value="a1b57f77-d230-439b-95ab-a4bc869cb911">Storm Energy GmbH</option>
	                    <option value="a21d9cdd-4f5a-406d-9ba9-3a20f1f381db">Studer Innotec SA</option>
	                    <option value="72daad46-3a3a-4466-95a3-c8cbcfa12ff9">Sumitomo Chemical Company, Limited</option>
	                    <option value="342d6712-96f9-4bba-9ca0-159147551aa0">Sumitomo Corporation</option>
	                    <option value="fcf1dfea-1b7c-4208-ac5c-70492ca1dab0">SUMITOMO ELECTRIC INDUSTRIES, Ltd.</option>
	                    <option value="0e0d11e7-84a6-4e4a-809d-e58e97d1dcf2">Sun &amp; Wind Energy</option>
	                    <option value="41ebcd2d-5f35-4a85-9e94-959114bcc4bf">sunfire GmbH </option>
	                    <option value="5be75f10-963e-4e7c-a90a-b6d8a06dfa20">Suntech Power Holdings Co., Ltd.</option>
	                    <option value="f0ef41a7-5b91-4073-b4a3-fa19c476709e">SUNTRACK</option>
	                    <option value="34d80c67-d0de-40e4-adb2-94bc8c5d639e">Swedish Energy Agency</option>
	                    <option value="7190df37-390a-4009-9bf8-6e21ad0a2f14">Swedish Trade Council</option>
	                    <option value="04dd311a-daf0-42f2-bd39-eda5cdd7d534">TATA BP SOLAR INDIA LTD</option>
	                    <option value="3f86d601-af33-46ec-b4ca-1b9d97a5307d">Technology Centre Mongstad</option>
	                    <option value="e96f605a-7acb-44ab-917d-707afccf221d">Technology Review (MIT)</option>
	                    <option value="fd5bae65-6e37-4530-8f13-d46272deea90">TERMEX-ERISTE OY</option>
	                    <option value="73de7b5d-ef02-4386-9e7e-7a500436d68a">The Business Year</option>
	                    <option value="9d60e887-b3fd-4a32-8997-6933422cefbd">The Center of Waste Management-Abu Dhabi</option>
	                    <option value="40cb1131-fe3e-4306-adb4-08731d1130c3">The Change Initiative</option>
	                    <option value="1f4c7d87-e109-4a2e-b8ce-1ac3aa86d33d">The Emirates Center for Strategic Studies and Research</option>
	                    <option value="4a5aa34e-e493-4c8c-be42-8ffeea919068">The Energy Industry Times</option>
	                    <option value="e721bf0b-1597-432b-a613-156411f0f41b">The Renewable Energy &amp; Energy Efficiency Partnership</option>
	                    <option value="63b8fc7e-4edf-420c-82e7-2bcb9ce88994">The University of Toledo</option>
	                    <option value="c3a7daa6-d7d7-479a-b806-f574e3481ee0">Thinktosustain.com</option>
	                    <option value="de090eae-4b13-4d7f-b864-3df8e3df5e79">Thomson Reuters</option>
	                    <option value="b83a2229-695a-4b44-9a88-6eb6b70298ad">T-Link Management AG Ltd.</option>
	                    <option value="12eafb1d-a0b4-44ac-a614-97794c748c47">TOMSA DESTIL, S.L.</option>
	                    <option value="84c6c620-8f66-41df-b47d-6a96d9e67f30">Torresol Energy</option>
	                    <option value="41945d8e-0c96-4a3e-9656-8f6938929c21">TOTAL</option>
	                    <option value="36c4c228-def0-4428-b96a-c6bbc7e0324c">Tracemedia - Energy Review</option>
	                    <option value="ea4cc258-5c08-494d-8700-a809d6bfd501">Troiani &amp; Ciarrocchi S.r.l.</option>
	                    <option value="adeb70ce-9c6d-435b-8792-715f984cb66b">T&#252;v Rheinland Consulting GmbH </option>
	                    <option value="06d688b0-9431-4c12-ab6e-b9803245e4e9">TYPHOON OFFSHORE</option>
	                    <option value="ae38db75-666f-487c-b4f5-9a77c816b89a">UBIFRANCE</option>
	                    <option value="bc25333b-bf1d-48ed-a0c8-48a7cbdd15de">UK Trade &amp; Investment (UKTI)</option>
	                    <option value="39ed5d08-d7fa-4bd6-a8c7-720d4f35e746">Union Gulf Representation Companies</option>
	                    <option value="945b01c7-5f20-4be5-9366-795e4d136c3c">United Nations Environment Programme(UNEP)</option>
	                    <option value="99252eb2-2244-413c-ab0a-0d81f7bc0ec7">VDMA Forum Environmental Technologies </option>
	                    <option value="1c41297b-a975-4fad-aa43-19bf47c36bd9">Vestas Eolica S.A.U</option>
	                    <option value="17f4633d-4eb5-4592-b248-0d215cb3d552">Viessmann Middle East FZE</option>
	                    <option value="6b123c95-2343-4f19-a29c-c167e6ab802e">Vincent Industrie</option>
	                    <option value="addb1b5d-6f1d-4cf0-9738-0078d778145d">VLAKWA (Vlaams Kenniscentrum Water VZW) </option>
	                    <option value="cb5c2807-0e11-4509-9eec-7fa55b3bce2c">W &amp; K Solar(S) PTE. LTD</option>
	                    <option value="afeff3cc-59ed-4cc2-9af8-e715d909cb9e">WAAREE ENERGIES PVT. LTD.</option>
	                    <option value="4372a648-5bda-4a11-a456-a4b0dabcc044">Waste and Recycling ME</option>
	                    <option value="eddd1ea0-1ff3-4598-bdf3-2d6a2884eb23">WesTech Solar Technology Wuxi Co., Ltd</option>
	                    <option value="eada94fe-2b10-44d7-900c-4d7ab6afd12a">Widewall Investment SLU (Ormazabal)</option>
	                    <option value="134afc44-82e3-4f14-8cff-761914e0871c">Windsia Energy Industries Pte Ltd.</option>
	                    <option value="fa2a520a-9df9-4146-9d9c-59ab75d93a28">Wirtschaftsfoerderung Kt. Nidwalden</option>
	                    <option value="76b8fe11-2dff-4885-98f0-10be1b3b48e5">World Action</option>
	                    <option value="c10592d1-e454-4590-973e-7fea6ecc81b1">World Construction Today</option>
	                    <option value="d3868841-b240-474a-8ea2-93ad35f143c8">World Environment</option>
	                    <option value="831feed9-0dfd-4c8e-8207-de5e0f1bc1f8">Yagai Workshop Limited Partnership</option>
	                    <option value="e7526f33-7edf-4715-8a47-d5ae6c9661e7">Yingli Green Energy Holding Co. Ltd.</option>
	                    <option value="c4a36a1f-8dc3-4bdf-9f92-dfe71aa0c42d">ZFEP</option>
	                    <option value="f70e675e-87e3-4822-9633-608d697f969a">Zhongli Talesun Solar Co. Ltd,.</option>
                      </select>
                    </div>
	                <span class="clear"></span> </div>
	              <div class="half half-r">
	                <div class="actions">
	                  <input type="submit" name="ctl00$ctl19$btnSearch" value="Search" id="ctl19_btnSearch" class="main-button" />
                    </div>
	                <span class="clear"></span> </div>
	              <span class="clear"></span> </li>
              </ul>
            </fieldset>
          </div>-->
	      <span class="clear"></span>
	      <style type="text/css">
    ul.product-list-large
    {
        padding:10px 10px 0;
        margin:0;
        list-style:none;
    }
    .product-list-large li
    {
        width:700px;
        border:1px solid #ddd;
       
        float:left;
        margin-bottom:10px;
        position:relative;
    }
    .product-list-large li.even
    {
        float:right;
    }
    .product-list-large dl{padding:2px 5px 0 170px; margin:0; display:block;}
    .product-list-large dt
    {
        padding:2px 0 0;
        margin:0;
        color:#bbb;
        font-size:11px;
        text-transform:uppercase;
        font-weight:normal;
    }
    .product-list-large dd
    {
        padding:0;
        margin:0;
        
        font-size:11px;
        font-weight:bold;
    }
    .product-list-large dd a
    {
        color:#4d4d4d;
    }
    .product-list-large dd.product-name
    {
        border-bottom:1px solid #ddd;
    }
	
    .product-list-large dd.product-name a
    {
        color:#007BB6;
    }
	.product-list-large dd.txt
    {
        padding-bottom:20px;
    }
	.product-list-large dd.downloads
    {
        padding-left:30px;
		background:url("content/siteimages/pdf-icon-small.jpg") top left no-repeat;
		display:block;
		height:25px;
    }
	
    .product-list-large dl dd div
    {
        position:absolute; top:0; left:0;width:157px; height:112px; overflow:hidden; border:5px solid #fff;
    }
    ul.pager{padding:10px 10px 5px; border-top:1px solid #ddd;}
        </style>
	      <h2 class="section-header"><span>All Products</span></h2>
	      <div class="section-body">
	        <ul class="product-list-large cf">
            <?php 
			$cu_solution =  CU_Solutions::GetSolutions();
			for($a=0;$a<count($cu_solution);$a++){
			$row = each($cu_solution);
			if($a%2==0){
				$class = "odd"; }
				else{
				$class = "even";	
				}
			  ?>
<li class="odd">
	<dl>
    	<dt>Product Name <a name="name<?php echo $row["value"]["solution_id"]; ?>"></a></dt>
        <dd class="product-name"><a href="#" target="_blank" title=""><?php echo $row["value"]["solution_name"]; ?>
        <div>
        <img src="upload_images/Credit_Union_Solution/thumb/<?php echo $row["value"]["image_file"]; ?>" width="100" height="100" />
        </div>
        </a></dd>
        
        <dd class="txt">
        	<?php echo $row["value"]["description"]; ?>
        </dd>
         <?php 
					  $i=1;					  
					  $docfile = News::Get_UploadFile($row["value"]["solution_id"],'C');
						for($cu=0;$cu<count($docfile);$cu++){
						$docrow = each($docfile);
						$i=0;
						
					 ?>
        <dd class="downloads"><a <?php if($row1['value']['pub_doc_file'] !=''){ ?> href="download.php?path_id=1&publication_name=<?php echo $row1['value']['pub_doc_file']; }?>" ><?php echo $docrow['value']['file_name']; ?></a> </dd>
        <?php } // Upload Files
		if($i==1){ ?>
          <dd>No Related Documents</dd>           
        <?php }?>    
        <br>
    </dl>
</li>
              <?php } ?>
	                        
            </ul>
	        <ul class="pager table-pager">
	          <li class="marker"></li>
	          <li class="meta-dotted-pages "><a href="products.aspx-page=5.htm" title="Go to page 5" class="icons gray-bullet-icon">Go to page 5</a></li>
	          <li class="meta-dotted-pages "><a href="products.aspx-page=4.htm" title="Go to page 4" class="icons gray-bullet-icon">Go to page 4</a></li>
	          <li class="meta-dotted-pages "><a href="products.aspx-page=3.htm" title="Go to page 3" class="icons gray-bullet-icon">Go to page 3</a></li>
	          <li class="meta-dotted-pages "><a href="products.aspx-page=2.htm" title="Go to page 2" class="icons gray-bullet-icon">Go to page 2</a></li>
	          <li class="meta-dotted-pages current"><a href="products.aspx-page=1.htm" title="Go to page 1" class="icons gray-bullet-icon">Go to page 1</a></li>
            </ul>
	        <!-- .pager -->
          </div>
        </div>
	    <!--/MOD_40c17c06-3db5-4603-9845-a2ceafb4f537-->
      </div>
	  <!-- #content -->
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
