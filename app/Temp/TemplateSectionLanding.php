<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateSectionLanding extends Controller
{
	use Traits\PageChildren;

	public function topLinks()
	{
		return get_field('top_links');
	}

}
