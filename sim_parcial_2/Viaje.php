<?php

include_once("Responsable.php");

class Viaje {

    private $destino;
    private $horaDePartida;
    private $horaDeLlegada;
    private $numero;
    private $montoBase;
    private $fecha;
    private $cantidadAsientosTot;
    private $cantidadAsientosDisp;
    private Responsable $responsable;


    public function __construct($destino, $horaDePartida, $horaDeLlegada, $numero, $montoBase, $fecha, $cantidadAsientosTot, $cantidadAsientosDisp,$responsable) {
        $this->destino = $destino;
        $this->horaDePartida = $horaDePartida;
        $this->horaDeLlegada = $horaDeLlegada;
        $this->numero = $numero;
        $this->montoBase = $montoBase;
        $this->fecha = $fecha;
        $this->cantidadAsientosTot = $cantidadAsientosTot;
        $this->cantidadAsientosDisp = $cantidadAsientosDisp;
        $this->responsable = $responsable;
    }


    public function getDestino() {
        return $this->destino;
    }

    public function setDestino($destino) {
        $this->destino = $destino;
    }


    public function getHoraDePartida() {
        return $this->horaDePartida;
    }

    public function setHoraDePartida($horaDePartida) {
        $this->horaDePartida = $horaDePartida;
    }


    public function getHoraDeLlegada() {
        return $this->horaDeLlegada;
    }

    public function setHoraDeLlegada($horaDeLlegada) {
        $this->horaDeLlegada = $horaDeLlegada;
    }


    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }


    public function getMontoBase() {
        return $this->montoBase;
    }


    public function setMontoBase($montoBase) {
        $this->montoBase = $montoBase;
    }


    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }


    public function getCantidadAsientosTot() {
        return $this->cantidadAsientosTot;
    }


    public function setCantidadAsientosTot($cantidadAsientosTot) {
        $this->cantidadAsientosTot = $cantidadAsientosTot;
    }


    public function getCantidadAsientosDisp() {
        return $this->cantidadAsientosDisp;
    }


    public function setCantidadAsientosDisp($cantidadAsientosDisp) {
        $this->cantidadAsientosDisp = $cantidadAsientosDisp;
    }


    public function getResponsable() {
        return $this->responsable;
    }


    public function setResponsable($responsable) {
        $this->responsable = $responsable;
    }


    public function calcularImporteViaje(){
        $asientosVendidos = $this->getCantidadAsientosTot() - $this->getCantidadAsientosDisp();
        return $this->getMontoBase()*($this->getMontoBase()*$asientosVendidos/$this->getCantidadAsientosTot());
    }



    public function __toString() {
        return "Destino: " . $this->getDestino() . "\n" .
        "Hora de partida: " . $this->getHoraDePartida() . "\n" .
        "Hora de llegada: " . $this->getHoraDeLlegada() . "\n" .
        "Numero: " . $this->getNumero() . "\n" .
        "Monto base: " . $this->getMontoBase() . "\n" .
        "Fecha: " . $this->getFecha() . "\n" .
        "Cantidad de asientos totales: " . $this->getCantidadAsientosTot() . "\n" .
        "Cantidad de asientos disponibles: " . $this->getCantidadAsientosDisp() . "\n" .
        "Responsable: " . $this->getResponsable() . "\n";
    }


}