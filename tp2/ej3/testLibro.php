<?php

require_once("Libro.php");
require_once '../Persona/Persona.php';



function iguales($plibro,$parreglo){
    return in_array($plibro, $parreglo);
}





function libroDeEditoriales($arregloLibros,$peditorial){
    $arregloLibrosEditorial = array();
    foreach ($arregloLibros as $libro) {
        if($libro->getEditorial() == $peditorial){
            array_push($arregloLibrosEditorial, $libro);
        }
    }
    return $arregloLibrosEditorial;
}


$libro = new Libro("987654321","El libro de los libros",2020,"Editorial 1",new Persona("Juan","Perez","DNI",12345678),100,"Sinopsis 1");

echo $libro;