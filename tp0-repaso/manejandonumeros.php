<?php


//Ejercicio 1: Dado un numero N retornar su factorial
/**
 * Funcion que retorna el factorial del numero recibido como parametro
 * @param int $n
 * @return int
 */
function calcularFactorial($n)
{
    //ENTERO $factorial
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial = $i * $factorial;
    }
    return $factorial;
}


function leerNumero()
{
    echo "Ingrese numero: \n";
    return trim(fgets(STDIN));
}


//echo calcularFactorial(leerNumero());


//Ejercicio 2: 

/**
 * Verificar si un numero es par
 * @param int $num
 * @return String
 */
function esPar($num)
{
    $retorno = "Falso";
    if ($num % 2 === 0) {
        $retorno = "Verdadero";
    }
    return $retorno;
}

//echo esPar(leerNumero());


/**
 * Ejercicio 3: dados 2 numeros m y n retornar verdadero si N es divisible por M y falso caso contrario.
 * @param int m
 * @param int n
 * @return String
 */
function esDivisible($m, $n)
{
    $salida = "falso";
    if ($m % $n === 0) {
        $salida = "verdadero";
    }
    return $salida;
}

//echo esDivisible(leerNumero(),leerNumero());


/**
 * Ejercicio 4: Dado un arreglo de numeros enteros, determinar los valores maximo y minimo, y las posiciones en que
 * estos se encontraban en el arreglo.
 * @param 
 */
function verMaxMinArreglo(){
    $arreglo = array(1,2,-397,4,5,6,7,99498,9,10619);
    $max = $arreglo[0];
    $min = $arreglo[0];
    $posMax = 0;
    $posMin = 0;
    for ($i = 0; $i < count($arreglo); $i++) {
        if ($arreglo[$i] > $max) {
            $max = $arreglo[$i];
            $posMax = $i;
        }
        if ($arreglo[$i] < $min) {
            $min = $arreglo[$i];
            $posMin = $i;
        }
    }
    echo "El maximo es: $max y se encuentra en la posicion $posMax \n";
    echo "El minimo es: $min y se encuentra en la posicion $posMin \n";
}


//verMaxMinArreglo();

/**
 * Ejercicio 5: Cree una funcion leerNombres, cuyo parametro de entrada formal es una cantidad n de nombres (ciclo definido), que solicite
 * al usuario los nombres y los almacene en un arreglo indexado. La funcion debe retornar el arreglo indexado.
 * @param int $n
 * @return array
 */
function leerNombres($n)
{
    $arreglo = [];
    for ($i = 0; $i < $n; $i++) {
        echo "Ingrese nombre: \n";
        $arreglo[$i] = trim(fgets(STDIN));
    }
    return $arreglo;
}

//print_r(leerNombres(3));


/**
 * Ejercicio 6: Dado un numero que se corresponde a un año calendario, retornar un arreglo con todos los años bisiestos menores al año ingresado.
 * @param int $anio
 * @return array
 */
function aniosBisiestos($anio)
{
    $arreglo = [];
    for ($i = 1; $i < $anio; $i++) {
        if ($i % 4 === 0) {
            $arreglo[] = $i;
        }
    }
    return $arreglo;
}

//print_r(aniosBisiestos(2023));

/**
 * Ejercicio 7: Dado 2 arreglos A y B, de N y M elementos respectivamente. Contruir un algoritmo que retorne
 * un arreglo con los elementos de A mas los elementos de B.
 */
function unirArreglos()
{
    $arregloA = array(1, 2, 3, 4, 5);
    $arregloB = array(6, 7, 8, 9, 10);
    $arregloC = array_merge($arregloA, $arregloB);
    return $arregloC;
}

//print_r(unirArreglos());

/**
 * Ejercicio 8: Dado 2 arreglos A y B, de N y M elementos respectivamente. Contruir un algoritmo que retorne
 * un arreglo con los elementos de A que no estan en B.
 */
function diferenciaArreglos()
{
    $arregloA = array(1, 2, 3, 4, 5,6,7,8,9,10);
    $arregloB = array(6, 7, 8, 9, 10);
    $arregloC = array_diff($arregloA, $arregloB);
    return $arregloC;

}

//print_r(diferenciaArreglos());



