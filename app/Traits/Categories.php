<?php

namespace App\Traits;

trait Categories
{
	/**
	 * Returns array of categories.
	 * @return array
	 */
	public function categories()
	{
		global $post;

		if (!is_a($post, 'WP_Post') || is_front_page()) {
			return;
		}

		$terms = get_the_terms($post->ID, 'category');
		$arr = array();

		foreach ($terms as $term) {
			// Don't return uncategorized
			if ($term->term_id === 1) {
				return false;
			}

			$arr[] = array(
				'name' => $term->name, 
				'link' => get_category_link( $term->term_id ), 
				'count' => $term->count
			);
		}

		return $arr;
	}
}
