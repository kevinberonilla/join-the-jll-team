<?php 
/*
Template Name: Happy Clients
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
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Our firm | Happy clients | LevelUp | Video", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push3.vid1").stop().animate({
				top: 0,
				left: 384
			}, 500);
			$("#video1").stop().animate({
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
				$(".push3.vid1").stop().animate({
					top: 0,
					left: 384
				});
				$("#video1").css("z-index", "2").stop().animate({
					height: '384px',
					width: '576px'
				});
				$(this).addClass("clicked");
				$('#player3').attr('src', '').attr('src', '//player.vimeo.com/video/125581587?autoplay=1&color=B1282E');
				
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
			
			$(".push5.click5").stop().animate({
				top: 0,
				left: 768
			}, 500);
			$("#click5").stop().animate({
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
				$(".push5.click5").stop().animate({
					top: 0,
					left: 576
				});
				$("#click5").css("z-index", "2").stop().animate({
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
			
			$(".push6").stop().animate({
				top: 192,
				left: 0
			}, 500);
			$("#video2").stop().animate({
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
				$(".push6").stop().animate({
					top: 192,
					left: 0
				});
				$("#video2").css("z-index", "2").stop().animate({
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
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Our firm | Happy Clients | Top 20 Investor Clients | List", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push8.click8").stop().animate({
				top: 192,
				left: 384
			}, 500);
			$("#click8").stop().animate({
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
				$(".push8.click8").stop().animate({
					top: 0,
					left: 384
				});
				$("#click8").css("z-index", "2").stop().animate({
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
	
	// 9
	$("#click9").click(function() {
		var checkClicked = $('.clicked').doesExist();
		
		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
		
			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Our firm | Happy clients | New Albertson's, Inc. | Quote", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push9.click9").stop().animate({
				top: 192,
				left: 576
			}, 500);
			$("#click9").stop().animate({
				height: '192px',
				width: '192px'
			}, 500);
			
			setTimeout(function() {
				$("#click9 .block_content_nm").html(blockHTML);
				$("#click9 .block_content_nm").css("background", "none");
				$("#click9").css("z-index", "0");
			}, 500);
			
			// BG
			$('.black_bg').fadeOut(250);
			$(this).removeClass('zix');
			
		} else {
			if (checkClicked == false) {
				var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

				$("#click9 .block_content_nm").html(blockHTML);
				$("#click9 .block_content_nm").css("background", "#a1131a");
				$(".push9.click9").stop().animate({
					top: 0,
					left: 384
				});
				$("#click9").css("z-index", "2").stop().animate({
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
	
	
	// 13
	$("#click13").click(function() {
		var checkClicked = $('.clicked').doesExist();
		
		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");

			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Our firm | Happy clients | Net Promoter Score | Stats", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push13.click13").stop().animate({
				top: 384,
				left: 384
			}, 100);
			$("#click13").stop().animate({
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
				$(".push13.click13").stop().animate({
					top: 384,
					left: 384
				});
				$("#click13").css("z-index", "2").stop().animate({
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
            <strong class="times">More than 85% of our revenue comes from repeat business</strong></font>
            </div>
        </div>
    </div>
    
    <!--3-->
    <div class="push3 vid1">
    	<div class="block_2x1 clickable" id="video1">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/happy_clients_vid1v2.jpg"></div>
                <div class="statistics black">MICHAEL HAGAN, CSO<br>LEVELUP</div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/happy_clients_vid1v2.jpg"></div>
                <div class="statistics black">MICHAEL HAGAN, CSO<br>LEVELUP</div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/3rd_party_recognition.png"></div>
                <div class="statistics black">MICHAEL HAGAN, CSO<br>LEVELUP</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<iframe id="player3" src="//player.vimeo.com/video/125581587?autoplay=0&color=B1282E" width="536" height="301" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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
                <div class="statistics black">Top 20 Investor Clients</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/happy_clients_8.jpg"></div>
                <div class="statistics black">Top 20 Investor Clients</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/2x2.jpg"></div>
                <div class="statistics black">Top 20 Investor Clients</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	
                    <div class="scroll_bar"><img src="<?php bloginfo('template_directory'); ?>/images/scrollbar.png"></div>
                    
					<div class="scroll_box">
                    	<ul class="investor-list">
                            <li>Brookfield Office Properties</li>
                            <li>JP Morgan Chase &amp; Company</li>
                            <li>LaSalle Investment Management</li>
                            <li>Shorenstein Company</li>
                            <li>TIAA-CREF</li>
                            <li>Piedmont Office Realty Trust</li>
                            <li>Cypress Asset Management</li>
                            <li>Beacon Capital Partners</li>
                            <li>MetLife Real Estate Investors</li>
                            <li>GE Capital Real Estate</li>
                            <li>Paramount Group</li>
                            <li>Prudential Real Estate Investors</li>
                            <li>AmTrust Realty Corporation</li>
                            <li>Kilroy Realty Corporation</li>
                            <li>Equity Office Management</li>
                            <li>Morgan Stanley</li>
                            <li>Invesco Real Estate</li>
                            <li>Behringer</li>
                            <li>Fulcrum Asset Advisors</li>
                            <li>BNY Mellon</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <!--9-->
    <div class="push9 click9">
    	<div class="block_1x1 clickable" id="click9">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/happy_clients_9.jpg"></div>
                <div class="statistics black">TIM BAKER<br>NEW ALBERTSON'S, INC.</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/happy_clients_9.jpg"></div>
                <div class="statistics black">TIM BAKER<br>NEW ALBERTSON'S, INC.</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="statistics">TIM BAKER<br>NEW ALBERTSON'S, INC.</div>
                <div class="pointer"></div>
                <div class="gray_box">
					<font class="times_18 white">“The JLL team was chosen given their proven track record in delivering sites in markets with high barriers to entry. This is only accomplished through their premier network that allows us to review sites long before their availability becomes generally known. Combined with their unmatched level of ethics, cutting edge analytical tools, and market knowledge JLL always exceeds our expectations.”</font>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <div class="push10">
    	<div class="block_1x1">
        	<div class="block_content_nm"><img src="<?php bloginfo('template_directory'); ?>/images/flips/sales_team_benefits_7.png"></div>
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