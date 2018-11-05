<?php

namespace App\Controllers;

use GuzzleHttp\Client;
use Sober\Controller\Controller;

class Search extends Controller
{
	public function __construct()
	{
		/*if(isset($_GET["s"])){
			
			//var_dump($query);
			$this->search_me("asdasd");
		}*/
	}

	public function results()
	{
		$query = $_GET["s"];
		$client = new Client([
		    // Base URI is used with relative requests
		    'base_uri' => 'http://search.i3demo.findwise.com/rest/apps/demo/searchers/demo/',
		    // You can set any number of default request options.
		    'timeout'  => 2.0,
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

		//return $response;
	}
}
