<?php

namespace App\Controllers;

use GuzzleHttp\Client;
use Sober\Controller\Controller;

class Search extends Controller
{
	protected $SEARCH_API_URL = '';

	public function __construct()
	{
		// Add field to .env in root
		// SEARCH_API_URL=<URL to the search>
		if (!empty(env('SEARCH_API_URL'))) {
			$this->SEARCH_API_URL = env('SEARCH_API_URL');
		}
	}

	public function results()
	{
		$query = $_GET["s"];
		$client = new Client([
		    'base_uri' => $this->SEARCH_API_URL,
		    // You can set any number of default request options.
		    'timeout'  => 15.0,
		]);

		$response = $client->request('GET', '', [
			'query' => [
				'q' => $query,
				'hits' => 99,
			]
		]);

		$response_body = json_decode($response->getBody());

		return array(
			"hits" => $response_body->documentList->numberOfHits,
			"documents" => $response_body->documentList->documents
		);
	}
}
