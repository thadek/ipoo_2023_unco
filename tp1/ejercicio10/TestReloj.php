<?php

require_once 'Reloj.php';

$reloj = new Reloj(23,59,50);

//Muestro la hora actual cada segundo
//$reloj->relojEnVivo();
echo $reloj->mostrarHora();

//Intento pasar un formato incorrecto
try{
    $reloj = new Reloj(23,59,60);
}catch(Exception $e){
    echo $e->getMessage();
}







