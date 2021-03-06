

jQuery(document).ready(function($){
	
	
	
	
	  
   function createWaypoint (triggerElementId, animatedElement, className, offsetVal, functionName, reverse) {
                var waypoint = new Waypoint({
                    element: document.getElementById(triggerElementId),
                    handler: function(direction) {
                        if (direction === 'down') {
                            jQuery(animatedElement).addClass(className);

                            if(typeof functionName === 'function') {
                                functionName.call();
                            }
                        }

                        else {

                            if(reverse) {
                                jQuery(animatedElement).removeClass(className);

                                if(typeof functionName === 'function') {
                                    functionName.call();
                                }
                            }

                        }
                    },
                    offset: offsetVal
                    // Integer or percent
                    // 500 means when element is 500px from the top of the page, the event triggers
                    // 50% means when element is 50% from the top of the page, the event triggers
                });
            }

            //Waypoint Instance - Add Class To Element
            //Template -> createWaypoint("id-name", ".class-name", "class-to-be-added", offset-value, null, true);
            //Example -> createWaypoint("section-2", ".section-2-orange-dot", "section-2-orange-dot-active", 500, null, true);

            //Waypoint Instance - Call Function
            //Template -> createWaypoint("id-name", null, null, null, function-name, true);
            //Example -> createWaypoint("section-2", null, null, null, test, true);


						createWaypoint("footer_trigger", ".fixed_email", "hide", 600, null, true);
						
						// createWaypoint("about_page_wrapper_trigger", "#about_page_wrapper_trigger", "visible", 400, null, true);
						
					
 
  
  
  // case results hover
  
  

		
		var windowWidth = $(window).width();
	
	
	
		function checkCaseresults() {
	    
	    if (windowWidth < 1060) {
		    
		    
		    $('.single_int_cr').on('click', function(e) {
	  
			 		$(this).toggleClass('hover');	  
	  
				});
	
	
			}
	   	
	   	else {
		   	
		   	$('.single_int_cr').on('mouseenter', function(e) {
	  
			 		$(this).addClass('hover');	  
	  
				});
	
	
				$('.single_int_cr').on('mouseleave', function(e) {
	  
					$(this).removeClass('hover');	  
					
				});
	 			
	 		} 
	    
		};
		
	
	checkCaseresults();
	

		
	

	



}); // Document Ready

