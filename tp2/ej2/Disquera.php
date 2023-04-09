<?php

require_once '../Persona/Persona.php';




class Disquera
{

    private DateTime $hora_desde;
    private DateTime $hora_hasta;
    private string $estado;
    private string $direccion;
    private Persona $duenio;


    public function __construct($hora_desde, $hora_hasta, $estado, $direccion, $duenio)
    {
        $this->hora_desde = $hora_desde;
        $this->hora_hasta = $hora_hasta;
        $this->estado = $estado;
        $this->direccion = $direccion;
        $this->duenio = $duenio;
    }


    public function getHoraDesde(): DateTime{
        return $this->hora_desde;
    }

    public function getHoraHasta() : DateTime
    {
        return $this->hora_hasta;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function getDuenio()
    {
        return $this->duenio;
    }

    public function setHoraDesde(DateTime $hora_desde)
    {
        $this->hora_desde = $hora_desde;
    }

    public function setHoraHasta(DateTime $hora_hasta)
    {
        $this->hora_hasta = $hora_hasta;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function setDuenio($duenio)
    {
        $this->duenio = $duenio;
    }

    public function dentroHorarioAtencion($hora, $minutos){

        $hora_desde = $this->getHoraDesde();
        $hora_hasta = $this->getHoraHasta();

        //Separo minutos y horas
        $horaApertura = $hora_desde->format("H");
        $minutosApertura = $hora_desde->format("i");

        $horaCierre = $hora_hasta->format("H");
        $minutosCierre = $hora_hasta->format("i");

        $retorno=false;

        //Verifico que este dentro del intervalo de tiempo
        if($hora >= $horaApertura && $hora <= $horaCierre){
            if($hora == $horaApertura){
                if($minutos >= $minutosApertura){
                    $retorno=true;
                }
            }else if($hora == $horaCierre){
                if($minutos <= $minutosCierre){
                    $retorno=true;
                }
            }else{
                $retorno=true;
            }
        }
        
        return $retorno;
    
    }

    /**
     * Verifico si el horario ingresado es dentro de los horarios de atencion, y en caso de ser asi, abro la disquera
     */
    public function abrirDisquera($hora,$minutos){
        
        if($this->dentroHorarioAtencion($hora,$minutos)){
            $this->setEstado("Abierta");
        }
    }


    /**
     * Verifico si el horario ingresado es dentro de los horarios de atencion, y en caso de ser asi, cierro la disquera
     */
    public function cerrarDisquera($hora,$minutos){
        
        if(!$this->dentroHorarioAtencion($hora,$minutos)){
            $this->setEstado("Cerrada");
        }
    }


    public function __toString(){
        return "Disquera: ".$this->getDireccion().", ".$this->getEstado().", ".$this->getHoraDesde()->format("H:i")." - ".$this->getHoraHasta()->format("H:i").", ".$this->getDuenio();
    }
    


   






}
