<?php

namespace App\Controllers\Traits;

trait PageChildren
{
	/**
	 * Returns array of children of the current page
	 * @return string
	 */
	public function pageChildren()
	{
		global $post;

		if (!is_a($post, 'WP_Post')) {
			return;
		}

		$args = array( 
			'child_of' => $post->ID,
			'parent' => $post->ID,
			'hierarchical' => 0,
			'sort_column' => 'menu_order', 
			'sort_order' => 'asc'
		);
		$pages = get_pages($args);

		foreach ($pages as $page) {

			if ($page->ID === $post->ID) {
				$page->is_current = true;
			}

			$page->acf_excerpt = get_field('excerpt', $page->ID);
			$page->url = get_page_link($page->ID);
		}

		return $pages;
	}
}
