<?php

namespace App\Controllers\Traits;

use App\Theme\NavigationTree;

trait NavSidebar
{
	/**
	 * Returns a tree of pages
	 * @return array
	 */
	public function navSidebar()
    { 
        global $post;

        if (!is_a($post, 'WP_Post')) {
			return;
		}

        $ancestors = get_post_ancestors($post->ID);

        if (count($ancestors) <= 0) {
            return false;
        }

        $parentID = $ancestors[count($ancestors) - 1];
		$pages = get_pages(['child_of' => $parentID]);

    	$navigationTree = new NavigationTree;

	 	return $navigationTree->getNavigationTree($pages, $parentID);
	}
}


