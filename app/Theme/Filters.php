<?php

namespace App\Theme;

class Filters
{
	public function __construct()
	{
		// Sage already modifies the read more link, we removed it from filters. See https://codex.wordpress.org/Customizing_the_Read_More
		add_action('excerpt_more', array($this, 'update_excerpt_more'));

		// TinyMCE Plugins
		add_filter( 'mce_buttons', array($this, 'addTableButton') );
		add_filter( 'mce_external_plugins', array($this, 'addTablePlugin') );
	}

	/**
	 * Update excerpt
	 * @return void
	 */
	public function update_excerpt_more()
	{			
		return '';
	}

	/**
	 * Add Table button to TinyMCE Editor
	 * @return array
	 */
	public function addTableButton( $buttons )
	{
		array_push( $buttons, 'separator', 'table' );
		return $buttons;
	}

	/**
	 * Add Table Plugin to TinyMCE Editor
	 * @return array
	 */
	public function addTablePlugin( $plugins )
	{
		$plugins['table'] = 'https://unpkg.com/tinymce@latest/plugins/table/plugin.min.js';
		return $plugins;
	}
}
