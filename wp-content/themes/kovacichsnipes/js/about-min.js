jQuery(document).ready(function($){function e(e,n,t,a,o,r){var u=new Waypoint({element:document.getElementById(e),handler:function(e){"down"===e?(jQuery(n).addClass(t),"function"==typeof o&&o.call()):r&&(jQuery(n).removeClass(t),"function"==typeof o&&o.call())},offset:a})}e("about_page_wrapper_trigger","#about_page_wrapper_trigger","visible",400,null,!1)});