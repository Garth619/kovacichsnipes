<?php 
	
	/* Template Name: Testimonials */
	
	get_header(); ?>
	
	<div class="int_main one_col">
		
		<h1 class="internal_header_mount"><?php the_title();?></h1><!-- internal_header_mount -->
		
		<div class="testimonials_page_wrapper">
			
			
			
			<?php if(get_field('testimonials')): ?>
			 
				<?php while(has_sub_field('testimonials')): ?>
			 
					<div class="single_testi_page">
				
						<span class="testi_page_content"><?php the_sub_field( 'testimonial_content' ); ?></span><!-- testi_page_content -->
				
						<span class="test_page_name"><?php the_sub_field( 'testimonial_name' ); ?></span><!-- test_page_name -->
				
				
					</div><!-- single_testi_page -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
			
						
		</div><!-- testimonials_page_wrapper -->
		
		
		
	</div><!-- int_main -->



<?php get_footer(); ?>



	

