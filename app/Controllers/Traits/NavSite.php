<?php

namespace App\Controllers\Traits;

use App\Theme\NavigationTree;

trait NavSite
{
	/**
	 * Get navigation tree for the site nav
	 * @return string
	 */
	public function navSite()
	{
		global $post;
		
		if (!is_a($post, 'WP_Post')) {
			return;
		}

		$frontpage = (int)get_option('page_on_front');
      	$pages = get_pages();

    	$navigationTree = new NavigationTree;

	 	return $navigationTree->getNavigationTree($pages);
	}
}