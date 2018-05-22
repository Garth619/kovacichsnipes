<section id="section_five">
	
	
	<div class="sec_five_inner">
		
		
		<span class="sec_five_intro"><?php the_field( 'section_five_blockquote' ); ?></span><!-- sec_five_intro -->
		
		<div class="sec_five_content_wrapper">
			
			
			<div class="sidenote_wrapper">
				
				<div class="badge_wrapper">
					
					<div class="badge_slider">
						
						<?php if(get_field('section_five_badges')): ?>
						 
							<?php while(has_sub_field('section_five_badges')): ?>
						 
								<div class="single_badge_slide">
							
									<?php $badge_image = get_sub_field( 'badge_image' ); ?>
		
									<?php if ( $badge_image ) { ?>
			
										<img src="<?php echo $badge_image['url']; ?>" alt="<?php echo $badge_image['alt']; ?>" />
		
									<?php } ?>
						
								</div><!-- single_badge_slide -->
						    
							<?php endwhile; ?>
						 
						<?php endif; ?>
						
						
					</div><!-- badge_slider -->
					
				</div><!-- badge_wrapper -->
			
				<span class="sidenote"><?php the_field( 'section_five_sidenote' ); ?></span><!-- sidenote -->
			
			</div><!-- sidenote_wrapper -->
			
			<div class="sec_five_content content">
				
				<div class="sec_five_col">
				
					<?php the_field( 'section_five_col_one' ); ?>
					
				</div>
					
					<div class="sec_five_col">
				
					<?php the_field( 'section_five_col_two' ); ?>
				
				</div>
				
			</div><!-- sec_five_content -->
			
		</div><!-- sec_five_content -->
		
		
	</div><!-- sec_five_inner -->
	
	
</section><!-- section_five -->