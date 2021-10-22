<?php 

require_once __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Cadastrar vaga');

use App\Entity\Vaga;

$obVaga = new Vaga;   

if (isset($_POST['titulo'], $_POST['descricao'], $_POST['status'])) {

   $obVaga->titulo = $_POST['titulo'];
   $obVaga->descricao = $_POST['descricao'];
   $obVaga->ativo = $_POST['status'];

   $obVaga->cadastrar();

   header('location: index.php?s=success');
   exit();
}


include __DIR__ . '/Includes/header.php';
include __DIR__ . '/Includes/formulario.php';
include __DIR__ . '/Includes/footer.php';