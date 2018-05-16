<?php

namespace App\Traits;

trait Pagination
{
	/**
	 * Returns the title of the current page
	 * @return string
	 */
	public function pagination()
	{

		global $wp_query;

		$total_pages = $wp_query->max_num_pages;


		if($total_pages < 2) {
			return;
		}

		$current_page = max(1, get_query_var('paged'));


		$previous = $current_page - 1;
		$next = $current_page + 1;

		if($previous <= 0) {
			$previous = NULL;
		} else {
			$previous = get_pagenum_link($previous);
		}

		if($next > $total_pages) {
			$next = NULL;
		} else {
			$next = get_pagenum_link($next);
		}

		$pagination = (object) array(
			'base' => get_pagenum_link().'page/',
			'previous' => $previous,
			'current' => $current_page,
			'total' => $total_pages,
			'next' => $next,
		);

		return $pagination;
	}
}
