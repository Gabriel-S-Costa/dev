<?php 

class Triangulo 
{
   private $ladoA = 0;
   private $ladoB = 0;
   private $ladoC = 0;

   public function __construct(int $lA = 0, int $lB = 0, int $lC = 0) {
      $this->ladoA = $lA;
      $this->ladoB = $lB;
      $this->ladoC = $lC;
   }

   public function verficaTriangulo()
   {
      $somaAB = $this->ladoA + $this->ladoB;
      $somaBC = $this->ladoB + $this->ladoC;
      $somaAC = $this->ladoC + $this->ladoA;

      if (($this->ladoA < $somaBC) && ($this->ladoB < $somaAC) && ($this->ladoC < $somaAB)) {
         return true;
      }

      return false;
   }

   public function tipoDeTriangulo()
   {  
      $e_triangulo = $this->verficaTriangulo();

      if ($e_triangulo) {

         if (($this->ladoA == $this->ladoB) && ($this->ladoB == $this->ladoC)) {
            return 'Triângulo equilátero!'; 
         } else if (($this->ladoA == $this->ladoB) || ($this->ladoA == $this->ladoC) || ($this->ladoB == $this->ladoC)) {            
            return 'Triângulo isósceles!'; 
         } else {          
            return 'Trinagulo escaleno!';
         }
         
      }

      return "As medidas dos lados passadas não formam um triângulo!";
   }

   // public function areaTriangulo(){}
}
