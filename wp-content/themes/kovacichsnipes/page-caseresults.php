<?php 
	
	/* Template Name: Case Results */
	
	get_header(); ?>
	
	<div class="int_main one_col">
		
		<h1 class="internal_header_mount"><?php the_title();?></h1><!-- internal_header_mount -->
		
		<div class="cr_intro_page">
			
			<span class="cr_intro"><?php the_field( 'case_results_intro_title' ); ?></span><!-- cr_intro -->
			
			<div class="cr_intro_content">
				
				<p><?php the_field( 'case_results_intro' ); ?></p>
				
			</div><!-- cr_intro_content -->
			
		</div><!-- cr_intro_page -->
		
		<div class="cr_page_wrapper">
			
			
			<?php if(get_field('case_results')): ?>
			 
				<?php while(has_sub_field('case_results')): ?>
			 
					<div class="single_int_cr">
				
				<div class="single_cr_inner_first_state">
				
					<span class="cr_int_amount"><?php the_sub_field( 'case_amount' ); ?></span><!-- amount_cr -->
			
					<span class="cr_int_title"><?php the_sub_field( 'case_type' ); ?></span><!-- cr_int_title -->
				
					<span class="cr_int_result"><?php the_sub_field( 'result' ); ?></span><!-- cr_int_result -->
				
				</div><!-- single_cr_inner_first_state -->
				
				<div class="single_cr_inner_second_state">
					
					<span class="cr_int_amount"><?php the_sub_field( 'case_amount' ); ?></span><!-- amount_cr -->
					
					<span class="cr_int_description"><?php the_sub_field( 'case_result_description' ); ?></span><!-- cr_int_description -->
					
				</div><!-- single_cr_inner_second_state -->
				
			</div><!-- single_int_cr -->

			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			

										
						
						
		</div><!-- cr_page_wrapper -->
		
	</div><!-- int_main -->


<?php get_footer(); ?>



	

