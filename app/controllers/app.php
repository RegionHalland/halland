<?php

namespace App;

use Sober\Controller\Controller;

class App extends Controller
{
	use Traits\CookieNotice;
	use Traits\Notices;
	use Traits\Breadcrumbs;
	use Traits\NavSidebar;
	use Traits\NavSite;
	use Traits\Comments;

	/**
	 * Return the main nav
	 * @return array
	 */
	// public function navSite()
	// {
	// 	$menu = new \App\Theme\Navigation();
	// 	$menu = $menu->getNavMenuItems('main-menu');
	// 	return $menu;
	// }
}
