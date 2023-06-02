<?php

include_once("Terminal.php");
include_once("Empresa.php");
include_once("Responsable.php");
include_once("Viaje.php");




$viaje1 = new Viaje("Buenos Aires",19,10,1,1200,"12/12/2021",20,20, new Responsable("Juan","Perez","1231","Roca 100","resp1@empresa.com","112321312"));
$viaje2 = new Viaje("Neuquen",20,11,2,5500,"13/12/2021",20,20, new Responsable("Juan","Domingo","1232","Roca 1002","resp2@empresa.com","1123212312"));

$empresa1 = new Empresa(1234,"Flecha Bus",[$viaje1, $viaje2]);


$viaje3 = new Viaje("Cordoba",21,12,3,3000,"14/12/2021",20,20, new Responsable("Jose","Pereyra","1233","Roca 1003","resp3@empresa.com","1123213123"));
$viaje4 = new Viaje("Buenos Aires",22,13,4,1200,"15/12/2021",20,20, new Responsable("Roberto","Perez","1234","Roca 1004","resp3@empresa2.com","113213123"));

$empresa2 = new Empresa(1235,"Via Bariloche",[$viaje3, $viaje4]);


$terminal = new Terminal("Terminal de Retiro", "Av. Corrientes 1234",[$empresa1,$empresa2] );



// 4) Invocar y visualizar el resultado del metodo ventaAutomática con cant asientos 3 y como destino alguno de los detinos creados en 2.
echo "\nVenta automatica@viabariloche -> " . $terminal->ventaAutomatica(3,"14/12/2021","Cordoba",$empresa2);

// 5 Invocar y visualizar empresa de mayor recaudacion
echo"\nMAYOR RECAUDACIÓN: \n ". $terminal->empresaMayorRecaudacion();

// 6) Responsable viaje de alguno de los viajes
echo "\n RESPONSABLE VIAJE NUM 2:\n ". $terminal->responsableViaje("2");




