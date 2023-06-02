<?php

include_once 'Empresa.php';
include_once 'Viaje.php';
include_once 'Terminal.php';
include_once 'Responsable.php';
include_once 'ViajeInternacional.php';
include_once 'ViajeNacional.php';


//Creo las empresas

$empresa1 = new Empresa("Flecha Bus S.A.");
$empresa2 = new Empresa("Via Bariloche S.A.");

//Creo 2 viajes nacionales y 3 internacionales para cada empresa.

//Empresa 1
$viaje1 = new ViajeNacional("Cordoba",18,22,1,3000,"3/6/2023",30,25,new Responsable("Juan","Perez",12345678,"Calle 123","juan@asd.com","123456789"));
$viaje2 = new ViajeNacional("Mendoza",19,23,2,3200,"4/6/2023",30,20,new Responsable("Juan","2",12345678,"Calle 123","juan@msn.com","123456789"));
$viaje3 = new ViajeInternacional("Santiago, Chile",17,23,3,12000,"5/6/2023",30,12,new Responsable("Matias","Mendez",12341233,"Calle 123","matias@asd.com","1123123141"),true);
$viaje4 = new ViajeInternacional("Lima, Peru",18,22,4,15000,"6/6/2023",30,10,new Responsable("Matias","2",12341233,"Calle 123","matias2@asd.com","1123123141"),false);
$viaje5 = new ViajeInternacional("Montevideo, UY",18,22,5,8000,"7/6/2023",30,12,new Responsable("Matias","Mendez",12341233,"Calle 123","matias3@asd.com","1123123141"),true);

$empresa1->setViajes([$viaje1,$viaje2,$viaje3,$viaje4,$viaje5]);

//Empresa 2
$viaje6 = new ViajeNacional("Zapala",18,07,1,3000,"3/6/2023",30,15,new Responsable("Juan","Perez",12345678,"Calle 123","juan@asd.com","123456789"));
$viaje7 = new ViajeNacional("San Juan",19,23,2,3200,"4/6/2023",30,10,new Responsable("Juan","2",12345678,"Calle 123","juan@msn.com","123456789"));
$viaje8 = new ViajeInternacional("Temuco, Chile",17,23,3,19000,"5/6/2023",30,12,new Responsable("Matias","Mendez",12341233,"Calle 123","matias@asd.com","1123123141"),true);
$viaje9 = new ViajeInternacional("Lima, Peru",18,22,4,10000,"6/6/2023",30,10,new Responsable("Matias","2",12341233,"Calle 123","matias2@asd.com","1123123141"),false);
$viaje10 = new ViajeInternacional("Canelones, UY",18,22,5,18000,"7/6/2023",30,12,new Responsable("Matias","Mendez",12341233,"Calle 123","matias3@asd.com","1123123141"),true);

$empresa2->setViajes([$viaje6,$viaje7,$viaje8,$viaje9,$viaje10]);

//Creo la terminal

$terminal = new Terminal("Terminal de Cordoba","Calle 123",[$empresa1,$empresa2]);


echo $terminal;

//Genero el arreglo con los viajes de menor valor de cada empresa
echo "Viajes de menor valor de cada empresa: \n";   
print_r($terminal->darViajeMenorValor());