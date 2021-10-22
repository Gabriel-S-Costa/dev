<?php

namespace App\Controllers;

use App\Models\ListsModel;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			"head" => [
				"title"=>"ToDo List"
			]
		];
		
		loadpage('home', 'main', $data);
	}
}
