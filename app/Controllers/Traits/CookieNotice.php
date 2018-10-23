<?php

namespace App\Controllers\Traits;

trait CookieNotice
{
	/**
	 * Returns cookie notice from Advanced Custom Fields
	 * @return array
	 */
	public function cookieNotice()
	{
		$cookieName = 'cookie_notice_accepted';

		if (!isset($_COOKIE[$cookieName])) {
			$cookie_notice['message'] = get_field('cookies_message', 'options');
			$cookie_notice['button'] = get_field('cookies_button', 'options');
			return $cookie_notice;
		}
	}
}