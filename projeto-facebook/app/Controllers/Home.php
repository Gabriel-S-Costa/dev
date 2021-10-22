<?php

namespace App\Controllers;

use App\Controllers\BaseController as BaseController;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;

class Home extends BaseController
{
	public function index()
	{
		$fb = new Facebook([
			'app_id'=>'680134276040620',
			'app_secret' => '410c47b402ed9b108a87b562d19f52bd',
			'default_graph_version' => 'v5.7.0', 
			'default_access_token' => 'EAAJqlBnsR6wBAMeKbBtQ8ig8ZCPoaNosry9K9zq7B2jrBxddUgXDKoKmEGdvFITdCsztHY6bIZAANlZCHE3tZCaicQ1qyQ2ScCYsrkS2FZBrWXAOlo6qNKPc5ZBYmvGCLh03NCDV55ENdQLp2zca7ZB6OqrM6pZAClRUBhIDHKKQyT6kp2uJwSvuZBmCjxaaOiU0It97snEZBcZCyQpzXmupFu4ReyBW01ozZAc2On5JxXZCCogZDZD'
		]);		 

		$link_data = [
			'link'=> 'http://localhost:8080',
			'message'=> 'Anúncio de teste de anúncio para o facebook!!!!',
			''
		];
		

		try {
			$response = $fb->get('/me', 'EAAJqlBnsR6wBAMeKbBtQ8ig8ZCPoaNosry9K9zq7B2jrBxddUgXDKoKmEGdvFITdCsztHY6bIZAANlZCHE3tZCaicQ1qyQ2ScCYsrkS2FZBrWXAOlo6qNKPc5ZBYmvGCLh03NCDV55ENdQLp2zca7ZB6OqrM6pZAClRUBhIDHKKQyT6kp2uJwSvuZBmCjxaaOiU0It97snEZBcZCyQpzXmupFu4ReyBW01ozZAc2On5JxXZCCogZDZD');
		} catch (\Facebook\Exceptions\FacebookResponseException $e) {
			echo 'Graph retornou um erro: ' . $e->getMessage();
			exit();
		} catch (FacebookSDKException $e){
			echo 'Facebook SDK retornou um erro: ' . $e->getMessage();
			exit();
		}

		$graphNode = $response->getGraphNode();

		echo 'Postado por id: ' . $graphNode['id'];
		
		// echo '<pre>';
		// var_dump($fb);
		// echo '</pre>';

		return view('pages/teste_facebook');
	}
}
