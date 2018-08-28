import debounce from 'debounce';

export default {
	init() {
		// JavaScript to be fired on all pages

		// Adding sticky behaviour classes to non marked up tables

		// TODO: Set shadow individually if there are multiple tables

		// TODO: Handle width of sticky column based on content lenght & nowrap behaviour

		// TODO: Parse each cell and hide text longer than cutoff. Add close/expand-functionality. Is a class enough? 

		// TODO: WP uses TD instead of TH - should TH be removed for now? 

		

		var shadow = function() {

			const selectors = {
				TABLE_CONTAINER: ".table__sticky-column-container",
				FIRST_TD: ".article td:first-child",
				FRIST_TH: ".article th:first-child",
			};

			const modifiers = {
				STICKY_COLUMN_SHADOW: "table__sticky-column-shadow",
			};
			var cast = function() {
				var xWidthFull = $(selectors.TABLE_CONTAINER).get(0).scrollWidth;
				var xWidthVisible = Math.round($(selectors.TABLE_CONTAINER).innerWidth());
				if (xWidthFull > xWidthVisible) {
					$(selectors.FIRST_TD).addClass(modifiers.STICKY_COLUMN_SHADOW);
					$(selectors.FIRST_TH).addClass(modifiers.STICKY_COLUMN_SHADOW);
				} else {
					$(selectors.FIRST_TD).removeClass(modifiers.STICKY_COLUMN_SHADOW);
					$(selectors.FIRST_TH).removeClass(modifiers.STICKY_COLUMN_SHADOW);
				}
				return;
			}
			return {cast: cast}
		}();

		if ($(".article table")) {
			var $table = $(".article table");
			$(".article td:first-child")
				.addClass("table__sticky-column")
				.wrapInner("<span class='sticky-column__vertical-center'></span>");
			$(".article th:first-child")
				.addClass("table__sticky-column")
				.wrapInner("<span class='sticky-column__vertical-center'></span>");
			$table.wrap("<div style='position: relative'></div>");
			$table.wrap("<div class='table__sticky-column-container'></div>");
			shadow.cast();


			$(window).resize(debounce(() => {
				shadow.cast();
			}, 100))
		}
	},
	finalize() {
		// JavaScript to be fired on all pages, after page specific JS is fired
	},
};
	