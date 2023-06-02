<?php


class Responsable {
    private $nombre;
    private $apellido;
    private $nroDni;
    private $direccion;
    private $email;
    private $telefono;


    public function __construct($nombre, $apellido, $nroDni, $direccion, $email, $telefono) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->nroDni = $nroDni;
        $this->direccion = $direccion;
        $this->email = $email;
        $this->telefono = $telefono;
    }



    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getNroDni() {
        return $this->nroDni;
    }

    public function setNroDni($nroDni) {
        $this->nroDni = $nroDni;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function __toString() {
        return "Nombre: " . $this->getNombre() . "\n" .
        "Apellido: " . $this->getApellido() . "\n" .
        "Nro DNI: " . $this->getNroDni() . "\n" .
        "Direccion: " . $this->getDireccion() . "\n" .
        "Email: " . $this->getEmail() . "\n" .
        "Telefono: " . $this->getTelefono() . "\n";
    }

}