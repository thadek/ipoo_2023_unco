<?php

require_once("Disquera.php");
require_once("Persona.php");

$duenio = new Persona("Julian","Simkus","DNI","12345678");

$disquera = new Disquera(new DateTime("11:00"),new DateTime("20:00") , "Abierta", "Av. Siempreviva 742",$duenio);

$persona = $disquera->getDuenio();

echo $disquera->dentroHorarioAtencion(20,01) ? "Dentro del horario de atencion" : "Fuera del horario de atencion";

echo "\n$disquera";