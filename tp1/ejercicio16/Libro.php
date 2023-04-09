<?php


class Libro {

    private string $isbn;
    private string $titulo;
    private int $anioEdicion;
    private string $editorial;
    private string $autor;

    public function __construct(string $isbn, string $titulo, int $anioEdicion, string $editorial, string $autor)
    {
        $this->isbn = $isbn;
        $this->titulo = $titulo;
        $this->anioEdicion = $anioEdicion;
        $this->editorial = $editorial;
        $this->autor = $autor;
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

    public function getAutor(): string
    {
        return $this->autor;
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

    public function setAutor(string $autor): void
    {
        $this->autor = $autor;
    }


    public function perteneceEditorial($peditorial){
        return $this->getEditorial() == $peditorial;
    }

    public function aniosDesdeEdicion(){
        return date("Y") - $this->getAnioEdicion();
    }



    public function __toString(): string
    {
        return "Libro: " . $this->titulo . " - " . $this->autor . " - " . $this->editorial . " - " . $this->anioEdicion . " - " . $this->isbn;
    }



    


}