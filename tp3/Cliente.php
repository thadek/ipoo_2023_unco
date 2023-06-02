<?php

require_once 'Persona.php';

class Cliente extends Persona {

    private $nroCliente;

    public function __construct($dni, $nombre, $apellido, $nroCliente) {
        parent::__construct($dni, $nombre, $apellido);
        $this->nroCliente = $nroCliente;
    }

    public function getNroCliente() {
        return $this->nroCliente;
    }

    public function setNroCliente($nroCliente) {
        $this->nroCliente = $nroCliente;
    }

    public function __toString() {
        return parent::__toString() . " - Nro Cliente: " . $this->nroCliente;
    }

}