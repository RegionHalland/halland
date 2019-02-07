<?php

namespace App\Theme;

class Support
{
	public function __construct()
	{
		self::removeActions();
		self::addActions();
	}
	
	/**
	 * Remove unwanted actions
	 */
	private static function removeActions()
    {
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
    }

	/**
	 * Add actions
	 */
	private static function addActions()
	{
		add_action('after_setup_theme', '\App\Theme\Support::themeSupport');
	}

	public static function themeSupport()
	{
		/**
		* Enable post thumbnails
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
		add_theme_support('post-thumbnails');

		/**
		 * Enable HTML5 markup support
		 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
		 */
		add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

		/**
		 * Enable selective refresh for widgets in customizer
		 * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
		 */
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Use main stylesheet for visual editor
		 * @see resources/assets/styles/layouts/_tinymce.scss
		 */
		add_editor_style(get_template_directory_uri() . 'styles/main.css');
	}
}