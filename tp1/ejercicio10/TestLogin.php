<?php

require_once("Login.php");

echo "\033[01;32mTesteo de la clase Login \033[0m\n";
$login = new Login("pepe", "1234", "es 1234");
echo $login;


echo "1)Testeo de la funcion cambiarPassword a 123456 \n";
$login->cambiarPassword("123456", "Es 123456");
echo $login;


echo "2)Testeo de la funcion cambiarPassword con una nueva password igual a la anterior \n";
try {
    $login->cambiarPassword("123456", "mi frase de recuperacion");
} catch (Exception $e) {
    echo $e->getMessage();
}


echo "3)Testeo de la funcion cambiarPassword con una nueva password igual a las ultimas 4 \n";
try {
    $login->cambiarPassword("1234", "mi frase de recuperacion");
} catch (Exception $e) {
    echo $e->getMessage();
}

echo "4)Testeo de la funcion cambiarPassword con una nueva password distinta a la anterior y a las ultimas 4 \n";
$login->cambiarPassword("12345", "Es 12345");


echo "5)Testeo de la funcion recordarContrasenia \n";
echo $login->recordarContrasenia();
