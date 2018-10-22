<?php

namespace App\Theme;

use Sunra\PhpSimple\HtmlDomParser;

class Filters
{
	public function __construct()
	{
		// Sage already modifies the read more link, we removed it from filters. See https://codex.wordpress.org/Customizing_the_Read_More
		add_action('excerpt_more', array($this, 'update_excerpt_more'));

		// TinyMCE Plugins
		add_filter( 'mce_buttons', array($this, 'add_table_button') );
		add_filter( 'mce_external_plugins', array($this, 'add_table_plugin') );
		
		// Content
		add_filter( 'the_content', array($this, 'auto_wrap_tables') );
		add_filter( 'the_content', array($this, 'add_id_to_headings') );

		// Archive title
		add_filter('get_the_archive_title', array($this, 'remove_archive_prefix'));
	}

	public function remove_archive_prefix($title)
	{	
		// We remove ”archive: ” prefix from title
		$new_title = explode(':', $title);

		if(!isset($new_title[1])) return;
		$new_title = $new_title[1];

		$title = trim($new_title);

		return "Arkiv - $title";
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
	public function add_table_button( $buttons )
	{
		array_push( $buttons, 'separator', 'table' );
		return $buttons;
	}

	/**
	 * Add Table Plugin to TinyMCE Editor
	 * @return array
	 */
	public function add_table_plugin( $plugins )
	{
		$plugins['table'] = 'https://unpkg.com/tinymce@latest/plugins/table/plugin.min.js';
		return $plugins;
	}

	/**
    * Wrap tables in div to prevent overflow.
    * @return object
    */
    function auto_wrap_tables( $content )
    {
        $content = HtmlDomParser::str_get_html($content);
        
        if ($content) {
            foreach ($content->find('table') as $element) 
                $element->outertext = '<div class="table-container">' . $element . '</div>';
        }

        return $content;
    }

	/**
    * Parses post content and adds slugified inner text of headings as ID on each heading
    * @return object
    */
    function add_id_to_headings( $content )
    {
        if (strlen($content) <= 0) {
            return;
        }

        $content = HtmlDomParser::str_get_html($content);
        
        foreach ($content->find('h2, h3, h4') as $element) {
            $slug = sanitize_title($element->innertext);
            $element->id = $slug;
        }

        return $content;
    }



}
