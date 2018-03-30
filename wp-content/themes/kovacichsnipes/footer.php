<footer id="footer_trigger">
	
	<div class="form_outer">
	
		<div class="form_inner">
		
			<span class="footer_title"><?php the_field( 'get_started_verbiage','option'); ?></span><!-- footer_title -->
		
			<span class="footer_description">There is absolutely no risk to you to talk to us about your case in a free consultation. There are no attorneys' fees unless we are able to successfully recover compensation on your behalf. </span><!-- footer_description -->
		
			<div class="form_wrapper">
			
				<?php gravity_form(1, false, false, false, '', true, 245); ?>
			
				<span class="required"><span>*</span>Required</span><!-- required -->
			
			</div><!-- form_wrapper -->
		
		</div><!-- form_inner -->
	
	</div><!-- form_outer -->
	
	<div class="footer_location">
		
		
		<span class="footer_goldline"></span><!-- footer_goldline -->
		
		<span class="firm_name"><?php the_field( 'firm_name',24); ?></span><!-- firm_name -->
		
		
		<a class="footer_adress" href="https://www.google.com/maps/place/Kovacich+Snipes,+P.C./@47.5087709,-111.2962268,17z/data=!4m13!1m7!3m6!1s0x5342378d9eda4aab:0x2a1872701e35bc32!2s725+3rd+Ave+N,+Great+Falls,+MT+59401!3b1!8m2!3d47.5087709!4d-111.2940381!3m4!1s0x5342378d9efd9693:0x7d3a0451238a6b43!8m2!3d47.508791!4d-111.294033" target="_blank">725 3rd Ave. North Great Falls, MT 59401</a><!-- footer_adress -->
		
		<a class="footer_phone" href="tel:<?php the_field( 'local_number',24); ?>"><?php the_field( 'local_number',24); ?></a><!-- footer_phone -->
		
		
		<ul class="social_links">
			
			<?php if(get_field('social_media',24)): ?>
			 
				<?php while(has_sub_field('social_media',24)): ?>
			 
					<li><a href="<?php the_sub_field( 'social_media_link'); ?>"><?php the_sub_field( 'social_media_title'); ?></a></li>
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</ul><!-- social_links -->
		
		
	</div><!-- footer_location -->
	
	
	<div class="copyright">
		
		<div class="copyright_inner">
			
			
				<ul class="copyright_left">
					
					<li>&copy; <?php echo date("Y"); ?> by Kovacich Snipes, P.C. All rights reserved.</li>
					
					
					<?php if(get_field('disclaimer_link','option')) { ?>
					
						<li><a href="<?php the_field( 'disclaimer_link','option'); ?>">Disclaimer</a></li>
					
					<?php } ?>
					
					<?php if(get_field('privacy_policy_link','option')) { ?>
					
						<li><a href="<?php the_field( 'privacy_policy_link','option'); ?>">Privacy Policy</a></li>
					
					<?php } ?>
					
				</ul><!-- copyright_left -->
				
				
				<a class="ilawyer" href="//ilawyermarketing.com" target="_blank">
				
					<img class="" src="<?php bloginfo('template_directory');?>/images/ico-ilawyer.svg"/>
				
				</a><!-- ilawyer -->
		
		</div><!-- copyright_inner -->
		
	</div><!-- copyright -->
	
</footer>


<?php if(is_page_template('page-contact.php')) { ?>


										<script>
                        var map;
                        function initMap() {
                            var myLatLng = {lat: 47.5090611, lng: -111.2981139};

                            map = new google.maps.Map(document.getElementById('googlemap'), {
                                center: myLatLng,
                                zoom:16,
                                scrollwheel:false,
                                mapTypeId: google.maps.MapTypeId.ROADMAP,
                                styles: [
                                    {
                                        "stylers": [
                                           { "saturation": -100 },
                                           { "lightness": 30 }
                                        ]
                                    },
                                    {
																			featureType: "poi",
																			elementType: "labels",
																			stylers: [
																				{ visibility: "off" }
																			]
    																}
																	]
																});
                            
                            
                            
															
                            

                            var image = '<?php bloginfo('template_directory');?>/images/pin.png';

                            var marker = new google.maps.Marker({
                                position: myLatLng,
                                map: map,
                                animation: google.maps.Animation.DROP,
                                icon: image
                            });
                        }
                    </script>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqGovw_sWeG307Tg20vOhhT93_vkZDCM4&callback=initMap" async defer></script>




<?php } ?>

<?php wp_footer();?>


</body>
</html>
