<?php
/**
 * Crea una función llamada notas_aleatorias($size) que recibe un número entero 
 * y devuelve un array de tamaño $size lleno de notas aleatorias.
 */
var_dump(notas_aleatorias(4));

function notas_aleatorias($size)
{
    $array=[];
    for($i=0;$i<$size;$i++){
        $array[]=rand(0,10);
    }
    return $array;
}