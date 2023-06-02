<?php

include_once 'Empresa.php';

class Terminal {

    private $denominacion;
    private $direccion;
    private $empresas;

    public function __construct($denominacion, $direccion, $empresas = []) {
        $this->denominacion = $denominacion;
        $this->direccion = $direccion;
        $this->empresas = $empresas;
    }

    public function getDenominacion() {
        return $this->denominacion;
    }

    public function setDenominacion($denominacion) {
        $this->denominacion = $denominacion;

    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;

    }

    public function getEmpresas() {
        return $this->empresas;
    }

    public function setEmpresas($empresas) {
        $this->empresas = $empresas;
    }

    public function verEmpresas(){
        $response = "";
        foreach ($this->getEmpresas() as $empresa) {
            $response .= $empresa;
        }
        return $response;
    }

    public function __toString()
    {
        $string = "Denominacion: " . $this->getDenominacion() . "\n";
        $string .= "Direccion: " . $this->getDireccion() . "\n";
        $string .= "Empresas: " . $this->verEmpresas() . "\n";
        return $string;
    }


    /**
     * Genera un arreglo con los viajes de menor valor de cada empresa registrada en la terminal.
     * @return array
     */
    public function darViajeMenorValor(){

        $empresas = $this->getEmpresas();

        $arrViajesMenorValor = [];

        for($i=0;$i<count($empresas);$i++){
            $viajes = $empresas[$i]->getViajes();
            $viajeMenorValor = $viajes[0];

            //Recorro los viajes de la empresa y busco el menor
            for($j=0;$j<count($viajes);$j++){

                if($viajes[$j]->calcularImporteViaje() < $viajeMenorValor->calcularImporteViaje()){
                    $viajeMenorValor = $viajes[$j];
                }
            }
            //Agrego el menor a un array
            array_push($arrViajesMenorValor,$viajeMenorValor);

        }

        return $arrViajesMenorValor;
    }

    
}