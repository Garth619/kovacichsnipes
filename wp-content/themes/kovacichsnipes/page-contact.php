<?php 
	

/* Template Name: Contact */	
	
	
get_header(); ?>
	
	
	
	<?php // get_template_part( 'banner', 'internal' ); ?>
	
	
	<div class="int_main contact_outer">
	
		<div class="contact_left">
			
			<div id="googlemap"></div><!-- googlemap -->

		</div><!-- contact_left -->
		
		<div class="contact_right content">
			
			
			<div class="contact_right_inner">
			
				<h1 class="contact_intro"><?php the_title();?></h1>
			
				<span class="contact_description"><?php the_field( 'contact_description' ); ?></span><!-- contact_description -->
				
				<div class="contact_col_wrapper">
				
				<div class="contact_col">
				
					<span class="contact_subheader"><?php the_field( 'firm_name' ); ?></span><!-- contact_subheader -->
				
					<a class="contact_address" href="<?php the_field( 'address_link' ); ?>" target="_blank">
					
						<?php the_field( 'address' ); ?>
					
					</a><!-- contact_address -->
				
					<a class="get_directions" href="<?php the_field( 'address_link' ); ?>" target="_blank"><?php the_field( 'get_directions_verbiage' ); ?></a><!-- get_directions -->
				
				
					<span class="contact_subheader"><?php the_field( 'follow_us_verbiage' ); ?></span><!-- contact_subheader -->
				
					<ul class="contact_social">
						
						<?php if(get_field('social_media')): ?>
						 
							<?php while(has_sub_field('social_media')): ?>
						 
								<li><a href="<?php the_sub_field( 'social_media_link' ); ?>" target="_blank"><?php the_sub_field( 'social_media_title' ); ?></a></li>
						    
							<?php endwhile; ?>
						 
						<?php endif; ?>
						
				</ul>
				
				</div><!-- contact_col -->
				
				<div class="contact_col">
				
					<span class="contact_subheader"><?php the_field( 'toll_free_verbiage' ); ?></span><!-- contact_subheader -->
				
					<a class="contact_tel" href="tel:<?php the_field( 'toll_free_number' ); ?>"><?php the_field( 'toll_free_number' ); ?></a><!-- contact_tel -->
				
					<span class="contact_subheader"><?php the_field( 'phone_verbiage' ); ?></span><!-- contact_subheader -->
				
					<a class="contact_tel" href="tel:<?php the_field( 'local_number' ); ?>"><?php the_field( 'local_number' ); ?></a><!-- contact_tel -->
				
				</div><!-- contact_col -->
				
				</div><!-- contact_col_wrapper -->
			
			</div><!-- contact_right_inner -->
			
			
		</div><!-- contact_right -->
		
	</div><!-- int_main -->



<?php get_footer(); ?>



<?php //use get_template_part( 'loop', 'page' ) if needed ?>

	

