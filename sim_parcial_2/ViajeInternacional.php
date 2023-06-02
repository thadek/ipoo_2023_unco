<?php

include_once("Viaje.php");

class ViajeInternacional extends Viaje {

    private $requiereDocAdicional;
    private $porcentajeImpuesto;

    public function __construct($destino, $horaDePartida, $horaDeLlegada, $numero, $montoBase, $fecha, $cantidadAsientosTot, $cantidadAsientosDisp,$responsable,$requiereDocAdicional,$porcentajeImpuesto = 45) {
        parent::__construct($destino, $horaDePartida, $horaDeLlegada, $numero, $montoBase, $fecha, $cantidadAsientosTot, $cantidadAsientosDisp,$responsable);
        $this->requiereDocAdicional = $requiereDocAdicional;
        $this->porcentajeImpuesto = $porcentajeImpuesto;
    }


    public function getRequiereDocAdicional() {
        return $this->requiereDocAdicional;
    }

    public function setRequiereDocAdicional($requiereDocAdicional) {
        $this->requiereDocAdicional = $requiereDocAdicional;
    }

    public function getPorcentajeImpuesto() {
        return $this->porcentajeImpuesto;
    }

    public function setPorcentajeImpuesto($porcentajeImpuesto) {
        $this->porcentajeImpuesto = $porcentajeImpuesto;
    }

    public function calcularImporteViaje()
    {
        $importe = parent::calcularImporteViaje();
        $importe = $importe + ($importe * $this->getPorcentajeImpuesto() / 100);
        return $importe;
    }


    public function __toString()
    {
        $string = parent::__toString();
        $string .= "Requiere doc adicional: " . $this->getRequiereDocAdicional() . "\n";
        $string .= "Porcentaje impuesto: " . $this->getPorcentajeImpuesto() . "\n";
        return $string;
    }


}