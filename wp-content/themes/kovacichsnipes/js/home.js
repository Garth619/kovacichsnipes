
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


						
					createWaypoint("section_two", "#section_two", "visible", 300, null, true);
					
					createWaypoint("sec_two_mountain_trig", "#sec_two_mountain_trig", "visible", 400, null, true);
					
					
					createWaypoint("section_three", "#section_three", "visible", 400, null, true);
					
					createWaypoint("section_four", "#section_four", "visible", 400, null, true);
					
					createWaypoint("section_five", "#section_five", "visible", 400, null, true);
					
					createWaypoint("section_six", "#section_six", "visible", 400, null, true);
					
					
						createWaypoint("footer_trigger", "#footer_trigger", "visible", 400, null, true);


						
						
						
						 var resizeTimerInternal;
						 
						 	$(window).on('resize', function() {

						 		clearTimeout(resizeTimerInternal)

						 		resizeTimerInternal = setTimeout(function() {

        							
        							
/*
        							var lists2 = $(".bio-lists-2").html();
											
											$(lists2).prependTo(".bio-lists-1");
*/


        							
        							
        				
        				}, 1000)

    				});
						


}); // Document Ready

