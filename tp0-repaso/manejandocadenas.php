<?php

/**
 * Ejercicio 1: Dada una cadena de caracteres terminada en punto retornar 
 * la cantidad de letras que contiene la cadena y retornar el valor
 * @param String $cadena
 * @return int
 */
function contarCantLetras($cadena)
{
    $contador = 0;
    for ($i = 0; $i < strlen($cadena); $i++) {
        if (esLetra($cadena[$i])) {
            $contador++;
        }
    }
    return $contador;
}

/**
 * Valida que sea una letra
 */
function esLetra($caracter)
{
    return ctype_alpha($caracter);
}

//echo contarCantLetras("works");

/**
 * Ejercicio 2: Dado un texto terminado en / y un caracter, determinar cuantas veces aparece ese caracter en la cadena.
 * @param String $texto
 * @return int 
 */
function contarCantCaracter($texto)
{
    $caracterBuscado =  substr($texto, strlen($texto) - 1);
    return substr_count($texto, $caracterBuscado) - 1;
}


//echo contarCantCaracter("n1n2n3nn/n");


/**
 * Ejercicio 3: Dadas 2 cadenas, cadena1 y cadena2, 
 * retornar verdadero si cadena2 se encuentra en cadena1 y falso en caso contrario.
 * @param String $cadena1
 * @param String $cadena2
 * @return String
 */
function compararCadenas($cadena1, $cadena2)
{
    $retorno = "falso";
    if (str_contains($cadena1, $cadena2)) {
        $retorno = "verdadero";
    }
    return $retorno;
}


//echo compararCadenas("marta","marta");


/**
 * Ejercicio 4: Retornar longitud de cadena
 * @param String $cadena
 * @return int
 */
function calcularLongitudCadena($cadena){
    return strlen($cadena);
}



/**
 *  Ejercicio 5: Dadas 2 cadenas cadena1 y cadena2 retornar la cadena de mayor longitud, invocar el método
 * implementado en el ejercicio anterior
 * @param String $cadena1
 * @param String $cadena2
 * @return String
 */
function obtenerCadenaDeMayorLongitud($cadena1, $cadena2){

    $longCadena1=calcularLongitudCadena($cadena1);
    $longCadena2=calcularLongitudCadena($cadena2);
    return $longCadena1>$longCadena2? $cadena1 : ($longCadena1===$longCadena2? "Las cadenas son iguales" : $cadena2);

}

//echo obtenerCadenaDeMayorLongitud("martas2","marta2");



/***
 * Solución julian
 */

 /** FormaParteDeCadena
 * Realiza una comparacion entre 2 de caracteres ingresadas para saber si una forma parte de otra respectivamente.
 * @Param $cadena1
 * @param $cadena2
 */

 /*
function formaParteDeCadena ($cadena1, $cadena2){
   
    
        // Establecemos una variable en verdadero, asumiendo que una de las cadenas forma parte de otra 
         $formaParte = "verdadero";
    
        // buscamos diferencias entre la cadena2 y la cadena1 para saber si la cadena2 forma parte de la cadena1
        // en caso de que encuentre algun valor de la cadena2 que no este en la cadena1 este sera
        //integrado en la variable $diferencia
                $diferencia = array_diff($cadena2, $cadena1);
    
        // revisamos cuantos valores tenemos dentro de la variable $diferencia, 
        // en caso de que la misma cuente con tan solo una diferencia 
        //podremos decir que no todos los valores de cadena2 se encuentran en cadena1
        //por lo tanto podriamos decir por ese motivo que $formaParte es falso
         
        if( strlen($diferencia)> 0 ) {
            $formaParte = "falso";
        }
        //mostramos el resultado en pantalla 
        echo $formaParte;
        
    }
    **/