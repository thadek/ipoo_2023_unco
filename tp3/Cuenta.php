<?php 


class Cuenta {

    private $cbu;
    private $balance;
    private $fechaUltimoMovimiento;
    private $fechaApertura;
    private $cliente;

    public function __construct($cbu, $balance, $fechaUltimoMovimiento, $fechaApertura, $cliente) {
        $this->cbu = $cbu;
        $this->balance = $balance;
        $this->fechaUltimoMovimiento = $fechaUltimoMovimiento;
        $this->fechaApertura = $fechaApertura;
        $this->cliente = $cliente;
    }

    public function getCbu() {
        return $this->cbu;
    }

    public function setCbu($cbu) {
        $this->cbu = $cbu;
    }


    public function getBalance() {
        return $this->balance;
    }

    public function setBalance($balance) {
        $this->balance = $balance;
    }

    public function getFechaUltimoMovimiento() {
        return $this->fechaUltimoMovimiento;
    }

    public function setFechaUltimoMovimiento($fechaUltimoMovimiento) {
        $this->fechaUltimoMovimiento = $fechaUltimoMovimiento;
    }

    public function getFechaApertura() {
        return $this->fechaApertura;
    }

    public function setFechaApertura($fechaApertura) {
        $this->fechaApertura = $fechaApertura;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    




    public function __toString() {
        return "CBU: " . $this->cbu . " - Balance: " . $this->balance . " - Fecha Ultimo Movimiento: " . $this->fechaUltimoMovimiento . " - Fecha Apertura: " . $this->fechaApertura . " - Cliente: " . $this->cliente;
    }



}