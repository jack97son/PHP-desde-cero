<?php

// // crea un array INDEXADO
// $lenguajes = array('HTML', 'CSS', 'JS');
// var_dump($lenguajes);
// // otra forma de crear array
// $lenguajes = ['HTML', 'CSS', 'JS'];

// var_dump($lenguajes);

// // array de enteros
// $integers = ['3', '6', '9', '12'];
// var_dump($integers);

// // array de floats
// $floats = [1.30, 2.60, 3.90, 4.120];
// var_dump($floats);

// // setea algunas variables
// $uno = 1;
// $dos = 2;
// $tres = 3;

// // crear un array de variables
// $resultado = [$uno, $dos, $tres];
// var_dump($resultado);

// // ventaja que se puede crear una mezcla de tipos de datos dentro de un array
// $mezcla = ['Polo', $uno, 4, 23.52];
// var_dump($mezcla);

// $html = $lenguajes [2];
// var_dump($html);

// // si intentamos acceder a una posicion que no existe obtenemos un error PHP Undefined offset.
// $lenguajeInexistente = $lenguajes [3];
// var_dump($lenguajeInexistente);

// crea un array ASOCIATIVO

/* todas las llaves de un array asociativo deben ser strings 
  los arrays asociativos tienen llaves definidas por el programador*/
// $numeros = [
//     'uno' => 1,
//     'dos' => 2,
//     'tres' => 3,
//     'cuatro' => 4,
//     'cinco' => 5,
//     'seis' => 6,
// ];

// var_dump($numeros);
// // las llaves son las llaves
// var_dump($numeros['cinco']);

// crea un array MULTIDIMENSIONAL

$cosas = [
  'animales' => ['gato', 'perro', 'pez'],
  'colores' => ['azul', 'amarillo', 'cafe'],
  'ropa' => ['camisa', 'pantalon'],
  23,
  
];

// var_dump($cosas);

$animales = $cosas ['animales'];
// var_dump($animales);

var_dump($cosas['animales'][0]);