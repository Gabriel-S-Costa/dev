<?php 

// $SI = 0;

// for ($i = 1; $i < 500; $i++) { 
//    if ($i % 2 == 1) {
//       if ($i % 3 == 0) {
//          echo $i.',';
//          $SI += $i;
//       }
//    }
// }

// echo "Total: {$SI}"; 

$i = 1;

// while ($i <= 10) {   
//    $res = 5 * $i;
//    echo "5 * {$i} = {$res} \n";
//    $i++;
// }

// do {
//    $res = 5 * $i;
//    echo "5 * {$i} = {$res} \n";
//    $i++;
// } while($i <= 10);

// for ($i=1; $i <= 10; $i++) { 
//    $res = 5 * $i;
//    echo "5 * {$i} = {$res} \n";
// }

// function fatorial(int $n) {
//    if ($n === 0) {
//       return 1;
//    } else {
//       return $n * fatorial($n-1);
//    }
// }

// $res = fatorial(2);
// echo $res;

// versão recursiva
// function fibonacci(int $n) {
//    if ($n <= 1) {
//       return $n;
//    }  
//    return fibonacci($n-1) + fibonacci($n-2);
// }

// $res = fibonacci(6);
// echo $res;

// function exibeImpar(int $pos) {
//    $arr = [1,2,4,5,3,9,11,7,12,13,15,443,8891];
   
//    if ($arr[$pos] % 2 == 1) {
//       return "Número impar na pos: {$pos} => {$arr[$pos]}";
//    } else {
//       return "Número par na pos: {$pos} => {$arr[$pos]}";
//    }
// }

// $res = exibeImpar(6);
// echo $res;
// function buscaImpares(array $arr) {
//    $i = 0;
//    while($i <= count($arr)-1) {
//       if ($arr[$i] % 2 == 1) {
//          $impares[] = $arr[$i];
//       } 
//       // else {
//       //    $pares[] = $arr[$i];
//       // } 
//       $i++; 
//    }

//    print_r($impares);
//    // print_r($pares);
// }

// $arr = [1,2,4,5,3,9,11,7,12,13,15,443,8891];
// buscaImpares($arr);

// function dobroTriplo(array $arr) {
//    $i = 0;
//    while($i <= count($arr)-1) {
//       if ($i % 2 == 1) {
//          $vetor[$i] = $arr[$i] * 3;
//       } else {
//          $vetor[$i] = $arr[$i] * 2;
//       }
//       $i++;
//    }
//    print_r($vetor);
// }

// $arr = [1,2,4,5,3,9,11,7,12,13,15,443,8891];
// dobroTriplo($arr);

function inverteVetor(array $arr) {
   $i = 0;
   $tot = count($arr);

   while ($i <= count($arr)-1) {
      $vetor[$tot-=1] = $arr[$i];
      $i++;
   }

   print_r($vetor);
}

$arr = [1,2,4,5,3,9,11,7,12,13,15,443];
inverteVetor($arr);

