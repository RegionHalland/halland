<?php

namespace App;

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

		$archive_posts = get_posts($args);
		return $archive_posts;
	}
}
