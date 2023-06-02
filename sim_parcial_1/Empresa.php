<?php

class Empresa
{

    private $identificacion;
    private $nombre;
    private $arrViajes;


    public function __construct($identificacion, $nombre, $arrViajes)
    {
        $this->setIdentificacion($identificacion);
        $this->setNombre($nombre);
        $this->setArrViajes($arrViajes);
    }

    public function getIdentificacion()
    {
        return $this->identificacion;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getArrViajes()
    {
        return $this->arrViajes;
    }

    public function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setArrViajes($arrViajes)
    {
        $this->arrViajes = $arrViajes;
    }


    public function verViajes()
    {
        $response = "";
        foreach ($this->getArrViajes() as $viaje) {
            $response .= "\n" . $viaje . "\n";
        }
        return $response;
    }



    public function darViajeADestino($destino, $cantAsientos)
    {

        $viajesEmpresa = $this->getArrViajes();
        $viajesADestino = [];

        for ($i = 0; $i < $viajesEmpresa; $i++) {
            //Si en la posicion actual del array, el objeto viaje tiene ese destino, entro al primer if
            if ($viajesEmpresa[$i]->getDestino() === $destino) {
                //Si ese viaje a ese destino tiene la cantidad de asientos disponibles solicitada, lo añado, sino no.
                if ($viajesEmpresa[$i]->getCantAsientosDisponibles() >= $cantAsientos) {
                    array_push($viajesADestino, $viajesEmpresa[$i]);
                }
            }
        }

        return $viajesADestino;
    }


    public function incorporarViaje($objViaje)
    {

        $viajesEmpresa = $this->getArrViajes();
        $retorno = false;
        $i = 0;
        $viajeDuplicado = false;
        //Recorro parcialmente el arreglo de viajes y si encuentro un viaje duplicado seteo la variable de corte en true.
        while ($i < count($viajesEmpresa) && !$viajeDuplicado) {

            if ($objViaje->getDestino() === $viajesEmpresa[$i]->getDestino()) {

                if ($objViaje->getFecha() === $viajesEmpresa[$i]->getFecha()) {

                    if ($objViaje->getHoraPartida() === $viajesEmpresa[$i]->getHoraPartida()) {
                        $viajeDuplicado = true;
                    }
                }
            }
            $i++;
        }

        if (!$viajeDuplicado) {
            array_push($viajesEmpresa, $objViaje);
            $this->setArrViajes($viajesEmpresa);
            $retorno = true;
        }

        return $retorno;
    }


    public function venderViajeADestino($canAsientos, $destino, $fecha)
    {

        $arrViajes = $this->getArrViajes();
        $i = 0;
        $corte = false;
        $retorno = null;
        while ($i < count($arrViajes) && !$corte) {
            
            if (($destino === $arrViajes[$i]->getDestino()) && ($fecha === $arrViajes[$i]->getFecha())) {
                if ($arrViajes[$i]->asignarAsientosDisponibles($canAsientos)) {
                    $retorno = $arrViajes[$i];
                    $corte = true;
                    
                }
            }
            $i++;
        }
        return $retorno;

    }

    public function getResponsableViaje($numeroViaje){
        $responsable = null;
        foreach($this->getArrViajes() as $viaje){
            if($viaje->getNumero() == $numeroViaje){
                $responsable = $viaje->getResponsable();
            }
        }
      return $responsable;
    }

    public function montoRecaudado(){
        $recaudacion = 0;
        foreach($this->getArrViajes() as $viaje){
           $importe = $viaje->getImporte();
           $cantVentas = $viaje->getCantAsientosTotales() - $viaje->getCantAsientosDisponibles();
           $recaudacion += $importe*$cantVentas;
        }
        return $recaudacion;
    }




    public function __toString()
    {
        return "\nEmpresa: " . $this->getNombre() . " \nIdentificación: " . $this->getIdentificacion() . " \nViajes Asignados\n " . $this->verViajes();
    }
}
