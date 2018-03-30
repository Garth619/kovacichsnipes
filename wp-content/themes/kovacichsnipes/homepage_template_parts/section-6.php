<section id="section_six">
	
	
	
	<div class="sec_six_inner">
		
		<div class="buffalo_wrapper">
		
			<?php echo file_get_contents("wp-content/themes/kovacichsnipes/images/new-buffalo.svg"); ?>
		
		</div><!-- buffalo_wrapper -->
		
		<span class="sec_six_header"><?php the_field( 'section_six_title' ); ?></span><!-- sec_six_header -->
		
		<div class="sec_six_slides">
			
			
			
			<?php if(get_field('section_six_testimonials')): ?>
			 
				<?php while(has_sub_field('section_six_testimonials')): ?>
			 
					<div class="single_slide">
				
						<span class="testi_description"><?php the_sub_field( 'testimonial_content' ); ?></span><!-- testi_description -->
				
						<span class="client_name"><?php the_sub_field( 'client_name' ); ?></span><!-- client_name -->
				
					</div><!-- single_slide -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
			
			
			
		</div><!-- sec_six_slides -->
		
	</div><!-- sec_six_inner -->
	
	
	
</section><!-- section_six -->