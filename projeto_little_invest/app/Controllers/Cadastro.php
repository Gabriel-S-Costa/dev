<?php 
namespace App\Controllers;

use App\Controllers\BaseController as BaseController;

class Cadastro extends BaseController
{
   public function index()
   {
      $data = [
         "head"=>[
            "title"=>"Cadastro"
         ],
         "footer"=>[
				'footer_desc'=>"Little Invest 1999 - ".date('Y')." - Todos os direitos reservados"
			]
      ];
      load_page('pages/cadastro', 'main', $data);
   }

   public function cadastroRealizado()
   {
      $data = [
         'head'=>[
            'title'=>"Obrigado"
         ]
      ];
      load_page('pages/obrigado', 'main', $data);
   }

}
