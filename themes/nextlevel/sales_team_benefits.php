<?php 
/*
Template Name: Sales Team Benefits
*/
get_header(); 

$current_user = wp_get_current_user();
$cur_username = $current_user->user_login;
?>
<script type="text/javascript">
// track page load in events
loadedSeconds = $.now();
_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Sales path | Sales team benefits", , false]);
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
	
	// video1
	$("#video1").click(function() {
		var checkClicked = $('.clicked').doesExist();
		
		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
		
			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Sales path | Sales team benefits | Employee Resource Groups | Video", ($.now() - loadedSeconds), false]);
			
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
				$('#player3').attr('src', '').attr('src', '//player.vimeo.com/video/126062585?autoplay=1&color=B1282E');
				
				// BG
				$('.black_bg').fadeIn(250);
				$(this).addClass('zix')
			}
		}
	});
	
	// 1
	$("#click1").click(function() {
		var checkClicked = $('.clicked').doesExist();

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
		
			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Sales path | Sales team benefits | Wealth Creation Program | Stats", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push1.click1").stop().animate({
				top: 0,
				left: 0
			}, 500);
			$("#click1").stop().animate({
				height: '192px',
				width: '576px'
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
	
	// 8
	$("#click8").click(function() {
		var checkClicked = $('.clicked').doesExist();
		
		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
		
			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Sales path | Sales team benefits | Exclusive Benefits | Bullet points", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push8.click8").stop().animate({
				top: 192,
				left: 384
			}, 100);
			$("#click8").stop().animate({
				height: '192px',
				width: '576px'
			}, 100);
			
			setTimeout(function() {
				$("#click8 .block_content_nm").html(blockHTML);
				$("#click8 .block_content_nm").css("background", "none");
				$("#click8").css("z-index", "0");
			}, 100);
			
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
					top: 192,
					left: 384
				});
				$("#click8").css("z-index", "2").stop().animate({
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
	
	// 11
	$("#click11").click(function() {
		var checkClicked = $('.clicked').doesExist();

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
		
			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Sales path | Sales team benefits | Employee Resource Groups | Bullet points", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push11").stop().animate({
				top: 384,
				left: 0
			}, 500);
			$("#click11").stop().animate({
				height: '192px',
				width: '576px'
			}, 500);
			
			setTimeout(function() {
				$("#click11 .block_content_nm").html(blockHTML);
				$("#click11 .block_content_nm").css("background", "none");
				$("#click11").css("z-index", "0");
			}, 500);
			
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
				$(".push11").stop().animate({
					top: 192,
					left: 0
				});
				$("#click11").css("z-index", "2").stop().animate({
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
            <div class="sub_title">Sales team benefits</div>
        </div>
    </div>
    
</div>



<!--Body-->
<div class="container clearfix">


	<!--1-->
    <div class="push1 click1">
    	<div class="block_3x1 clickable" id="click1">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/watch_creation_team.jpg"></div>
                <div class="statistics">Wealth creation program</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/watch_creation_team.jpg"></div>
                <div class="statistics">Wealth creation program</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/employee_resouce_groups.png"></div>
                <div class="statistics black">Wealth creation program</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<h1><strong>We want our people to stay</strong></h1>
                    <h2>Our Outperformance Program provides incentive and value for our rainmakers that is meaningful, motivating, and creates “stickiness”</h2>

					<div class="clearfix">
                    	<div class="wcp_left">
                        	A multi-year program, it includes more than 15% of our <u>consistent high performers</u> within Brokerage

                        </div>
                        <div class="wcp_right">
                        	<font class="wcp">
                                The long-term contributions in the program provide significant economic value to our producers.  The individual, annual contributions vary from $25K to $100K, based on performance.<br>
                                <br>                                
                                <strong>That's a new car, a home renovation, or a year of tuition for your college freshman</strong>
                            </font>
                        </div>
                    </div>
                    
                    <p><em><br><br><br><br>*Wealth creation program is not currently relevant for Retail brokers</em></p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="push4">
    	<div class="block_2x1">
        	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/sales_path_2x1.png"></div>
        	<div class="block_content">
            	<font class="times_22 white">Great benefits enhance stickiness<br>
Stickiness breeds loyalty<br>
Loyalty grows teamwork<br>
Teamwork drives excellence</font>
            </div>
        </div>
    </div>
    
    
    
    <!--6-->
    <div class="push6 vid1">
    	<div class="block_2x1 clickable" id="video1">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/erg_video.jpg"></div>
                <div class="statistics black">EMPLOYEE<br>RESOURCE GROUPS</div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/erg_video.jpg"></div>
                <div class="statistics black">EMPLOYEE<br>RESOURCE GROUPS</div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/3rd_party_recognition.png"></div>
                <div class="statistics black">EMPLOYEE<br>RESOURCE GROUPS</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<iframe id="player3" src="//player.vimeo.com/video/126062585?autoplay=0&color=B1282E" width="536" height="301" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <!--8-->
    <div class="push8 click8">
    	<div class="block_3x1 clickable" id="click8">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/sales_team_benefits_8.png"></div>
                <div class="flip_info">
                	<h2>Exclusive benefits for our</h2>
                	<h1 class="bold">top performers</h1>
                </div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/sales_team_benefits_8.png"></div>
                <div class="flip_info">
                	<h2>Exclusive benefits for our</h2>
                	<h1><strong>top performers</strong></h1>
                </div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="pointer"></div>
                <div class="gray_box white">
                    <ul class="white_bullet">
                        <li>Dedicated IT help line</li>
                        <li>Upgraded laptop</li>
                        <li>Peer recognition and single room during Academy</li>
                        <li>Annual WSJ recognition ad</li>
                        <li>Dedicated Academy lounge for Top Guns</li>
                    </ul>
                    <div class="flip_name white">EXCLUSIVE BENEFITS FOR OUR TOP PERFORMERS</div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    <!--11-->
    <div class="push11">
    	<div class="block_3x1 clickable" id="click11">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/employee_resource_groups.jpg"></div>
                <div class="statistics">EMPLOYEE RESOURCE GROUPS</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/employee_resource_groups.jpg"></div>
                <div class="statistics">EMPLOYEE RESOURCE GROUPS</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/employee_resouce_groups.png"></div>
                <div class="statistics black">EMPLOYEE RESOURCE GROUPS</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	Adding value to our business, our people and our brand
                    <ul>
                    	<li>Membership in the ERGs has grown to over 6500 strong (38% of the US employee population)</li>
                        <li>ERGs represent every area of the business, membership sits in over 200 locations US-wide and ERGs have generated over $800k in business won YTD</li>
                    </ul>
                    
                    <br><br><br>
					<img src="<?php bloginfo('template_directory'); ?>/images/flips/employee_resource_groups_logos-v3.png">
                </div>
            </div>
        </div>
    </div>
    
    <div class="push14">
    	<div class="block_2x1">
        	<div class="block_content_nm"><img src="<?php bloginfo('template_directory'); ?>/images/flips/sales_team_benefits_14.png"></div>
            <div class="block_content">
            	<font class="times_28 white">We reinvest 95% of our profits to make our people more successful</font>
            </div>
        </div>
    </div>
    


</div>












<?php get_footer(); ?>