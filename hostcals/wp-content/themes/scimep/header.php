<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage UW_Madison
 * @since UW-Madison 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'uwmadison' ), max( $paged, $page ) );

	?></title>
<link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/style.css?12345" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/responsive.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/custom.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
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
<div id="page" class="hfeed">
	<header id="branding" role="banner">
		<hgroup>
			<h1 id="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php output_uw_wordpress_banner(); ?><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/scimep_logo.png" /></a></h1>
			<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

		<div id="logo">
			<a href="http://www.wisc.edu" alt="University of Wisconsin-Madison" title="University of Wisconsin-Madison"><img id="logo-wordmark"  alt="University of Wisconsin&ndash;Madison" src="<?php echo get_bloginfo("template_directory")?>/images/wordmark.gif"></a>
			<a href="http://www.wisc.edu" alt="University of Wisconsin-Madison" title="University of Wisconsin-Madison"><img id="logo-crest" src="<?php echo get_bloginfo("template_directory")?>/images/crest.png" alt="W crest logo"></a>
		</div>

		<nav class="utility" role="navigation">
			<h3 class="assistive-text"><?php _e( 'Utility menu', 'uwmadison' ); ?></h3>
			<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
			<?php wp_nav_menu( array( 'theme_location' => 'utility_menu' ) ); ?>
		</nav><!-- .utility -->

		<?php get_search_form();?>

		<a class="collapse" href="#">Menu</a>

		<nav id="access" role="navigation">
			<h3 class="assistive-text"><?php _e( 'Main menu', 'uwmadison' ); ?></h3>
			<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
			<?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'container_class' => 'menu') ); ?>
		</nav><!-- #access -->

	</header><!-- #branding -->


	<div id="main" class="group">
