<?php
declare(strict_types=1);

include_once 'Persona.php';

$persona = new Persona("Manuel", 'Perez', 'DNI', 12345678);

echo "\nTest toString: \n" . $persona;

echo "\nTest getNombre: \n" . $persona->getNombre();

echo "\nTest getApellido: \n" . $persona->getApellido();

echo "\nTest getTipoDni: \n" . $persona->getTipoDni();

echo "\nTest getNroDni: \n" . $persona->getNroDni();

echo "Test setNombre:\n ";

$persona->setNombre('Pedro');
echo "Test setApellido:\n ";
$persona->setApellido('Gomez');
echo "Test setTipoDni:\n ";
$persona->setTipoDni('LC');
echo "Test setNroDni:\n ";
$persona->setNroDni(87654321);

echo "Test toString 2: \n" . $persona;
