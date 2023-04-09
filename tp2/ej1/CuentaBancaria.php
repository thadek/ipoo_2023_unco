<?php
declare(strict_types=1);
require_once '../Persona/Persona.php';


class CuentaBancaria {

    private int $nroCuenta;
    private Persona $persona;
    private float $saldoActual;
    private float $interesAnual;


    /**
     * Constructor de la clase CuentaBancaria
     * @param int $nroCuenta
     * @param Persona $persona
     * @param float $saldoActual
     * @param float $interesAnual
     */
    public function __construct($nroCuenta, $persona, $saldoActual, $interesAnual) {
        $this->nroCuenta = $nroCuenta;
        $this->persona = $persona;
        $this->saldoActual = $saldoActual;
        $this->interesAnual = $interesAnual;
    }


    public function getNroCuenta() {
        return $this->nroCuenta;
    }

    public function getPersona() {
        return $this->persona;
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

    public function setPersona($persona) {
        $this->persona = $persona;
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
                "Persona: " . $this->getPersona() . "\n" .
                "Saldo actual: " . $this->getSaldoActual() . "\n" .
                "Interes anual: " . $this->getInteresAnual()*100 . "% \n";
    }

    




}