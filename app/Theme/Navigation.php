<?php

namespace App\Theme;

class Navigation
{
	public function __construct()
	{
		$this->registerMenus();
		$this->getNavMenuItems();
		add_action('save_post', array($this, 'purgeTreeMenuTransient'), 10, 2);
	}

	/**
	 * Register menus.
	 * @return void
	 */
	public function registerMenus()
	{
		// Needs review: Should depend on if active is checked in theme options.
		$menus['main-menu'] = __('Main menu', 'halland');
		register_nav_menus($menus);
	}

	/**
	 * Find out which pages menus must be purged.
	 * @param int $postId The post id to empty for
	 */
	public function purgeTreeMenuTransient($postId, $post)
	{
		$this->purgeTreeMenuTransientForAncestors($post->post_parent);
	}

	/**
	 * Delete tree menu transient for ancestors of post id.
	 * @param int $postId The post id
	 * @return void
	 */
	public function purgeTreeMenuTransientForAncestors($postId)
	{
		// Get page ancestors
		$ancestors = get_post_ancestors($postId);
		$ancestors[] = $postId;

		// Remove front page from ancestors array
		$ancestors = array_reverse($ancestors);

		if ($ancestors[0] == get_option('page_on_front')) {
			unset($ancestors[0]);
		}

		$ancestors = array_values($ancestors);

		// Delete transient for page ancestors
		foreach ($ancestors as $postId) {
			$children = get_children(array(
				'post_parent' => $postId,
				'numberofposts' => -1,
				'post_type' => 'page',
			));

			foreach ($children as $child) {
				delete_transient('main_menu_' . $child->ID);
				delete_transient('mobile_menu_' . $child->ID);
				delete_transient('sidebar_menu_' . $child->ID);

				delete_transient('main_menu_' . $child->ID . '_loggedin');
				delete_transient('mobile_menu_' . $child->ID . '_loggedin');
				delete_transient('sidebar_menu_' . $child->ID . '_loggedin');
			}
		}
	}

	/**
	 * Get navigation tree sidebar menu
	 * @return string Menu markup
	 */
	public function getSidebarMenu()
	{
		global $post;

		if (!is_a($post, 'WP_Post')) {
			return;
		}

		$pages['current_page'] = $post;

		$args = array( 
			'child_of' => $post->ID, 
			'parent' => $post->ID,
			'hierarchical' => 0,
			'sort_column' => 'menu_order', 
			'sort_order' => 'asc'
		);
		$pages['page_children'] = get_pages($args);

		foreach ($pages['page_children'] as $page) {
			$page->url = get_page_link($page->ID);
		}

		return $pages;
	}

	/**
	 * Get array of wordpress nav menu items from a specified menu
	 * @return array
	 */
	public function getNavMenuItems($menu = 'main-menu') {
		global $post;

		if (!is_a($post, 'WP_Post')) {
			return;
		}

		if ($post->post_parent)	{
			$ancestors=get_post_ancestors($post->ID);
			$root=count($ancestors)-1;
			$parent = $ancestors[$root];
		} else {
			$parent = $post->ID;
		}

		$nav = wp_get_nav_menu_items($menu);

		foreach ($nav as $item) {
			$pageID = get_post_meta( $item->ID, '_menu_item_object_id', true );
			if ($pageID == $parent) {
				$item->is_current = true;
			}
		}

		return $nav;
	}
}
