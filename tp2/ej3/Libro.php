<?php


class Libro {

    private string $isbn;
    private string $titulo;
    private int $anioEdicion;
    private string $editorial;
    private Persona $autor;
    private int $cantidadPaginas;
    private string $sinopsis;

    public function __construct(string $isbn, string $titulo, int $anioEdicion, string $editorial, Persona $autor, int $cantidadPaginas, string $sinopsis)
    {
        $this->isbn = $isbn;
        $this->titulo = $titulo;
        $this->anioEdicion = $anioEdicion;
        $this->editorial = $editorial;
        $this->autor = $autor;
        $this->cantidadPaginas = $cantidadPaginas;
        $this->sinopsis = $sinopsis;
    }
   


    public function getIsbn(): string
    {
        return $this->isbn;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getAnioEdicion(): int
    {
        return $this->anioEdicion;
    }

    public function getEditorial(): string
    {
        return $this->editorial;
    }

    public function getAutor(): Persona
    {
        return $this->autor;
    }

    public function getCantidadPaginas(): int
    {
        return $this->cantidadPaginas;
    }

    public function getSinopsis(): string
    {
        return $this->sinopsis;
    }

    public function setIsbn(string $isbn): void
    {
        $this->isbn = $isbn;
    }

    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    public function setAnioEdicion(int $anioEdicion): void
    {
        $this->anioEdicion = $anioEdicion;
    }

    public function setEditorial(string $editorial): void
    {
        $this->editorial = $editorial;
    }

    public function setAutor(Persona $autor): void
    {
        $this->autor = $autor;
    }

    public function setCantidadPaginas(int $cantidadPaginas): void
    {
        $this->cantidadPaginas = $cantidadPaginas;
    }

    public function setSinopsis(string $sinopsis): void
    {
        $this->sinopsis = $sinopsis;
    }

    public function perteneceEditorial($peditorial){
        return $this->getEditorial() == $peditorial;
    }

    public function aniosDesdeEdicion(){
        return date("Y") - $this->getAnioEdicion();
    }



    public function __toString(): string
    {
        return "Libro: " . $this->getTitulo() . " - " . $this->getAutor() . " - " . $this->getEditorial() . " - " . $this->getAnioEdicion() . " - " . $this->getIsbn() . " - " . $this->getCantidadPaginas() . " - " . $this->getSinopsis();
    }



    


}