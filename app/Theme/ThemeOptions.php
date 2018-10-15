<?php

namespace App\Theme;

class ThemeOptions
{
	public function __construct()
	{	
		add_action( 'admin_menu', array($this, 'addOptionsPage') );
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
}
