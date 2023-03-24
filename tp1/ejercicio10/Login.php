<?php

class Login
{


    private $username;
    private $password;
    private $fraseRecuperacion;
    private $ultimasCuatroPasswords;


    public function __construct($username, $password, $fraseRecuperacion)
    {
        $this->username = $username;
        $this->password = $password;
        $this->fraseRecuperacion = $fraseRecuperacion;
        $this->ultimasCuatroPasswords = array($password);
    }



    public function cambiarPassword($nuevaPassword,$fraseRecuperacion)
    {
        if ($this->validarPassword($nuevaPassword)) {
            throw new Exception("\033[01;31mLa nueva password no puede ser igual a la anterior \033[0m\n");
        } else if ($this->validarUltimasCuatroPasswords($nuevaPassword)) {
            throw new Exception("\033[01;31mLa nueva password no puede ser igual a las ultimas 4 \033[0m\n");
        } else {
            if (count($this->ultimasCuatroPasswords) < 4) {
                array_push($this->ultimasCuatroPasswords, $nuevaPassword);
            } else {
                array_shift($this->ultimasCuatroPasswords);
                array_push($this->ultimasCuatroPasswords, $nuevaPassword);
            }
            $this->password = $nuevaPassword;
            $this->fraseRecuperacion = $fraseRecuperacion;
        }
    }

    public function recordarContrasenia(){
        return $this->fraseRecuperacion;
    }


    public function validarUltimasCuatroPasswords($nuevaPassword)
    {
        if (in_array($nuevaPassword, $this->ultimasCuatroPasswords)) {
            return true;
        } else {
            return false;
        }
    }









    public function validarPassword($password)
    {
        if ($password == $this->password) {
            return true;
        } else {
            return false;
        }
    }






    public function getUsername()
    {
        return $this->username;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function getFraseRecuperacion()
    {
        return $this->fraseRecuperacion;
    }


    public function getUltimasCuatroPasswords()
    {
        return $this->ultimasCuatroPasswords;
    }

    public function __toString()
    {
        return "Username: " . $this->username . "\nPassword: " . $this->password . "\nFrase de recuperacion: " . $this->fraseRecuperacion . "\nUltimas 4 passwords: " . implode(", ", $this->ultimasCuatroPasswords) . "\n";
    }
}
