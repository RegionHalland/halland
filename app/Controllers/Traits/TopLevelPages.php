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

		return get_pages(array(
			'parent' => 0
		));
	}
}
