<section id="section_one">
	
	<div class="section_one_left">
		
		
		
	</div><!-- section_one_left -->
	
	<div class="section_one_right">
		
		<span class="large_header">
		
			<?php the_field( 'section_one_banner_title' ); ?>
		
<!-- 		We take on the<br class="tablet_break"> most <strong>complex personal injury</strong> claims. -->
		
		</span><!-- large_header -->
		
		<a class="start_button" href="#footer_trigger"><?php the_field( 'start_free_consultation_verbiage' ); ?></a><!-- start_button -->
		
		<div class="sp_slideshow_outer">
		
		<div class="sp_slideshow">
			
			
			
			<?php if(get_field('sp_slider')): ?>
			 
				<?php while(has_sub_field('sp_slider')): ?>
			 
					
						<div class="sp_single_slide">
				
							<div class="sp_svg">
								
								
								<?php 
									
									$sp_svg = get_sub_field('svg_filename');
				
									echo file_get_contents('wp-content/themes/kovacichsnipes/images/' . $sp_svg);
								
								?>
				
							
							</div><!-- sp_svg -->
				
							<div class="sp_content_wrapper">
					
								<span class="sp_title"><span class="orangered number"><?php the_sub_field( 'title' ); ?></span><!-- sp_title -->
					
								<span class="sp_content"><?php the_sub_field( 'sp_content' ); ?></span><!-- sp_content -->
					
							</div><!-- sp_content -->
				
						</div><!-- sp_single_slide -->
					
					
					
					
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
	
			
		</div><!-- sp_slideshow -->
		
		</div><!-- sp_slideshow_outer -->
		
	</div><!-- section_one_right -->
	
</section><!-- section_one -->