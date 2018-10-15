<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{	
	public function news()
	{
		return get_posts();
	}
}