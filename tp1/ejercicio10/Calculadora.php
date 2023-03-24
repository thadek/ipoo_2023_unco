<?php


class Calculadora
{


    private $entrada;
    private $numeros;
    private $operadores;
    private $resultado;


    /**
     * Constructor de la clase
     */
    public function __construct()
    {   
        $this->entrada = "";
        $this->numeros = [];
        $this->operadores = [];
        $this->resultado = 0;
    }

    /**
     * Calcula la operacion ingresada por el usuario
     * @param string $entrada
     */
    public function calcularSinEntrada()
    {
        $this->leerOperacion();
        $this->separarNumeros();
        $this->separarOperadores();
        $this->realizarOperacion();
        echo "El resultado es: $this->resultado";

    }

    /**
     * Calcula la operacion ingresada por el usuario
     * @param string $entrada
     */
    public function calcularConEntrada($entrada)
    {
        $this->entrada = $entrada;
        $this->separarNumeros();
        $this->separarOperadores();
        $this->realizarOperacion();
        echo "El resultado es: $this->resultado";

    }


    private function leerOperacion()
    {
        echo "Ingrese la operación a realizar:\n";
        $entrada = trim(fgets(STDIN));
        if($entrada == ""){
            echo "\033[01;31m NO SE INGRESÓ NINGUNA OPERACIÓN, INTENTE DE NUEVO.\033[0m\n";
            $this->leerOperacion();
        }else{
            $this->entrada = $entrada;
        }

    }


    /**
     * Separa los numeros de la operacion ingresada
     */
    private function separarNumeros()
    {
        //Separo los numeros de la operación usando un regex
        $numeros = preg_split("/[-+*\/]/", $this->entrada);
        //Eliminar los strings que no sean numeros
        $numeros = array_filter($numeros, function ($value) {
            if (!is_numeric($value)) {
                echo "\033[01;31m SE DETECTÓ UN TEXTO EN EL ARREGLO DE OPERACIONES, ELIMINANDO ANTES DE OPERAR.\033[0m\n";
            }
            return is_numeric($value);
        });
        //Eliminar posiciones vacias array
        $numeros = array_values($numeros);
       // print_r($numeros);
        $this->numeros = $numeros;
    }

    private function separarOperadores()
    {
        //Eliminar los strings que no sean operadores (numeros, letras, espacios    )
        $operadores = preg_split("/[0-9a-zA-Z]/", $this->entrada);
        //Eliminar posiciones vacias array
        $operadores = array_values(array_filter($operadores, function ($value) {
            return $value != "";
        }));
       // print_r($operadores);
        $this->operadores = $operadores;
    }


    /**
     * Realiza la operacion ingresada
     */
    private function realizarOperacion()
    {
        $numeros = $this->numeros;
        $operadores = $this->operadores;
        $resultado = $numeros[0];
        for ($i = 0; $i < count($numeros)-1; $i++) {
            switch ($operadores[$i]) {
                case '+':
                    $resultado = $this->sumar($resultado, $numeros[$i+1]);
                    break;
                case '-':
                    $resultado = $this->restar($resultado, $numeros[$i+1]);
                    break;
                case '*':
                    $resultado = $this->multiplicar($resultado, $numeros[$i+1]);
                    break;
                case '/':
                    $resultado = $this->dividir($resultado, $numeros[$i+1]);
                    break;
            }
        }
        $this->resultado = $resultado;
    }

    /**
     * Suma dos numeros
     * @param int $num1
     * @param int $num2
     * @return int
     */
    public function sumar($num1, $num2)
    {
        return $num1 + $num2;
    }


    /**
     * Resta dos numeros
     * @param int $num1
     * @param int $num2
     * @return int
     */
    public function restar($num1, $num2)
    {
        return $num1 - $num2;
    }

    /**
     * Multiplica dos numeros
     * @param int $num1
     * @param int $num2
     * @return int
     */
    public function multiplicar($num1, $num2)
    {
        return $num1 * $num2;
    }

    /**
     * Divide dos numeros
     * @param int $num1
     * @param int $num2
     * @return int
     */
    public function dividir($num1, $num2)
    {
        return $num1 / $num2;
    }



    //Metodos getters y setters

    public function getEntrada()
    {
        return $this->entrada;
    }


    public function setEntrada($entrada)
    {
        $this->entrada = $entrada;   
    }

    public function getNumeros()
    {
        return $this->numeros;
    }

    public function setNumeros($numeros)
    {
        $this->numeros = $numeros;
    }

    public function getOperadores()
    {
        return $this->operadores;
    }

    public function setOperadores($operadores)
    {
        $this->operadores = $operadores;
    }

    public function getResultado()
    {
        return $this->resultado;
    }

    public function setResultado($resultado)
    {
        $this->resultado = $resultado;
    }


    //Metodo toString
    public function __toString()
    {
        return "Entrada: $this->entrada\nNumeros: " . implode(",", $this->numeros) . "\nOperadores: " . implode(",", $this->operadores) . "\nResultado: $this->resultado";
    }





}
