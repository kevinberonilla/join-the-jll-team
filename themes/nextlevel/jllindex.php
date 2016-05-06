<?php 
/*
Template Name: JLL Home
*/

$cur_user_id = get_current_user_id();

if ($cur_user_id < 1)
{
	wp_redirect( home_url('?page_id=49') );
	exit;
} else {

	get_header(); 

	$current_user = wp_get_current_user();
	$cur_username = $current_user->user_login;
	$cur_user_id = get_current_user_id();
	$cur_first_name = get_user_meta($cur_user_id, 'first_name', true);
	$cur_last_name = get_user_meta($cur_user_id, 'last_name', true);
	$cur_user_level = get_user_meta($cur_user_id, 'wp_user_level', true);
?>

<script type="text/javascript">
// track page load in events
loadedSeconds = $.now();
_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Home", , false]);
</script>

<!--Background-->
<script>
$(document).ready(function() {
	$.backstretch("<?php bloginfo('template_directory'); ?>/images/backgrounds/index.jpg");
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
	
	// 3
	$("#click3").click(function() {
		var checkClicked = $('.clicked').doesExist();

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");

			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Home | Home | Bo Mills | Quote", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push3.click3").stop().animate({
				top: 0,
				left: 384
			}, 500);
			$("#click3").stop().animate({
				height: '192px',
				width: '192px'
			}, 500);
			
			setTimeout(function() {
				$("#click3 .block_content_nm").html(blockHTML);
				$("#click3 .block_content_nm").css("background", "none");
				$("#click3").css("z-index", "0");
			}, 500);
			
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
	
	// 4
	$("#click4").click(function() {
		var checkClicked = $('.clicked').doesExist();

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");

			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Home | Home | Naveen Jaggi | Quote", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push4.click4").stop().animate({
				top: 0,
				left: 576
			}, 500);
			$("#click4").stop().animate({
				height: '192px',
				width: '192px'
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
					left: 0
				});
				$("#click4").css("z-index", "2").stop().animate({
					height: '192px',
					width: '768px'
				});
				$(this).addClass("clicked");
				
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
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Home | Home | Chrissy Wilson | Quote", ($.now() - loadedSeconds), false]);
			
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
					left: 384
				});
				$("#click5").css("z-index", "2").stop().animate({
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

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
		
			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Home | Home | Mark Levy | Quote", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push6.click6").stop().animate({
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
				$(".push6.click6").stop().animate({
					top: 192,
					left: 0
				});
				$("#click6").css("z-index", "2").stop().animate({
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
	
	// 7
	$("#click7").click(function() {
		var checkClicked = $('.clicked').doesExist();
		
		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");

			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Home | Home | Kayma Liburd | Video", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push7.click7").stop().animate({
				top: 192,
				left: 192
			}, 500);
			$("#click7").stop().animate({
				height: '192px',
				width: '384px'
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
					top: 0,
					left: 0
				});
				$("#click7").css("z-index", "2").stop().animate({
					height: '384px',
					width: '576px'
				});
				$(this).addClass("clicked");
				$('#player7').attr('src', '').attr('src', '//player.vimeo.com/video/80297285?autoplay=1');
				
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
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Home | Home | Nicole Mort | Quote", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push9.click9").stop().animate({
				top: size,
				left: size * 3
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
					top: size,
					left: size
				});
				$("#click9").css("z-index", "2").stop().animate({
					height: size,
					width: size * 3 + 'px'
				});
				$(this).addClass("clicked");
				
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
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Home | Home | Zach Boroson | Quote", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push10.click10").stop().animate({
				top: size,
				left: size * 4
			}, 500);
			$("#click10").stop().animate({
				height: size + 'px',
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
					top: size,
					left: size * 2
				});
				$("#click10").css("z-index", "2").stop().animate({
					height: size,
					width: size * 3 + 'px'
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
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Home | Home | Christine Firstenberg | Quote", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push11.click11").stop().animate({
				top: 384,
				left: 0
			}, 500);
			$("#click11").stop().animate({
				height: '192px',
				width: '192px'
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
					width: '960px'
				});
				$(this).addClass("clicked");
				
				// BG
				$('.black_bg').fadeIn(250);
				$(this).addClass('zix')
			}
		}
	});
	
	// 12
	$("#click12").click(function() {
		var checkClicked = $('.clicked').doesExist();

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");

			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Home | Home | Brooke Armstrong | Quote", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push12.click12").stop().animate({
				top: 384,
				left: 192
			}, 500);
			$("#click12").stop().animate({
				height: '192px',
				width: '192px'
			}, 500);
			
			setTimeout(function() {
				$("#click12 .block_content_nm").html(blockHTML);
				$("#click12 .block_content_nm").css("background", "none");
				$("#click12").css("z-index", "0");
			}, 500);
			
			// BG
			$('.black_bg').fadeOut(250);
			$(this).removeClass('zix');
			
		} else {
			if (checkClicked == false) {
				var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

				$("#click12 .block_content_nm").html(blockHTML);
				$("#click12 .block_content_nm").css("background", "#a1131a");
				$(".push12.click12").stop().animate({
					top: 384,
					left: 192
				});
				$("#click12").css("z-index", "2").stop().animate({
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
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Home | Home | Ken Shishido | Quote", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push13.click13").stop().animate({
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
	
	// 14
	$("#click14").click(function() {
		var checkClicked = $('.clicked').doesExist();

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");

			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Home | Home | Melissa Cramer | Quote", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push14.click14").stop().animate({
				top: size * 2,
				left: size * 3
			}, 500);
			$("#click14").stop().animate({
				height: '192px',
				width: '192px'
			}, 500);
			
			setTimeout(function() {
				$("#click14 .block_content_nm").html(blockHTML);
				$("#click14 .block_content_nm").css("background", "none");
				$("#click14").css("z-index", "0");
			}, 500);
			
			// BG
			$('.black_bg').fadeOut(250);
			$(this).removeClass('zix');
			
		} else {
			if (checkClicked == false) {
				var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

				$("#click14 .block_content_nm").html(blockHTML);
				$("#click14 .block_content_nm").css("background", "#a1141a");
				$(".push14.click14").stop().animate({
					top: size * 2,
					left: size
				});
				$("#click14").css("z-index", "2").stop().animate({
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
	
	// 15
	$("#click15").click(function() {
		var checkClicked = $('.clicked').doesExist();

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");

			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Home | Home | Pat Harlan | Quote", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push15.click15").stop().animate({
				top: size * 2,
				left: size * 4
			}, 500);
			$("#click15").stop().animate({
				height: '192px',
				width: '192px'
			}, 500);
			
			setTimeout(function() {
				$("#click15 .block_content_nm").html(blockHTML);
				$("#click15 .block_content_nm").css("background", "none");
				$("#click15").css("z-index", "0");
			}, 500);
			
			// BG
			$('.black_bg').fadeOut(250);
			$(this).removeClass('zix');
			
		} else {
			if (checkClicked == false) {
				var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

				$("#click15 .block_content_nm").html(blockHTML);
				$("#click15 .block_content_nm").css("background", "#a1151a");
				$(".push15.click15").stop().animate({
					top: size * 2,
					left: size * 2
				});
				$("#click15").css("z-index", "2").stop().animate({
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
        	<div class="home_about">Join the JLL team</div>
        </div>
    </div>
    
</div>



<!--Body-->
<div class="container clearfix">


	<div class="push1">
    	<div class="block_2x1">
        	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_1.png"></div>
        	<div class="block_content">
            	<font class="times_32 red">Meet some of the newest members of our JLL team</font>
            </div>
        </div>
    </div>
    
	<!--3-->
    <div class="push3 click3">
    	<div class="block_1x1 clickable" id="click3">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_3.jpg"></div>
                <div class="statistics shadow">Bo Mills</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_3.jpg"></div>
                <div class="statistics shadow">Bo Mills</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="statistics">Bo Mills</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<div class="home_people">
                    	<font class="times_18 white">“The opportunity at JLL was unparalleled.  Their commitment to serving the client, being the best at what they do, and having fun while doing it were the deciding factors for joining the JLL team”</font>
                	</div>
                </div>
            </div>
        </div>
    </div>
    
    <!--4-->
    <div class="push4 click4">
    	<div class="block_1x1 clickable" id="click4">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_new_1.jpg"></div>
                <div class="statistics shadow">Naveen Jaggi</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_new_1.jpg"></div>
                <div class="statistics shadow">Naveen Jaggi</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="statistics">Naveen Jaggi</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<div class="home_people long">
                    	<font class="times_18 white">“What brought me to JLL, is twofold. First and foremost; JLL’s brand reputation – it’s a great company with a true culture of teamwork and collaboration. That is an attractive characteristic and one I'm proud to be a part of. Second, the opportunity to build a world class retail brokerage company. I’ve learned in my 20 years in real estate that success comes with clarity of vision, and a will and desire to do things the right way, all the time.”</font>
                	</div>
                </div>
            </div>
        </div>
    </div>

    
    <!--5-->
    <div class="push5 click5">
    	<div class="block_1x1 clickable" id="click5">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_5.jpg"></div>
                <div class="statistics shadow">Chrissy Wilson</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_5.jpg"></div>
                <div class="statistics shadow">Chrissy Wilson</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="statistics">Chrissy Wilson</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<div class="home_people">
                    	<font class="times_18 white">“JLL’s impeccable reputation and relationships with my investor clients were an important factor in my decision to join JLL’s Agency Leasing team. JLL’s platform resources – including tools and teams – are specifically designed to help brokers like me leverage and maximize these relationships to drive business at the local level.”</font>
                	</div>
                </div>
            </div>
        </div>
    </div>
    
    <!--6-->
    <div class="push6 click6">
    	<div class="block_1x1 clickable" id="click6">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_6.jpg"></div>
                <div class="statistics shadow">Mark Levy</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_6.jpg"></div>
                <div class="statistics shadow">Mark Levy</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="statistics">Mark Levy</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<div class="home_people">
                    	<font class="times_18 white">“JLL is an organization truly built on collaboration and the opportunity to work with the best and brightest in the industry was extremely compelling”</font>
                	</div>
                </div>
            </div>
        </div>
    </div>
    
    <!--7-->
    <div class="push7 click7">
    	<div class="block_2x1 clickable" id="click7">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_7_3.jpg"></div>
                <div class="statistics black">Kayma Liburd</div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_7_3.jpg"></div>
                <div class="statistics black">Kayma Liburd</div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/3x2.png"></div>
                <div class="statistics black">Kayma Liburd</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<iframe id="player7" src="//player.vimeo.com/video/80297285?autoplay=0" width="536" height="301" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    
    <!--9-->
    <div class="push9 click9">
    	<div class="block_1x1 clickable" id="click9">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_9_042816.jpg"></div>
                <div class="statistics shadow">Nicole Mort</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_9_042816.jpg"></div>
                <div class="statistics shadow">Nicole Mort</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="statistics">Nicole Mort</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<div class="home_people">
                    	<font class="times_18 white">“JLL is a company that offers unparalleled resources, unlimited growth potential and hands-on educational training for young employees who want to advance in this business.  As one of the market leaders in this industry, I wanted to align myself with the best and brightest who value creative thinking, collaboration and culture.”</font>
                	</div>
                </div>
            </div>
        </div>
    </div>
    
    <!--10-->
    <div class="push10 click10">
    	<div class="block_1x1 clickable" id="click10">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_10_042816.jpg"></div>
                <div class="statistics shadow">Zach Boroson</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_10_042816.jpg"></div>
                <div class="statistics shadow">Zach Boroson</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="statistics">Zach Boroson</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<div class="home_people">
                    	<font class="times_18 white">“I truly believe that JLL’s culture is essential to creating a winning environment, and its values - serve our clients, support our people, and aspire to lead - further support its reputation. When it comes down to it, I joined JLL to win and to be part of a company with an outstanding reputation.”</font>
                	</div>
                </div>
            </div>
        </div>
    </div>
    
    <!--11-->
    <div class="push11 click11">
    	<div class="block_1x1 clickable" id="click11">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_new_2.jpg"></div>
                <div class="statistics shadow">Christine Firstenberg</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_new_2.jpg"></div>
                <div class="statistics shadow">Christine Firstenberg</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="statistics">Christine Firstenberg</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<div class="home_people full">
                    	<font class="times_18 white">“I have spent 27 years in the retail real estate business, 13 of which I ran my own boutique retail real estate firm. I understand how important support is for a retail broker. And not just admin support, but a high level of support from a very qualified broker coordinator. JLL is the only retail real estate firm in the Bay Area that is providing that kind of support to its retail brokers. With retail requirements continually growing and more complicated, having this retail platform under me allows me to reach my top earning potential. When you add that to the incredible helpfulness that abides within the office, it was a no-brainer to choose JLL when I looked to make a move.”</font>
                	</div>
                </div>
            </div>
        </div>
    </div>
    
    <!--12-->
    <div class="push12 click12">
    	<div class="block_1x1 clickable" id="click12">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_12_042816.jpg"></div>
                <div class="statistics shadow">Brooke Armstrong</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_12_042816.jpg"></div>
                <div class="statistics shadow">Brooke Armstrong</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="statistics">Brooke Armstrong</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<div class="home_people">
                    	<font class="times_18 white">“I love working at JLL because the culture is not something that is just talked about, we live and breathe it.  My team is like family.  We are there for one another to serve our clients in the best way possible and we are there for one another on a personal and friendship level as well.”</font>
                	</div>
                </div>
            </div>
        </div>
    </div>
    
    <!--13-->
    <div class="push13 click13">
    	<div class="block_1x1 clickable" id="click13">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_13_042816.jpg"></div>
                <div class="statistics shadow">Ken Shishido</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_13_042816.jpg"></div>
                <div class="statistics shadow">Ken Shishido</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="statistics">Ken Shishido</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<div class="home_people">
                    	<font class="times_17 white">“I work with several clients outside of our trade area and JLL provides me with access to retail talent in other cities that helps me better service these clients. Also, being able to provide ancillary services such as construction, asset management, etc. makes us competitive for people wanting a full service firm.”</font>
                	</div>
                </div>
            </div>
        </div>
    </div>
    
    <!--14-->
    <div class="push14 click14">
    	<div class="block_1x1 clickable" id="click14">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_14_042816.jpg"></div>
                <div class="statistics shadow">Melissa Cramer</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_14_042816.jpg"></div>
                <div class="statistics shadow">Melissa Cramer</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="statistics">Melissa Cramer</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<div class="home_people">
                    	<font class="times_17 white">“As a leader in the industry and having the reputation as one of the World’s Most Ethical Companies, it was an easy decision to grow my career  with JLL.”</font>
                	</div>
                </div>
            </div>
        </div>
    </div>
    
    <!--15-->
    <div class="push15 click15">
    	<div class="block_1x1 clickable" id="click15">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_15_042816.jpg"></div>
                <div class="statistics shadow">Pat Harlan</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_15_042816.jpg"></div>
                <div class="statistics shadow">Pat Harlan</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="statistics">Pat Harlan</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<div class="home_people">
                    	<font class="times_17 white">“The foundation of JLL’s culture and mission is to do the right thing for the client in every facet of our daily activities.  The dynamic collaboration, quality of resources, and true team approach to client service were the differentiators that persuaded me to join the most sophisticated real estate organization in the world.”</font>
                	</div>
                </div>
            </div>
        </div>
    </div>

</div>






    
    
    <?php
}
?>






<?php get_footer(); ?>
