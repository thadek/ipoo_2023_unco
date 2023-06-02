<?php

class Terminal {

    private $denominacion;
    private $direccion;
    private $empresasRegistradas;

    public function __construct($denominacion,$direccion,$empresasRegistradas)
    {
        $this->setDenominacion($denominacion);
        $this->setDireccion($direccion);
        $this->setEmpresasRegistradas($empresasRegistradas);
        
    }


    //Metodos de acceso

    public function getDenominacion(){
        return $this->denominacion;
    }

    public function getDireccion(){
        return $this->direccion;
    }


    public function getEmpresasRegistradas(){
        return $this->empresasRegistradas;
    }


    public function setDenominacion($denominacion){
        $this->denominacion = $denominacion;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function setEmpresasRegistradas($empresasRegistradas){
        $this->empresasRegistradas = $empresasRegistradas;
    }

    public function verEmpresasRegistradas(){
        $response = "";
        foreach ($this->getEmpresasRegistradas() as $empresa) {
            $response .= "\n" . $empresa . "\n";
        }
        return $response;
    }


    public function ventaAutomatica($cantAsientos,$fecha,$destino,$empresa){
        $retorno = $empresa->venderViajeADestino($cantAsientos,$destino,$fecha);
        return $retorno;
    }

    public function empresaMayorRecaudacion(){
        $retorno = null;
        $mayorRecaudacion = 0;

        foreach ($this->getEmpresasRegistradas() as $empresa) {
            if($empresa->montoRecaudado() > $mayorRecaudacion){
                $mayorRecaudacion = $empresa->montoRecaudado();
                
                $retorno = $empresa;
            }
        }
        return $retorno;
    }

    public function responsableViaje($numeroViaje){
        $retorno = null;
        $i=0;
        while($i<count($this->getEmpresasRegistradas()) && $retorno == null){
            $retorno = $this->getEmpresasRegistradas()[$i]->getResponsableViaje($numeroViaje);
            $i++;
        }
        return $retorno;
    }

    public function __toString()
    {
        return "Denominacion: " . $this->getDenominacion() . "\n" .
        "Direccion: " . $this->getDireccion() . "\n" .
        "Empresas Registradas: " . $this->verEmpresasRegistradas() . "\n";
    }





}