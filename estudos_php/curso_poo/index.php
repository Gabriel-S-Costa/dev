<?php 

require __DIR__ . '/classes/Trinagulo.php';

$triangulo = new Triangulo(2, 3, 4);

$tipo_triangulo = $triangulo->tipoDeTriangulo();

echo $tipo_triangulo;