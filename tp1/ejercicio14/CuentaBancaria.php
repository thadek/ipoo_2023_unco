<?php


class CuentaBancaria {

    private $nroCuenta;
    private $dniCliente;
    private $saldoActual;
    private $interesAnual;


    public function __construct($nroCuenta, $dniCliente, $saldoActual, $interesAnual) {
        $this->nroCuenta = $nroCuenta;
        $this->dniCliente = $dniCliente;
        $this->saldoActual = $saldoActual;
        $this->interesAnual = $interesAnual;
    }


    public function getNroCuenta() {
        return $this->nroCuenta;
    }

    public function getDniCliente() {
        return $this->dniCliente;
    }

    public function getSaldoActual() {
        return $this->saldoActual;
    }

    public function getInteresAnual() {
        return $this->interesAnual;
    }

    public function setNroCuenta($nroCuenta) {
        $this->nroCuenta = $nroCuenta;
    }

    public function setDniCliente($dniCliente) {
        $this->dniCliente = $dniCliente;
    }

    public function setSaldoActual($saldoActual) {
        $this->saldoActual = $saldoActual;
    }

    public function setInteresAnual($interesAnual) {
        $this->interesAnual = $interesAnual;
    }


    /**
     * Esta funcion actualiza el saldo de la cuenta bancaria 
     * sumandole el interes diario
     * @return void
     */
    public function actualizarSaldo(){
        $saldo = $this->getSaldoActual();
        $interes = $this->getInteresAnual();
        $saldo = (($interes/365) * $saldo)+$saldo;
        $this->setSaldoActual($saldo);
    }

    public function depositar($monto) {
        $saldo = $this->getSaldoActual();
        $saldo = $saldo + $monto;
        $this->setSaldoActual($saldo);    
    }

    public function retirar($monto) {
        $saldo = $this->getSaldoActual();
        $saldo = $saldo - $monto;
        $this->setSaldoActual($saldo);
    }


    public function __toString() {
        return "Nro de cuenta: " . $this->getNroCuenta() . "\n" .
                "DNI del cliente: " . $this->getDniCliente() . "\n" .
                "Saldo actual: " . $this->getSaldoActual() . "\n" .
                "Interes anual: " . $this->getInteresAnual()*100 . "% \n";
    }

    




}