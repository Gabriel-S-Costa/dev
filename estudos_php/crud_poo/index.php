<?php 

require_once __DIR__ . '/vendor/autoload.php';

use App\Entity\Vaga;

$vagas = Vaga::getVagas();

// echo '<pre>';
// print_r($vagas);
// echo '</pre>';

include __DIR__ . '/Includes/header.php';
include __DIR__ . '/Includes/listagem.php';
include __DIR__ . '/Includes/footer.php';