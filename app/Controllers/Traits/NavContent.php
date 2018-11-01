<?php

namespace App\Controllers\Traits;

use Sunra\PhpSimple\HtmlDomParser;

trait NavContent
{
    public $headings = [];
    
    public function __construct()
    {
        add_filter( 'the_content', function($content) {
           return self::addIdToHeadings($content);
        });
    }

    /**
     * Parses post content and adds slugified inner text of headings as ID on each heading
     * @return object
     */
    private function addIdToHeadings( $content ) {
        
        if (strlen($content) <= 0) {
            return;
        }

        $content = HtmlDomParser::str_get_html($content);
        
        foreach ($content->find('h2, h3, h4') as $element) {
            $slug = sanitize_title($element->innertext);
            $element->id = $slug;
        }

        foreach ($content->find('*[style]') as $element) {
            $element->style = null;
        }

        return $content;
    }

    /**
     * Returns array of heading elements with tag, slug and content
     * @return array
     */
    public function contentNav()
    {
        global $post;

        if (!is_a($post, 'WP_Post')) {
            return;
        }

        if (strlen($post->post_content) <= 0) {
            return;
        }

        $content = HtmlDomParser::str_get_html($post->post_content);
        
        foreach ($content->find('h2, h3, h4') as $key => $element) {
            $this->headings[$key]['tag'] = $element->tag;
            $this->headings[$key]['slug'] = sanitize_title($element->innertext);
            $this->headings[$key]['content'] = $element->innertext;
        }
        
        $post_meta = get_post_meta($post->ID);

        if ( !isset($post_meta['modularity-modules']) ) {
            return $this->headings;
        };
        
        $sidebars = unserialize($post_meta['modularity-modules'][0]);
        
        foreach ($sidebars as $key => $moduleList) {
            if ($key === 'sidebar-article-bottom') {
                foreach ($moduleList as $module) {
                    $module = get_post($module['postid']);
                    array_push($this->headings, array(
                       'tag' => 'h2',
                       'slug' => sanitize_title($module->post_title),
                       'content' => $module->post_title
                    ));
                }
            }
        }

        return $this->headings;
        
    }
}