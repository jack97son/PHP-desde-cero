<?php

$nombreProducto = 'Polo de CSS';
 
var_dump($nombreProducto);

$nombreProducto = "Polo de CSS";
 
var_dump($nombreProducto);

$valor = 'Polo JS';

$primero = 'Quiero un $valor!';

var_dump($primero);

$segundo = "Quiero un $valor";

var_dump($segundo);

// buena practica, forma las legible y util cuando estemos usando arrays
$resultado = "Resultado: Quiero un {$valor}";

var_dump($resultado);