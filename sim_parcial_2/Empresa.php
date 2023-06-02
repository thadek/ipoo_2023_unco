<?php


class Empresa {

    private $id;
    private static $contador = 1;
    private $nombre;
    private $viajes;

    public function __construct($nombre, $viajes = []) {
        $this->id = $this->contador;
        $this->nombre = $nombre;
        $this->viajes = $viajes;
        self::$contador++;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;

    }

    public function getViajes() {
        return $this->viajes;
    }

    public function setViajes($viajes) {
        $this->viajes = $viajes;
    }

    public function verViajes(){
        $response = "";
        foreach ($this->getViajes() as $viaje) {
            $response .= $viaje->__toString();
        }
        return $response;
    }

    public function buscarViaje($codigo){
        $viajes = $this->getViajes();
        $corte = false;
        $i = 0;
        $viaje = null;
        while ($i < count($viajes) && !$corte) {
            if ($viajes[$i]->getNumero() == $codigo) {
                $viaje = $viajes[$i];
                $corte = true;
            }
            $i++;
        }

        return $viaje;
    }
    

    /**
     * Busca un viaje por codigo y devuelve el importe del viaje, en caso de no encontrarlo lanza una excepcion.
     * @throws Exception
     * @param $codigo
     * @return float|int
     */
    public function darCostoViaje($codigo){
        $viaje = $this->buscarViaje($codigo);
        if ($viaje == null) {
            throw new Exception("No existe el viaje");
        }
        return $viaje->calcularImporteViaje();
    }



}