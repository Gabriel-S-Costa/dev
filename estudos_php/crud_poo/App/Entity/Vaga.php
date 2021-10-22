<?php

namespace App\Entity;

use App\Db\Database;
use PDO;

class Vaga 
{
   /**
    * Identificador unico da Vaga
    * @var integer
    */
   public $id;

   /**
    * Titulo da vaga
    * @var string
    */
   public $titulo; 

   /**
    * Descricao da vaga (pode conter html)
    * @var string
    */
   public $descricao;

   /**
    * Defini se a vaga esta ativa
    * @var boolean
    */
   public $ativo;

   /**
    * Data de publicacao da vaga
    * @var string
    */
   public $data;


   public function cadastrar()
   {
      // definir a data
      $this->data = date('Y-m-d H:i:s');

		$arr = [
			'titulo'    => $this->titulo,
			'descricao' => $this->descricao,
			'ativo'     => $this->ativo, 
			'data'      => $this->data
		];

      // inserir a vaga no banco 
      $objDataBase = new Database('vagas');      
      $this->id = $objDataBase->insert($arr);

      // retornar sucesso
      return true;
   }

   public function atualizar()
   {
      $arr = [
         'titulo'    => $this->titulo,
			'descricao' => $this->descricao,
			'ativo'     => $this->ativo, 
      ];

      $objDataBase = new Database('vagas');
      $objDataBase->update($arr, "id = {$this->id}");
   }

   public function excluir()
   {
      $objDataBase = new Database('vagas');
      $objDataBase->delete("id = {$this->id}");
   }

   /**
    * Metodo responsavel por obter as vagas cadastradas do banco de dados
    *
    * @param string $where
    * @param string $order
    * @param string $limit
    * @return array
    */
   public static function getVagas(string $where = null, string $order = null, string $limit = null)
   {
      $bd = new Database('vagas');
      return $bd->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
   }

   public static function getVaga($id = null) 
   {
      $bd = new Database('vagas');
      return $bd->select("id = {$id}")->fetchObject(self::class);
   }
}
