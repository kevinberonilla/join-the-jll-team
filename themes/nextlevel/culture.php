<?php 
/*
Template Name: Culture
*/
get_header();

$current_user = wp_get_current_user();
$cur_username = $current_user->user_login;
?>
<script type="text/javascript">
// track page load in events
loadedSeconds = $.now();
_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Our firm | Culture", , false]);
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
	
	// 1
	$("#click1").click(function() {
		var checkClicked = $('.clicked').doesExist();

		// click tracking
		_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Our firm | Culture | Teamwork | Bullet points", ($.now() - loadedSeconds), false]);
		
		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push1.click1").stop().animate({
				top: 0,
				left: 0
			}, 100);
			$("#click1").stop().animate({
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
				$(".push1.click1").stop().animate({
					top: 0,
					left: 0
				});
				$("#click1").css("z-index", "2").stop().animate({
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
	
	// 6
	$("#party").click(function() {
		var checkClicked = $('.clicked').doesExist();

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");

			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Our firm | Culture | Third Party Recognition | Bullet points", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push6").stop().animate({
				top: 192,
				left: 0
			}, 500);
			$("#party").stop().animate({
				height: '192px',
				width: '192px'
			}, 500);
			
			setTimeout(function() {
				$("#party .block_content_nm").html(blockHTML);
				$("#party .block_content_nm").css("background", "none");
				$("#party").css("z-index", "0");
			}, 500);
			
			// BG
			$('.black_bg').fadeOut(250);
			$(this).removeClass('zix');
			
		} else {
			if (checkClicked == false) {
				var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

				$("#party .block_content_nm").html(blockHTML);
				$("#party .block_content_nm").css("background", "#a1131a");
				$(".push6").stop().animate({
					top: 0,
					left: 0
				});
				$("#party").css("z-index", "2").stop().animate({
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
	
	// 7
	$("#click7").click(function() {
		var checkClicked = $('.clicked').doesExist();

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");

			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Our firm | Culture | Integrity | Bullet points", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push7.click7").stop().animate({
				top: 192,
				left: 192
			}, 100);
			$("#click7").stop().animate({
				height: '192px',
				width: '384px'
			}, 100);
			
			setTimeout(function() {
				$("#click7 .block_content_nm").html(blockHTML);
				$("#click7 .block_content_nm").css("background", "none");
				$("#click7").css("z-index", "0");
			}, 100);
			
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
					top: 192,
					left: 192
				});
				$("#click7").css("z-index", "2").stop().animate({
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
	
	// 9
	$("#video").click(function() {
		var checkClicked = $('.clicked').doesExist();

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");

			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Our firm | Culture | Our Sales Culture | Video", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push9").stop().animate({
				top: 192,
				left: 576
			}, 500);
			$("#video").stop().animate({
				height: '384px',
				width: '384px'
			}, 500);
			
			setTimeout(function() {
				$("#video .block_content_nm").html(blockHTML);
				$("#video .block_content_nm").css("background", "none");
				$("#video").css("z-index", "0");
			}, 500);
			
			// BG
			$('.black_bg').fadeOut(250);
			$(this).removeClass('zix');
			
		} else {
			if (checkClicked == false) {
				var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

				$("#video .block_content_nm").html(blockHTML);
				$("#video .block_content_nm").css("background", "#a1131a");
				$(".push9").stop().animate({
					top: 192,
					left: 384
				});
				$("#video").css("z-index", "2").stop().animate({
					height: '384px',
					width: '576px'
				});
				$(this).addClass("clicked");
				$('#player9').attr('src', '').attr('src', '//player.vimeo.com/video/80277399?autoplay=1');
				
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
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Our firm | Culture | Excellence | Bullet points", ($.now() - loadedSeconds), false]);
			
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
	$("#measured").click(function() {
		var checkClicked = $('.clicked').doesExist();

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");

			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Our firm | Culture | Culture Measured | Stats", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push13").stop().animate({
				top: 384,
				left: 384
			}, 500);
			$("#measured").stop().animate({
				height: '192px',
				width: '192px'
			}, 500);
			
			setTimeout(function() {
				$("#measured .block_content_nm").html(blockHTML);
				$("#measured .block_content_nm").css("background", "none");
				$("#measured").css("z-index", "0");
			}, 500);
			
			// BG
			$('.black_bg').fadeOut(250);
			$(this).removeClass('zix');
			
		} else {
			if (checkClicked == false) {
				var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

				$("#measured .block_content_nm").html(blockHTML);
				$("#measured .block_content_nm").css("background", "#a1131a");
				$(".push13").stop().animate({
					top: 192,
					left: 192
				});
				$("#measured").css("z-index", "2").stop().animate({
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
        	<div class="jll_americas_about">About our firm</div>
            <div class="sub_title">Culture</div>
        </div>
    </div>
    
</div>



<!--Body-->
<div class="container clearfix">


        
    <!--1-->
    <div class="push1 click1">
    	<div class="block_2x1 clickable" id="click1">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/teamwork.png"></div>
                <div class="flip_info">
                	<h1 class="bold">Teamwork</h1>
                    <h2>is the key to success</h2>
                </div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/teamwork.png"></div>
                <div class="flip_info">
                	<h1 class="bold">Teamwork</h1>
                    <h2>is the key to success</h2>
                </div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="pointer"></div>
                <div class="gray_box white">
                    <ul class="white_bullet">
                        <li>We do great work for our clients every day</li>
                        <li>We attract and retain the best professionals in the industry</li>
                        <li>We create the opportunity to grow individual wealth better than any other firm because it’s good for you and your family, your clients, and JLL</li>
                    </ul>
                    <div class="flip_name white">TEAMWORK</div>
                </div>
            </div>
        </div>
    </div>
    
    

	<div class="push3">
    	<div class="block_3x1 firm">
        	<div class="block_content culture">
            	<font class="times_32"><strong class="times">JLL fact:</strong> The stronger the culture in a market, the higher the revenue per professional</font>
            </div>
        </div>
    </div>
    

	<!--6-->
    <div class="push6">
    	<div class="block_1x1 clickable" id="party">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/3rd_party_recognition.jpg"></div>
                <div class="statistics">3RD PARTY<br>RECOGNITION</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/3rd_party_recognition.jpg"></div>
                <div class="statistics">3RD PARTY<br>RECOGNITION</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/3rd_party_recognition.png"></div>
                <div class="statistics black">3RD PARTY<br>RECOGNITION</div>
                <div class="pointer"></div>
                <div class="recognition_row1">
                	<div class="recognition_box">
                   	  <div><img src="<?php bloginfo('template_directory'); ?>/images/recognition/most-admired-companies-2015.png" class="center mb10"></div>
                    Named on <em>Fortune</em> magazine’s 2015 list of Most Admired Companies </div>
                    <div class="recognition_box">
                    	<div><br><img src="<?php bloginfo('template_directory'); ?>/images/recognition/outsourcing-2015.png" class="center mb10"><br></div>
                        Recognized by the IAOP (International Association of Outsourcing Professionals) on Outsourcing 100® list for the seventh consecutive year
                    </div>
                    <div class="recognition_box">
                    	<div><br><img src="<?php bloginfo('template_directory'); ?>/images/recognition/energy-star-2014.png" class="center mb10"></div>
                        Named by the U.S. Environmental Protection Agency as an Energy Star® Partner of the Year in 2007, 2010 and 2011, 2013 and 2015 and the Sustained Excellence award 2012-2015
                    </div>
                    <div class="recognition_box">
                    	<div><br><img src="<?php bloginfo('template_directory'); ?>/images/recognition/ethical-2014.png" class="center mb10"></div>
                        Chosen by the Ethisphere Institute as one of the World’s Most Ethical Companies in 2008-2016
                    </div>
                </div>
                <div class="recognition_row2">
                    <div class="align margin-top">
                	<div class="recognition_box">
                    	<div><img src="<?php bloginfo('template_directory'); ?>/images/recognition/test.png" class="center mb10"></div>
                        Named by <em>Corporate Responsibility Officer Magazine</em>, JLL has been honored with a 100 Best Corporate Citizens aware in 2007, 2009, 2013 and 2015
                        </div>
                	<div class="recognition_box">
                    	<div><img src="<?php bloginfo('template_directory'); ?>/images/recognition/black-eoe-journal-2014.png" class="center mb10"></div>
                        Named to <em>Black EOE Journal’s</em> “Best of the Best” lists for Top Diversity Employer and Top Supplier Diversity Program in 2013-2015
                        </div>
                    <div class="recognition_box">
                    	<div><br><br><img src="<?php bloginfo('template_directory'); ?>/images/recognition/elite-100.png" class="center mb10"></div>
                        Named to the 2015 InformationWeek Elite 100, a list of top business technology innovators
                    </div>
                    <div class="recognition_box">
                    	<div><img src="<?php bloginfo('template_directory'); ?>/images/recognition/hispanic-network-2014.png" class="center mb10"></div>
                      Named to <em>Hispanic Network Magazine’s</em> “Best of the Best” lists for Top Diversity Employer and Top Supplier Diversity Program in 2013-2015</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

    <!--7-->
    <div class="push7 click7">
    	<div class="block_2x1 clickable" id="click7">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/integrity.png"></div>
                <div class="flip_info">
                	<h2>We value</h2>
                	<h1 class="bold">integrity</h1>
                    <h2>above all else</h2>
                </div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/integrity.png"></div>
                <div class="flip_info">
                	<h2>We value</h2>
                	<h1 class="bold">integrity</h1>
                    <h2>above all else</h2>
                </div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="pointer"></div>
                <div class="gray_box white">
                    <ul class="white_bullet">
                        <li>We trust each other to do the right thing – every time</li>
                        <li>We are known for having the highest ethics in the industry</li>
                        <li>Our sales environment thrives on transparency and collaboration; we partner internally to effectively compete externally</li>
                    </ul>
                    <div class="flip_name white">INTEGRITY</div>
                </div>
            </div>
        </div>
    </div>
    
    
	<!--9-->
    <div class="push9">
    	<div class="block_2x2 clickable" id="video">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/video.jpg"></div>
                <div class="statistics black">OUR SALES CULTURE</div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/video.jpg"></div>
                <div class="statistics black">OUR SALES CULTURE</div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/3rd_party_recognition.png"></div>
                <div class="statistics black">OUR SALES CULTURE</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<iframe id="player9" src="//player.vimeo.com/video/80277399?autoplay=0" width="536" height="301" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    
    
    <!--11-->
    <div class="push11 click11">
    	<div class="block_2x1 clickable" id="click11">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/excellence.png"></div>
                <div class="flip_info">
                	<h2>We strive for</h2>
                	<h1 class="bold">excellence</h1>
                    <h2>in all that we do</h2>
                </div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/excellence.png"></div>
                <div class="flip_info">
                	<h2>We strive for</h2>
                	<h1 class="bold">excellence</h1>
                    <h2>in all that we do</h2>
                </div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="pointer"></div>
                <div class="gray_box white">
                    <ul class="white_bullet">
                        <li>We use our “one size fits one” approach to be the best in each of our markets</li>
                        <li>Our leaders are empowered, and are personally committed to our long-term vision and growth</li>
                        <li>Our teams are diverse: more women, more people of color, more perspectives</li>
                    </ul>
                    <div class="flip_name white">EXCELLENCE</div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!--13-->
    <div class="push13">
    	<div class="block_1x1 clickable" id="measured">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/culture_measured.jpg"></div>
                <div class="statistics black">CULTURE<br>MEASURED</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/culture_measured.jpg"></div>
                <div class="statistics black">CULTURE<br>MEASURED</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/culture_measured.png"></div>
                <div class="statistics black">CULTURE<br>MEASURED</div>
                <div class="pointer"></div>
                <div class="gray_box">
                	<h2>We don’t just talk, we listen.</h2>
                    We survey our people on JLL’s culture annually, and each year we strive to be better over 7 key factors:
					<img src="<?php bloginfo('template_directory'); ?>/images/table.png">
                    We break down the survey results market by market, and we take action to rectify, honor and/or reward appropriately. We care about happy clients AND happy teammates.
                </div>
            </div>
        </div>
    </div>
    

</div>












<?php get_footer(); ?>