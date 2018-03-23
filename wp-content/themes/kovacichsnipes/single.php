<?php get_header(); ?>


<?php get_template_part( 'banner', 'internal' ); ?>
	
	
	<div class="int_main two_column">
		
		
		<?php get_sidebar('blog'); ?>
		
		<div class="container content">
			
			
			<h1 class="int_intro"><?php the_title();?></h1><!-- int_intro -->
			
			
			<?php get_template_part( 'loop', 'single' ); ?>
								
								
		</div><!-- container -->
		
		
	</div><!-- int_main -->



<?php get_footer(); ?>






