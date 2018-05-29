<?php

namespace App\Traits;

trait Bloginfo
{
	/**
	 * Return the sites name
	 * @return string
	 */
	public function siteName()
	{
		return get_bloginfo('name');
	}

	/**
	 * Return the sites description or "slogan"
	 * @return string
	 */	
	public function siteDescription()
	{
		return get_bloginfo('description');
	}
}
