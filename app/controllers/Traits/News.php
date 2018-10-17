<?php

namespace App\Controllers\Traits;

trait News
{
	/**
	 * Returns array of news.
	 * @return array
	 */
	public function news()
	{
		global $post;

		$args = array('post_type' => 'news');

		// The Query
		$news = new \WP_Query( $args );
		
		return $news;
	}
}