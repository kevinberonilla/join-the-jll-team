<?php 
/*
Template Name: Tools and Innovation
*/
get_header(); 

$current_user = wp_get_current_user();
$cur_username = $current_user->user_login;
?>
<script type="text/javascript">
// track page load in events
loadedSeconds = $.now();
_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Tools and innovation", , false]);
</script>

<!--Background-->
<script>
$(document).ready(function() {
	$.backstretch("<?php bloginfo('template_directory'); ?>/images/backgrounds/consulting_partners.jpg");
});
</script>


<script>
$(document).ready(function() {
    
    var size = 192;

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
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Tools and innovation | Blackbird | Video", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push1.click1").stop().animate({
				top: 0,
				left: 0
			}, 500);
			$("#click1").stop().animate({
                height: size + 'px',
                width: size * 2 + 'px'
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
                    height: size * 2 + 'px',
                    width: size * 3 + 'px'
				});
				$(this).addClass("clicked");
				$('#player1').attr('src', '').attr('src', '//player.vimeo.com/video/160908066?autoplay=1');
				
				// BG
				$('.black_bg').fadeIn(250);
				$(this).addClass('zix')
			}
		}
	});
	
	
	// 6
	$("#click6").click(function() {
		var checkClicked = $('.clicked').doesExist();

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
		
			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Tools and innovation | PAT | Video", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push6.click6").stop().animate({
				top: size,
				left: 0
			}, 500);
			$("#click6").stop().animate({
                height: size + 'px',
                width: size + 'px'
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
				$(".push6.click6").stop().animate({
					top: 0,
					left: 0
				});
				$("#click6").css("z-index", "2").stop().animate({
                    height: size * 2 + 'px',
                    width: size * 3 + 'px'
				});
				$(this).addClass("clicked");
				$('#player6').attr('src', '').attr('src', '//player.vimeo.com/video/160929068?autoplay=1');
				
				// BG
				$('.black_bg').fadeIn(250);
				$(this).addClass('zix')
			}
		}
	});
	
	
	// 7
	$("#click7").click(function() {
		var checkClicked = $('.clicked').doesExist();

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
		
			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Tools and innovation | Broker portal | Stats", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push7.click7").stop().animate({
				top: size,
				left: size
			}, 500);
			$("#click7").stop().animate({
				height: size + 'px',
				width: size * 2 + 'px'
			}, 500);
			
			setTimeout(function() {
				$("#click7 .block_content_nm").html(blockHTML);
				$("#click7 .block_content_nm").css("background", "none");
				$("#click7").css("z-index", "0");
			}, 500);
			
			// BG
			$('.black_bg').fadeOut(250);
			$(this).removeClass('zix');
			
		} else {
			if (checkClicked == false) {
				var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

				$("#click7 .block_content_nm").html(blockHTML);
				$("#click7 .block_content_nm").css("background", "#a1131a");
				$(".push7.click7").stop().animate({
                    top: size,
                    left: 0
				});
				$("#click7").css("z-index", "2").stop().animate({
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
	
	
	// 9
	$("#click9").click(function() {
		var checkClicked = $('.clicked').doesExist();

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
		
			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Tools and innovation | RED | Video", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push9.click9").stop().animate({
				top: size + 'px',
				left: size * 3 + 'px'
			}, 500);
			$("#click9").stop().animate({
                height: size + 'px',
                width: size + 'px'
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
					top: size + 'px',
					left: size * 2 + 'px'
				});
				$("#click9").css("z-index", "2").stop().animate({
                    height: size * 2 + 'px',
                    width: size * 3 + 'px'
				});
				$(this).addClass("clicked");
				$('#player9').attr('src', '').attr('src', '//player.vimeo.com/video/160916827?autoplay=1');
				
				// BG
				$('.black_bg').fadeIn(250);
				$(this).addClass('zix')
			}
		}
	});
	
	
	// 10
	$("#click10").click(function() {
		var checkClicked = $('.clicked').doesExist();

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
		
			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Tools and innovation | JLL acedemy lounge | Video", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push10.click10").stop().animate({
				top: size + 'px',
				left: size * 4 + 'px'
			}, 500);
			$("#click10").stop().animate({
                height: size * 2 + 'px',
                width: size + 'px'
			}, 500);
			
			setTimeout(function() {
				$("#click10 .block_content_nm").html(blockHTML);
				$("#click10 .block_content_nm").css("background", "none");
				$("#click10").css("z-index", "0");
			}, 500);
			
			// BG
			$('.black_bg').fadeOut(250);
			$(this).removeClass('zix');
			
		} else {
			if (checkClicked == false) {
				var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

				$("#click10 .block_content_nm").html(blockHTML);
				$("#click10 .block_content_nm").css("background", "#a1131a");
				$(".push10.click10").stop().animate({
					top: size + 'px',
					left: size * 2 + 'px'
				});
				$("#click10").css("z-index", "2").stop().animate({
                    height: size * 2 + 'px',
                    width: size * 3 + 'px'
				});
				$(this).addClass("clicked");
				$('#player10').attr('src', '').attr('src', '//player.vimeo.com/video/160944003?autoplay=1');
				
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
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Tools and innovation | da Vinci | Stats", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push11.click11").stop().animate({
				top: 384,
				left: 0
			}, 500);
			$("#click11").stop().animate({
				height: '192px',
				width: size * 2 + 'px'
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
					top: 384,
					left: 0
				});
				$("#click11").css("z-index", "2").stop().animate({
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

	// 13
	$("#click13").click(function() {
		var checkClicked = $('.clicked').doesExist();

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
		
			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Tools and innovation | Skyline | Video", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push13.click13").stop().animate({
                top: size * 2 + 'px',
                left: size * 2 + 'px'
			}, 500);
			$("#click13").stop().animate({
                height: size + 'px',
                width: size + 'px'
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
				$(".push13.click13").stop().animate({
					top: size + 'px',
					left: size * 2 + 'px'
				});
				$("#click13").css("z-index", "2").stop().animate({
					height: '384px',
					width: '576px'
				});
				$(this).addClass("clicked");
				$('#player13').attr('src', '').attr('src', '//player.vimeo.com/video/80275807?autoplay=1');
				
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
            <div class="sub_title">Tools and innovation</div>
        </div>
    </div>
    
</div>



<!--Body-->
<div class="container clearfix">
    
    
    <!--1-->
    <div class="push1 click1">
    	<div class="block_2x1 clickable" id="click1">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/tools_and_innovation_1_2016.jpg"></div>
                <div class="statistics black">Blackbird</div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/tools_and_innovation_1_2016.jpg"></div>
                <div class="statistics black">Blackbird</div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/3x2.png"></div>
                <div class="statistics black">Blackbird</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<iframe id="player1" src="//player.vimeo.com/video/160908066?autoplay=0" width="536" height="301" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    <!--3-->
    <div class="push3">
    	<div class="block_3x1">
        	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/tools_and_innovation_11.png"></div>
        	<div class="block_content">
                <font class="times_28 yellow">
                    <strong class="times">Differentiating sales tools:</strong>
                    <br>
                    <br>
                    $300M+ annual global investment in new technology tools and innovations
                </font>
            </div>
        </div>
    </div>
    
    
    <!--6-->
    <div class="push6 click6">
    	<div class="block_1x1 clickable" id="click6">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/tools_and_innovation_6_2016.jpg"></div>
                <div class="statistics black">PAT</div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/tools_and_innovation_6_2016.jpg"></div>
                <div class="statistics black">PAT</div>
f            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/3x2.png"></div>
                <div class="statistics black">PAT</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<iframe id="player6" src="//player.vimeo.com/video/160929068?autoplay=0" width="536" height="301" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    
    <!--7-->
    <div class="push7 click7">
    	<div class="block_2x1 clickable" id="click7">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/tools_and_innovation_9.png"></div>
                <div class="flip_info">
                    <h2>Your one-stop</h2>
                	<h1 class="bold">dashboard</h1>
                    <h2>for business-critical <br>information</h2>
                </div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/tools_and_innovation_9.png"></div>
                <div class="flip_info">
                    <h2>Your one-stop</h2>
                	<h1 class="bold">dashboard</h1>
                    <h2>for business-critical information</h2>
                </div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="pointer"></div>
                <div class="gray_box white">
                    Broker Portal is a customizable, web-based application that aggregates broker information from multiple sources into one place, eliminating the need to go into multiple systems. It provides a snapshot of key metrics, including client activities, personal pipeline, revenue, commissions and key activities across teams and the organization.
                    <div class="flip_name white">Broker Portal</div>
                </div>
            </div>
        </div>
    </div>
    
    <!--9-->
    <div class="push9 click9">
    	<div class="block_1x1 clickable" id="click9">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/tools_and_innovation_9_2016.jpg"></div>
                <div class="statistics black">RED</div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/tools_and_innovation_9_2016.jpg"></div>
                <div class="statistics black">RED</div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/3x2.png"></div>
                <div class="statistics black">RED</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<iframe id="player9" src="//player.vimeo.com/video/160916827?autoplay=0" width="536" height="301" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    
    <!--10-->
    <div class="push10 click10">
    	<div class="block_1x2 clickable" id="click10">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/tools_and_innovation_10_2016.jpg"></div>
                <div class="statistics black">JLL Academy Lounge</div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/tools_and_innovation_10_2016.jpg"></div>
                <div class="statistics black">JLL Academy Lounge</div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/3x2.png"></div>
                <div class="statistics black">JLL Academy Lounge</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<iframe id="player10" src="//player.vimeo.com/video/160944003?autoplay=0" width="536" height="301" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    <!--11-->
    <div class="push11 click11">
    	<div class="block_2x1 clickable" id="click11">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/tools_and_innovation_11.png"></div>
                <div class="flip_info">
                    <h2>Winning through</h2>
                	<h1 class="bold">innovation</h1>
                </div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/tools_and_innovation_11.png"></div>
                <div class="flip_info">
                    <h2>Winning through</h2>
                	<h1 class="bold">innovation</h1>
                </div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/tools_and_innovation_11_back.jpg"></div>
                <div class="pointer"></div>
                <div class="gray_box black">
                    <div class="clearfix">
                        <div class="daf_left">
                            <img src="<?php bloginfo('template_directory'); ?>/images/davinci.png" style="max-width: 100%; height: auto;"><br><br>
                        </div>
                        <div class="daf_right">
                            <font class="times_16">Industry leaders are always innovators. The da Vinci Award recognizes individuals&mdash;usually working as part of a team&mdash;who bring value to clients and the firm through innovation.</font>
                            <?php /*<font class="times_22 red">Blackbird contributed to at least <strong>196 wins</strong> across <strong>24 markets</strong> for a <strong>50% win rate</strong></font>*/ ?>
                        </div>
                    </div>
                    <div class="flip_name black">da Vinci</div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    <!--13-->
    <div class="push13 click13">
    	<div class="block_1x1 clickable" id="click13">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/tools_and_innovation_13_2016.jpg"></div>
                <div class="statistics black">Skyline</div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/tools_and_innovation_13_2016.jpg"></div>
                <div class="statistics black">Skyline</div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/3x2.png"></div>
                <div class="statistics black">Skyline</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<iframe id="player13" src="//player.vimeo.com/video/80275807?autoplay=0" width="536" height="301" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    <!--14-->
    <div class="push14">
    	<div class="block_1x1">
        	<div class="block_content_nm"><img src="<?php bloginfo('template_directory'); ?>/images/flips/tools_and_innovation_14_2016.png"></div>
        </div>
    </div>


</div>












<?php get_footer(); ?>