<?php

namespace App\Theme;

class ThemeOptions
{
	public function __construct()
	{	
		add_action( 'admin_menu', array($this, 'addOptionsPage') );
		add_action( 'init', array($this, 'unregisterTags') );
	}

	public function addOptionsPage()
	{
		if (!function_exists('acf_add_options_page')) {
			return false;
		}
		
		$themeOptionsCapability = 'administrator';
		$themeOptionsParent = 'themes.php';

		global $submenu;
		
		$submenu[$themeOptionsParent][] = array( 
			'', 
			'read', 
			'', 
			'', 
			'wp-menu-separator'
		);

		acf_add_options_sub_page(array(
			'page_title'    => __('Temainställningar', 'halland'),
			'menu_title'    => __('Temainställningar', 'halland'),
			'parent_slug'   => $themeOptionsParent,
			'capability'    => $themeOptionsCapability,
			'redirect'      => false
		));
	}

	/**
	 * Unregister tags from the theme
	 * @return void
	 */
	public function unregisterTags()
	{	
		$show_tags = get_field('show_tags', 'options');

		if ($show_tags === false) {
			return false;
		}

		unregister_taxonomy_for_object_type( 'post_tag', 'post' );
	}
}
