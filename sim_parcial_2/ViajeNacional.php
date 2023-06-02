<?php

include_once("Viaje.php");


class ViajeNacional extends Viaje{


    private $descuento;

    public function __construct($destino, $horaDePartida, $horaDeLlegada, $numero, $montoBase, $fecha, $cantidadAsientosTot, $cantidadAsientosDisp,$responsable,$descuento = 10) {
        parent::__construct($destino, $horaDePartida, $horaDeLlegada, $numero, $montoBase, $fecha, $cantidadAsientosTot, $cantidadAsientosDisp,$responsable);
        $this->descuento = $descuento;
    }

    public function getDescuento() {
        return $this->descuento;
    }

    public function setDescuento($descuento) {
        $this->descuento = $descuento;
    }

    public function calcularImporteViaje()
    {
        $importe = parent::calcularImporteViaje();
        $importe = $importe - ($importe * $this->getDescuento() / 100);
        return $importe;
    }

    public function __toString()
    {
        $string = parent::__toString();
        $string .= "Descuento: " . $this->getDescuento() . "\n";
        return $string;
    }


}