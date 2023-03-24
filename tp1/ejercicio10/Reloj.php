<?php

class Reloj {


    private $hora;
    private $minuto;
    private $segundo;


    public function __construct($hora,$minuto,$segundo)
    {


        if(!$this->validarFormato($hora,$minuto,$segundo)){
            throw new Exception("Formato de hora incorrecto");
        }
        $this->hora = $hora;
        $this->minuto = $minuto;
        $this->segundo = $segundo;
    }
   

    public function relojEnVivo(){
        while(true){
            $this->incrementar();
            $this->mostrarHora();
            sleep(1);
        }
    }


    public function validarFormato($hora,$minuto,$segundo){
        if($hora < 0 || $hora > 23){
            return false;
        }
        if($minuto < 0 || $minuto > 59){
            return false;
        }
        if($segundo < 0 || $segundo > 59){
            return false;
        }
        return true;

    }

    public function puesta_a_cero()
    {
        $this->hora = number_format(00);
        $this->minuto = number_format(00);
        $this->segundo = number_format(00);
    }

    public function incrementar()
    {
        $this->segundo++;
        if($this->segundo == 60){
            $this->segundo = 00;
            $this->minuto++;
            if($this->minuto == 60){
                $this->minuto = 00;
                $this->hora++;
                if($this->hora == 24){
                    $this->puesta_a_cero();
                }
            }
        }
    }

    public function mostrarHora()
    {
        //Muestra la hora con color verde
        echo "\033[32m La hora es: ".$this->formatearHora()."\033[0m";
    }


    /**
     * Formatea la hora para que tenga dos digitos
     */
    private function formatearHora()
    {
        $hora = number_format($this->hora);
        $minuto = number_format($this->minuto);
        $segundo = number_format($this->segundo);
        
        if($hora < 10){
            $hora = "0".$hora;
        }
        if($minuto < 10){
            $minuto = "0".$minuto;
        }
        if($segundo < 10){
            $segundo = "0".$segundo;
        }
        return $hora.":".$minuto.":".$segundo;
        
    }





    //Metodos de acceso a los atributos (getters y setters)
    public function setHora($hora)
    {
        $this->hora = $hora;
    }

    public function setMinuto($minuto)
    {
        $this->minuto = $minuto;
    }

    public function setSegundo($segundo)
    {
        $this->segundo = $segundo;
    }

    public function getHora()
    {
        return $this->hora;
    }

    public function getMinuto()
    {
        return $this->minuto;
    }

    public function getSegundo()
    {
        return $this->segundo;
    }



    //Metodo toString
    public function __toString()
    {
        return "hora: ".$this->hora." minuto: ".$this->minuto." segundo: ".$this->segundo."\n";
    }


}