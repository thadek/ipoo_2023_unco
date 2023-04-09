<?php

include_once 'CuentaBancaria.php';


$cuenta = new CuentaBancaria(123456, 12345678, 1000, 0.5);

echo "\nTest toString: \n" . $cuenta;

echo "\nTest getNroCuenta: \n" . $cuenta->getNroCuenta();

echo "\nTest getDniCliente: \n" . $cuenta->getDniCliente();

echo "\nTest getSaldoActual: \n" . $cuenta->getSaldoActual();

echo "\nTest getInteresAnual: \n" . $cuenta->getInteresAnual();

echo "\nTest setNroCuenta\n ";

$cuenta->setNroCuenta(654321);

echo "\nTest setDniCliente\n ";

$cuenta->setDniCliente(87654321);

echo "\nTest setSaldoActual\n ";

$cuenta->setSaldoActual(2000);

echo "Test setInteresAnual\n ";

$cuenta->setInteresAnual(0.7);

echo "Test toString 2: \n" . $cuenta;

echo "Test actualizarSaldo: \n";

$cuenta->actualizarSaldo();

echo "Test toString 3: \n" . $cuenta;

