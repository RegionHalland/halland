<?php

namespace App\Traits;

trait Tags
{
	/**
	 * Returns array of categories.
	 * @return array
	 */
	public function tags()
	{
		global $post;

		if (!is_a($post, 'WP_Post') || is_front_page()) {
			return;
		}

		$tags = get_tags($post->ID);
		$arr = array();

		foreach ($tags as $tag) {
			$arr[] = array(
				'name' => $tag->name, 
				'link' => get_tag_link( $tag->term_id ), 
			);
		}

		return $arr;
	}
}
