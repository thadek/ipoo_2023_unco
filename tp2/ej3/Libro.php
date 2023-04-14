<?php


class Libro {

    private $isbn;
    private $titulo;
    private $anioEdicion;
    private $editorial;
    private $autor;
    private $cantidadPaginas;
    private $sinopsis;

    public function __construct( $isbn, $titulo, $anioEdicion,  $editorial,  $autor,  $cantidadPaginas,  $sinopsis)
    {
        $this->isbn = $isbn;
        $this->titulo = $titulo;
        $this->anioEdicion = $anioEdicion;
        $this->editorial = $editorial;
        $this->autor = $autor;
        $this->cantidadPaginas = $cantidadPaginas;
        $this->sinopsis = $sinopsis;
    }
   


    public function getIsbn()
    {
        return $this->isbn;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAnioEdicion()
    {
        return $this->anioEdicion;
    }

    public function getEditorial()
    {
        return $this->editorial;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function getCantidadPaginas()
    {
        return $this->cantidadPaginas;
    }

    public function getSinopsis()
    {
        return $this->sinopsis;
    }

    public function setIsbn(string $isbn)
    {
        $this->isbn = $isbn;
    }

    public function setTitulo(string $titulo)
    {
        $this->titulo = $titulo;
    }

    public function setAnioEdicion(int $anioEdicion)
    {
        $this->anioEdicion = $anioEdicion;
    }

    public function setEditorial(string $editorial)
    {
        $this->editorial = $editorial;
    }

    public function setAutor(Persona $autor)
    {
        $this->autor = $autor;
    }

    public function setCantidadPaginas(int $cantidadPaginas)
    {
        $this->cantidadPaginas = $cantidadPaginas;
    }

    public function setSinopsis(string $sinopsis)
    {
        $this->sinopsis = $sinopsis;
    }

    public function perteneceEditorial($peditorial){
        return $this->getEditorial() == $peditorial;
    }

    public function aniosDesdeEdicion(){
        return date("Y") - $this->getAnioEdicion();
    }



    public function __toString()
    {
        return "Libro: " . $this->getTitulo() . " - " . $this->getAutor() . " - " . $this->getEditorial() . " - " . $this->getAnioEdicion() . " - " . $this->getIsbn() . " - " . $this->getCantidadPaginas() . " - " . $this->getSinopsis();
    }



    


}