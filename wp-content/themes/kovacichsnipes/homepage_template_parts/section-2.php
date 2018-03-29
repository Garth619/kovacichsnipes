<section id="section_two">
	
	<span class="gold_line"></span><!-- gold_line -->
	
	<h1 class="intro"><?php the_field( 'section_two_title' ); ?></h1>
	
	<div id="sec_two_mountain_trig" class="sec_two_content content">
		

		<div class="intro_block">
			
			
			<?php echo file_get_contents("wp-content/themes/kovacichsnipes/images/new-mountain2.svg"); ?>
			
			<span class="large_header"><?php the_field( 'section_two_large_header' ); ?></span><!-- large_header -->
			
			<span class="blockquote"><?php the_field( 'section_two_blockquote' ); ?></span><!-- blockquote -->
			
		</div><!-- intro_block -->
		
			
		<div class="col_one">
			
			<?php the_field( 'section_two_col_one' ); ?>
 
									
			</div><!-- col_one -->
			
			
			<div class="col_three">
				
				<div class="col_three_inner">
					
					<?php the_field( 'section_two_col_three' ); ?>
									
				</div><!-- col_three_inner -->
											
			</div><!-- col_three -->
		
		
	</div><!-- sec_two_content -->
	
</section><!-- section_two -->