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


    public function getNombre() : string
    {
        return $this->nombre;
    }

    public function getApellido() : string
    {
        return $this->apellido;
    }

    public function getTipoDni() : string
    {
        return $this->tipoDni;
    }

    public function getNroDni() : int
    {
        return $this->nroDni;
    }   

    public function setNombre($nombre) : void
    {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) : void
    {
        $this->apellido = $apellido;
    }

    public function setTipoDni($tipoDni) : void
    {
        $this->tipoDni = $tipoDni;
    }   

    public function setNroDni($nroDni) : void
    {
        $this->nroDni = $nroDni;
    }

    public function __toString() : string
    {
        return $this->getNombre() . " " . $this->getApellido() . " " . $this->getTipoDni() . " " . $this->getNroDni();
    }

    
    


}
