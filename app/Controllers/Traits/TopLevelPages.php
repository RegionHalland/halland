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

		$frontpage = (int)get_option('page_on_front');

		$pages = get_pages(array(
			'parent' => 0
		));

		foreach ($pages as $i => $page) {
			if ($page->ID === $frontpage) {
				unset($pages[$i]);
				continue;
			}
		}

		return $pages;
	}
}
