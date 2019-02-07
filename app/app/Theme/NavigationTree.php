<?php

namespace App\Theme;

class NavigationTree
{   
    /**
     * Returns the tree
     * @param array $posts    Array of posts.
     * @param int   $parentId ID of the highest ancestor to build the tree from.
     * @return array
     */
    public function getNavigationTree(array &$posts, $parentId = 0)
    {
        global $post;
        
        if (!is_a($post, 'WP_Post')) {
            return;
        }

        $frontpage = (int)get_option('page_on_front');

        return self::build($posts, $parentId, $post->ID, $frontpage);
    }

    /**
     * Builds a tree from a flat array of pages
     * https://stackoverflow.com/a/28429487
     * @param array $posts     Array of posts.
     * @param int   $parentId  ID of the highest ancestor to build the tree from.
     * @param int   $currentId ID of the current post.
     * @param int   $frontpage ID of the sites frontpage.
     * @return array
     */
    private function build(array &$posts, $parentId = 0, $currentID = 0, $frontpage = 0) 
    {
        $branch = array();

        foreach ($posts as &$post) {
            // Set page active
            if ($currentID === $post->ID && !isset($post->active)) {
                $post->active = true;
            }

            if ($post->post_parent == $parentId) {
                $children = self::build($posts, $post->ID, $currentID);
                if ($children) {
                    $post->children = $children;
                }
                $branch[$post->ID] = $post;
                unset($post);
            }
        }

        return $branch;
    }
}