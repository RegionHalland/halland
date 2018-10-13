<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
	public function tist()
	{
		return 'from parent theme';
	}
	
	public function news()
	{
		return get_posts();
	}
}