<?php

namespace App\Controllers\Traits;

trait NavSidebar
{
	public function navSidebar()
    { 
        global $post;

        $ancestors = get_post_ancestors($post->ID);

        if (count($ancestors) <= 1) {
            return false;
        }

        $parentID = $ancestors[count($ancestors) - 2];

      	$pages = get_pages([
			'child_of' => $parentID
    	]);

	 	return self::buildTree($pages, $parentID);
	}

	private function buildTree(array &$elements, $parentId = 0) {
	    $branch = array();

	    foreach ($elements as $element) {
	        if ($element->post_parent == $parentId) {
	            $children = self::buildTree($elements, $element->ID);
	            if ($children) {
	                $element->children = $children;
	            }
	            $branch[$element->ID] = $element;
	            unset($elements[$element->ID]);
	        }
	    }

	    return $branch;
	}
}


