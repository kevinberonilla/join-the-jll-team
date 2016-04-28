<?php 
/*
Template Name: Industry Teams
*/
get_header(); 

$current_user = wp_get_current_user();
$cur_username = $current_user->user_login;
?>
<script type="text/javascript">
// track page load in events
loadedSeconds = $.now();
_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Targeted industry approach", , false]);
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
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Targeted industry approach | White papers | Copy w/PDF", ($.now() - loadedSeconds), false]);
			
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
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Targeted industry approach | Annual reports | Copy w/PDF", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push3.click3").animate({
				top: 0,
				left: 384
			}, 100);
			$("#click3").animate({
				height: '384px',
				width: '192px'
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
					height: '384px',
					width: '192px'
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
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Targeted industry approach | Campaigns | Copy w/PDF", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push4.click4").animate({
				top: 0,
				left: 576
			}, 100);
			$("#click4").animate({
				height: '192px',
				width: '384px'
			}, 100);
			
			setTimeout(function() {
				$("#click4 .block_content_nm").html(blockHTML);
				$("#click4 .block_content_nm").css("background", "none");
				$("#click4").css("z-index", "0");
			}, 100);
			
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
				$(".push4.click4").animate({
					top: 0,
					left: 576
				});
				$("#click4").css("z-index", "2").animate({
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
	$("#click6").click(function() {
		var checkClicked = $('.clicked').doesExist();

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
		
			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Targeted industry approach | Diagnostics toolkit | Copy w/PDF", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push6.click6").animate({
				top: 192,
				left: 0
			}, 500);
			$("#click6").animate({
				height: '192px',
				width: '384px'
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
	
	// 9
	$("#click9").click(function() {
		var checkClicked = $('.clicked').doesExist();

		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");
		
			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Targeted industry approach | Client x-rays | Copy w/PDF", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push9.click9").animate({
				top: 192,
				left: 576
			}, 500);
			$("#click9").animate({
				height: '192px',
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
				$(".push9.click9").animate({
					top: 192,
					left: 384
				});
				$("#click9").css("z-index", "2").animate({
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
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Win more | Targeted industry approach | Industry insighters | Copy w/PDF", ($.now() - loadedSeconds), false]);
			
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
            <div class="sub_title">Targeted industry approach</div>
        </div>
    </div>
    
</div>



<!--Body-->
<div class="container clearfix">
    
    
    
    
    <!--1-->
    <div class="push1 click1">
    	<div class="block_2x1 clickable" id="click1">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/targeted_industry_aproach_1.jpg"></div>
                <div class="statistics">WHITE PAPERS / SPECIAL REPORTS</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/targeted_industry_aproach_1.jpg"></div>
                <div class="statistics">WHITE PAPERS / SPECIAL REPORTS</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="pointer"></div>
                <div class="gray_box white">
                    <div class="clearfix">
                        <div class="wp_left white">
                            <strong>Thought leaders</strong><br>Making you and your clients smarter; thought provoking topics broken down and explored in a simplified way
                        </div>
                        <div class="wp_right">
                            <div class="clearfix"><a class="pdf_link" target="_blank" href="<?php bloginfo('template_directory'); ?>/pdf/2015/The Nerds_white paper_winter 2014.pdf"><img src="<?php bloginfo('template_directory'); ?>/images/flips/white_papers_icon.png" class="icon_right" target="_blank" ></a><br>
                            <br>
                            <br>
                            <br>
    <font class="icon_txt white"><a class="pdf_link" target="_blank" href="<?php bloginfo('template_directory'); ?>/pdf/2015/The Nerds_white paper_winter 2014.pdf">Sample White Paper – Office Perspective: The NERDS</a></font></div>
                            
                        </div>
                    </div>
                    <div class="flip_name white">WHITE PAPERS / SPECIAL REPORTS</div>
                </div>
            </div>
        </div>
    </div>
    
    
 
    <!--3-->
    <div class="push3 click3">
    	<div class="block_1x2 clickable" id="click3">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/targeted_industry_aproach_3.jpg"></div>
                <div class="statistics">ANNUAL REPORTs</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/targeted_industry_aproach_3.jpg"></div>
                <div class="statistics">ANNUAL REPORTs</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="pointer"></div>
                <div class="gray_box white">
                    <strong>Need a deep-dive analysis into a given Industry?</strong><br>Our annual reports provide detailed Industry information, right down to the individual market level.<br><br><br><br><br><br>
                    
                    <div class="ar_holder">
                        <div class="clearfix"><a class="pdf_link" target="_blank" href="<?php bloginfo('template_directory'); ?>/pdf/2015/U.S. High Technology Outlook - 9-2014 - JLL.pdf"><img src="<?php bloginfo('template_directory'); ?>/images/flips/annual_reports_icon.png" class="icon_right"></a><br>
    <br>
    <br>
    <br>
    <font class="icon_txt white"><strong><a class="pdf_link" target="_blank" href="<?php bloginfo('template_directory'); ?>/pdf/2015/U.S. High Technology Outlook - 9-2014 - JLL.pdf">Sample Report – Hi-Tech Office Outlook</a></strong></font></div>
                        
                    </div>
                    <div class="flip_name white">ANNUAL REPORTs</div>
                </div>
            </div>
        </div>
    </div>
    

    
    <!--4-->
    <div class="push4 click4">
    	<div class="block_2x1 clickable" id="click4">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/targeted_industry_aproach_4.jpg"></div>
                <div class="statistics">CAMPAIGNS</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/targeted_industry_aproach_4.jpg"></div>
                <div class="statistics">CAMPAIGNS</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="pointer"></div>
                <div class="gray_box white">
                    <div class="clearfix">
                        <div class="wp_left white txt_11">
                            <strong>‘Easy button’ campaigns</strong><br>We deliver our research and thought leadership in a digestible, visual form to build people and brand identity as experts in a given industry. Our sales teams simply share the pieces through their social media network with 1-click – it’s that easy.
    
                        </div>
                        <div class="wp_right">
                            <div class="clearfix"><a class="pdf_link" target="_blank" href="<?php bloginfo('template_directory'); ?>/pdf/Energy-Infographics-Campaign.pdf"><img src="<?php bloginfo('template_directory'); ?>/images/flips/campaign_icon.png" class="icon_right"></a><br>
    <br>
    <br>
    <br>
    <font class="icon_txt white"><a class="pdf_link" target="_blank" href="<?php bloginfo('template_directory'); ?>/pdf/Energy-Infographics-Campaign.pdf">Sample campaign – Energy</a></font></div>
                            
                        </div>
                    </div>
                    <div class="flip_name white">CAMPAIGNS</div>
                </div>
            </div>
        </div>
    </div>
    
    

    
    <!--6-->
    <div class="push6 click6">
    	<div class="block_2x1 clickable" id="click6">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/targeted_industry_aproach_6.jpg"></div>
                <div class="statistics">TWO-CENTS DECK</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/targeted_industry_aproach_6.jpg"></div>
                <div class="statistics">TWO-CENTS DECK</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="statistics">TWO-CENTS DECK</div>
                <div class="pointer"></div>
                <div class="gray_box">
					<div class="w536 clearfix">
                        <div class="dt_left white">
                        	Everything you need to have impactful conversations in a given Industry:<br>topical, timely dive into trends impacting an industry and how it may create challenges or opportunities in its real estate strategy. It’s us having a vehicle to address the latest issues and keep clients up to date on events, trends and their impact on RE as they develop.  
                        </div>
                        <div class="dt_right">
                        	<div class="clearfix"><a class="pdf_link" target="_blank" href="<?php bloginfo('template_directory'); ?>/pdf/2015/what-oil-price-drop-means-for-economy-and-office-markets-141215124642-conversion-gate02.pdf"><img src="<?php bloginfo('template_directory'); ?>/images/flips/toolkit_icon.png" class="icon_right"></a><br>
<br>
<br>
<br>
<font class="icon_txt white"><a class="pdf_link" target="_blank" href="<?php bloginfo('template_directory'); ?>/pdf/2015/what-oil-price-drop-means-for-economy-and-office-markets-141215124642-conversion-gate02.pdf">Sample Two-Cents Deck – Oil Prices</a></font></div>
                            
                        </div>
                	</div>
                </div>
            </div>
        </div>
    </div>
	
    <!--9-->
    <div class="push9 click9">
    	<div class="block_2x1 clickable" id="click9">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/targeted_industry_aproach_9.jpg"></div>
                <div class="statistics">CLIENT X-RAYs</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/targeted_industry_aproach_9.jpg"></div>
                <div class="statistics">CLIENT X-RAYs</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="statistics">CLIENT X-RAYs</div>
                <div class="pointer"></div>
                <div class="gray_box">
					<div class="w536 clearfix">
                        <div class="dt_left white">
                        	<strong>Are you pursuit ready?</strong> Client X-rays provide essential information about your client or prospect efficiently packaged into one book including:
                            <ul class="white_bullet">
                            	<li>Internal preparedness documents</li>
                                <li>Detailed company information</li>
                                <li>Industry analysis</li>
                                <li>Case studies</li>
                            </ul>
                        </div>
                        <div class="dt_right">
                        	<div class="clearfix"><a class="pdf_link" target="_blank" href="<?php bloginfo('template_directory'); ?>/pdf/2015/2015 xray sample.pdf"><img src="<?php bloginfo('template_directory'); ?>/images/flips/xray_icon.png" class="icon_right"></a><br>
<br>
<br>
<br>
<font class="icon_txt white"><a class="pdf_link" target="_blank" href="<?php bloginfo('template_directory'); ?>/pdf/2015/2015 xray sample.pdf">Sample Technology Client X-ray – Cisco Systems, Inc.</a></font></div>
                            
                        </div>
                	</div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    <!--11-->
    <div class="push11 click11">
    	<div class="block_2x1 clickable" id="click11">
        	<div class="block_content_nm">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/targeted_industry_aproach_11.jpg"></div>
                <div class="statistics">INDUSTRY INSIGHTERs</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
            	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/targeted_industry_aproach_11.jpg"></div>
                <div class="statistics">INDUSTRY INSIGHTERs</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <div class="pointer"></div>
                <div class="gray_box white">
                    <div class="clearfix">
                        <div class="wp_left white">
                            The law of three’s: sound bites to help you win in a given Industry:
                            <ul class="white_bullet">
                                <li>3 trends</li>
                                <li>3 impacts of those trends on real estate</li>
                                <li>3 case studies</li>
                            </ul>
                        </div>
                        <div class="wp_right">
                            <div class="clearfix"><a class="pdf_link" target="_blank" href="<?php bloginfo('template_directory'); ?>/pdf/2015/TR_one-pager_Data-Centers_Insighter.pdf"><img src="<?php bloginfo('template_directory'); ?>/images/flips/insight_icon.png" class="icon_right"></a><br>
    <br>
    <br>
    <br>
    <font class="icon_txt white"><a class="pdf_link" target="_blank" href="<?php bloginfo('template_directory'); ?>/pdf/2015/TR_one-pager_Data-Centers_Insighter.pdf">Sample inSighter – Data Centers</a></font></div>
                            
                        </div>
                    </div>
                    <div class="flip_name white">INDUSTRY INSIGHTERs</div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    <div class="push13">
    	<div class="block_3x1">
        	<div class="flip_img"><img src="<?php bloginfo('template_directory'); ?>/images/flips/targeted_industry_aproach_13.png"></div>
        	<div class="block_content consulting_experts">
            	<font class="times_28 yellow"><strong class="times">We help make you the expert</strong><br><br> 
                
                Dedicated marketing and research professionals supporting industry goals</font>
            </div>
        </div>
    </div>

</div>












<?php get_footer(); ?>