<?php

require_once 'Fecha.php';

$fecha = new Fecha(28, 2, 2020);

echo "Pruebo el metodo esBisiesto\n";
echo $fecha->esBisiesto() ? "Es bisiesto" : "No es bisiesto";
echo "\n\n";
echo "Fecha: " . $fecha->getFechaAbreviada();

echo "\n\n";
echo "Pruebo el metodo incrementarUnDia\n";
$fecha->incrementarUnDia();
echo "Fecha: " . $fecha->getFechaAbreviada();


echo "\n\n";

echo "Pruebo el metodo incrementarFecha desde 29/2/2020 en 4 días\n";
$fecha = $fecha->incrementarFecha(4, $fecha);
echo "Fecha: " . $fecha->getFechaAbreviada();
