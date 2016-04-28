<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

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
_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", 'INDEX', , false]);
</script>


<!--Background-->
<script>
$(document).ready(function() {
	$.backstretch("<?php bloginfo('template_directory'); ?>/images/backgrounds/index.jpg");
});
</script>


<script>
$(document).ready(function() {

	$(".block_front").hide();
    $(".block_back").hide();
	
	jQuery.fn.doesExist = function(){
		return jQuery(this).length > 0;
	};
	
	// 3
	$("#click3").click(function() {
		var checkClicked = $('.clicked').doesExist();
		
		// click tracking
		var clickTrackerName = $("#click3").find(".block_content_nm").find(".statistics").text();
		_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "<?php echo get_permalink(); ?> | "+clickTrackerName, , false]);

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push3.click3").animate({
				top: 0,
				left: 384
			}, 500);
			$("#click3").animate({
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
						
				$("#click3 .block_content_nm").html(blockHTML);
				$("#click3 .block_content_nm").css("background", "#a1131a");
				$(".push3.click3").animate({
					top: 0,
					left: 384
				});
				$("#click3").css("z-index", "2").animate({
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
	
	// 5
	$("#click5").click(function() {
		var checkClicked = $('.clicked').doesExist();

		// click tracking
		var clickTrackerName = $("#click5").find(".block_content_nm").find(".statistics").text();
		_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "<?php echo get_permalink(); ?> | "+clickTrackerName, , false]);
		
		// click tracking
		_gaq.push(['_trackEvent', '<?php echo $cur_username; ?>', 'click', 'Chrissy Wilson']);

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
			
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
						
				$("#click5 .block_content_nm").html(blockHTML);
				$("#click5 .block_content_nm").css("background", "#a1131a");
				$(".push5.click5").animate({
					top: 0,
					left: 384
				});
				$("#click5").css("z-index", "2").animate({
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
		var clickTrackerName = $("#click6").find(".block_content_nm").find(".statistics").text();
		_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "<?php echo get_permalink(); ?> | "+clickTrackerName, , false]);

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push6.click6").animate({
				top: 192,
				left: 0
			}, 500);
			$("#click6").animate({
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
						
				$("#click6 .block_content_nm").html(blockHTML);
				$("#click6 .block_content_nm").css("background", "#a1131a");
				$(".push6.click6").animate({
					top: 192,
					left: 0
				});
				$("#click6").css("z-index", "2").animate({
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

		// click tracking
		var clickTrackerName = $("#click7").find(".block_content_nm").find(".statistics").text();
		_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "<?php echo get_permalink(); ?> | "+clickTrackerName, , false]);

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push7.click7").animate({
				top: 192,
				left: 192
			}, 500);
			$("#click7").animate({
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
						
				$("#click7 .block_content_nm").html(blockHTML);
				$("#click7 .block_content_nm").css("background", "#a1131a");
				$(".push7.click7").animate({
					top: 0,
					left: 0
				});
				$("#click7").css("z-index", "2").animate({
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

		// click tracking
		var clickTrackerName = $("#click9").find(".block_content_nm").find(".statistics").text();
		_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "<?php echo get_permalink(); ?> | "+clickTrackerName, , false]);

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push9.click9").animate({
				top: 192,
				left: 576
			}, 500);
			$("#click9").animate({
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
						
				$("#click9 .block_content_nm").html(blockHTML);
				$("#click9 .block_content_nm").css("background", "#a1131a");
				$(".push9.click9").animate({
					top: 192,
					left: 384
				});
				$("#click9").css("z-index", "2").animate({
					height: '384px',
					width: '576px'
				});
				$(this).addClass("clicked");
				$('#player9').attr('src', '').attr('src', '//player.vimeo.com/video/80297286?autoplay=1');
				
				// BG
				$('.black_bg').fadeIn(250);
				$(this).addClass('zix')
			}
		}
	});
	
	// 12
	$("#click12").click(function() {
		var checkClicked = $('.clicked').doesExist();

		// click tracking
		var clickTrackerName = $("#click12").find(".block_content_nm").find(".statistics").text();
		_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "<?php echo get_permalink(); ?> | "+clickTrackerName, , false]);

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push12.click12").animate({
				top: 384,
				left: 192
			}, 500);
			$("#click12").animate({
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
						
				$("#click12 .block_content_nm").html(blockHTML);
				$("#click12 .block_content_nm").css("background", "#a1131a");
				$(".push12.click12").animate({
					top: 384,
					left: 192
				});
				$("#click12").css("z-index", "2").animate({
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

		// click tracking
		var clickTrackerName = $("#click13").find(".block_content_nm").find(".statistics").text();
		_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "<?php echo get_permalink(); ?> | "+clickTrackerName, , false]);

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push13.click13").animate({
				top: 384,
				left: 384
			}, 500);
			$("#click13").animate({
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
                    	<img src="https://www.google-analytics.com/collect?v=1&tid=UA-4005120-16&cid=<?php echo urlencode($cur_username); ?>&t=event&ec=PageViews&ea=<?php echo urlencode($cur_username); ?>&el=BO_MILLS&cm=open" width="1" height="1">
                	</div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="push4">
    	<div class="block_1x1">
        	<div class="block_content_nm"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_4.png"></div>
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
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_7_2.jpg"></div>
                <div class="statistics black">Kayma Liburd</div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_7_2.jpg"></div>
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
    	<div class="block_2x2 clickable" id="click9">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_9.jpg"></div>
                <div class="statistics black">Wendy Blue</div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_9.jpg"></div>
                <div class="statistics black">Wendy Blue</div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/3x2.png"></div>
                <div class="statistics black">Wendy Blue</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<iframe id="player9" src="//player.vimeo.com/video/80297286?autoplay=0" width="536" height="301" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    
    <div class="push11">
    	<div class="block_1x1">
        	<div class="block_content_nm"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_11.png"></div>
        </div>
    </div>
    
    <!--12-->
    <div class="push12 click12">
    	<div class="block_1x1 clickable" id="click12">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_12.jpg"></div>
                <div class="statistics shadow">Anneke Greco</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_12.jpg"></div>
                <div class="statistics shadow">Anneke Greco</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="statistics">Anneke Greco</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<div class="home_people">
                    	<font class="times_18 white">“After being with the same company for 17 years, I needed a really good reason to leave.  JLL provides a great platform on which to expand my business and work with a phenomenal group of brokers. I have not looked back since.”</font>
                	</div>
                </div>
            </div>
        </div>
    </div>
    
    <!--13-->
    <div class="push13 click13">
    	<div class="block_1x1 clickable" id="click13">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_13.jpg"></div>
                <div class="statistics shadow">Steve Larsen</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/index_13.jpg"></div>
                <div class="statistics shadow">Steve Larsen</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="statistics">Steve Larsen</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<div class="home_people">
                    	<font class="times_17 white">“JLL was promised to be one of the most collaborative brokerage houses when I was first recruited and that is exactly what it has been.  I have collaborated on several different projects with over 15 different brokers in 18 months. It’s all about putting the best team on the field. The resources at JLL are the best I’ve ever been around.  The knowledge, reports, marketing and turnaround times are unbelievable.  I couldn’t ask for more.”</font>
                	</div>
                </div>
            </div>
        </div>
    </div>

</div>







<?php get_footer(); ?>
