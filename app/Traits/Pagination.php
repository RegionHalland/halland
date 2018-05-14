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
		$current_page = max(1, get_query_var('paged'));

		$previous_link = $current_page - 1;
		$next_link = $current_page + 1;

		if($previous_link < 0) {
				$previous_link = NULL;
		} else {
			$previous_link = get_pagenum_link($previous_link);
		}



		if($next_link > $total_pages) {
			$next_link = NULL;
		} else {
			$next_link = get_pagenum_link($next_link);
		}

		$pages = paginate_links(array(
	      'base' => get_pagenum_link(1) . '%_%',
	      'format' => 'sida/%#%',
	      'current' => $current_page,
	      'total' => $total_pages,
	      'prev_next' => false,
				'type'=> 'array',
	    ));


		$pagination = (object) array(
			'previous_label' => 'Föregående sida',
			'previous_link' => $previous_link,
			'pages' => $pages,
			'next_label' => 'Nästa sida',
			'next_link' => $next_link,
		);

		return $pagination;
	}
}
