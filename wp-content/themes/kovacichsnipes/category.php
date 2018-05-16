<?php get_header(); ?>


<?php get_template_part( 'banner', 'internal' ); ?>
	
	
	<div class="int_main two_column">
		
		
		<?php get_sidebar('blog'); ?>
		
		<div class="container content">
			
			
			<h1 class="int_intro"><?php printf( __( '%s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1><!-- int_intro -->
			
			
			<?php get_template_part( 'loop', 'index' ); ?>
								
								
		</div><!-- container -->
		
		
	</div><!-- int_main -->



<?php get_footer(); ?>



		



