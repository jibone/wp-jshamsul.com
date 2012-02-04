/* Author: J Shamsul Bahri - @jibone

*/

jQuery(document).ready(function($) {
	
	// -- scroll to top function
	$("#scrolltotop").click(function(event) {
		event.preventDefault();
		$('html,body').animate({
			scrollTop: $(this.hash).offset().top
		}, 700);
	});
	
	// -- sticky navigation
	function sticky_relocate() {
		var window_top = $(window).scrollTop();
		var div_top = $("#sticky-anchor").offset().top;
		var div_bottom = $("#sticky-bottom").offset().top;
		
		if(window_top > div_top && window_top < div_bottom) {
			$('#sticky').addClass('stick');
		} else {
			$('#sticky').removeClass('stick');
		}
	}
	
	$(function() {
		$(window).scroll(sticky_relocate);
		sticky_relocate();
	});
	
});





















