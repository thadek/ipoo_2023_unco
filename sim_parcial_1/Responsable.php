<?php

class Responsable {

    private $nombre;
    private $apellido;
    private $dni;
    private $direccion;
    private $email;
    private $telefono;



    public function __construct($nombre, $apellido, $dni, $direccion, $email, $telefono) {
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setDni($dni);
        $this->setDireccion($direccion);
        $this->setEmail($email);
        $this->setTelefono($telefono);
    }
   
    //Metodos de acceso

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getDni() {
        return $this->dni;
    }


    public function getDireccion() {
        return $this->direccion;
    }


    public function getEmail() {
        return $this->email;
    }


    public function getTelefono() {
        return $this->telefono;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setDni($dni) {
        $this->dni = $dni;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }


    public function __toString()
    {
        return "Nombre: " . $this->getNombre() . " Apellido: " . $this->getApellido() . " DNI: " . $this->getDni() . " Direccion: " . $this->getDireccion() . " Email: " . $this->getEmail() . " Telefono: " . $this->getTelefono();
    }

}