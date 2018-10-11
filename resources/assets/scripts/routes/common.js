export default {
	init() {
		$( ".burger-menu__button" ).on( "click", function() {
			$(".burger-dropdown__container").toggle();
			$(".overlay").toggle();
		});
	},
	finalize() {
		// JavaScript to be fired on all pages, after page specific JS is fired
	},
};
