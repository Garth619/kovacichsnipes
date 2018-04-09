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


<style type="text/css">
	
	
	.section_one_left {
		background: url(<?php the_field( 'section_one_desktop_image' ); ?>) top center no-repeat;
		background-size:cover;
	}
	
	
	.about_banner_image {
		background: url(<?php the_field( 'about_banner' ); ?>) top center no-repeat;
		background-size:cover;
	}
	
	
	.sec_three_right .sec_three_right_inner {
		background: url(<?php the_field( 'section_four_desktop_image' ); ?>) top center no-repeat;
		background-size:cover;
	}
	
	
	.int_banner_image {
		background: url(<?php the_field( 'internal_banner_image','option' ); ?>) top center no-repeat;
		background-size:cover;
	}

	
@media screen and (max-width:1125px) {
		
	.section_one_right {
		background-size: 1197;
		background: url(<?php the_field( 'section_one_tablet_image_two' ); ?>) top center no-repeat;
	}
			
	
	.sec_three_right .sec_three_right_inner {
		background: url(<?php the_field( 'section_four_tablet_image' ); ?>) top center no-repeat;
		background-size:cover;
	}		
			
	
		
	} /* Media Query */
	
	
	@media screen and (max-width: 767px) {
		
		
		.section_one_right {
			background: url(<?php the_field( 'section_one_mobile_image' ); ?>) top center;
		}
		
		
		
		
	} /* Media Query */
	
	<?php the_field( 'reviews_text_area','option'); ?>
	
</style>

<?php wp_head(); ?>


<?php the_field( 'header_scripts','option'); ?>


</head>

<body <?php body_class(); ?>>
	
	
		
	<header id="header_trigger">
		
		<div class="header_left">
			
			<div class="menu_wrapper">
				
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
				
				<span class="menu_title">Menu</span>
				
			</div><!-- menu_wrapper -->
			
			<a class="logo" href="<?php bloginfo('url');?>">
				
<!-- 				<img src="<?php bloginfo('template_directory');?>/images/ico-logo.png"/> -->
				
				<?php echo file_get_contents("wp-content/themes/kovacichsnipes/images/new-logo.svg"); ?>
				
			</a><!-- logo -->
			
		</div><!-- header_left -->
		
		<div class="header_right">
			
			<div class="tel_wrapper">
			
				<a class="tel_link" href="tel:<?php the_field( 'local_number',24); ?>"><?php the_field( 'local_number',24 ); ?></a>
			
				<a class="tel_link" href="tel:<?php the_field( 'toll_free_number',24); ?>"><?php the_field( 'toll_free_number',24 ); ?></a>
			
			</div><!-- tel_wrapper -->
			
			<div class="header_mail_wrapper">
				
				<a class="mail_scroll" href="#footer_trigger">
					
				<img src="<?php bloginfo('template_directory');?>/images/ico-email.svg"/>
				
				</a>
				
			</div><!-- header_mail_wrapper -->
			
		</div><!-- header_right -->
		
		
	</header>
	
	<div class="drop_down_wrapper">
	
		<div class="mobile_header">
		
			<div class="menu_wrapper">
			
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
				
				<span class="menu_title">Menu</span>
			
			</div><!-- menu_wrapper -->
		
			<div class="mobile_tel">
			
				<a class="" href="tel:(406)564-1743">
				
					<img src="<?php bloginfo('template_directory');?>/images/ico-phone.svg"/>
				
				</a>
		
			</div><!-- mobile_tel -->
		
			<div class="mobile_contact">
				
				<a href="#footer_trigger">
					
				<img src="<?php bloginfo('template_directory');?>/images/ico-email.svg"/>
				
				</a>
		
			</div>
		
		</div><!-- mobile_header -->
		
		<div class="drop_down_overlay">
			
			
			
			<div class="overlay_left">
				
				<div class="menu_close"></div><!-- menu_close -->
				
				<div class="menu_col_one">
					
					<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
					
				</div><!-- col_one -->
				
				<div class="menu_col_two">
					
					
					
				</div><!-- col_two -->
				
			</div><!-- overlay_left -->
			
			<div class="overlay_right">
				
				<span class="menu_form_title"><?php the_field( 'get_started_verbiage','option'); ?></span><!-- menu_form_title -->
				
				<div class="menu_form_wrapper">
				
					<?php gravity_form(2, false, false, false, '', true, 1222); ?>
					
					<span class="required"><span>*</span>Required</span><!-- required -->
				
				</div><!-- menu_form_wrapper -->
				
			</div><!-- overlay_right -->
			
		</div><!-- drop_down_overlay -->
	
	</div><!-- drop_down_wrapper -->
	
	
	
	<div class="fixed_menu_wrapper">
		
		<div class="fixed_menu">
	
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
				
			<span class="menu_title">Menu</span><!-- menu_title -->
		
		</div><!-- fixed_menu -->
		
		<div class="fixed_email">
			
			<a class="" href="#footer_trigger">
			
				<img src="<?php bloginfo('template_directory');?>/images/ico-email.svg"/>
			
			</a>
			
		</div><!-- fixed_email -->
		
	</div><!-- fixed_menu_wrapper -->


			