<?php 

function equacao1(int $A): int 
{
   $x = 0;
   $x = pow($A, 2) + (5 * $A) + 3;
   return $x; 
}

echo "Alternativa a) " . equacao1(2); 
echo '<br>';
echo "Alternativa b) " . equacao1((3*4)-14+(8/4));
echo '<br>';
echo "Alternativa c) " . equacao1(5);
echo '<br>';
echo "Alternativa d) " . equacao1(9.96 - 9);

echo '<br><br><br><br>';

function equacao2(int $a, int $b, int $c): int
{
   $x = 0;
   if($a + 2 > $b - 3) {
      $x = $c * 2;
   }
   if($c / 4 < $b * 3) {
      $x = $x + 5;
   } 
   if($x < $a + $b) {
      $c = $a - $b;
   } else {
      $b = $c * $a;
   }
   $x = $a + $b - $c;
   return $x;
}

echo "Alternativa a) " . equacao2(3, 4, 5);
echo '<br>';
echo "Alternativa b) " . equacao2(8 - 3 * 2, -5 + 12/2, -1);
echo '<br>';
echo "Alternativa c) " . equacao2(2, 7, 5);
