<?php

namespace App\Controllers\Traits;

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

	 	return self::buildTree($pages, 0, $post->ID, $frontpage);
	}

	/**
	 * Builds a tree from a flat array of pages
	 * https://stackoverflow.com/a/8841921
	 * @return array
	 */
	private function buildTree(array &$posts, $parentId = 0, $currentID = 0, $frontpage = 0) {
	    $branch = array();

	    foreach ($posts as $post) {

			if ($post->ID === $frontpage) {
				break;
			}

	    	if ($currentID === $post->ID && !isset($post->active)) {
	    		$post->active = true;
	    	}

	        if ($post->post_parent == $parentId) {
	            $children = self::buildTree($posts, $post->ID, $currentID);
	            if ($children) {
	                $post->children = $children;
	            }
	            $branch[$post->ID] = $post;
	            unset($posts[$post->ID]);
	        }
	    }

	    return $branch;
	}
}