export default {
	init() {
		var $tabList = $('.js--tabs');
		var $tabs = $tabList.children();
		var $searchResults = $('.js--search-results');

		$tabs.on('click', function(e) {
			e.preventDefault()
			
			$tabs.removeClass('tab--active')
			$(this).addClass('tab--active')

			var collection = $(this).data('collection') 
			var results = $searchResults.children()

			results.removeClass('hidden')

			if (collection === 'all') {
				return false
			}

			results.filter(function(index) {
				return $(results[index]).data('collection') !== collection
			}).addClass('hidden')
		})
	},
	finalize() {
		// JavaScript to be fired on all pages, after page specific JS is fired
	},
};
