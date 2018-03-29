<section id="section_four">
	
	
	<?php if(get_field('case_results_slider_homepage')): ?>
	 
		<?php while(has_sub_field('case_results_slider_homepage')): ?>
	 
			<div class="single_result <?php the_sub_field( 'class_name' ); ?>">
		
				<div class="results_inner">
					
					<?php 
						
						$case_svg = get_sub_field( 'svg_filename' ); 
		
						echo file_get_contents("wp-content/themes/kovacichsnipes/images/" . $case_svg);
					
					?>
		
					<span class="amount"><?php the_sub_field( 'case_amount' ); ?></span><!-- amount -->
		
					<span class="case_type"><?php the_sub_field( 'case_type' ); ?></span><!-- case_type -->
		
					<span class="result_title"><?php the_sub_field( 'result' ); ?></span><!-- result_title -->
			
					<a class="view_more_button" href="<?php the_field( 'case_result_page_link' ); ?>">View More</a><!-- view_more_button -->
		
				</div><!-- results_inner -->
		
			</div><!-- single_result -->
	    
		<?php endwhile; ?>
	 
	<?php endif; ?>
	
	
		
		
	
</section><!-- section_four -->