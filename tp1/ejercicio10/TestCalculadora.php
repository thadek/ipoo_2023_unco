<?php

require_once 'Calculadora.php';

$calculadora = new Calculadora();

//Pruebo el metodo calcularSinEntrada
echo "Pruebo el metodo calcularSinEntrada\n";
$calculadora->calcularSinEntrada();

echo "\n\n";
//Pruebo el metodo calcularConEntrada
echo "Pruebo el metodo calcularConEntrada\n";
$calculadora->calcularConEntrada("1+2+3+4+5");


//tostring
echo "\n\n";
echo "Pruebo el metodo __toString\n";
echo $calculadora;


