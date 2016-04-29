<?php 
/*
Template Name: Investing In Our People
*/
get_header(); 

$current_user = wp_get_current_user();
$cur_username = $current_user->user_login;
?>
<script type="text/javascript">
// track page load in events
loadedSeconds = $.now();
_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Sales path | Investing in our people", , false]);
</script>

<!--Background-->
<script>
$(document).ready(function() {
	$.backstretch("<?php bloginfo('template_directory'); ?>/images/backgrounds/sales_path.jpg");
});
</script>


<script>
$(document).ready(function() {

	$(".block_front").hide();
    $(".block_back").hide();
	
	$.fn.doesExist = function(){
		return $(this).length > 0;
	};
	
	// 1
	$("#click1").click(function() {
		var checkClicked = $('.clicked').doesExist();
		
		// click tracking
		_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Sales path | Investing in our people | New hire orietation | Bullet points", ($.now() - loadedSeconds), false]);

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push1.click1").stop().animate({
				top: 0,
				left: 0
			}, 500);
			$("#click1").stop().animate({
				height: '192px',
				width: '384px'
			}, 500);
			
			setTimeout(function() {
				$("#click1 .block_content_nm").html(blockHTML);
				$("#click1 .block_content_nm").css("background", "none");
				$("#click1").css("z-index", "0");
			}, 500);
			
			// BG
			$('.black_bg').fadeOut(250);
			$(this).removeClass('zix');
			
		} else {
			if (checkClicked == false) {
				var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

				$("#click1 .block_content_nm").html(blockHTML);
				$("#click1 .block_content_nm").css("background", "#a1131a");
				$(".push1.click1").stop().animate({
					top: 0,
					left: 0
				});
				$("#click1").css("z-index", "2").stop().animate({
					height: '384px',
					width: '576px'
				});
				$(this).addClass("clicked");
				
				// BG
				$('.black_bg').fadeIn(250);
				$(this).addClass('zix')
			}
		}
	});
	
	// 3
	$("#click3").click(function() {
		var checkClicked = $('.clicked').doesExist();
		
		// click tracking
		_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Sales path | Investing in our people | BEC and BLC | Bullet points", ($.now() - loadedSeconds), false]);

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push3.click3").stop().animate({
				top: 0,
				left: 384
			}, 100);
			$("#click3").stop().animate({
				height: '192px',
				width: '576px'
			}, 100);
			
			setTimeout(function() {
				$("#click3 .block_content_nm").html(blockHTML);
				$("#click3 .block_content_nm").css("background", "none");
				$("#click3").css("z-index", "0");
			}, 100);
			
			// BG
			$('.black_bg').fadeOut(250);
			$(this).removeClass('zix');
			
		} else {
			if (checkClicked == false) {
				var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

				$("#click3 .block_content_nm").html(blockHTML);
				$("#click3 .block_content_nm").css("background", "#a1131a");
				$(".push3.click3").stop().animate({
					top: 0,
					left: 384
				});
				$("#click3").css("z-index", "2").stop().animate({
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
	
	// 6
	$("#click6").click(function() {
		var checkClicked = $('.clicked').doesExist();
		
		// click tracking
		_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Sales path | Investing in our people | Training | Bullet points", ($.now() - loadedSeconds), false]);

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push6").stop().animate({
				top: 192,
				left: 0
			}, 500);
			$("#click6").stop().animate({
				height: '192px',
				width: '192px'
			}, 500);
			
			setTimeout(function() {
				$("#click6 .block_content_nm").html(blockHTML);
				$("#click6 .block_content_nm").css("background", "none");
				$("#click6").css("z-index", "0");
			}, 500);
			
			// BG
			$('.black_bg').fadeOut(250);
			$(this).removeClass('zix');
			
		} else {
			if (checkClicked == false) {
				var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

				$("#click6 .block_content_nm").html(blockHTML);
				$("#click6 .block_content_nm").css("background", "#a1131a");
				$(".push6").stop().animate({
					top: 0,
					left: 0
				});
				$("#click6").css("z-index", "2").stop().animate({
					height: '384px',
					width: '384px'
				});
				$(this).addClass("clicked");
				
				// BG
				$('.black_bg').fadeIn(250);
				$(this).addClass('zix')
			}
		}
	});
	
	// 9
	$("#click9").click(function() {
		var checkClicked = $('.clicked').doesExist();
		
		// click tracking
		_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Sales path | Investing in our people | Academy | Video", ($.now() - loadedSeconds), false]);

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push9").stop().animate({
				top: 192,
				left: 576
			}, 500);
			$("#click9").stop().animate({
				height: '384px',
				width: '384px'
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
				$(".push9").stop().animate({
					top: 192,
					left: 384
				});
				$("#click9").css("z-index", "2").stop().animate({
					height: '384px',
					width: '576px'
				});
				$(this).addClass("clicked");
				$('#player9').attr('src', '').attr('src', '//player.vimeo.com/video/80278799?autoplay=1');
				
				// BG
				$('.black_bg').fadeIn(250);
				$(this).addClass('zix')
			}
		}
	});
	
	// 11
	$("#click11").click(function() {
		var checkClicked = $('.clicked').doesExist();
		
		// click tracking
		_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Sales path | Investing in our people | Leadership council and advisory | Bullet points", ($.now() - loadedSeconds), false]);

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push11.click11").stop().animate({
				top: 384,
				left: 0
			}, 100);
			$("#click11").stop().animate({
				height: '192px',
				width: '384px'
			}, 100);
			
			setTimeout(function() {
				$("#click11 .block_content_nm").html(blockHTML);
				$("#click11 .block_content_nm").css("background", "none");
				$("#click11").css("z-index", "0");
			}, 100);
			
			// BG
			$('.black_bg').fadeOut(250);
			$(this).removeClass('zix');
			
		} else {
			if (checkClicked == false) {
				var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

				$("#click11 .block_content_nm").html(blockHTML);
				$("#click11 .block_content_nm").css("background", "#a1131a");
				$(".push11.click11").stop().animate({
					top: 384,
					left: 0
				});
				$("#click11").css("z-index", "2").stop().animate({
					height: '192px',
					width: '384px'
				});
				$(this).addClass("clicked");
				
				// BG
				$('.black_bg').fadeIn(250);
				$(this).addClass('zix')
			}
		}
	});
	
	// 13
	$("#click13").click(function() {
		var checkClicked = $('.clicked').doesExist();

		// click tracking
		_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Sales path | Investing in our people | Mentor/protege program | Bullet points", ($.now() - loadedSeconds), false]);

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push13").stop().animate({
				top: 384,
				left: 384
			}, 500);
			$("#click13").stop().animate({
				height: '192px',
				width: '192px'
			}, 500);
			
			setTimeout(function() {
				$("#click13 .block_content_nm").html(blockHTML);
				$("#click13 .block_content_nm").css("background", "none");
				$("#click13").css("z-index", "0");
			}, 500);
			
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
				$(".push13").stop().animate({
					top: 192,
					left: 384
				});
				$("#click13").css("z-index", "2").stop().animate({
					height: '384px',
					width: '384px'
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
        	<div class="sales_path">A successful sales path</div>
            <div class="sub_title">Investing in our people</div>
        </div>
    </div>
    
</div>



<!--Body-->
<div class="container clearfix">


	<!--1-->
    <div class="push1 click1">
    	<div class="block_2x1 clickable" id="click1">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/investing_in_our_people_1.jpg"></div>
                <div class="statistics">New hire orientation</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/investing_in_our_people_1.jpg"></div>
                <div class="statistics">New hire orientation</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/investing_in_our_people_1_back.jpg"></div>
                <div class="statistics black">New hire orientation</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<div class="clearfix">
                        <div class="nho_left">
                            Our biannual New Hire Orientation:
                            <ul>
                                <li>Provides an introduction to our people and our business</li>
                                <li>Enhances productivity by reducing the learning curve</li>
                                <li>Offers networking and Q&A with our top producing talent</li>
                            </ul><br>
                            
                            <font class="times_16 gray">“I thought the program was great; very well-orchestrated and worthwhile. I left my old firm
    because I didn’t feel that they invest resources in developing younger talent. Helped me to connect with my peers and hear more about the best
    practices. Having the likes of Gates, Green and Meyer in the room is invaluable”</font>
                        </div>
                        <div class="nho_right">
                            <font class="times_28 gray">84% of people attending said the session was extremely relevant and effective</font>
                        </div>
					</div>
                </div>
            </div>
        </div>
    </div>
    
   
   
    <!--3-->
    <div class="push3 click3">
    	<div class="block_3x1 clickable" id="click3">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/inventing_in_our_people_3.png"></div>
                <div class="flip_info">
                	<h2>Leadership that</h2>
                	<h1 class="bold">listens</h1>
                </div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/inventing_in_our_people_3.png"></div>
                <div class="flip_info">
                	<h2>Leadership that</h2>
                	<h1><strong>listens</strong></h1>
                </div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="pointer"></div>
                <div class="gray_box white">
                    <div class="clearfix">
                        <div class="left_half">
                            <strong>Brokerage Executive Committee</strong>
                            <ul class="white_bullet">
                                <li>21 members representing our sales businesses and key business accelerator groups</li>
                                <li>Sets the vision, define objectives and determine accountabilities and outcomes</li>
                            </ul>
                        </div>
                        <div class="right_half">
                            <strong>Brokerage Leadership Council</strong>
                            <ul class="white_bullet">
                                <li>57 members including the broker leaders across all of our markets and key infrastructure partners</li>
                                <li>Devise how we leverage the platform to win more together</li>
                                <li>Promotes partnering, idea flow and importantly, COOPETITION!</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flip_name white">Bec and blc</div>
                </div>
            </div>
        </div>
    </div>
   
    
    
	<!--6-->
    <div class="push6">
    	<div class="block_1x1 clickable" id="click6">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/investing_in_our_people_6.jpg"></div>
                <div class="statistics">Training</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/investing_in_our_people_6.jpg"></div>
                <div class="statistics">Training</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/inventing_in_our_people_6_back.jpg"></div>
                <div class="statistics black">Training</div>
                <div class="pointer"></div>
                <div class="gray_box">

					<font class="scroll_bar"><img src="<?php bloginfo('template_directory'); ?>/images/scrollbar.png"></font>

					<div class="scroll_box">
                         <strong>30+ training sessions offered in 2013:</strong>
                        <ul>
                            <li>Managing conflicts of interest in selling Tenant Rep</li>
                            <li>Dominating market share in smaller markets; how to leverage<br> the JLL platform to win more</li>
                            <li>Advanced LinkedIn training for driving new business</li>
                            <li>Selling with economics</li>
                            <li>Handling challenging questions</li>
                            <li>Branding yourself</li>
                            <li>Rent and the capital stack – a symbiotic relationship</li>
                            <li>A tenant/landlord debate on language pitfalls in lease<br> agreements</li>
                            <li>The Exceptional Presenter: Improve your presentation skills</li>
                            <li>Rainmaking: Sales presentations that win</li>
                            <li>More deals in 90 minutes</li>
                            <li>Real estate 101</li>
                            <li>Brokers who dominate: the 8 traits of top producers</li>
                            <li>Internal teaming for success</li>
                            <li>What’s the “deal” with ENERGY STAR?</li>
                            <li>Selling by phone</li>
                            <li>Winning more tenant rep assignments</li>
                            <li>Client discovery communications and needs analysis</li>
                            <li>Negotiating and closing techniques</li>
                            <li>Investment brokerage and broker opinion of value</li>
                            <li>Performance leasing</li>
                            <li>Team brokerage</li>
                            <li>Presentations and closing</li>
                            <li>Best closing techniques</li>
                            <li>Financial literacy – Tenant Rep</li>
                            <li>Financial literacy – Agency Leasing</li>
                            <li>Financial statements</li>
                            <li>Supply Chain 101, 202 and 505</li>
                            <li>Maintaining our competitive edge</li>
                            <li>Presentation skills training</li>
                            <li>Technical tips for virtual meetings</li>
                            <li>Communicate with conviction</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<div class="push7">
    	<div class="block_2x1">
        	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/investing_in_our_people_7.png"></div>
        	<div class="block_content">
            	<font class="times_28 white">Our people are our most important investment, with $10M spent per year in development and training.</font>
            </div>
        </div>
    </div>
    
	<!--9-->
    <div class="push9">
    	<div class="block_2x2 clickable" id="click9">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/investing_in_our_people_9.jpg"></div>
                <div class="statistics black">academy</div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/investing_in_our_people_9.jpg"></div>
                <div class="statistics black">academy</div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/3x2.png"></div>
                <div class="statistics black">academy</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<iframe id="player9" src="//player.vimeo.com/video/80278799?autoplay=0" width="536" height="301" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    <!--11-->
    <div class="push11 click11">
    	<div class="block_2x1 clickable" id="click11">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/investing_in_our_people_11.png"></div>
                <div class="flip_info">
                	<h1 class="bold">Influence</h1>
                	<h2>from all levels of the organization</h2>
                </div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/investing_in_our_people_11.png"></div>
                <div class="flip_info">
                	<h1><strong>Influence</strong></h1>
                	<h2>from all levels of the organization</h2>
                </div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="pointer"></div>
                <div class="gray_box white">
                    <ul class="white_bullet">
                        <li>14 members from throughout the markets</li>
                        <li>Develops program ideas for leadership that accelerate the professional development of our sales team with a focus on those under 10 years of brokerage experience</li>
                        <li>Directly influences platform-wide changes around culture, training and technology</li>
                    </ul>
                    <div class="flip_name white">Brokerage Leadership council<br>advisory board</div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    <!--13-->
    <div class="push13">
    	<div class="block_1x1 clickable" id="click13">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/investing_in_our_people_13.jpg"></div>
                <div class="statistics shadow">mentor/<br>protÉgÉ program</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/investing_in_our_people_13.jpg"></div>
                <div class="statistics shadow">mentor/<br>protÉgÉ program</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/2x2.jpg"></div>
                <div class="statistics black">mentor/<br>protÉgÉ program</div>
                <div class="pointer"></div>
                <div class="gray_box">
                    A selective, elite program providing sustained interaction between high-potential, developing professionals and highly successful, seasoned leaders.<br><br>
                    
                    Since the program's inception there have been 184 Protégés: 
                    <ul>
                    	<li>76% have reached recognition levels:</li>
                    </ul>
                    
                    <ul class="m_10">
                    	<li>43 Top Achievers</li>
                        <li>30 Gold Achievers</li>
                        <li>28 Top Guns</li>
                        <li>17 have gone on to be Mentors in the program</li>
                        <li>11 have become Broker Leads</li>
                    </ul>
                    
                    <p><br><img src="<?php bloginfo('template_directory'); ?>/images/2015-class.png" height="96"></p>
                    
                    <!--<ul>
                    	<li>14 have gone on to be Mentors in the program</li>
                        <li>3 have become Broker Leads</li>
                    </ul>-->
                </div>
            </div>
        </div>
    </div>


</div>












<?php get_footer(); ?>