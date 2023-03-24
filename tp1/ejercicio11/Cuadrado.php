<?php

// DUDAS : ¿Porque utilizaria arreglos asociativos en vez de variables? Para las coorddenadas?
class Cuadrado {

   
    private $vertice1 = array("x" => 0, "y" => 0);
    private $vertice2 = array("x" => 0, "y" => 0);
    private $vertice3 = array("x" => 0, "y" => 0);
    private $vertice4 = array("x" => 0, "y" => 0);

  

    public function __construct($vertice1, $vertice2, $vertice3, $vertice4) {

        //Verifico que sean arreglos asociativos
        if (!is_array($vertice1) || !is_array($vertice2) || !is_array($vertice3) || !is_array($vertice4)) {
            throw new Exception("Los vertices deben ser arreglos asociativos");
        }


        $this->vertice1 = $vertice1;
        $this->vertice2 = $vertice2;
        $this->vertice3 = $vertice3;
        $this->vertice4 = $vertice4;
    }


  

  //Metodo para calcular el area
    public function calcularArea() {
        $base = $this->calcularDistancia($this->vertice2);
        $altura = $this->calcularDistancia($this->vertice4);
        return $base * $altura;
    }

    //Metodo para calcular distancia entre dos puntos
    public function calcularDistancia(){
        $x = $this->vertice1["x"] - $this->vertice2["x"];
        $y = $this->vertice1["y"] - $this->vertice2["y"];
        return sqrt(pow($x, 2) + pow($y, 2));
    }

    public function getVertice1() {
        return $this->vertice1;
    }

    public function getVertice2() {
        return $this->vertice2;
    }

    public function getVertice3() {
        return $this->vertice3;
    }

    public function getVertice4() {
        return $this->vertice4;
    }

    public function setVertice1($vertice1) {
        $this->vertice1 = $vertice1;
    }

    public function setVertice2($vertice2) {
        $this->vertice2 = $vertice2;
    }

    public function setVertice3($vertice3) {
        $this->vertice3 = $vertice3;
    }

    public function setVertice4($vertice4) {
        $this->vertice4 = $vertice4;
    }



    public function __toString() {
        return "Cuadrado: \n" . $this->vertice1 . $this->vertice2 . $this->vertice3 . $this->vertice4;
    }



}