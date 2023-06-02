<?php


class Viaje {

    private $destino;
    private $horaPartida;
    private $horaLlegada;
    private $numero;
    private $importe;
    private $fecha;
    private $cantAsientosTotales;
    private $cantAsientosDisponibles;
    private $responsable;


    public function __construct($destino, $horaPartida, $horaLlegada, $numero, $importe, $fecha, $cantAsientosTotales, $cantAsientosDisponibles, $responsable) {
        $this->setDestino($destino);
        $this->setHoraPartida($horaPartida);
        $this->setHoraLlegada($horaLlegada);
        $this->setNumero($numero);
        $this->setImporte($importe);
        $this->setFecha($fecha);
        $this->setCantAsientosTotales($cantAsientosTotales);
        $this->setCantAsientosDisponibles($cantAsientosDisponibles);
        $this->setResponsable($responsable);
    }


    public function getDestino() {
        return $this->destino;
    }

    public function getHoraPartida() {
        return $this->horaPartida;
    }

    public function getHoraLlegada() {
        return $this->horaLlegada;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getImporte() {
        return $this->importe;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getCantAsientosTotales() {
        return $this->cantAsientosTotales;
    }

    public function getCantAsientosDisponibles() {
        return $this->cantAsientosDisponibles;
    }

    public function getResponsable() {
        return $this->responsable;
    }

    public function setDestino($destino) {
        $this->destino = $destino;
    }

    public function setHoraPartida($horaPartida) {
        $this->horaPartida = $horaPartida;
    }

    public function setHoraLlegada($horaLlegada) {
        $this->horaLlegada = $horaLlegada;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setImporte($importe) {
        $this->importe = $importe;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setCantAsientosTotales($cantAsientosTotales) {
        $this->cantAsientosTotales = $cantAsientosTotales;
    }

    public function setCantAsientosDisponibles($cantAsientosDisponibles) {
        $this->cantAsientosDisponibles = $cantAsientosDisponibles;
    }

    public function setResponsable($responsable) {
        $this->responsable = $responsable;
    }




    public function asignarAsientosDisponibles($catAsientos){
        $disponibilidad = $this->getCantAsientosDisponibles();
        $disponibilidad = $disponibilidad - $catAsientos;
        $retorno = false;
        if($disponibilidad >= 0){
            $this->setCantAsientosDisponibles($disponibilidad);
            $retorno = true;
        }
        return $retorno;
    }



    public function __toString() {
        return "Viaje{" . "destino=" . $this->destino . ", horaPartida=" . $this->horaPartida . ", horaLlegada=" . $this->horaLlegada . ", numero=" . $this->numero . ", importe=" . $this->importe . ", fecha=" . $this->fecha . ", cantAsientosTotales=" . $this->cantAsientosTotales . ", cantAsientosDisponibles=" . $this->cantAsientosDisponibles . ", responsable=" . $this->responsable . '}';
    }
    


}