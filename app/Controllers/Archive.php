<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Archive extends Controller
{
	public function archive_posts() 
	{
		global $post;
		
		$args = array();
		if(isset($_GET["filter"]["category"])){
			$category_name = $_GET["filter"]["category"];
			$args = array(
				'category_name' => $category_name
			);
		}
		$args = array_merge(array('post_type' => $post->post_type), $args);

		// The Query
		$archive_posts = new \WP_Query( $args );
		return $archive_posts;
	}

	public function categories() 
	{
		return get_terms('category');
	}

	public function archive_link_url()
	{
		return get_post_type_archive_link(get_post_type());
	}
}
