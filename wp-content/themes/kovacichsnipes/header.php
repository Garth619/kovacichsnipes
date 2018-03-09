<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">

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
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	
	
		
	<header>
		
		<div class="header_left">
			
			<div class="menu_wrapper">
				
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
				
				<span class="menu_title">Menu</span>
				
			</div><!-- menu_wrapper -->
			
			<a class="logo" href="<?php bloginfo('url');?>">
				
				<img src="<?php bloginfo('template_directory');?>/images/ico-logo.png"/>
				
			</a><!-- logo -->
			
		</div><!-- header_left -->
		
		<div class="header_right">
			
			<a class="" href="tel:(406)564-1743">(406)564-1743</a>
			
			<a class="" href="tel:(866) 630-8868">(866) 630-8868</a>
			
		</div><!-- header_right -->
		
		
	</header>
	
	<div class="mobile_header">
		
		<div class="menu_wrapper">
			
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
				
			<span class="menu_title">Menu</span>
			
		</div><!-- menu_wrapper -->
		
		<div class="mobile_tel">
			
			<a class="" href="">
				
				<img src="<?php bloginfo('template_directory');?>/images/ico-phone.svg"/>
				
			</a>
		
		</div><!-- mobile_tel -->
		
		<div class="mobile_contact">
			
			<img src="<?php bloginfo('template_directory');?>/images/ico-email.svg"/>
		
		</div>
		
	</div><!-- mobile_header -->
	

<?php // wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
			