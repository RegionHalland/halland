<?php

namespace App\Traits;

trait NewsByCategory
{
	/**
	 * Returns posts from selected category
	 * @return string
	 */
	public function newsByCategory()
	{	
		$posts = get_posts(array(
			'numberposts' => 3,
			'category' => get_field('show_news_category')
		));

		return $posts;
	}
}