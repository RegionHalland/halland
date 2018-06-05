<?php

namespace App;

use Sober\Controller\Controller;

class App extends Controller
{
	use Traits\Bloginfo;
	use Traits\CookieNotice;
	use Traits\Notices;
	use Traits\Breadcrumbs;
	use Traits\NavSite;
}
