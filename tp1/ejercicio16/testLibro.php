<?php

require_once("Libro.php");



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




$libro1 = new Libro("9780936388878","Don Quijote de la Mancha",1605,"Alianza","Cervantes");

$libro2 = new Libro("9788478884452","Harry Potter y la piedra filosofal",1997,"Salamandra","J.K Rowling");

$libro3 = new Libro("9788466321570","Twilight",2005,"Alfaguara","Stephenie Meyer");

$libro4 = new Libro("9780199608522","Azabache",1877,"Oxford","Anna Sewell");

$libro5 = new Libro("9788869185182","Harry Potter y la camara de los secretos",1998,"Salamandra","J.K Rowling");


$libros = array($libro1,$libro2,$libro3,$libro4,$libro5);

$librosEditorial = libroDeEditoriales($libros,"Salamandra");

foreach ($librosEditorial as $libro) {
    echo $libro->getTitulo()."\n";
}


echo iguales($libro1,$libros) ? "El libro 1 esta en el arreglo" : "El libro 1 no esta en el arreglo";

