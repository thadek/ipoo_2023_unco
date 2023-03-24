<?php

class Fecha
{

    private $dia;
    private $mes;
    private $anio;

    public function __construct($dia, $mes, $anio)
    {

        if ($this->esFechaValida($dia, $mes, $anio)) {
            $this->dia = $dia;
            $this->mes = $mes;
            $this->anio = $anio;
        } else {
            throw new Exception("\033[01;31mImposible instanciar clase Fecha: la fecha $dia/$mes/$anio  no es válida \033[0m\n");
        }
    }


    /**
     * Incrementa la fecha en la cantidad de dias indicada
     * @param int $cantDias
     * @param Fecha $fecha
     */
    public function incrementarFecha($cantDias, $fecha)
    {

        for ($i = 0; $i < $cantDias; $i++) {
            $fecha->incrementarUnDia();
        }
        return $fecha;
    }


    /**
     * Incremento la fecha actual en un dia teniendo en cuenta años bisiestos
     * @return void
    */
    public function incrementarUnDia()
    {

        $dia = $this->getDia();
        $mes = $this->getMes();
        $anio = $this->getAnio();

        if ($this->esMes31Dias($mes)) {
            if ($dia == 31) {
                if ($mes == 12) {
                    $dia = 1;
                    $mes = 1;
                    $anio++;
                } else {
                    $dia = 1;
                    $mes++;
                }
            } else {
                $dia++;
            }
        } else if ($this->esMes30Dias($mes)) {
            if ($dia == 30) {
                $dia = 1;
                $mes++;
            } else {
                $dia++;
            }
        } else if ($this->esMes29Dias($mes)) {
            if ($dia == 29) {
                $dia = 1;
                $mes++;
            } else {
                $dia++;
            }
        } else if ($this->esMes28Dias($mes)) {
            if ($dia == 28) {
                $dia = 1;
                $mes++;
            } else {
                $dia++;
            }
        }


        $this->setDia($dia);
        $this->setMes($mes);
        $this->setAnio($anio);
    }



    /**
     * Metodo que valida si la fecha es válida.
     * @param int $dia
     * @param int $mes
     * @param int $anio
     * @return bool
     */
    private function esFechaValida($dia, $mes, $anio)
    {
        if ($this->esDiaValido($dia) && $this->esMesValido($mes) && $this->esAnioValido($anio)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Metodo que valida si el dia es válido.
     * @param int $dia
     * @return bool
     */
    private function esDiaValido($dia)
    {
        if ($dia >= 1 && $dia <= 31) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Metodo que valida si el mes es válido.
     * @param int $mes
     * @return bool
     */
    private function esMesValido($mes)
    {
        if ($mes >= 1 && $mes <= 12) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Metodo que valida si el año es válido.
     * @param int $anio
     * @return bool
     */
    private function esAnioValido($anio)
    {
        if ($anio >= 1 && $anio <= 99999) {
            return true;
        } else {
            return false;
        }
    }



    /**
     * Metodo que valida si el mes es de 31 días.
     * @param int $mes
     * @return bool
     */
    private function esMes31Dias($mes)
    {
        if ($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Metodo que valida si el mes es de 28 días.
     * @param int $mes
     * @return bool
     */
    private function esMes28Dias($mes)
    {
        if ($mes == 2) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Metodo que valida si el mes es de 30 días.
     * @param int $mes
     * @return bool
     */
    private function esMes30Dias($mes)
    {
        if ($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Metodo que valida si el mes es de 29 días.
     * @param int $mes
     * @return bool
     */
    private function esMes29Dias($mes)
    {


        if ($mes == 2 && $this->esBisiesto()) {
            return true;
        } else {
            return false;
        }
    }


    public function esBisiesto()
    {
        if ($this->anio % 4 == 0 && $this->anio % 100 != 0 || $this->anio % 400 == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getFechaAbreviada()
    {
        return $this->dia . "/" . $this->mes . "/" . $this->anio;
    }

    public function getFechaExtendida()
    {
        $meses = array("Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic");
        return $this->dia . " de " . $meses[$this->mes - 1] . " de " . $this->anio;
    }

    public function getDia()
    {
        return $this->dia;
    }

    public function getMes()
    {
        return $this->mes;
    }

    public function getAnio()
    {
        return $this->anio;
    }

    public function setDia($dia)
    {
        $this->dia = $dia;
    }

    public function setMes($mes)
    {
        $this->mes = $mes;
    }

    public function setAnio($anio)
    {
        $this->anio = $anio;
    }

    public function __toString()
    {
        return  "Dia:$this->dia Mes:$this->mes Anio:$this->anio";
    }
}
