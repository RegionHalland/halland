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
		//$paged = $_GET["p"];
		$client = new Client([
		    'base_uri' => $this->SEARCH_API_URL,
		    // You can set any number of default request options.
		    'timeout'  => 15.0,
		]);

		$response = $client->request('GET', '', [
			'query' => [
				'q' => $query,
				'hits' => 50,
			]
		]);

		$response_body = json_decode($response->getBody());

		foreach ($response_body->vardgivarwebben->documents as $key => $vdoc) {
			$vdoc->category = "vgw";
		}
		foreach ($response_body->styrdadokument->documents as $key => $sdoc) {
			$sdoc->category = "std";
		}
		$all = array_merge($response_body->vardgivarwebben->documents, $response_body->styrdadokument->documents);

		return array(
			"all_documents" => $response_body->documents->documents,
			"vgw" => $response_body->vardgivarwebben->documents,
			"stats" => array(
				"all_hits" => $response_body->documents->numberOfHits,
				"vgw_hits" => $response_body->vardgivarwebben->numberOfHits,
				"std_hits" => $response_body->styrdadokument->numberOfHits
			)
		);
	}
}
