<?php


/**
 * Dada una estructura de arreglos asociativos, donde cada posición almacena un arreglo con la cantidad
 *recaudada (en pesos) y costo total (en pesos), en el que cada mes del año se corresponde con la posición del
 *arreglo dentro del otro arreglo; implementar un algoritmo que calcule cuál fue el mes que arrojó mayor
 *ganancia.
 */

$arreglo = [
    "enero" => [1000, 500],
    "febrero" => [2000, 1000],
    "marzo" => [3000, 2000],
    "abril" => [4000, 3000],
    "mayo" => [8000, 4000],
    "junio" => [6000, 5000],
    "julio" => [7000, 6000],
    "agosto" => [8000, 7000],
    "septiembre" => [9000, 8000],
    "octubre" => [10000, 9000],
    "noviembre" => [11000, 10000],
    "diciembre" => [12000, 11000],
];


function calcularGanancia($arreglo)
{
    $ganancia = 0;
    $mes = "";
    foreach ($arreglo as $key => $value) {
        $gananciaMes = $value[0] - $value[1];
        if ($gananciaMes > $ganancia) {
            $ganancia = $gananciaMes;
            $mes = $key;
        }
    }
    return "El mes que arrojo mayor ganancia fue $mes con una ganancia de $ganancia";
}

//echo calcularGanancia($arreglo);


/**
 * Dada una estructura de arreglos asociativos, donde cada arreglo se corresponde a la información del empleado
 * de una empresa ( nombre completo, sueldo básico, antigüedad) , retornar un arreglo con el nombre de cada
 * empleado y su sueldo a cobrar. El sueldo se calcula adicionando al sueldo básico el 50 % si la antigüedad
 * supera los 10 años y el 25 % en caso contrario.
 */

 $arregloEmpleados = [
    "empleado1" => ["nombre" => "Juan Perez", "sueldo" => 130000, "antiguedad" => 5],
    "empleado2" => ["nombre" => "Maria Lopez", "sueldo" => 120000, "antiguedad" => 10],
    "empleado3" => ["nombre" => "Pedro Gomez", "sueldo" => 130000, "antiguedad" => 5],
    "empleado4" => ["nombre" => "Jose Rodriguez", "sueldo" => 140000, "antiguedad" => 5],
    "empleado5" => ["nombre" => "Ana Martinez", "sueldo" => 150000, "antiguedad" => 5],
    "empleado6" => ["nombre" => "Luis Fernandez", "sueldo" => 160000, "antiguedad" => 5],
    "empleado7" => ["nombre" => "Marta Sanchez", "sueldo" => 170000, "antiguedad" => 15],
    "empleado8" => ["nombre" => "Lucas Garcia", "sueldo" => 680000, "antiguedad" => 30],
    "empleado9" => ["nombre" => "Sofia Perez", "sueldo" => 194000, "antiguedad" => 25],
    "empleado10" => ["nombre" => "Miguel Lopez", "sueldo" => 194000, "antiguedad" => 25],
 ];

    function calcularSueldo($arregloEmpleados)
    {
        $arregloSueldos = [];
        foreach ($arregloEmpleados as $key => $value) {
            $sueldo = $value["sueldo"];
            if ($value["antiguedad"] > 10) {
                $sueldo += $sueldo * 0.5;
            } else {
                $sueldo += $sueldo * 0.25;
            }
            $arregloSueldos[$key] = ["nombre" => $value["nombre"], "sueldo" => $sueldo];
        }
        return $arregloSueldos;
    }   

//print_r(calcularSueldo($arregloEmpleados));



