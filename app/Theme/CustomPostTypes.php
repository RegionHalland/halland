<?php

namespace App\Theme;

class CustomPostTypes
{

	public function __construct()
	{
		// Define our custom post types
		$this->custom_post_types = array(
			// Nyheter 
			'news' => array(
				'labels' => array(
					'name' => _x('Nyheter', 'post type general name', 'halland' ),
					'singular_name' => _x('Nyhet', 'post type singular name', 'halland' ),
					'menu_name' => _x('Nyheter', 'admin menu', 'halland' ),
					'view_items' => _x('Se alla nyheter', 'halland' )
				),
				'rewrite' => array('slug' => 'nyheter'),
				'has_archive' => true,
				'public' => true,
				'taxonomies' => array('category'),
			),

			// Puffar
			'blurb' => array(
				'labels' => array(
					'name' => _x('Puffar', 'post type general name', 'halland' ),
					'singular_name' => _x('Puff', 'post type singular name', 'halland' ),
					'menu_name' => _x('Puffar', 'admin menu', 'halland' ),
				),
				'rewrite' => array('slug' => 'puffar'),
				'show_ui' => true,
				'has_archive' => false,
				'publicaly_queryable' => false,
				'public' => false,
				'query_var' => false,
				'menu_icon' => 'dashicons-megaphone',
				'supports' => array( 'title', 'thumbnail' )
			)
		);
		
		// Add available custom post types to the activated_custom_post_types field
		// Do it here because we need to pass the $field variable
		// https://www.advancedcustomfields.com/resources/dynamically-populate-a-select-fields-choices/
		add_filter('acf/load_field/name=activated_custom_post_types', function($field) {
			$field['choices'] = array();
				
			foreach ($this->custom_post_types as $key => $value) {
				$field['choices'][$key] = $value['labels']['name'];
			}

			return $field;
		});
		add_action('init', array($this, 'register_custom_post_types'));
	}

	/**
	 * Register chosen custom post types
	*/
	public function register_custom_post_types()
	{
		if (function_exists('get_field')) {
			$post_types_to_activate = get_field('activated_custom_post_types', 'option');
			
			if(isset($post_types_to_activate) && is_array($post_types_to_activate)) {
				foreach ($post_types_to_activate as $key => $value) {
					register_post_type($value, $this->custom_post_types[$value]);
				}
			}
			flush_rewrite_rules();
	    }
	}

}
