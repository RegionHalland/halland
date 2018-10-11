<?php

namespace App\Theme;

class CustomPostTypes
{

	public function __construct()
	{
		// Define our custom post types
		$this->custom_post_types = array(
			"news"  => array(
				"name" => "Nyheter",
				"singular_name" => "Nyhet",
				'rewrite' => "nyheter",
				'has_archive' => true
			)
		);
		
		add_action('init', array($this, 'register_custom_post_types'));
		$this->populate_acf_alternatives();
	}

	/**
	 * Add available custom post types to the activated_custom_post_types field
	*/
	public function populate_acf_alternatives()
	{
		add_filter('acf/load_field/name=activated_custom_post_types', function($field) {	
			$field['choices'] = array();
			
			foreach ($this->custom_post_types as $key => $value) {
				$field['choices'][$key] = $value["name"];
			}
		
			return $field;
		});
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
					$post_name = $value;
					$post_label = $this->custom_post_types[$value]["name"];

					$args = array(
						'labels' => array(
							'name'			=> _x($post_label, 'post type general name', 'halland' ),
							'singular_name'	=> _x($post_label, 'post type singular name', 'halland' ),
							'menu_name'		=> _x($post_label, 'admin menu', 'halland' ),
						),
						'rewrite' => array('slug' => strtolower($post_label)),
						'public' => true,
						'taxonomies' => array('category'),
						
					);

					register_post_type($post_name, $args);
				}
			}
			
	    }
	}

}
