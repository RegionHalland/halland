<?php

namespace App\Controllers\Traits;

trait topLevelPages
{
	/**
	 * Returns array of all the top level pages
	 * @return string
	 */
	public function topLevelPages()
	{
		global $post;

		if (!is_a($post, 'WP_Post')) {
			return;
		}

		// Get the highest ancestor of the current page
		if (is_page() && !is_front_page() && !$post->post_parent) {
			$top_page = $post->ID;
		}

		if (is_page() && $post->post_parent) {
			$ancestors = get_post_ancestors($post->ID);
			$top_page = array_values(array_slice($ancestors, -1))[0];
		}
		
		// Create pages array
		$pages = get_pages(array(
			'parent' => 0
		));

		$frontpage = (int)get_option('page_on_front');

		foreach ($pages as $i => $page) {
			if ($page->ID === $frontpage) {
				unset($pages[$i]);
				continue;
			}

			if (isset($top_page) && $top_page === $page->ID) {
				$page->active = true;
			}
		}

		return $pages;
	}
}
