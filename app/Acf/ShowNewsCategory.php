<?php

namespace App\Acf;

class ShowNewsCategory
{
	public function __construct()
	{
		/**
		 * Add news category to the show_news_category field
		 */
		add_filter('acf/load_field/name=show_news_category', function($field) {	

			$field['choices'] = array();
			
			$categories = get_categories();
			
			foreach ($categories as $category) {
				$field['choices'][ $category->term_ID ] = $category->name;
			}

			//var_dump($field);
		
			return $field;
		});
	}
}

