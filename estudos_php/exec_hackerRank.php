<?php 

function compareTriplets($a, $b) {
   // Write your code here 
   $bobPoints = 0;
   $alicePoints = 0;
   $i = 0;
   
   while ($i <= 2) {
      if ($a[$i] > $b[$i]) {
         $alicePoints += 1;
      }
      
      if ($b[$i] > $a[$i]) {
         $bobPoints += 1;
      }
      
      $i++;
   }
   
   $arr = [$alicePoints, $bobPoints];

   return $arr;
}

$a = [10, 12, 50];
$b = [20, 20, 10];

$result = compareTriplets($a, $b);

echo -1 ."\n". 1 ."\n". 1;

// var_dump($result);

die;

function diagonalDifference($arr) {
   // Write your code here
   print_r($arr);
   
   $primeiraDig = 0;
   $segundaDig = 0;
   
   // foreach($arr as $ch => $val) {
   //     foreach($val as $a => $v) {
   //         if ($ch === $a) {
   //             $primeiraDig += $v;
   //         }            
   //     }
   // }  
   
   for($i = 0; $i < count($arr); $i++) {
       for($j = 0; $j < count($arr[$i]); $j++) {            
           if ($i === $j) {
               $primeiraDig += $arr[$i][$j]; 
           }            
           
           if ($j === count($arr)-1 - $i) {
               $segundaDig += $arr[$i][$j];
           }
       }  
   }
   
   return $primeiraDig -  $segundaDig;    
}