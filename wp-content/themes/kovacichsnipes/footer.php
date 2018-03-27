<footer id="footer_trigger">
	
	<div class="form_outer">
	
		<div class="form_inner">
		
			<span class="footer_title">Get Started for Free</span><!-- footer_title -->
		
			<span class="footer_description">There is absolutely no risk to you to talk to us about your case in a free consultation. There are no attorneys' fees unless we are able to successfully recover compensation on your behalf. </span><!-- footer_description -->
		
			<div class="form_wrapper">
			
				<?php gravity_form(1, false, false, false, '', true, 245); ?>
			
				<span class="required"><span>*</span>Required</span><!-- required -->
			
			</div><!-- form_wrapper -->
		
		</div><!-- form_inner -->
	
	</div><!-- form_outer -->
	
	<div class="footer_location">
		
		
		<span class="footer_goldline"></span><!-- footer_goldline -->
		
		<span class="firm_name">Kovacich Snipes</span><!-- firm_name -->
		
		
		<a class="footer_adress" href="">725 3rd Ave. North Great Falls, MT 59401</a><!-- footer_adress -->
		
		<a class="footer_phone" href="tel;(406) 564-1743">(406) 564-1743</a><!-- footer_phone -->
		
		
		<ul class="social_links">
			
			<li><a href="">Google+</a></li>
			<li><a href="">Facebook</a></li>
			<li><a href="">Linkedin</a></li>
			
		</ul><!-- social_links -->
		
		
	</div><!-- footer_location -->
	
	
	<div class="copyright">
		
		<div class="copyright_inner">
			
			
				<ul class="copyright_left">
					
					<li>&copy; <?php echo date("Y"); ?> by Kovacich Snipes, P.C. All rights reserved.</li>
					<li><a href="">Disclaimer</a></li>
					<li><a href="">Privacy Policy</a></li>
					
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
