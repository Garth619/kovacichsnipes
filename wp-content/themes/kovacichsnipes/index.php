<?php get_header(); ?>


<?php get_template_part( 'banner', 'internal' ); ?>
	
	
	<div class="int_main two_column">
		
		
		<?php get_sidebar('blog'); ?>
		
		<div class="container content">
			
			
			<h1 class="int_intro">Blog</h1><!-- int_intro -->
			
			
			
			<div class="post_feed">
				
				
				
				<?php get_template_part( 'loop', 'index' );?>
								
								
			
			</div><!-- post_feed -->
			
						
		</div><!-- container -->
		
		
	</div><!-- int_main -->



<?php get_footer(); ?>

