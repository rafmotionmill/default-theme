/* Author: 

*/

/*----------dropmenu----------*/
/*some javascript that makes the dropdown work on iPad*/
	jQuery(document).ready(function() {
	
	jQuery("#mobile-menu ul").css({display: "none"}); // Opera Fix
	jQuery("#mobile-menu li").hover(function(){
			jQuery(this).find('ul:first').css({visibility: "visible",display: "none"}).show(268);
			},function(){
			jQuery(this).find('ul:first').css({visibility: "hidden"});
			});
	
	
	
	
	
	/* prepend menu icon */
	jQuery('#title-area').append('<div id="mobile-menu"></div>');
	 
	/* toggle nav */
	jQuery("#pull").on("click", function(){
	jQuery("div#mobile-menu ul.menu").slideToggle();
	jQuery(this).toggleClass("active");
	});
	
	});





















