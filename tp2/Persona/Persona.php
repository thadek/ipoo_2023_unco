<?php
declare(strict_types=1);

class Persona
{
    
    private string $nombre;
    private string $apellido;
    private string $tipoDni;
    private int $nroDni;

    public function __construct(string $nombre,string $apellido,string $tipoDni,int $nroDni)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->tipoDni = $tipoDni;
        $this->nroDni = $nroDni;
    }


    public function getNombre() 
    {
        return $this->nombre;
    }

    public function getApellido() 
    {
        return $this->apellido;
    }

    public function getTipoDni() 
    {
        return $this->tipoDni;
    }

    public function getNroDni() 
    {
        return $this->nroDni;
    }   

    public function setNombre($nombre) 
    {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function setTipoDni($tipoDni) 
    {
        $this->tipoDni = $tipoDni;
    }   

    public function setNroDni($nroDni) 
    {
        $this->nroDni = $nroDni;
    }

    public function __toString() 
    {
        return $this->getNombre() . " " . $this->getApellido() . " " . $this->getTipoDni() . " " . $this->getNroDni();
    }

    
    


}
