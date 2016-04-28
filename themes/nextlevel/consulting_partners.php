<?php 
/*
Template Name: Consulting Partners
*/
get_header(); 

$current_user = wp_get_current_user();
$cur_username = $current_user->user_login;
?>
<script type="text/javascript">
// track page load in events
loadedSeconds = $.now();
_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Consulting partners", , false]);
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
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Consulting partners | Business and economic incentives | Stats", , false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push1.click1").animate({
				top: 0,
				left: 0
			}, 100);
			$("#click1").animate({
				height: '192px',
				width: '384px'
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
				$(".push1.click1").animate({
					top: 0,
					left: 0
				});
				$("#click1").css("z-index", "2").animate({
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


	

	// 3
	$("#click3").click(function() {
		var checkClicked = $('.clicked').doesExist();
		
		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");

			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Consulting partners | Business consulting | Stats", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push3.click3").animate({
				top: 0,
				left: 384
			}, 100);
			$("#click3").animate({
				height: '192px',
				width: '384px'
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
				$(".push3.click3").animate({
					top: 0,
					left: 384
				});
				$("#click3").css("z-index", "2").animate({
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


	// 5
	$("#click5").click(function() {
		var checkClicked = $('.clicked').doesExist();
		
		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");

			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Consulting partners | Global connection | Stats", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push5.click5").animate({
				top: 0,
				left: 768
			}, 500);
			$("#click5").animate({
				height: '576px',
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
	


	// 6
	$("#click6").click(function() {
		var checkClicked = $('.clicked').doesExist();
		
		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");

			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Consulting partners | Markets Corporate Solutions | Stats", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push6.click6").animate({
				top: 192,
				left: 0
			}, 100);
			$("#click6").animate({
				height: '192px',
				width: '384px'
			}, 100);
			
			setTimeout(function() {
				$("#click6 .block_content_nm").html(blockHTML);
				$("#click6 .block_content_nm").css("background", "none");
				$("#click6").css("z-index", "0");
			}, 100);
			
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
				$(".push6.click6").animate({
					top: 192,
					left: 0
				});
				$("#click6").css("z-index", "2").animate({
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


	// 8
	$("#click8").click(function() {
		var checkClicked = $('.clicked').doesExist();
		
		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");

			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Consulting partners | Location intelligence | Stats", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push8.click8").animate({
				top: 192,
				left: 384
			}, 100);
			$("#click8").animate({
				height: '192px',
				width: '384px'
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
				$(".push8.click8").animate({
					top: 192,
					left: 384
				});
				$("#click8").css("z-index", "2").animate({
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


	// 11
	$("#click11").click(function() {
		var checkClicked = $('.clicked').doesExist();
		
		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");

			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Consulting partners | Supply chain and logistics | Stats", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push11.click11").animate({
				top: 384,
				left: 0
			}, 100);
			$("#click11").animate({
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
				$(".push11.click11").animate({
					top: 384,
					left: 0
				});
				$("#click11").css("z-index", "2").animate({
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
    
	/*
	$('.black_bg').click(function() {
		$('.black_bg').fadeOut(250);
		$(this).removeClass('zix');	
	});
	*/
	
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
			//$('.black_bg').fadeIn(250);
			//$(this).addClass('zix');
        },
        function () {
            $(this).find('div').stop().rotate3Di('unflip', 400, {sideChange: mySideChange});
			//$('.black_bg').fadeOut(250);
			//$(this).removeClass('zix');
        }
    );
});
</script>





    <div class="push3">
    	<div class="block_3x1">
        	<div class="consulting_partners_about">Helping you win more</div>
            <div class="sub_title">Consulting partners</div>
        </div>
    </div>
    
</div>



<!--Body-->
<div class="container clearfix">
    
    
    
    <!--1-->
    <div class="push1 click1">
    	<div class="block_2x1 clickable" id="click1">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/consulting_partners_1.jpg"></div>
                <div class="statistics">business and<br>economic incentives</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/consulting_partners_1.jpg"></div>
                <div class="statistics">business and<br>economic incentives</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="pointer"></div>
                <div class="gray_box white">
                    <div class="clearfix">
                        <div class="left_half white">
                            <h1 class="white"><strong>80%</strong></h1>
                            <font class="times_26">win rate</font>
                        </div>
                        <div class="right_half white">
                            <ul class="txt_11 white_bullet">
                                <li>$10M in revenue in 2014</li>
                                <li>$10M in savings for clients</li>
                                <li>150+ years of collective team experience</li>
                                <li>11 experts in tax, legal &amp; economic development</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flip_name white">business and<br>economic incentives</div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    <!--3-->
    <div class="push3 click3">
    	<div class="block_2x1 clickable" id="click3">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/consulting_partners_3.jpg"></div>
                <div class="statistics">Business Consulting<br>and Location Advisory</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/consulting_partners_3.jpg"></div>
                <div class="statistics">Business Consulting<br>and Location Advisory</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="pointer"></div>
                <div class="gray_box white">
                    <div class="clearfix">
                        <div class="left_half white">
                            <h1 class="white"><strong>75%</strong></h1>
                            <font class="times_26">win rate</font>
                        </div>
                        <div class="right_half white">
                            <ul class="txt_11 white_bullet">
                                <li>$6M in revenue in 2014</li>
                                <li>6 consultants, 100+ years of total team experience</li>
                                <li>Deep experience across all geographies and R&amp;D, Manufacturing and Office assets</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flip_name white">Business Consulting<br>	and Location Advisory</div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    <!--5-->
    <div class="push5 click5">
    	<div class="block_1x3 clickable" id="click5">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/consulting_partners_5.jpg"></div>
                <div class="statistics">global<br>connections</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/consulting_partners_5.jpg"></div>
                <div class="statistics">global<br>connections</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="statistics">global<br>connections</div>
                <div class="pointer"></div>
                <div class="gray_box">
                    <div class="clearfix">
                    	<div class="left_half white">
                        	iDESK<br><br><br>
                            
                            <font class="times_26">18M s.f.<br>in 2014</font><br><br><br>
                            
                            <ul class="white_bullet">
                                <li>382+ transactions in 49 countries 2014</li>
                                <li>138  global markets</li>
                                <li>7 individuals speaking 9 languages</li>
                            </ul>
                        </div>
                        <div class="right_half white">
                        	GLOBAL OFFICE<br>LEASING GROUP<br><br>
                            
                            <font class="times_26">SPOC for 25 top investors</font><br><br><br>
                            
                            Comprised of Agency Leasing	 leadership from across the globe to facilitate global best practices and connect relationship dots to help our teams execute business.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="push6">
    	<div class="block_1x1 gray_bg"></div>
    </div>
    
    
    
    
    <!--6-->
    <div class="push6 click6">
    	<div class="block_2x1 clickable" id="click6">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/consulting_partners_6.jpg"></div>
                <div class="statistics">Integrated Portfolio<br>Services</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/consulting_partners_6.jpg"></div>
                <div class="statistics">Integrated Portfolio<br>Services</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="pointer"></div>
                <div class="gray_box white">
                    <div class="clearfix">
                        <div class="left_half white">
                            <h1 class="white"><strong>72%</strong></h1>
                            <font class="times_26">win rate</font>
                        </div>
                        <div class="right_half white">
                            <ul class="white_bullet">
                              <li>$277M in revenue in 2014</li>
                              <li>1.3B total s.f.</li>
                              <li>269 total accounts</li>
                              <li>26% YOY Growth</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flip_name white">Integrated Portfolio<br>Services</div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!--8-->
    <div class="push8 click8">
    	<div class="block_2x1 clickable" id="click8">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/consulting_partners_7v2.jpg"></div>
                <div class="statistics">Project Development<br>Solutions</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/consulting_partners_7v2.jpg"></div>
                <div class="statistics">Project Development<br>Solutions</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="pointer"></div>
                <div class="gray_box white">
                    <div class="clearfix">
                        <div class="left_half white">
                            <h1 class="white"><strong>425%</strong></h1>
                            <font class="times_26">ROI</font>
                        </div>
                        <div class="right_half white">
                            <ul class="white_bullet">
                                <li>$12B in project volume managed in 2014</li>
                                <li>1,436 dedicated professionals</li>
                                <li>19,363 projects in 2014</li>
                                <li>4.71 out of 5, average client satisfaction score</li>
                                <li>Clients saved more than $346M in 2014</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flip_name white">Project Development<br>Solutions</div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <!--11-->
    <div class="push11 click11">
    	<div class="block_2x1 clickable" id="click11">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/consulting_partners_11.jpg"></div>
                <div class="statistics">Supply chain<br>and logistics</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/consulting_partners_11.jpg"></div>
                <div class="statistics">Supply chain<br>and logistics</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="pointer"></div>
                <div class="gray_box white">
                    <div class="clearfix">
                        <div class="left_half white">
                            <h1 class="white"><strong>82%</strong></h1>
                            <font class="times_26">win rate</font>
                        </div>
                        <div class="right_half white">
                            <ul class="txt_11 white_bullet">
                                <li>$71M in revenue in 2014</li>
                                <li>100+ deals in 22 markets in 2014</li>
                                <li>Network Optimization and Business Strategy</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flip_name white">Supply chain<br>and logistics</div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <div class="push13">
    	<div class="block_2x1 win">
        	<div class="block_content consulting_experts">
            	<font class="times_28 yellow">Our consulting experts are a true differentiator, helping you win business over 70% of the time</font>
            </div>
        </div>
    </div>


</div>












<?php get_footer(); ?>