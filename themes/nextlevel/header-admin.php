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

error_reporting(0);

$cur_user_id = get_current_user_id();
$cur_first_name = get_user_meta($cur_user_id, 'first_name', true);
$cur_last_name = get_user_meta($cur_user_id, 'last_name', true);


if (empty($cur_first_name) and empty($cur_last_name)) {
	$cur_first_name = 'Guest';
}
?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="no-js ie ie6 lte7 lte8 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7 ]><html class="no-js ie ie7 lte7 lte8 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8 lte8 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="no-js" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title>Join the JLL team</title>

		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
        
        <!-- Optional theme -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        
        <!-- TableSorter -->
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.tablesorter.min.js"></script>
        <link href="<?php bloginfo('template_directory'); ?>/css/tablesort.css" rel="stylesheet" type="text/css">
        
        <!-- Validate -->
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.validate.js"></script>

        <!--Font-->
        <script type="text/javascript" src="http://fast.fonts.net/jsapi/6ec12d3f-b407-494e-b4f2-7a0e6c89f41b.js"></script>

        <!--CSS-->
		<link href="<?php bloginfo('template_directory'); ?>/css/admin.css" rel="stylesheet" type="text/css">

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
	</head>
	<body <?php body_class(); ?>>

    <div class="container">
        <div class="row">
        	<div class="col-md-4 admin-logo"><img src="<?php bloginfo('template_directory'); ?>/images/logo-admin.png"></div>
            <div class="col-md-8 admin-nav">
            	<div class="admin-nav-head">Join the JLL team</div>
                <div class="admin-nav-about hidden-xs"><!--User Administration Portal--></div>
                <?php if ($cur_user_id >= 1) { ?>
                <div class="admin-nav-user">Welcome <?php echo $cur_first_name . ' ' . $cur_last_name; ?></div>
                <?php } ?>
                <div class="admin-nav-holder">
                	<ul class="admin-nav-items">
                        <?php if ($cur_user_id >= 1) { ?>
                        	<li><a href="/">Home</a></li>
                            <?php
                            if ( get_user_meta($cur_user_id, 'wp_user_level', true) == 8 )
                            {
                            ?>
                            <li><a href="?page_id=34">Add Potential Recruit</a></li>
                            <?php
                            }
                            ?>
                            <?php
                            if ( get_user_meta($cur_user_id, 'wp_user_level', true) == 10 )
                            {
                            ?>
                            <li><a href="?page_id=34&add_admin=1">Manage Admins</a></li>
                            <li><a href="?page_id=32">Add Office</a></li>
                            <?php
                            }
                            ?>
                            <li><a href="?page_id=42">View Reports</a></li>
                            <li><a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a></li>
						<?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div><br>