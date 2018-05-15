<?php

namespace App\Traits;

use Sunra\PhpSimple\HtmlDomParser;

trait NavContent
{
    public function __construct()
    {
        add_filter( 'the_content', array($this, 'addIdToHeadings'));
    }

    /**
     * Parses post content and adds slugified inner text of headings as ID on each heading
     * @return object
     */
    public function addIdToHeadings() {
        global $post;

        if (!is_a($post, 'WP_Post')) {
            return;
        }

        if (strlen($post->post_content) <= 0) {
            return;
        }

        $content = HtmlDomParser::str_get_html($post->post_content);
        
        foreach ($content->find('h2, h3, h4') as $element) {
            $slug = sanitize_title($element->innertext);
            $element->id = $slug;
        }

        return $content;
    }

    /**
     * Returns array of heading elements with tag, slug and content
     * @return array
     */
    public function contentNav() {
        global $post;

        if (!is_a($post, 'WP_Post')) {
            return;
        }

        if (strlen($post->post_content) <= 0) {
            return;
        }

        $content = HtmlDomParser::str_get_html($post->post_content);
        $headings = [];
        
        foreach ($content->find('h2, h3, h4') as $key => $element) {
            $headings[$key]['tag'] = $element->tag;
            $headings[$key]['slug'] = sanitize_title($element->innertext);
            $headings[$key]['content'] = $element->innertext;
        }

        return $headings;
    }
}