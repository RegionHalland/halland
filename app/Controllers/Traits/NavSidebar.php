<?php

namespace App\Controllers\Traits;

trait NavSidebar
{
	/**
	 * Get navigation tree sidebar menu
	 * @return string Menu markup
	 */
	public function navSidebar()
	{
		global $post;

		if (!is_a($post, 'WP_Post')) {
			return;
		}

		$pages['current_page'] = $post;

		$args = array( 
			'child_of' => $post->ID, 
			'parent' => $post->ID,
			'hierarchical' => 0,
			'sort_column' => 'menu_order', 
			'sort_order' => 'asc'
		);
		$pages['page_children'] = get_pages($args);

		foreach ($pages['page_children'] as $page) {
			$page->url = get_page_link($page->ID);
		}

		return $pages;
	}
}

