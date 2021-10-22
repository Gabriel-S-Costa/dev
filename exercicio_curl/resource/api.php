<?php 

echo "Request mehtod: ";
print_r($_SERVER['REQUEST_METHOD']);

echo "\n\nRequest headers: \n";
$headers = getallheaders();
print_r($headers);

echo "\n\nRequest post data: \n";
$input = file_get_contents('php://input');
$array = json_decode($input, true);
$_POST = !empty($array) ? $array : $_POST;

// EXECUTA A REGRA DO NEGÓCIO DO SISTEMA E RETORNA UMA RESPOSTA

$response = [
   "status_code" => 200,
   "success" => 'Data saved with success'
];

echo json_encode($response);

