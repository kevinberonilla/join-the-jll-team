<?php 
/*
Template Name: Marketing and Research
*/
get_header(); 

$current_user = wp_get_current_user();
$cur_username = $current_user->user_login;
?>
<script type="text/javascript">
// track page load in events
loadedSeconds = $.now();
_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Marketing & research", , false]);
</script>

<!--Background-->
<script>
$(document).ready(function() {
	$.backstretch("<?php bloginfo('template_directory'); ?>/images/backgrounds/consulting_partners.jpg");
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

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
		
			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Marketing & research | Marketing | Bullet points", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push1.click1").stop().animate({
				top: 0,
				left: 0
			}, 100);
			$("#click1").stop().animate({
				height: '192px',
				width: '576px'
			}, 100);
			
			setTimeout(function() {
				$("#click1 .block_content_nm").html(blockHTML);
				$("#click1 .block_content_nm").css("background", "none");
				$("#click1").css("z-index", "0");
			}, 100);
			
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


	
	// 4
	$("#click4").click(function() {
		var checkClicked = $('.clicked').doesExist();

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
		
			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Marketing & research | Differentiating products | Video", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push4.click4").stop().animate({
				top: 0,
				left: 576
			}, 500);
			$("#click4").stop().animate({
				height: '384px',
				width: '384px'
			}, 500);
			
			setTimeout(function() {
				$("#click4 .block_content_nm").html(blockHTML);
				$("#click4 .block_content_nm").css("background", "none");
				$("#click4").css("z-index", "0");
			}, 500);
			
			// BG
			$('.black_bg').fadeOut(250);
			$(this).removeClass('zix');
			
		} else {
			if (checkClicked == false) {
				var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

				$("#click4 .block_content_nm").html(blockHTML);
				$("#click4 .block_content_nm").css("background", "#a1131a");
				$(".push4.click4").stop().animate({
					top: 0,
					left: 384
				});
				$("#click4").css("z-index", "2").stop().animate({
					height: '384px',
					width: '576px'
				});
				$(this).addClass("clicked");
				$('#player4').attr('src', '').attr('src', '//player.vimeo.com/video/125328226?autoplay=1&color=B1282E');
				
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
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Marketing & research | Property marketing | Bullet points", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push11.click11").stop().animate({
				top: 384,
				left: 0
			}, 500);
			$("#click11").stop().animate({
				height: '192px',
				width: '384px'
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
				$(".push11.click11").stop().animate({
					top: 0,
					left: 00
				});
				$("#click11").css("z-index", "2").stop().animate({
					height: '576px',
					width: '384px'
				});
				$(this).addClass("clicked");
				
				// BG
				$('.black_bg').fadeIn(250);
				$(this).addClass('zix')
			}
		}
	});
	
	// 14
	$("#click14").click(function() {
		var checkClicked = $('.clicked').doesExist();

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
		
			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Marketing & research | Industry leading research | Bullet points", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push14.click14").stop().animate({
				top: 384,
				left: 576
			}, 100);
			$("#click11").stop().animate({
				height: '192px',
				width: '384px'
			}, 100);
			
			setTimeout(function() {
				$("#click14 .block_content_nm").html(blockHTML);
				$("#click14 .block_content_nm").css("background", "none");
				$("#click14").css("z-index", "0");
			}, 100);
			
			// BG
			$('.black_bg').fadeOut(250);
			$(this).removeClass('zix');
			
		} else {
			if (checkClicked == false) {
				var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

				$("#click14 .block_content_nm").html(blockHTML);
				$("#click14 .block_content_nm").css("background", "#a1131a");
				$(".push14.click14").stop().animate({
					top: 384,
					left: 576
				});
				$("#click14").css("z-index", "2").stop().animate({
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
        	<div class="consulting_partners_about">Helping you win more</div>
            <div class="sub_title">Marketing & research</div>
        </div>
    </div>
    
</div>



<!--Body-->
<div class="container clearfix">    
    
    
    <!--1-->
    <div class="push1 click1">
    	<div class="block_3x1 clickable" id="click1">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/marketing_and_research_1.png"></div>
                <div class="flip_info">
                    <h2>More than just</h2>
                    <h1 class="bold">marketing</h1>
                </div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/marketing_and_research_1.png"></div>
                <div class="flip_info">
                    <h2>More than just</h2>
                    <h1><strong>marketing</strong></h1>
                </div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="pointer"></div>
                <div class="gray_box white">
                    <ul class="white_bullet">
                        <li>Over 250 marketers in the Americas focused on both national and local marketing support</li>
                        <li>Global leader in Social Media with 43.1% share of voice, which is over 20% higher than our next closest competitor</li>
                    </ul>
                    <ul class="m_10 white_bullet">
                        <li>YouTube Channels with 500+ subscribers</li>
                        <li>18,000 connected LinkedIn users</li>
                        <li>23 official Twitter handles with 35,000 followers</li>
                    </ul>
                    <div class="flip_name white">Marketing</div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <!--4-->
    <div class="push4 click4">
    	<div class="block_2x2 clickable" id="click4">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/marketing_and_research_4_v2.jpg"></div>
                <div class="statistics black">DIFFERENTIATING PRODUCTS</div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/marketing_and_research_4_v2.jpg"></div>
                <div class="statistics black">DIFFERENTIATING PRODUCTS</div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/3x2.png"></div>
                <div class="statistics black">DIFFERENTIATING PRODUCTS</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<iframe id="player4" src="//player.vimeo.com/video/125328226?autoplay=0&color=B1282E" width="536" height="301" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    
    <div class="push6">
    	<div class="block_1x1">
        	<div class="block_content_nm"><img src="<?php bloginfo('template_directory'); ?>/images/flips/marketing_and_research_6.png"></div>
        </div>
    </div>
    
    <div class="push7">
    	<div class="block_2x1">
        	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/marketing_and_research_7.png"></div>
        	<div class="block_content">
            	<font class="times_28 white"><strong class="times">True partners</strong> that make you faster, smarter and pursuit ready</font>
            </div>
        </div>
    </div>
    
    <!--11-->
    <div class="push11 click11">
    	<div class="block_2x1 clickable" id="click11">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/marketing_and_research_11.jpg"></div>
                <div class="statistics">Property MARKETING</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/marketing_and_research_11.jpg"></div>
                <div class="statistics">Property MARKETING</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/2x3.jpg"></div>
                <div class="statistics black">Property MARKETING</div>
                <div class="pointer"></div>
                <div class="gray_box">
                    <ul>
                    	<li>More than 120 U.S. marketers act as an in-house agency to develop and execute marketing strategies that differentiate your listings</li>
                        <li>Provided at no cost to our clients – a JLL value-add that can save hundreds of thousands of dollars</li>
                    </ul><br>
                    
                    <img src="<?php bloginfo('template_directory'); ?>/images/flips/marketing_research.jpg">
                </div>
            </div>
        </div>
    </div>
    
    <div class="push13">
    	<div class="block_1x1">
        	<div class="block_content_nm"><img src="<?php bloginfo('template_directory'); ?>/images/flips/marketing_and_research_13.png"></div>
        </div>
    </div>
    

    
    <!--14-->
    <div class="push14 click14">
    	<div class="block_2x1 clickable" id="click14">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/marketing_and_research_14.png"></div>
                <div class="flip_info">
                    <h2>Industry-leading</h2>
                    <h1 class="bold">research</strong></h1>
                </div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/marketing_and_research_14.png"></div>
                <div class="flip_info">
                    <h2>Industry-leading</h2>
                    <h1><strong>research</strong></h1>
                </div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="pointer"></div>
                <div class="gray_box white">
                    <ul class="white_bullet">
                        <li>Over 130 researchers focused on national, local and industry-specific research support</li>
                        <li>Provides real-time and predictive data for occupiers and investors</li>
                    </ul>
                    <div class="flip_name white">Research</div>
                </div>
            </div>
        </div>
    </div>
    


</div>












<?php get_footer(); ?>