<?php 
	
	/* Template Name: Video Center */
	
	get_header(); ?>
	
	<div class="int_main one_col">
		
		<h1 class="internal_header_mount"><?php the_title();?></h1><!-- internal_header_mount -->
		
		<div class="video_center">
			
			
			<?php if(get_field('wistis_videos')): ?>
			 
				<?php while(has_sub_field('wistis_videos')): ?>
			 
					<div class="single_video_wrapper">
				
						<div class="video_inner_wrapper">
					
							<div class="play_wrapper">
						
								<div class="play_inner">
							
									<?php echo file_get_contents("wp-content/themes/kovacichsnipes/images/new-play.svg"); ?>
							
								</div><!-- play_inner -->
						
							</div><!-- play_wrapper -->
					
							<div class="my_wistia wistia_embed wistia_async_<?php the_sub_field( 'wistia_id' ); ?> popover=true popoverContent=thumbnail">
						
						
						
							</div><!-- my_wistia -->
					
						</div><!-- video_inner_wrapper -->
				
						<span class="video_title"><?php the_sub_field( 'wistia_title' ); ?></span><!-- video_title -->
				
				</div><!-- single_video_wrapper -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
		
			
		</div><!-- video_center -->		
			
		
	</div><!-- int_main -->


<?php get_footer(); ?>



	

