	<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />
	<link href='http://fonts.googleapis.com/css?family=Capriola' rel='stylesheet' type='text/css'>

	
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/twitterFetcher_v10_min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
		<body <?php body_class(); ?>>
		<div id="page_wrap" class="clearfix" >
		
			
			<header id="branding" role="banner">
	
			<hgroup class="heading">
				<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
				<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>

			<?php
				// Check to see if the header image has been removed
				$header_image = get_header_image();
				if ( $header_image ) :
					// Compatibility with versions of WordPress prior to 3.4.
					if ( function_exists( 'get_custom_header' ) ) {
						// We need to figure out what the minimum width should be for our featured image.
						// This result would be the suggested width if the theme were to implement flexible widths.
						$header_image_width = get_theme_support( 'custom-header', 'width' );
					} else {
						$header_image_width = HEADER_IMAGE_WIDTH;
					}
					?>
			
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logoImage">
				<?php
					// The header image
					// Check if this is a post or page, if it has a thumbnail, and if it's a big one
					
						// Compatibility with versions of WordPress prior to 3.4.
						if ( function_exists( 'get_custom_header' ) ) {
							$header_image_width  = get_custom_header()->width;
							$header_image_height = get_custom_header()->height;
						} else {
							$header_image_width  = HEADER_IMAGE_WIDTH;
							$header_image_height = HEADER_IMAGE_HEIGHT;
						}
						?>
					<!-- <img src="<?php header_image(); ?>" width="<?php echo $header_image_width; ?>" height="<?php echo $header_image_height; ?>" alt="" /> -->
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testing123.png" width="<?php echo $header_image_width; ?>" height="<?php echo $header_image_height; ?>" alt="" />
				<?php  // end check for featured image or standard header ?>
			</a>
			<?php endif; // end check for removed header image ?>

			
			
			
			</hgroup>
			
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" alt="home"><span id="homeLinkCow" style="display:block;"></span></a>	
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" alt="home"><span id="homeLinkTitle" style="display:block;"></span></a>	
			
			<nav id="main_nav" class=".main_nav clearfix gradient">
				<?php wp_nav_menu( array( 'theme_location' => 'primary','container' => false ) ); ?>
				
			</nav> <!-- END #main_nav -->
		</header> 
	<div id="main" class="site-main"> 