<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

$current_user = wp_get_current_user();
$cur_user_id = get_current_user_id();
$cur_user_level = get_user_meta($cur_user_id, 'wp_user_level', true);

if ($cur_user_level >= 7) {
	$admin_info = "<a href='?page_id=30'>Admin Panel</a>";
} else {
	//$admin_info = $cur_user_level;
	//logout button
	$admin_info = "<a href=" . wp_logout_url(home_url()) . ">Logout</a>";
	// Don't allow recruits to log in before their start date  
	$start_date = get_user_meta($cur_user_id, 'start_date', true);
	$datetime_startDate = new DateTime($start_date);
	$datetime_current = new DateTime("now");
	if ($datetime_startDate > $datetime_current)
	{
		wp_logout();
		wp_redirect( home_url() );
		exit;
	}
}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="no-js ie ie6 lte7 lte8 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7 ]><html class="no-js ie ie7 lte7 lte8 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8 lte8 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="no-js" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<?php $file=pathinfo( __FILE__ );$page=basename( $_SERVER['PHP_SELF'], '.' . $file[ 'extension' ] ); ?>
    <?php 
    switch ($page) {
        case "index":
            $pt = "Join the JLL team";
            break;
        case "jll_americas":
            $pt = "About our firm | JLL Americas";
            break;
        case "culture":
            $pt = "About our firm | Culture";
            break;
        case "happy_clients":
            $pt = "About our firm | Happy clients";
            break;
        case "sales_team_benefits":
            $pt = "A succesful sales path | Sales team benefits";
            break;
        case "make_more_money":
            $pt = "A succesful sales path | Make more money";
            break;
        case "investing_in_our_people":
            $pt = "A succesful sales path | Investing in our people";
            break;
        case "tools_and_innovation":
            $pt = "Helping you win more | Tools and innovation";
            break;
        case "consulting_partners":
            $pt = "Helping you win more | Consulting partners";
            break;
        case "targeted_industry_aproach":
            $pt = "Helping you win more | Targeted industry approach";
            break;
        case "marketing_and_research":
            $pt = "Helping you win more | Marketing & research";
            break;
        
    }
    ?>
    <title><?php echo $pt; ?></title>



		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        
        
        
        <!--CSS-->
        <link href="<?php bloginfo('template_directory'); ?>/css/grid.css" rel="stylesheet" type="text/css">
        <link href="<?php bloginfo('template_directory'); ?>/css/nav.css" rel="stylesheet" type="text/css">
        <link href="<?php bloginfo('template_directory'); ?>/css/style.css?v=1.00" rel="stylesheet" type="text/css">
        
        
        
        <!--JS-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/rotate3Di.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.backstretch.min.js"></script>
        
        
        
        <!--Font-->
        <script type="text/javascript" src="http://fast.fonts.net/jsapi/6ec12d3f-b407-494e-b4f2-7a0e6c89f41b.js"></script>

		<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );

		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
		?>
        
        <!-- tracking -->
		<!--Google Analytics-->
		<!--script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		 
		  ga('create', 'UA-46183039-1', 'jointhejllteam.com');
		  ga('send', 'pageview');
		</script-->
        
<!--Nav-->
<script>
$(document).ready(function() {
	$(".menu_item").css("opacity", ".9");
	$("#big_wrap").stop().animate({opacity:"0"}, 1);
	$(this).find(".menu_txt").stop().animate({opacity:".7"});
	
	/*
	$("#menu_holder").hover(function() {
		var totalHeight = $(document).height();
		$("#big_wrap").css("height", totalHeight);
		$("#big_wrap").stop().animate({opacity:".7"}, 250);	
	}, function() {
		$("#big_wrap").stop().stop().animate({opacity:"0"}, 250);
	
	});
	*/
	
	$(".menu_item").hover(function() {
		if ($(this).hasClass("menu_selected")) {
		} else {
			$(this).stop().animate({left: 0},250);
		}
		
		$(this).children(".slide_out_menu").fadeIn(250);
		$(this).find(".menu_txt").stop().animate({opacity:"1"});
	}, function() {
		$(this).stop().stop().animate({left: "-10px"},300).children(".slide_out_menu").fadeOut(200);
		$(this).find(".menu_txt").stop().animate({opacity:".7"});
	});
	
	$(".nav_ul li").hover(function() {
		$(this).find("a").stop().stop().animate({opacity:".9",color:"#222"}, 50);
	}, function() {
		$(this).find("a").stop().stop().animate({opacity:"1",color:"#eee"}, 500);
	});
	
	$("#menu_holder").stop().animate({left: 0}, 750);
	
	$('.logo_fade').fadeIn(500)
});
</script>


<script>
$(document).ready(function() {
	if (isMobile.any()) {
		$('.scroll_bar').css('display', 'block');
		
		$('.mobile_menu_btn').css('display', 'block');
		
		$('.header .push1 .block_2x1').css({
			height: '72px',
			width: '192px'
		});
		$('.logo').html('<img src="<?php bloginfo('template_directory'); ?>/images/logo_mobile.png">');
		$('.header .push3 .block_3x1').css({
			height: '72px',
			width: '768px',
			left: '-192px'
		});
		$('.header').css('height', '72px');
		$('.jll_americas_about').css({
			'line-height': '50px',
			'font-size': '30px',
		});
		$('.sales_path').css({
			'line-height': '50px',
			'font-size': '30px',
		});
		$('.consulting_partners_about').css({
			'line-height': '50px',
			'font-size': '30px',
		});
		$('.home_about').css({
			'line-height': '72px',
			'font-size': '30px',
		});
		$('.sub_title').css({
			'bottom': '15px',
			'font-size': '18px'
		});
		
		
		
		$('#menu_holder').css('display', 'none');
		$('.mobile_menu_holder').css('display', 'block');
		
		

		$('.mobile_menu_btn').click(function() {
			if ($('.mobile_menu_btn').hasClass('mobileClicked')) {
				$('.mobile_menu_btn').removeClass('mobileClicked');
			
				$('.mobile_menu_flyout2').stop().animate({
					right: 0
				});
				$('.mobile_menu_holder').css('height', '576px');
			} else {
				$('.mobile_menu_btn').addClass('mobileClicked');
				
				$('.mobile_menu_flyout2').stop().animate({
					right: -260
				});
				$('.mobile_menu_holder').stop().animate({height:47});
			}
		});
		
		$('.our_firm_c').click(function() {
			if ($('.our_firm_c').hasClass('dropClicked')) {
				$('.our_firm_c').removeClass('dropClicked');
				
				$('.drop_our_firm').stop().animate({
					height: 0
				});
			} else {
				$('.our_firm_c').addClass('dropClicked');
				
				$('.sales_path_c').removeClass('dropClicked');
				$('.drop_sales_path').stop().animate({height: 0});
				$('.win_more_c').removeClass('dropClicked');
				$('.drop_win_more').stop().animate({height: 0});
				
				$('.drop_our_firm').stop().animate({
					height: 144
				});	
			}
		});
		
		$('.sales_path_c').click(function() {
			if ($('.sales_path_c').hasClass('dropClicked')) {
				$('.sales_path_c').removeClass('dropClicked');
				
				$('.drop_sales_path').stop().animate({
					height: 0
				});
			} else {
				$('.sales_path_c').addClass('dropClicked');
				
				$('.our_firm_c').removeClass('dropClicked');
				$('.drop_our_firm').stop().animate({height: 0});
				$('.win_more_c').removeClass('dropClicked');
				$('.drop_win_more').stop().animate({height: 0});
				
				$('.drop_sales_path').stop().animate({
					height: 144
				});	
			}
		});
		
		$('.win_more_c').click(function() {
			if ($('.win_more_c').hasClass('dropClicked')) {
				$('.win_more_c').removeClass('dropClicked');
				
				$('.drop_win_more').stop().animate({
					height: 0
				});
			} else {
				$('.win_more_c').addClass('dropClicked');
				
				$('.our_firm_c').removeClass('dropClicked');
				$('.drop_our_firm').stop().animate({height: 0});
				$('.sales_path_c').removeClass('dropClicked');
				$('.drop_sales_path').stop().animate({height: 0});
				
				$('.drop_win_more').stop().animate({
					height: 192
				});	
			}
		});
		
		
		
	}    
});
</script>
</head>
<body <?php body_class(); ?>>


<div class="black_bg"></div>





<div id="menu_holder">

    <div class="menu_item red_bg <?php if($myuri=='/nextlevel/index.php'){echo 'menu_selected';} ?>">
        <div class="menu_txt"><a href="?page_id=47">Home</a></div>
    </div>
    
    
    <div class="menu_item blue_bg <?php if($myuri=='/nextlevel/our_firm.php'){echo 'menu_selected';} ?>">
        <div class="slide_out_menu blue_bg blue_left_border clearfix">
            <div class="menu_col2">
                <ul class="nav_ul">
                    <li><a href="?page_id=6">JLL Americas</a></li>
                    <li><a href="?page_id=13">Culture</a></li> 
                    <li><a href="?page_id=15">Happy Clients</a></li>
                </ul>
            </div>
        </div>
        <div class="menu_txt"><a href="?page_id=6">OUR<br>FIRM</a></div>
    </div>
    
    
    <div class="menu_item gray_bg2 <?php if($myuri=='/nextlevel/sales_path.php'){echo 'menu_selected';} ?>">
        <div class="slide_out_menu gray_bg2 gray_left_border clearfix">
            <div class="menu_col2">
                <ul class="nav_ul">
                    <li><a href="?page_id=17">Sales Team benefits</a></li>
                    <li><a href="?page_id=9">Make more money</a></li>
                    <li><a href="?page_id=20">Investing in our people</a></li>
                </ul>
            </div>
        </div>
        <div class="menu_txt"><a href="?page_id=17">SALES<br>PATH</a></div>
    </div>
    
    
    <div class="menu_item green_bg <?php if($myuri=='/nextlevel/win_more.php'){echo 'menu_selected';} ?>">
        <div class="slide_out_menu green_bg green_left_border clearfix">
            <div class="menu_col2">
                <ul class="nav_ul">
                    <li><a href="?page_id=22">Tools & innovation</a></li>
                    <li><a href="?page_id=24">Consulting partners</a></li>
                    <li><a href="?page_id=26">Industry teams</a></li>
                    <li><a href="?page_id=28">Marketing & Research</a></li>
                </ul>
            </div>
        </div>
        <div class="menu_txt"><a href="?page_id=22">WIN<br>MORE</a></div>
    </div>
    
</div>





<!--Header-->
<div class="header clearfix">
	
    <div class="mobile_menu_btn mobileClicked">
        <img src="<?php bloginfo('template_directory'); ?>/images/mobile_menu_icon.png">
    </div>
    
	<div class="mobile_menu_holder">
		<div class="mobile_menu_flyout2">
            <a href="?p=47"><div class="mob_menu_item red_bg">HOME</div></a>
            <div class="mob_menu_item blue_bg our_firm_c">OUR FIRM</div>
            <div class="drop_our_firm">
                <a href="?page_id=6"><div class="mob_menu_item blue_bg">JLL AMERICAS</div></a>
                <a href="?page_id=13"><div class="mob_menu_item blue_bg">CULTURE</div></a>
                <a href="?page_id=15"><div class="mob_menu_item blue_bg">HAPPY CLIENTS</div></a>
            </div>
            <div class="mob_menu_item gray_bg2 sales_path_c">SALES PATH</div>
            <div class="drop_sales_path">
                <a href="?page_id=17"><div class="mob_menu_item gray_bg2">SALES TEAM BENEFITS</div></a>
                <a href="?page_id=9"><div class="mob_menu_item gray_bg2">MAKE MORE MONEY</div></a>
                <a href="?page_id=20"><div class="mob_menu_item gray_bg2">INVESTING IN OUR PEOPLE</div></a>
            </div>
            <div class="mob_menu_item green_bg win_more_c">WIN MORE</div>
            <div class="drop_win_more">
                <a href="?page_id=22"><div class="mob_menu_item green_bg">TOOLS & INNOVATION</div></a>
                <a href="?page_id=24"><div class="mob_menu_item green_bg">CONSULTING PARTNERS</div></a>
                <a href="?page_id=26"><div class="mob_menu_item green_bg">INDUSTRY TEAMS</div></a>
                <a href="?page_id=28"><div class="mob_menu_item green_bg">MARKETING & RESEARCH</div></a>
            </div>
        </div>
    </div>

	
    <div class="admin_panel_holder">
	
		<div class="admin_panel"><?php echo $admin_info; ?></div>
    
    </div>
    
	
    <div class="push1">
    	<div class="block_2x1">
        	<div class="logo"><a href="index.php"><img class="logo_fade" src="<?php bloginfo('template_directory'); ?>/images/logo.png"></a></div>
        </div>
    </div>
    

