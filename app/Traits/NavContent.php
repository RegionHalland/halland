
<?php

namespace App\Traits;

use Sunra\PhpSimple\HtmlDomParser;

trait NavContent
{
    public $headings = [];
    
    public function __construct()
    {
        add_filter('Modularity/Display/mod-linkgroup/Markup', function( $markup ) {
            $content = HtmlDomParser::str_get_html($markup);

            foreach ($content->find('h2, h3, h4') as $key => $element) {
                array_push($this->headings, array(
                    'tag' => $element->tag,
                    'slug' => sanitize_title($element->innertext),
                    'content' => $element->innertext
                ));
            }
            
        
            return $markup;
        });
        add_filter( 'the_content', array($this, 'addIdToHeadings'));
    }
    /**
     * Parses post content and adds slugified inner text of headings as ID on each heading
     * @return object
     */
    public function addIdToHeadings()
    {
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

        var_dump($this->headings);
        return $this->headings;
    }
}