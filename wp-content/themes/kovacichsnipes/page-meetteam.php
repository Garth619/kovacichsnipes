<?php 
	
	/* Template Name: Meet the Team */
	
	get_header(); ?>
	
	<div class="int_main one_col">
		
		<h1 class="internal_header_mount"><?php the_title();?></h1><!-- internal_header_mount -->
		
		<div class="team_intro_page">
			
			<div class="team_intro_content">
				
				<p><?php the_field( 'attorney_intro' ); ?></p>
				
			</div><!-- team_intro_content -->
			
		</div><!-- team_intro_page -->
		
		<div class="meet_the_team">
			
			
			
			<?php $posts = get_field('attorney_directory');
			
			if( $posts ): ?>
			   
			    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			        <?php setup_postdata($post); ?>
			        
			        
			        <div class="single_att_wrapper">
				
								<a href="<?php the_permalink();?>">
				
									<div class="single_att_inner">
						
										<div class="single_att_overlay"></div><!-- single_att_overlay -->
										
										<?php $profile_image = get_field( 'profile_image' ); ?>
										
										<?php if ( $profile_image ) : ?>
										
											<img src="<?php echo $profile_image['url']; ?>" alt="<?php echo $profile_image['alt']; ?>" />
											
											<?php else:?>
											
											<img src="<?php bloginfo('template_directory');?>/images/placeholder.jpg"/>
										
										<?php endif; ?>
					
									</div><!-- single_att_inner -->
					
									<span class="single_att_title"><?php the_title();?></span><!-- single_att_title -->
					
									<span class="single_att_position"><?php the_field( 'profile_position_title' ); ?></span><!-- single_att_position -->
				
								</a>
				
							</div><!-- single_att_wrapper -->
			        
			        
			      <?php endforeach; ?>
			    
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>			
			
			
		</div><!-- meet_the_team -->
		
		
		
		
	</div><!-- int_main -->


<?php get_footer(); ?>



	

