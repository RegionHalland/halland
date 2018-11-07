export default {
	init() {
		var $tabList = $('.js--tabs');
		var $tabs = $tabList.children();
		var $searchResults = $('.js--search-results');

		$tabs.on('click', function(e) {
			e.preventDefault()
			
			$tabs.removeClass('tab--active')
			$(this).addClass('tab--active')

			var category = $(this).data('category') 
			var results = $searchResults.children()

			results.removeClass('hidden')

			if (category === 'all') {
				return false
			}

			results.filter(function(index) {
				return $(results[index]).data('category') !== category
			}).addClass('hidden')
		})
	},
	finalize() {
		// JavaScript to be fired on all pages, after page specific JS is fired
	},
};
