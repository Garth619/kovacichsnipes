<?php
	
	
/* Template Name: Profile */

get_header(); ?>
	
	
	
	<?php // get_template_part( 'banner', 'internal' ); ?>
	
	
	<div class="int_main">
		
		<div class="profile_wrapper">
		
		<div class="profile_img_wrapper profile_desktop">
			
			
			<?php $profile_image = get_field( 'profile_image' ); ?>
			
			<?php if ( $profile_image ) : ?>

				<img class="profile_page_img" src="<?php echo $profile_image['url']; ?>" alt="<?php echo $profile_image['alt']; ?>" />
				
				<?php else:?>
				
				<img src="<?php bloginfo('template_directory');?>/images/placeholder.jpg"/>
				
			<?php endif; ?>

			<?php echo file_get_contents("wp-content/themes/kovacichsnipes/images/new-peace.svg"); ?>
				
			</div><!-- profile_img_wrapper -->
		
		
		<div class="container content">
			
			
			
			<h1 class="int_intro"><?php the_title();?></h1><!-- int_intro -->
			
			<span class="profile_position"><?php the_field( 'profile_position_title' ); ?></span><!-- profile_position -->
			
			
			<div class="profile_img_wrapper profile_mobile">
				
				<img class="profile_page_img" src="<?php bloginfo('template_directory');?>/images/intl-profile-snipes.jpg"/>
				
				<?php echo file_get_contents("wp-content/themes/kovacichsnipes/images/new-peace.svg"); ?>
				
			</div><!-- profile_img_wrapper -->
			
			
			<?php the_field( 'profile_content' ); ?>
			
			
			<div class="accolades">
				
				<div class="accolades_col">
					
					
					<?php if(get_field('profile_accolades')): ?>
					 
						<?php while(has_sub_field('profile_accolades')): ?>
							
							<div class="single_accolade">
					 
							<span class="accolade_title"><?php the_sub_field( 'list_title' ); ?></span><!-- accolade_title -->
							
							
							<?php if(get_sub_field('list')): ?>
							 
							 	<ul>
							 	
								<?php while(has_sub_field('list')): ?>
							 
									<li><?php the_sub_field( 'single_bullet' ); ?></li>
							    
								<?php endwhile; ?>
								
							 	</ul>
							 
							<?php endif; ?>
							
							</div><!-- single_accolade -->
												    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					

				</div><!-- accolades_col -->
				
				
				<div class="accolades_col">
				
					<?php if(get_field('profile_accolades_column_2')): ?>
					 
						<?php while(has_sub_field('profile_accolades_column_2')): ?>
							
							<div class="single_accolade">
					 
							<span class="accolade_title"><?php the_sub_field( 'list_title' ); ?></span><!-- accolade_title -->
							
							
							<?php if(get_sub_field('list')): ?>
							 
							 	<ul>
							 	
								<?php while(has_sub_field('list')): ?>
							 
									<li><?php the_sub_field( 'single_bullet' ); ?></li>
							    
								<?php endwhile; ?>
								
							 	</ul>
							 
							<?php endif; ?>
							
							</div><!-- single_accolade -->
												    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					

				
				</div><!-- accolades_col -->
				
				
			</div><!-- accolades -->	
			
		</div><!-- container -->
		
		</div><!-- profile_wrapper -->
		
		
	</div><!-- int_main -->



<?php get_footer(); ?>





<?php //use get_template_part( 'loop', 'page' ) if needed ?>

	

