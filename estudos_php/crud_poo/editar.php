<?php 

require_once __DIR__ . '/vendor/autoload.php';

define('TITLE', 'Editar vaga');

use App\Entity\Vaga;

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
	header('location: index.php?s=error');
	exit();
} 

$id = $_GET['id'];
$obVaga = Vaga::getVaga($id);

if (!$obVaga instanceof Vaga) {
	header('location: index.php?s=error');
	exit();
}

if (isset($_POST['titulo'], $_POST['descricao'], $_POST['status'])) {

	$obVaga->titulo = $_POST['titulo'];
	$obVaga->descricao = $_POST['descricao'];
	$obVaga->ativo = $_POST['status'];

	$obVaga->atualizar();

	header('location: index.php?s=success');
	exit();
}

include __DIR__ . '/Includes/header.php';
include __DIR__ . '/Includes/formulario.php';
include __DIR__ . '/Includes/footer.php';