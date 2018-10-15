export default {
	init() {
		$( ".burger-menu__button, .overlay" ).on( "click", function() {
			$(".burger-dropdown__container").toggle();
			$(".overlay").toggle();
			$(".burger-menu__burger-icon").toggle();
			$(".burger-menu__close-icon").toggle();
		});
	},
	finalize() {
		// JavaScript to be fired on all pages, after page specific JS is fired
	},
};
