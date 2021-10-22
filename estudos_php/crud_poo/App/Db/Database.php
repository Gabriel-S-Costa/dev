<?php

namespace App\Db;

use PDO;
use PDOException;

class Database 
{
   const HOST = 'localhost';
   const NAME = 'bd_vagas_emprego';
   const USER = 'root';
   const PASS = '';

   private $table;
   private $connection; 

   /**
    * Definie a tabela na instancia da classe
    *
    * @param String $table
    */
   public function __construct(String $table = null) {
      $this->table = $table;
      $this->setConnection();
   }

   /**
    * Undocumented function
    *
    * @return void
    */
   private function setConnection()
   {
      try {

         $this->connection = new PDO("mysql:host=".self::HOST.";dbname=".self::NAME, self::USER, self::PASS);
         $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // config do PDO para lançar uma execessão

      } catch (PDOException $ex) {
         // nao enviar para o usuario o erro do banco 
         // envie a mensagem para o log do sistema e envie para o usuario uma mensagem mais amigavel
         die('Error' . $ex->getMessage()); 
      }
   }

   /**
    * Metodo responsavel por executar as querys dentro do banco de dados
    *
    * @param String $query
    * @param array $params
    * @return PDOStatement
    */
   protected function execute(string $query, array $params = [])
   {
      try {

         $statement = $this->connection->prepare($query);
         $statement->execute($params);

         return $statement;

      } catch (PDOException $ex) {
         // nao enviar para o usuario o erro do banco 
         // envie a mensagem para o log do sistema e envie para o usuario uma mensagem mais amigavel
         die('Error' . $ex->getMessage()); 
      }
   }

   /**
    * Método responsavel por inserir dados no banco
    *
    * @param array $values [ field => value]
    * @return integer id inserido
    */
   public function insert(array $values=[]) 
   {
      // dados da query
      $fields = array_keys($values);
      // insere em um array a quantidade de posições e quais os valores delas.
      $binds  = array_pad([], count($fields), '?');

      $query = "INSERT INTO " . $this->table . " (" . implode(',', $fields) . ") VALUES (" . implode(',', $binds) . ")";

      // executa o insert   
      $this->execute($query, array_values($values));

      // conexao fica com o ultimo id inserido
      return $this->connection->lastInsertId();
   }

   public function update(array $values=[], string $where="")
   {
      $fields = array_keys($values);
      
      $query = "UPDATE " . $this->table . " SET " . implode('=?,', $fields) . "=? WHERE " . $where;
      
      $this->execute($query, array_values($values));
      return true;
   }

   public function delete(string $where='')
   {
      $query = "DELETE FROM " . $this->table . " WHERE " . $where;
      $this->execute($query);
      return true;
   }

   /**
    * Metodo responsavel por executar uma consulta no banco
    *
    * @param string $where
    * @param string $order
    * @param string $limit
    * @param string $fields
    * @return PDOStatement
    */
   public function select(string $where = null, string $order = null, string $limit = null, string $fields = '*')
   {
      // dados da query
      $where = strlen($where) ? " WHERE " . $where : '';
      $order = strlen($order) ? " ORDER BY " . $order : '';
      $limit = strlen($limit) ? " LIMIT " . $limit : '';

      // monta a query
      $query = "SELECT {$fields} FROM {$this->table} {$where} {$order} {$limit}";

      // executa a query
      return $this->execute($query);
   }
}

