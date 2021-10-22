<?php 

// inicializa o curl
$curl = curl_init();

// não funciona se for um array associativo
$headers = [
   "authorization_token: ASjfoj2349ASklliNWE90529123MK",
   "Content-Type: application/json"
];

$post_data = [
   "name" => "Gabriel",
   "last_name" => "Costa"
];

/**
 *  define as configurações - jeito verboso
 *  curl_setopt($curl, CURLOPT_URL, "http://localhost/exercicio_curl/resource/api.php");
 *  curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
 *  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 */


// pode enviar em formato json ao invés de array 
$json = json_encode($post_data);

// define as configurações
curl_setopt_array($curl, [
   CURLOPT_URL            => "http://localhost/exercicio_curl/resource/api.php",
   CURLOPT_CUSTOMREQUEST  => 'POST',
   CURLOPT_RETURNTRANSFER => true, 
   CURLOPT_HTTPHEADER     => $headers, 
   CURLOPT_POSTFIELDS     => $json
]);

// executa a requisição
$response = curl_exec($curl);

// fecha a conexão
curl_close($curl);

// decodificando a resposta em json
echo $response;

// Não funciona ?? 
// $arr_resp = json_decode($response, true);  
// print_r($arr_resp);