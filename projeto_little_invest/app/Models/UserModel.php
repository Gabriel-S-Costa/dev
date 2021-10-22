<?php namespace App\Models;

use CodeIgniter\Model;

    class UserModel
    {

    	public function testar(){

    		$db = \Config\Database::connect('default');
			$query = $db->query('SELECT * FROM conteudo');
			$results = $query->getResult();

    		return $results;

    	}


    }

	/*
	------------------------------------------------/
	$db = \Config\Database::connect('default');     |
	$query = $db->query('SELECT * FROM conteudo');  |
	$results = $query->getResult();                 |
	------------------------------------------------/
	Também pode ser utilizado:                      |
	$query->getResult();                            |
	$query->getResultArray();                       |
	$query->getRowArray();                          |
	------------------------------------------------/
	Exemplos úteis:

	$query = $db->query('SELECT * FROM conteudo')->getResult();

	$query = $db->table('mytable')->get();
	# Produces: SELECT * FROM mytable

	$query = $db->table('mytable')->getWhere(['id' => $id], $limit, $offset);
	# Produces: SELECT * FROM mytable where 'id' = $id limit $limit

	$query = $db->table('mytable')->select('title, content, date')->get();
	# Produces: SELECT title, content, date FROM mytable

   */