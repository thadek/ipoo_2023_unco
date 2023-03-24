<?php

include_once("Cuadrado.php");

$vertice1 = array("x" => 0, "y" => 0);
$vertice2 = array("x" => 0, "y" => 2);
$vertice3 = array("x" => 2, "y" => 2);
$vertice4 = array("x" => 2, "y" => 0);

$cuadrado = new Cuadrado($vertice1, $vertice2, $vertice3, $vertice4);

echo "1)Testeo de la funcion calcularArea \n";
echo $cuadrado->calcularArea() . "\n";

echo "2)Testeo de la funcion calcularDistancia \n";
echo $cuadrado->calcularDistancia() . "\n";

echo "3)Testeo de la funcion getVertice1 \n";
print_r($cuadrado->getVertice1()) . "\n";

echo "4)Testeo de la funcion getVertice2 \n";
print_r($cuadrado->getVertice2()) . "\n";

echo "5)Testeo de la funcion getVertice3 \n";
print_r($cuadrado->getVertice3()) . "\n";

echo "6)Testeo de la funcion getVertice4 \n";
print_r($cuadrado->getVertice4());

