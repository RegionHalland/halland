<?php

namespace App\Theme;

class Sidebars
{
	public function __construct()
	{
		add_action('widgets_init', array($this, 'register'));
	}

	public function register()
	{
		$config = [
			'before_widget' => '<section class="widget %1$s %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>'
		];

		// Left sidebar
		register_sidebar([
			'name'          => __('Left', 'halland'),
			'id'            => 'sidebar-left'
		] + $config);

		// Right sidebar
		register_sidebar([
			'name'          => __('Right', 'halland'),
			'id'            => 'sidebar-right'
		] + $config);

		// Article Bottom sidebar
		register_sidebar([
			'name'          => __('Article Bottom', 'halland'),
			'id'            => 'sidebar-article-bottom'
		] + $config);
	}
}
