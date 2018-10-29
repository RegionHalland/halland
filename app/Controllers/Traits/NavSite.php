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

        $ancestors = get_post_ancestors($post->ID);

        if (count($ancestors) <= 1) {
            return false;
        }

        $parentID = $ancestors[count($ancestors) - 2];

      	$pages = get_pages([
			'child_of' => $parentID
    	]);

	 	return self::buildTree($pages, $parentID, $post->ID);
	}

	/**
	 * Builds a tree from a flat array of pages
	 * https://stackoverflow.com/a/8841921
	 * @return array
	 */
	private function buildTree(array &$posts, $parentId = 0, $currentID = 0) {
	    $branch = array();

	    foreach ($posts as $post) {
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