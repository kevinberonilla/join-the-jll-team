<?php 
/*
Template Name: Happy Clients (OLD)
*/
get_header();

$current_user = wp_get_current_user();
$cur_username = $current_user->user_login;
?>
<script type="text/javascript">
// track page load in events
loadedSeconds = $.now();
_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Our firm | Happy clients", , false]);
</script>

<!--Background-->
<script>
$(document).ready(function() {
	$.backstretch("<?php bloginfo('template_directory'); ?>/images/backgrounds/jll_americas.jpg");
});
</script>



<script>
$(document).ready(function() {

	$(".block_front").hide();
    $(".block_back").hide();
	
	$.fn.doesExist = function(){
		return $(this).length > 0;
	};
	
	// video1
	$("#video1").click(function() {
		var checkClicked = $('.clicked').doesExist();
		
		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
		
			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Our firm | Happy clients | Legal Zoom | Video", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push3.vid1").animate({
				top: 0,
				left: 384
			}, 500);
			$("#video1").animate({
				height: '192px',
				width: '384px'
			}, 500);
			
			setTimeout(function() {
				$("#video1 .block_content_nm").html(blockHTML);
				$("#video1 .block_content_nm").css("background", "none");
				$("#video1").css("z-index", "0");
			}, 500);
			
			// BG
			$('.black_bg').fadeOut(250);
			$(this).removeClass('zix');
			
		} else {
			if (checkClicked == false) {
				var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

				$("#video1 .block_content_nm").html(blockHTML);
				$("#video1 .block_content_nm").css("background", "#a1131a");
				$(".push3.vid1").animate({
					top: 0,
					left: 384
				});
				$("#video1").css("z-index", "2").animate({
					height: '384px',
					width: '576px'
				});
				$(this).addClass("clicked");
				$('#player3').attr('src', '').attr('src', '//player.vimeo.com/video/80277394?autoplay=1');
				
				// BG
				$('.black_bg').fadeIn(250);
				$(this).addClass('zix')
			}
		}
	});
	
	// 5
	$("#click5").click(function() {
		var checkClicked = $('.clicked').doesExist();
		
		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
		
			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Our firm | Happy clients | TIAA CREF | Quote", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push5.click5").animate({
				top: 0,
				left: 768
			}, 500);
			$("#click5").animate({
				height: '192px',
				width: '192px'
			}, 500);
			
			setTimeout(function() {
				$("#click5 .block_content_nm").html(blockHTML);
				$("#click5 .block_content_nm").css("background", "none");
				$("#click5").css("z-index", "0");
			}, 500);
			
			// BG
			$('.black_bg').fadeOut(250);
			$(this).removeClass('zix');
			
		} else {
			if (checkClicked == false) {
				var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

				$("#click5 .block_content_nm").html(blockHTML);
				$("#click5 .block_content_nm").css("background", "#a1131a");
				$(".push5.click5").animate({
					top: 0,
					left: 576
				});
				$("#click5").css("z-index", "2").animate({
					height: '192px',
					width: '384px'
				});
				$(this).addClass("clicked");
				$('.scroll_box').mCustomScrollbar("update");
				
				// BG
				$('.black_bg').fadeIn(250);
				$(this).addClass('zix')
			}
		}
	});
	
	// video2
	$("#video2").click(function() {
		var checkClicked = $('.clicked').doesExist();
		
		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
				
			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Our firm | Happy clients | Keycorp | Video", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push6").animate({
				top: 192,
				left: 0
			}, 500);
			$("#video2").animate({
				height: '384px',
				width: '384px'
			}, 500);
			
			setTimeout(function() {
				$("#video2 .block_content_nm").html(blockHTML);
				$("#video2 .block_content_nm").css("background", "none");
				$("#video2").css("z-index", "0");
			}, 500);
			
			// BG
			$('.black_bg').fadeOut(250);
			$(this).removeClass('zix');
			
		} else {
			if (checkClicked == false ) {
				var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

				$("#video2 .block_content_nm").html(blockHTML);
				$("#video2 .block_content_nm").css("background", "#a1131a");
				$(".push6").animate({
					top: 192,
					left: 0
				});
				$("#video2").css("z-index", "2").animate({
					height: '384px',
					width: '576px'
				});
				$(this).addClass("clicked");
				$('#player6').attr('src', '').attr('src', '//player.vimeo.com/video/114161360?autoplay=1&color=B1282E');
				
				// BG
				$('.black_bg').fadeIn(250);
				$(this).addClass('zix')
			}
		}
	});
	
	// 8
	$("#click8").click(function() {
		var checkClicked = $('.clicked').doesExist();
		
		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
		
			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Our firm | Happy clients | Investor Client | List", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push8.click8").animate({
				top: 192,
				left: 384
			}, 500);
			$("#click8").animate({
				height: '192px',
				width: '192px'
			}, 500);
			
			setTimeout(function() {
				$("#click8 .block_content_nm").html(blockHTML);
				$("#click8 .block_content_nm").css("background", "none");
				$("#click8").css("z-index", "0");
			}, 500);
			
			// BG
			$('.black_bg').fadeOut(250);
			$(this).removeClass('zix');
			
		} else {
			if (checkClicked == false) {
				var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

				$("#click8 .block_content_nm").html(blockHTML);
				$("#click8 .block_content_nm").css("background", "#a1131a");
				$(".push8.click8").animate({
					top: 0,
					left: 384
				});
				$("#click8").css("z-index", "2").animate({
					height: '384px',
					width: '384px'
				});
				$(this).addClass("clicked");
				
				// BG
				$('.black_bg').fadeIn(250);
				$(this).addClass('zix')
				
				$('.scroll_box').mCustomScrollbar("update");
			}
		}
	});
	
	// video9
	$("#video3").click(function() {
		var checkClicked = $('.clicked').doesExist();
		
		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
				
			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Our firm | Happy clients | Watkins Survey | List", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push9").animate({
				top: 192,
				left: 576
			}, 500);
			$("#video3").animate({
				height: '192px',
				width: '384px'
			}, 500);
			
			setTimeout(function() {
				$("#video3 .block_content_nm").html(blockHTML);
				$("#video3 .block_content_nm").css("background", "none");
				$("#video3").css("z-index", "0");
			}, 500);
			
			// BG
			$('.black_bg').fadeOut(250);
			$(this).removeClass('zix');
			
		} else {
			if (checkClicked == false) {
				var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

				$("#video3 .block_content_nm").html(blockHTML);
				$("#video3 .block_content_nm").css("background", "#a1131a");
				$(".push9").animate({
					top: 0,
					left: 384
				});
				$("#video3").css("z-index", "2").animate({
					height: '384px',
					width: '576px'
				});
				$(this).addClass("clicked");
				$('#player9').attr('src', '').attr('src', '//player.vimeo.com/video/80275671?autoplay=1');
				
				// BG
				$('.black_bg').fadeIn(250);
				$(this).addClass('zix')
			}
		}
	});
	
	
	// 13
	$("#click13").click(function() {
		var checkClicked = $('.clicked').doesExist();
		
		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");

			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Our firm | Happy clients | Net Promoter Score | Stats", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push13.click13").animate({
				top: 384,
				left: 384
			}, 100);
			$("#click13").animate({
				height: '192px',
				width: '576px'
			}, 100);
			
			setTimeout(function() {
				$("#click13 .block_content_nm").html(blockHTML);
				$("#click13 .block_content_nm").css("background", "none");
				$("#click13").css("z-index", "0");
			}, 100);
			
			// BG
			$('.black_bg').fadeOut(250);
			$(this).removeClass('zix');
			
		} else {
			if (checkClicked == false) {
				var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

				$("#click13 .block_content_nm").html(blockHTML);
				$("#click13 .block_content_nm").css("background", "#a1131a");
				$(".push13.click13").animate({
					top: 384,
					left: 384
				});
				$("#click13").css("z-index", "2").animate({
					height: '192px',
					width: '576px'
				});
				$(this).addClass("clicked");
				
				// BG
				$('.black_bg').fadeIn(250);
				$(this).addClass('zix')
			}
		}
	});
	

});
</script>



<!--Flipping-->
<script>
$(document).ready(function () {
    $('div.back').hide().css('left', 0);
    
    function mySideChange(front) {
        if (front) {
            $(this).parent().find('div.front').show();
            $(this).parent().find('div.back').hide();
            
        } else {
            $(this).parent().find('div.front').hide();
            $(this).parent().find('div.back').show();
        }
    }
    
    $('.flip').hover(
        function () {
            $(this).find('div').stop().rotate3Di('flip', 300, {direction: 'clockwise', sideChange: mySideChange});
        },
        function () {
            $(this).find('div').stop().rotate3Di('unflip', 400, {sideChange: mySideChange});
        }
    );
});
</script>





    <div class="push3">
    	<div class="block_3x1">
        	<div class="jll_americas_about">About our firm</div>
            <div class="sub_title">Happy clients</div>
        </div>
    </div>
    
</div>



<!--Body-->
<div class="container clearfix">
    
	<div class="push1">
    	<div class="block_2x1 firm">
        	<div class="block_content culture">
            	<font class="times_18 lh_18">Client obsession – Our producers are laser-focused about delivering for our clients, breeding client loyalty<br>
                <br>
            <strong class="times">More than 80% of our revenue comes from repeat business</strong></font>
            </div>
        </div>
    </div>
    
    <!--3-->
    <div class="push3 vid1">
    	<div class="block_2x1 clickable" id="video1">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/happy_clients_vid1.jpg"></div>
                <div class="statistics black">JOHN SUH, CEO<br>LEGALZOOM.COM</div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/happy_clients_vid1.jpg"></div>
                <div class="statistics black">JOHN SUH, CEO<br>LEGALZOOM.COM</div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/3rd_party_recognition.png"></div>
                <div class="statistics black">JOHN SUH, CEO<br>LEGALZOOM.COM</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<iframe id="player3" src="//player.vimeo.com/video/80277394?autoplay=0" width="536" height="301" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    
	<!--5-->
    <div class="push5 click5">
    	<div class="block_1x1 clickable" id="click5">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/happy_clients_5.jpg"></div>
                <div class="statistics black">BILL HARTIGAN<br>TIAA-CREF</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/happy_clients_5.jpg"></div>
                <div class="statistics black">BILL HARTIGAN<br>TIAA-CREF</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="statistics">BILL HARTIGAN<br>TIAA-CREF</div>
                <div class="pointer"></div>
                <div class="gray_box">
					<font class="times_18 white">“JLL’s takes ownership of the assets. They understand in order to best serve the client, it is essential to have a good, strong knowledge of real estate and treat the assets as their own.”</font>
                </div>
            </div>
        </div>
    </div>
    
    <!--6-->
    <div class="push6">
    	<div class="block_2x2 clickable" id="video2">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/happy_clients_vid2v3.jpg"></div>
                <div class="statistics">MARY CLIFFORD<br>DIRECTOR, FACILITIES AND SERVICES<br>SGI</div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/happy_clients_vid2v3.jpg"></div>
                <div class="statistics">MARY CLIFFORD<br>DIRECTOR, FACILITIES AND SERVICES<br>SGI</div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/3rd_party_recognition.png"></div>
                <div class="statistics black">MARY CLIFFORD<br>DIRECTOR, FACILITIES AND SERVICES<br>SGI</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<iframe id="player6" src="//player.vimeo.com/video/124233738?autoplay=0&color=B1282E" width="536" height="301" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    
    <!--8-->
    <div class="push8 click8">
    	<div class="block_1x1 clickable" id="click8">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/happy_clients_8.jpg"></div>
                <div class="statistics black">INVESTOR CLIENts</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/happy_clients_8.jpg"></div>
                <div class="statistics black">INVESTOR CLIENts</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/2x2.jpg"></div>
                <div class="statistics black">INVESTOR CLIENts</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	
                    <div class="scroll_bar"><img src="<?php bloginfo('template_directory'); ?>/images/scrollbar.png"></div>
                    
					<div class="scroll_box">
                    	A.T. Kearney<br>ABB<br>Aegean Capital<br>Aegon USA<br>AEW Capital Management<br>AKT Properties<br>Albany Road Real Estate Partners<br>Alex Sassoon<br>Alexandria Real Estate Equities<br>Alliance Commercial Partners<br>Aman<br>American Assets<br>American Continental Properties<br>American Realty Advisors<br>Amerimar Enterprises<br>Amoroso Companies<br>AMP Capital Investors<br>Amsdell Companies<br>Amstar Group<br>Anglo Irish Bank Corporation<br>APF Properties<br>Aramco Corporation<br>Arden Realty<br>AREA Property Partners<br>Arthur Hill & Co. <br>ASB Capital Management<br>ATC Partners<br>AXA Equitable Life Insurance Company<br>Bank of America<br>Bantry Holdings<br>Banyan Street Capital<br>BCN Development<br>Beacon Capital Partners<br>Beacon Investment Properties<br>Behringer Harvard<br>Bent Street Properties<br>Bentall Kennedy <br>Berkeley Investments<br>Berkley Properties<br>Bilak Enterprises<br>Billingsley Company<br>Binswanger<br>BioMed Realty Trust<br>Black & Decker Corporation<br>BlackRock<br>Blakely Stern Investment Advisors<br>Blueurban<br>Boston Properties<br>Boston University<br>Bradshaw Westwood Trust<br>Brandywine Realty Trust<br>Brause Realty<br>Brazos Private Equity Parterns<br>Brentwood Capital Partners <br>Brickman<br>Bristol Group<br>Britannia Pacific Properties<br>Brixmor<br>Broadreach Capital Partners <br>Broadway Partners<br>Broe Companies<br>Brookdale Group<br>Brookfield Asset Management<br>Brookfield Office Properties<br>Brookwood Financial Partners<br>Cabot Properties<br>California Fruit Company<br>California State Teachers' Retirement System<br>Callahan Capital Partners<br>Cambridge Associates<br>Cantera Owner's Association<br>Capital Commercial Investments<br>Capmark Financial Group<br>Carlsbad Medical Center<br>Carlyle Group<br>Carter Real Estate<br>Casden Properties<br>CB Richard Ellis Investors<br>CBS Television Network<br>CDR Realty<br>CEA Group<br>Centremark Properties<br>Charles Construction<br>Charles River Laboratories International<br>Charter Hall Real Estate<br>Chestnut Street Realty<br>Chevy Chase Land Company<br>China Construction America<br>Church Street Investment Properties<br>CIM Group<br>Cincinnati Capital Partners<br>Clarion Partners<br>Clark Enterprises<br>Coca-Cola Company<br>Collins Asset Management<br>Collins Development Company<br>Colonial Properties Trust<br>Colony Capital<br>Colony Realty Partners<br>Colory Metal & Glass<br>CommonWealth REIT<br>Condusiv Technologies<br>Continental Property<br>Cornerstone Real Estate Advisors<br>Corporate Office Properties Trust (COPT)<br>Corrugated Partners<br>Crenshaw-Singleton Properties<br>Crescent Real Estate Equities<br>Crocker Partners<br>CrossHarbor Capital Partners<br>CVS Caremark Corporation<br>CWCapital Asset Management <br>DAI Investments<br>David Werner Real Estate Investments Co<br>Daymark Realty Advisors<br>Denholtz Associates<br>Deutsche Asset & Wealth Management<br>Digital Realty Trust<br>Dilweg Companies<br>Divco West<br>Dividend Capital<br>Divine Square <br>DLJ Real Estate Capital Partners<br>Douglas Development Corporation<br>Drawbridge Realty Trust<br>Duke Realty Corporation<br>Eagleridge Vertical Development<br>Eastgate Realty<br>Eastman Companies<br>ECOM Real Estate<br>Edgeworth Laskey Properties<br>Edward J. Minskoff Equities<br>ELV Associates<br>Embarcadero Capital Partners <br>Emmes Asset Management Company <br>Equity Office Management<br>Equus Capital Partners<br>Ethington Woodward Properties<br>Etkin Equities <br>Fairways Equities<br>Faison Enterprises<br>Farley White Interests <br>Federal Acquisition Partners<br>First Industrial Realty Trust<br>Foram Group<br>Fortunato Development<br>Fortune International Realty<br>Foulger-Pratt Companies<br>Fudec<br>Fulcrum Asset Advisors<br>G&L Glastonbury<br>GE Capital Real Estate<br>General Growth Properties<br>General Investment & Development<br>Geoff Sager<br>George Washington University<br>Georgetown Company<br>GF Investments<br>Gilazo Development Co.<br>Global Holdings<br>Goff Capital Partners<br>Gold Peak Industries North America<br>Golfview Members<br>Gramercy Capital Corporation<br>Grant Management <br>Grasso Holdings<br>Greenebaum & Rose Associates<br>Greenlaw Partners<br>Greenville Partners<br>Greystar Development<br>Griffin Capital<br>Griffith Properties<br>Grosvenor Americas<br>Guardian Realty Investors<br>Gutierrez Companies<br>H.N. Gorin<br>Hahn Kook Center<br>Halle Companies<br>Hankey Investment Company<br>Harbor Group International<br>Harris and Harris<br>Harsch Investment Properties<br>Harvest Properties<br>Health Care Property Investors<br>Heitman<br>Hellman & Friedman<br>Heritage Investment Management<br>Hillwood Development Corporation<br>Hines <br>Hitt Contracting<br>Hokanson<br>HUB Properties Trust<br>Hudson Advisors<br>Hurley and Associates<br>IDS Real Estate Group<br>IndCor Properties<br>Indivest<br>ING Life Insurance <br>Intercontinental Real Estate Corporation<br>Intermec Technologies Corporation<br>Invesco Real Estate<br>Investcorp International<br>iStar Financial<br>Ivanhoe Cambridge<br>Ivy Realty Services<br>Jamestown Properties<br>Jaye Donaldson<br>JBG Companies<br>JP Morgan Chase & Company<br>K&K Holdings<br>KanAm Grund Kapitalanlagegesellschaft mbH<br>Kaufman & Jacobs<br>Kaufman Financial Group<br>Kaufman Organization<br>KBS<br>KDC<br>Kennedy Wilson<br>Kenyon Investments<br>Kilroy Realty Corporation<br>Kipp-Stawski Management Group<br>KITA<br>Kojaian Companies<br>KS Partners <br>KTR Capital Partners<br>L&B Realty Advisors<br>Landmark<br>Landmark Realty Advisors<br>Landow & Company Builders<br>Lanidex<br>Laramie Associates<br>Larson Realty Group<br>LaSalle Investment Management<br>LBA Realty<br>LDR Partners<br>Legacy Partners Commercial<br>Leggat McCall Properties <br>Lexington Realty Trust<br>Liberty Property Trust<br>Lincoln Property Company<br>LNR Partners<br>Lowe Enterprises<br>Lucas Companies<br>M&J Wilkow Management<br>Mac Management Company<br>Mandelbaum<br>Mansfield Equities<br>Manulife Financial<br>Marcel George Family Trust<br>Marcus Partners<br>Massachusetts Institute of Technology<br>Massachusetts Teachers Association<br>MassDevelopment<br>McCarthy Cook & Co. <br>Menlo Equities <br>Meridian Group<br>Meridian Group<br>Meritage Properties <br>Metropolis Investment Holdings<br>Metropolitan Life Insurance Company<br>MGP<br>Mid-America Real Estate Group<br>Midelem Companies<br>MIG Real Estate<br>Millbrook Real Estate Company<br>Mirae Asset Global Investment<br>Monroe Commerce Cente<br>Morgan Stanley<br>Morris & Morse Company<br>Mosing Properties<br>Motorola Solutions<br>Mount Auburn Management<br>MPG Office Trust<br>MRP Realty Partners<br>Museum Place Group<br>Muss & Muss<br>Mutual of America Life Insurance Company<br>Nancy Shiaw<br>NBJ Architecture<br>New Boston Fund<br>New Center Development<br>New York Life Investment Management <br>Newmark Grubb Knight Frank<br>Nexus Properties<br>Nordic Properties<br>Normandy Real Estate Partners<br>Northwestern Mutual Life Insurance Company<br>NPV Direct Invest<br>NTS Development Company<br>Oaktree Capital Management<br>Omni Development Corporation<br>One Hampshire at Kendall Square Condominium Trust<br>Onyx Property Company<br>Opus Bank<br>OSL Shipping & Development<br>Pacific Office Properties Trust<br>Panasia Estate<br>Panattoni Development Company<br>Panco Development<br>Paradigm Properties<br>Paramount Group<br>Parkway Properties<br>Parmenter Realty & Investments <br>Patriot Realty Partners<br>Pearlmark Real Estate Partners<br>Pembroke Real Estate<br>Penzance Properties<br>Pheonix Property Company<br>Philips International Holding Corporation<br>Piedmont Office Realty Trust<br>Plymouth Prairie Associates<br>Plymouth Rock Assurance Corporation<br>Pontegadea Inmobiliaria<br>Post Brothers Apartments<br>Prescott Realty Group<br>Principal Financial Group<br>Prism Capital Partners<br>Prologis<br>Property Group Partners<br>Prudential Financial<br>Prudential Real Estate Investors<br>Pyne Companies<br>R.E. Collier<br>Real Estate Capital Partners<br>Recapitalization Advisors<br>Red River Asset Management<br>REDICO<br>Redstone Group<br>REEF Parkway<br>REIT Management & Research<br>Resort Gaming Group<br>Reva Management Advisor<br>RFR Holding Corporation<br>Ricchi Investments<br>RNM Properties<br>Robertson Properties Group<br>Rock Spring Properties<br>Rockefeller Group Investment Management Corp.<br>Rockrose Development Corp.<br>Rosemont Realty<br>Royco<br>Rubenstein Partners<br>Sage Realty Corporation<br>Salus Property Investments<br>Sant Properties<br>Savanna Partners<br>Schneider Schneider<br>Schnitzer West<br>Seagate Properties<br>Seaton Benkowski & Partners<br>SEB Investment GmbH<br>Sentinel Capital Funding<br>Seven Hills Corporation<br>Shorenstein Company<br>Sierra Properties<br>Silverstein Properties<br>Skanska USA <br>SL Green Realty Corp<br>SLS Management<br>SMA Equities<br>Solow Building Company<br>Somerset Partners<br>Spaulding & Slye Investments<br>Spear Street Capital<br>Square One<br>Starwood Capital Group<br>State of Florida Board of Administration<br>State Teachers Retirement System of Ohio<br>Sterling Equities<br>Sterling Group<br>Stockbridge Capital Group<br>Strada Investment Group<br>StructureTone Southwest<br>Sun Life Financial<br>Swerdlow Group<br>TA Associates Realty<br>Taconic Investment Parnters<br>Taplin Associates<br>Taubco<br>TF Cornerstone<br>The Abbey Group<br>The Blackstone Group<br>The Buccini/Pollin Group<br>The Davis Companies<br>The Goldstar Group<br>The Grossman Companies<br>The Hoffman Companies<br>The Inland Real Estate Group of Companies<br>The Irvine Company<br>The Kroenke Group<br>The Muller Company<br>The Muller Company<br>The Realex Capital Corporation<br>The Regents of the University of California<br>The Related Companies<br>The Shidler Group<br>The Solae Company<br>Theo Development<br>TIAA-CREF<br>Time Equities<br>Tishman Speyer <br>Tochterman Managment Group<br>Toll Brothers<br>Torchlight Investors<br>Townsgate Capital Corporation<br>Transwestern Commercial Services<br>Triarch Capital Group<br>Trimont Real Estate Advisors<br>Trinity Church Corp<br>TRITEC Real Estate Company<br>TrustCo Bank<br>Tsakopoulos Investments<br>UBS<br>Unico Properties<br>University of Pennsylvania<br>Urban America<br>Urban Property Management<br>Urban Renaissance Group<br>US Realty Advisors<br>USA Sunset Media Management <br>USAA Real Estate Company<br>Ustler Development<br>UVA Real Estate Foundation<br>VEF Advisors <br>VeriSign<br>Verizon <br>Vineyard Management<br>Vintage Capital Partners<br>Virtu Meridian Associates<br>Vornado Realty Trust<br>W.J. Vakos & Company<br>Washington Capital Management<br>Waterman Interests<br>Weda Developers<br>Wells Real Estate Funds<br>West Coast Insurance<br>West Loop Asociates<br>Westcore Properties<br>Western States Investment Group<br>Whalou Properties<br>Whitaker Investment<br>White Oak Realty Partners<br>Wiens Capital Management <br>Willco Companies<br>Willett Companies<br>World Class Capital Group<br>Wortham Northwest<br>Zar City Properties <br>Zeller Realty Corporation
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <!--9-->
    <div class="push9">
    	<div class="block_2x1 clickable" id="video3">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/happy_clients_vid3.jpg"></div>
                <div class="statistics black">WATKINS SURVEY</div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/happy_clients_vid3.jpg"></div>
                <div class="statistics black">WATKINS SURVEY</div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/3rd_party_recognition.png"></div>
                <div class="statistics black">WATKINS SURVEY</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<iframe id="player9" src="//player.vimeo.com/video/80275671?autoplay=0" width="536" height="301" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <!--13-->
    <div class="push13 click13">
    	<div class="block_3x1 clickable" id="click13">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/net_promoter_score.png"></div>
                <div class="flip_info">
                	<h2>How likely are you to</h2>
                	<h1 class="bold">recommend</h1>
                    <h2>JLL to a colleague or friend?</h2>
                </div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/net_promoter_score.png"></div>
                <div class="flip_info">
                	<h2>How likely are you to</h2>
                	<h1 class="bold">recommend</h1>
                    <h2>JLL to a colleague or friend?</h2>
                </div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="pointer"></div>
                <div class="gray_box white">
                    <div class="clearfix">
                        <div class="nps_left">
                            <font class="txt_11">The Harvard Business Review says the best measure of client loyalty is the Net Promoter® Score (NPS). It’s a way to understand how many companies are your “promoters”<br><br>
                            
                            Average companies have scores below 10. “Gold standard” companies like Apple, Trader Joes and American Express have scores in the 70’s</font>
                        </div>
                        <div class="nps_right">
                            <font class="times_22 red">Our respondents gave JLL a gold standard score of 78.6*</font><br>
                            <font class="footnote">* Calculated by an independent<br> third-­party research firm</font>
                        </div>
                    </div>
                    <div class="flip_name white">NET PROMOTER SCORE</div>
                </div>
            </div>
        </div>
    </div>
    
    
	
    

</div>












<?php get_footer(); ?>