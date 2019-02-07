<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateSectionLanding extends Controller
{
	use Traits\PageChildren;

	public function topLinks()
	{
		return get_field('top_links');
	}

	public function news_category()
	{
		if(!get_field('show_news')) return null;
		$categories = get_field('news_categories');
		if(!is_array($categories)) return null;

		return get_term($categories[0]);
	}

	public function news()
	{
		global $post;

		if(!get_field('show_news')) return array();
		$category_ids = get_field('news_categories');
		$tax_query = null;
		if($category_ids){
			$tax_query = array(
				array(
					'taxonomy' => 'category',
					'field'    => 'term_id',
					'terms'    => $category_ids
				)
			);
		}

		$args = array(
			'post_type' => 'news',
			'posts_per_page' => 3,
			'tax_query' => $tax_query
		);

		// The Query
		$news = new \WP_Query( $args );
		
		return $news;
	}

}
