<?php

namespace App;

use Sober\Controller\Controller;

class TemplateSectionLanding extends Controller
{
	use Traits\PageChildren;
	use Traits\NewsByCategory;

	public function topLinks()
	{
		return get_field('top_links');
	}

}
