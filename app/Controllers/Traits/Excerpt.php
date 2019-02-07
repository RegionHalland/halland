<?php

namespace App\Controllers\Traits;

trait Excerpt
{
	/**
	 * Returns the excerpt field from a page or post
	 * @return string
	 */
	public function excerpt()
	{
		return get_field('excerpt');
	}
}
