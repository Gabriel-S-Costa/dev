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
   
   if ($alicePoints > $bobPoints) {
      $arr = [$alicePoints, $bobPoints];
   } else {
      $arr = [$bobPoints, $alicePoints];
   } 
      
   return $arr;
}

$a = [6, 8, 12];
$b = [7, 9, 15];

$result = compareTriplets($a, $b);

var_dump($result);