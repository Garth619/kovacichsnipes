jQuery(document).ready(function($){function e(e,i,n,t,o,l){var s=new Waypoint({element:document.getElementById(e),handler:function(e){"down"===e?(jQuery(i).addClass(n),"function"==typeof o&&o.call()):l&&(jQuery(i).removeClass(n),"function"==typeof o&&o.call())},offset:t})}function i(){if(jQuery(window).width()<1450){var e=$(".col_three").html();$(e).appendTo(".col_one"),$(".col_three").empty()}}e("section_two","#section_two","visible",300,null,!0),e("sec_two_mountain_trig","#sec_two_mountain_trig","visible",400,null,!0),e("section_three","#section_three","visible",400,null,!0),e("section_four","#section_four","visible",400,null,!0),e("section_five","#section_five","visible",400,null,!0),e("section_six","#section_six","visible",400,null,!0),e("footer_trigger","#footer_trigger","visible",400,null,!0),i()});