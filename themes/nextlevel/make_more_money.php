<?php 
/*
Template Name: Make More Money
*/
get_header(); 

$current_user = wp_get_current_user();
$cur_username = $current_user->user_login;
?>
<script type="text/javascript">
// track page load in events
loadedSeconds = $.now();
_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Sales path | Make more money", , false]);
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

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
		
			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Sales path | Make more money | Faster path to success | Stats", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push1.click1").stop().animate({
				top: 0,
				left: 0
			}, 500);
			$("#click1").stop().animate({
				height: '384px',
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
					height: '576px',
					width: '960px'
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
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Sales path | Make more money | Your financial future | Stats", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push8").stop().animate({
				top: 192,
				left: 384
			}, 500);
			$("#click8").stop().animate({
				height: '384px',
				width: '384px'
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
				$(".push8").stop().animate({
					top: 0,
					left: 0
				});
				$("#click8").css("z-index", "2").stop().animate({
					height: '576px',
					width: '960px'
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
            <div class="sub_title">Make more money</div>
        </div>
    </div>
    
</div>



<!--Body-->
<div class="container clearfix">


	<!--1-->
    <div class="push1 click1">
    	<div class="block_2x2 clickable" id="click1">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/make_more_money_1.jpg"></div>
                <div class="statistics">Faster path to success</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/make_more_money_1.jpg"></div>
                <div class="statistics">Faster path to success</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/make_more_money_1_back.jpg"></div>
                <div class="statistics black">Faster path to success</div>
                <div class="pointer"></div>
                <div class="gray_box">
                    <br><br><p align="center">New recruits earned over 30% more revenue in 2015 than they did at their previous firms.</p><br><br><br>
					<img src="<?php bloginfo('template_directory'); ?>/images/flips/faster_path_to_success_v3.png" class="center">
                </div>
            </div>
        </div>
    </div>
    
    <div class="push3">
    	<div class="block_1x1">
        	<div class="block_content_nm"><img src="<?php bloginfo('template_directory'); ?>/images/flips/make_more_money_3.png"></div>
        </div>
    </div>
    
    <div class="push4">
    	<div class="block_2x1">
        	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/make_more_money_4.jpg"></div>
        	<div class="block_content">
            	<font class="times_22 white">Producers that join JLL from another firm on average grow their revenues by 19% over historical within 3 years</font>
            </div>
        </div>
    </div>
    
    <!--8-->
    <div class="push8">
    	<div class="block_2x2 clickable" id="click8">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/make_more_money_8.jpg"></div>
                <div class="statistics">Your financial future</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/make_more_money_8.jpg"></div>
                <div class="statistics">Your financial future</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/make_more_money_1_back.jpg"></div>
                <div class="statistics black">Your financial future</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<p align="center">JLL producers generate the highest revenue per producer in the industry, which is 35% higher than our direct competitor.</p>
                    <br>
					<img src="<?php bloginfo('template_directory'); ?>/images/flips/wealth_creation_v3.png" class="center">
                </div>
            </div>
        </div>
    </div>
    
    <div class="push10">
    	<div class="block_1x1">
        	<div class="block_content_nm"><img src="<?php bloginfo('template_directory'); ?>/images/flips/make_more_money_10.png"></div>
        </div>
    </div>
    
    <div class="push11">
    	<div class="block_2x1">
        	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/make_more_money_11.png"></div>
        	<div class="block_content">
            	<font class="times_22 white">JLL producers generate the highest revenue per producer in the industry, which is 35% higher than our direct competitor.</font>
            </div>
        </div>
    </div>
    
    <div class="push15">
    	<div class="block_1x1">
        	<div class="block_content_nm"><img src="<?php bloginfo('template_directory'); ?>/images/flips/make_more_money_15.png"></div>
        </div>
    </div>


</div>












<?php get_footer(); ?>