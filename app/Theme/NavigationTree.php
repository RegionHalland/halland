<?php

namespace App\Theme;

class NavigationTree
{
    public function __construct($args = array(), $parent = false)
    { 
        $pages = get_pages();
        return $this->sortPages($pages, 0);
    }

    public function sortPages($pages)
    {   
        $new = array();
        
        foreach ($pages as $page){
            $new[$page->post_parent][] = $page;
        }
        
        $tree = $this->createTree($new, $new[0]); // changed
    }

    public function createTree(&$pages, $parents) {
        $tree = array();

        foreach ($parents as $key => $parent) {
            
            if (isset($pages[$parent->ID])) {
                $parent->children = $pages[$parent->ID];
            }
            $tree[] = $parent;
        } 

        return $tree;
    }

    // public function createTree(&$list, $pages) {
    //     $tree = array();
    //     var_dump($pages);
    //     foreach ($pages as $key => $page) {
    //         if (!isset($list[$page->ID]) || gettype($list[$page->ID]) !== 'array') {
    //             return false;
    //         }

    //         if (isset($pages[$page->post_parent])) {
    //             $page['children'] = $this->createTree($list, $list[$page->ID]);
    //         }

    //         $tree[] = $page;
    //     } 
    //     return $tree;
    // }
    /**
     * Gets top level pages
     * @return void
     */
//     public function sortPages($pages, $parentId)
//     {   
//         $branch = array();

//         foreach ($pages as $page) {
//             if ($page->post_parent === $parentId) {
//                 $children = $this->sortPages( $pages, $page->ID );
//                 if ($pages) {
//                     $pages['wpse_children'] = $children;
//                 }
//                 $branch[$page->ID] = $page;
//                 unset( $page );
//             }
//         }   

//         return $branch;
//     }
}