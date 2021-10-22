<?php 

namespace App\Controllers;

use App\Controllers\BaseController as BaseController;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			"head"=>[
				'title'=>"Little Invest"
			], 
			"footer"=>[
				'footer_desc'=>"Little Invest 1999 - ".date('Y')." - Todos os direitos reservados"
			]
		];
		load_page('pages/inicio', 'main', $data);
	}

}

/*
--------------------------------------/
Requisições HTTP:                     |
$this->request->getPost();            |
$this->request->getServer();          |
$this->request->getGet();             |
------------------------------------  /
Função load_page:                     |
(Checar arquivo Common.php dentro     |
da pasta 'app')                       |
                                      |
É uma função customizada para chamar  |
tanto a view quanto a structure;      |
                                      |
View normal: 						  |
	"echo view('pagina');"			  |
 									  |
Função load_page:					  |
load_page('pagina_da_view', 'tipo');  |
load_page('welcome_message', 'main'); |
load_page('pg', 'main', $variavel);   |
--------------------------------------/

$data['header']  = 'Este dado vai para a header!';
$data['content'] = 'Este dado vai para a content!';
$data['footer']  = 'Este dado vai para o footer!';

load_page('welcome_message', 'main', $data);

--------------------------------------/

Configurar CodeIgniter4:
	-Acessar app/Config/App.php e mudar a url do site;
	-Acessar app/Config/Database.php e adicionar o banco de dados;

*/