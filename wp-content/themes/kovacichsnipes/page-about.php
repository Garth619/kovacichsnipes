<?php 
	
	/* Template Name: About */
	
	get_header(); ?>
	
	<?php get_template_part( 'banner', 'about' ); ?>
	
	<div class="int_main about_outer">
		
		
		<div id="about_page_wrapper_trigger" class="about_page_wrapper">
			
			
			<span class="about_page_goldline"></span><!-- about_page_goldline -->
			
			<h1 class="about_title">About the Firm</h1><!-- about_title -->
			
			
			<div class="about_page_content_wrapper">
				
				<div class="about_page_image">
					
					
					
					<div class="about_page_image_inner">
						
						<div class="about_image_slider">
						
						<div class="about_page_single_slide">
						
							<?php $about_profile_image = get_field( 'about_profile_image' ); ?>
							
							<img src="<?php echo $about_profile_image['url']; ?>" alt="<?php echo $about_profile_image['alt']; ?>" />
						
						</div><!-- about_page_single_slide -->
						
						<div class="about_page_single_slide">
						
							<?php $about_profile_image = get_field( 'about_profile_image' ); ?>
							
							<img src="<?php echo $about_profile_image['url']; ?>" alt="<?php echo $about_profile_image['alt']; ?>" />
						
						</div><!-- about_page_single_slide -->
						
						<div class="about_page_single_slide">
						
							<?php $about_profile_image = get_field( 'about_profile_image' ); ?>
							
							<img src="<?php echo $about_profile_image['url']; ?>" alt="<?php echo $about_profile_image['alt']; ?>" />
						
						</div><!-- about_page_single_slide -->
						
						<div class="about_page_single_slide">
						
							<?php $about_profile_image = get_field( 'about_profile_image' ); ?>
							
							<img src="<?php echo $about_profile_image['url']; ?>" alt="<?php echo $about_profile_image['alt']; ?>" />
						
						</div><!-- about_page_single_slide -->
						
						<div class="about_page_single_slide">
						
							<?php $about_profile_image = get_field( 'about_profile_image' ); ?>
							
							<img src="<?php echo $about_profile_image['url']; ?>" alt="<?php echo $about_profile_image['alt']; ?>" />
						
						</div><!-- about_page_single_slide -->
					
						
					
					<div class="about_peace">
						
						<?php echo file_get_contents("wp-content/themes/kovacichsnipes/images/new-peace.svg"); ?>
						
					</div><!-- about_peace -->
					
					</div><!-- about_image_slider -->
					
					</div><!-- about_page_inner -->
					
					<blockquote><?php the_field( 'about_sidenote' ); ?></blockquote>
					
				</div><!-- about_page_image -->
				
				<div class="about_page_content content">
					
					
					<blockquote><?php the_field( 'about_blockquote' ); ?></blockquote>
					
					
					<div class="about_page_col">
						
						<span class="about_page_blockquote"><?php the_field( 'about_sidenote' ); ?></span><!-- about_page_blockquote -->
						
						<?php the_field( 'about_col_one' ); ?>
						
					</div><!-- about_page_col -->
					
					
					<div class="about_page_col">
						
						<?php the_field( 'about_col_two' ); ?>
						
					</div><!-- about_page_col -->
					
				</div><!-- about_page_content -->
				
			</div><!-- about_page_content_wrapper -->
			
			
			<div class="about_page_slider_section">
				
				<span class="about_page_awards">Awards</span><!-- about_page_awards -->
				
				<div class="about_page_slider">
					
					
					<?php if(get_field('about_logos')): ?>
					 
						<?php while(has_sub_field('about_logos')): ?>
						
						
								<div class="about_page_single_slide">
									
									<?php $image = get_sub_field( 'image' ); ?>
						
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						
								</div><!-- about_page_single_slide -->
							
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
					
				</div><!-- about_page_slider -->
				
			</div><!-- about_page_slider_section -->
			
		</div><!-- about_page_wrapper -->
		
		
		
	</div><!-- int_main -->


<?php get_footer(); ?>



	

