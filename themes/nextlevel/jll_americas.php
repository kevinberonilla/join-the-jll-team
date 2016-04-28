<?php 
/*
Template Name: JLL Americas
*/
get_header();

$current_user = wp_get_current_user();
$cur_username = $current_user->user_login;
?>
<script type="text/javascript">
// track page load in events
loadedSeconds = $.now();
_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Our firm | JLL Americas", , false]);
</script>

<!--Background-->
<script>
$(document).ready(function() {
	$.backstretch("<?php bloginfo('template_directory'); ?>/images/backgrounds/jll_americas.jpg");
});
</script>






<!--Growing-->
<script>
$(document).ready(function() {

	$(".block_front").hide();
    $(".block_back").hide();
	
	// 1
	$("#tenant").click(function() {
		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");

			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Our firm | JLL Americas | Tenant Rep | Stats", ($.now() - loadedSeconds), false]);
						
			var blockHTML = $(this).find(".block_front").html();

			$("#tenant").animate({
				height: '192px'
			}, 500);
			
			setTimeout(function() {
				$("#tenant .block_content").html(blockHTML);
				$("#tenant .block_content").css("background", "none");
				$("#tenant").css("z-index", "0");
			}, 500);
		} else {
			var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

			$("#tenant .block_content").html(blockHTML);
			$("#tenant .block_content").css("background", "#a1131a");
			$("#tenant").css("z-index", "1").animate({
				height: '576px',
			});
			$(this).addClass("clicked");
		}
	});
	
	// 6
	$("#agency").click(function() {
		// click tracking
		_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Our firm | JLL Americas | Agency Leasing | Stats", ($.now() - loadedSeconds), false]);
			
		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");

			var blockHTML = $(this).find(".block_front").html();
			
			$(".push6").animate({
				top: 192,
				left: 0
			}, 500);
			$("#agency").animate({
				height: '192px'
			}, 500);
			
			setTimeout(function() {
				$("#agency .block_content").html(blockHTML);
				$("#agency .block_content").css("background", "none");
				$("#agency").css("z-index", "0");
			}, 500);
		} else {
			var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

			$("#agency .block_content").html(blockHTML);
			$("#agency .block_content").css("background", "#a1131a");
			$(".push6").animate({
				top: 0,
				left: 0
			});
			$("#agency").css("z-index", "1").animate({
				height: '576px',
			});
			$(this).addClass("clicked");
		}
	});
	
	// 11
	$("#industrial").click(function() {
		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");

			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Our firm | JLL Americas | Industrial | Stats", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push11").animate({
				top: 384,
				left: 0
			}, 500);
			$("#industrial").animate({
				height: '192px'
			}, 500);
			
			setTimeout(function() {
				$("#industrial .block_content").html(blockHTML);
				$("#industrial .block_content").css("background", "none");
				$("#industrial").css("z-index", "0");
			}, 500);
		} else {
			var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

			$("#industrial .block_content").html(blockHTML);
			$("#industrial .block_content").css("background", "#a1131a");
			$(".push11").animate({
				top: 0,
				left: 0
			});
			$("#industrial").css("z-index", "1").animate({
				height: '576px',
			});
			$(this).addClass("clicked");
		}
	});
	
	// 12
	$("#retail").click(function() {
		if ($(this).hasClass("clicked")) {
			$(this).removeClass("clicked");

			// click tracking
			_gaq.push(["_trackEvent", "<?php echo $cur_username; ?>", "click", "Our firm | JLL Americas | Retail | Stats", ($.now() - loadedSeconds), false]);
			
			var blockHTML = $(this).find(".block_front").html();
			
			$(".push12").animate({
				top: 384,
				left: 192
			}, 500);
			$("#retail").animate({
				height: '192px'
			}, 500);
			
			setTimeout(function() {
				$("#retail .block_content").html(blockHTML);
				$("#retail .block_content").css("background", "none");
				$("#retail").css("z-index", "0");
			}, 500);
		} else {
			var blockHTML = $(this).find(".block_back").html();
				
				// for click tracking
				loadedSeconds = $.now();

			$("#retail .block_content").html(blockHTML);
			$("#retail .block_content").css("background", "#a1131a");
			$(".push12").animate({
				top: 0,
				left: 192
			});
			$("#retail").css("z-index", "1").animate({
				height: '576px',
			});
			$(this).addClass("clicked");
		}
	});

});
</script>



<!--Flipping-->





    <div class="push3">
    	<div class="block_3x1">
        	<div class="jll_americas_about">About our firm</div>
            <div class="sub_title">JLL Americas</div>
        </div>
    </div>
    
</div>



<!--Body-->
<div class="container clearfix">

	<!--1-->
    <div class="push1">
    	<div class="block_1x1 clickable" id="tenant">
        	<div class="block_content">
                <h1 class="teal"><strong>715</strong></h1>
                <h2 class="teal">Tenant Rep brokers</h2>
                <div class="statistics">Statistics</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
                <h1 class="teal"><strong>715</strong></h1>
                <h2 class="teal">Tenant Rep brokers</h2>
                <div class="statistics">Statistics</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <h1><strong>715</strong></h1>
                <h2>Tenant Rep brokers</h2>
                
                <h1><strong>8,400</strong></h1>
                <h2># of Tenant Rep transactions</h2>
                
                <h1><strong>177 M</strong></h1>
                <h2>total square feet</h2>
                
                <h1><strong>$614M</strong></h1>
                <h2>total revenue</h2>
                <div class="pointer"></div>
            </div>
        </div>
    </div>
    
    
    <!--6-->
	<div class="push6">
    	<div class="block_1x1 clickable" id="agency">
        	<div class="block_content">
                <h1><strong>400+</strong></h1>
                <h2>Agency Leasing brokers</h2>
                <div class="statistics">Statistics</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
                <h1><strong>400+</strong></h1>
                <h2>Agency Leasing brokers</h2>
                <div class="statistics">Statistics</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <h1><strong>400+</strong></h1>
                <h2>Agency Leasing brokers</h2>
                
                <h1><strong>4,740</strong></h1>
                <h2># of AL transactions</h2>
                
                <h1><strong>380 M</strong></h1>
                <h2>total square feet</h2>
                
                <h1><strong>$146M</strong></h1>
                <h2>total revenue</h2>
                <div class="pointer"></div>
            </div>
        </div>
    </div>
    
    
    <!--11-->
	<div class="push11">
    	<div class="block_1x1 clickable" id="industrial">
        	<div class="block_content">
                <h1><strong>240</strong></h1>
                <h2>Industrial brokers</h2>
                <div class="statistics">Statistics</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
                <h1><strong>240</strong></h1>
                <h2>Industrial brokers</h2>
                <div class="statistics">Statistics</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <h1><strong>240</strong></h1>
                <h2>Industrial brokers</h2>
                
                <h1><strong>2,890</strong></h1>
                <h2># of Industrial transactions</h2>
                
                <h1><strong>196 M</strong></h1>
                <h2>total square feet</h2>
                
                <h1><strong>$128M</strong></h1>
                <h2>total revenue</h2>
                <div class="pointer"></div>
            </div>
        </div>
    </div>
    
    
    <!--12-->
	<div class="push12" style="z-index:9998">
    	<div class="block_1x1 clickable" id="retail">
        	<div class="block_content">
                <h1><strong>90+<small>or 60% growth</small></strong></h1>
                <h2>Retail<br>brokers</h2>
                <div class="statistics">Statistics</div>
                <div class="pointer"></div>
            </div>

            <div class="block_front">
                <h1><strong>90+<small>or 60% growth</small></strong></h1>
                <h2>Retail<br>brokers</h2>
                <div class="statistics">Statistics</div>
                <div class="pointer"></div>
            </div>
            
            <div class="block_back">
                <h1><strong>90+<small>or 60% growth</small></strong></h1>
                <h2>Retail<br>brokers</h2>
                
                <h1><strong>116%</strong></h1>
                <h2>retail transaction value growth</h2>
                
                <h1><strong>106%</strong></h1>
                <h2>growth in retail clients</h2>
                
                <h1><strong>105%</strong></h1>
                <h2>growth in total revenue</h2>
                <div class="pointer"></div>
            </div>
        </div>
    </div>
    
    
    <div class="push2">
    	<div class="block_4x3"><img src="<?php bloginfo('template_directory'); ?>/images/map2015-v2.png"></div>
    </div>


</div>












<?php get_footer(); ?>