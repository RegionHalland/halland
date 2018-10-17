<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{	
	use Traits\TopLevelPages;


	public function news()
	{
		return get_posts();
	}
}