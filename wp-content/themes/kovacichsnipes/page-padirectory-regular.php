<?php 
	
	/* Template Name: Pa Directory */
	
	get_header(); ?>
	
	<div class="int_main one_col">
		
		<h1 class="internal_header_mount"><?php the_title();?></h1><!-- internal_header_mount -->
		
		
		<div class="pa_directory_wrapper">
			
			
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
			
			
		</div><!-- pa_directory_wrapper -->
		
		
		
	</div><!-- int_main -->



<?php get_footer(); ?>



	

