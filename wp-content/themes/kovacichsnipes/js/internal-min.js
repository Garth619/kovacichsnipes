jQuery(document).ready(function($){function e(e,n,t,o,l,f){var u=new Waypoint({element:document.getElementById(e),handler:function(e){"down"===e?(jQuery(n).addClass(t),"function"==typeof l&&l.call()):f&&(jQuery(n).removeClass(t),"function"==typeof l&&l.call())},offset:o})}e("footer_trigger",".fixed_email","hide",600,null,!0)});